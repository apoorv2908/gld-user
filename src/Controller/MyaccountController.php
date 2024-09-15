<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Log\Log;


/**
 * Myaccount Controller
 *
 * @method \App\Model\Entity\Myaccount[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MyaccountController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('Users');


        // Fetch the practice areas from the database
        $user = $this->Users->find('all');
    
        // Pass the data to the view
        $this->set(compact('user'));

        $this->loadModel('LawArticles');

        // Fetch the practice areas from the database
        $lawarticles = $this->LawArticles->find('all');

       
    
        // Pass the data to the view
        $this->set(compact('lawarticles'));

    }

    public function submitlawarticle()
    {
        $this->loadModel('Users');
        $this->loadModel('LawArticles');
        $this->loadModel('Practicearea');
    
        // Fetch users, law articles, and practice areas
        $users = $this->Users->find('all');
        $lawarticles = $this->LawArticles->find('all');
        $practiceareas = $this->Practicearea->find('all')->toArray(); // Fetch practice areas as an array
        $user = $this->Authentication->getIdentity(); // Fetch logged-in user's details
    
        $currentDate = date('Y-m-d');
    
        // Pass the data to the view
        $this->set(compact('users', 'lawarticles', 'practiceareas', 'user', 'currentDate'));
    
        // Check if the request is a POST or PUT
        if ($this->request->is(['post', 'put'])) {
            // Log the incoming request data
            Log::write('debug', 'Request Data: ' . json_encode($this->request->getData()));
    
            // Create a new entity or get the existing entity
            $lawArticle = $this->LawArticles->newEntity($this->request->getData());
    
            // Set the user_id to the logged-in user's ID
            $lawArticle->user_id = $user->id;
            $lawArticle->status = "0";
    
            // Log the entity data before saving
            Log::write('debug', 'Law Article Data: ' . json_encode($lawArticle));
    
            // Save the entity
            if ($this->LawArticles->save($lawArticle)) {
                $this->Flash->success(__('The law article has been saved.'));
                return $this->redirect(['action' => 'confirmation',  $lawArticle->id]); // Redirect to an appropriate page
            } else {
                // Log the validation errors
                Log::write('error', 'Law article could not be saved. Errors: ' . json_encode($lawArticle->getErrors()));
                $this->Flash->error(__('Unable to add the law article.'));
            }
        }
    }
    


public function myArticles()
{
    $this->loadModel('LawArticles');
    $user = $this->Authentication->getIdentity(); // Fetch logged-in user's details

    // Fetch articles submitted by the logged-in user
    $lawarticles = $this->LawArticles->find('all')
        ->where(['user_id' => $user->id, 'status' => 1])
        ->toArray();


        $lawarticles2 = $this->LawArticles->find('all')
        ->where(['user_id' => $user->id, 'status' => 0])
        ->toArray();
    

    // Pass the data to the view
    $this->set(compact('lawarticles', 'lawarticles2'));
}

    /**
     * View method
     *
     * @param string|null $id Myaccount id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $myaccount = $this->Myaccount->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('myaccount'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        $myaccount = $this->Myaccount->newEmptyEntity();
        if ($this->request->is('post')) {
            $myaccount = $this->Myaccount->patchEntity($myaccount, $this->request->getData());
            if ($this->Myaccount->save($myaccount)) {
                $this->Flash->success(__('The myaccount has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The myaccount could not be saved. Please, try again.'));
        }
        $this->set(compact('myaccount'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Myaccount id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {  
        $this->loadModel('Users');
        $user = $this->Users->get($id);

        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('Your details have been updated.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your details. Please try again.'));
        }

        $this->set(compact('user'));

    }

    public function edit2($id = null)
{
    $this->loadModel('LawArticles');
    $user = $this->Authentication->getIdentity();

    // Fetch the article and ensure it belongs to the logged-in user
    $article = $this->LawArticles->get($id);
    if ($article->user_id !== $user->id) {
        $this->Flash->error(__('You do not have permission to edit this article.'));
        return $this->redirect(['action' => 'myArticles']);
    }

    if ($this->request->is(['post', 'put'])) {
        $this->LawArticles->patchEntity($article, $this->request->getData());
        if ($this->LawArticles->save($article)) {
            $this->Flash->success(__('The article has been updated.'));
            return $this->redirect(['action' => 'myArticles']);
        } else {
            $this->Flash->error(__('Unable to update the article.'));
        }
    }

    // Pass the article data to the view
    $this->set(compact('article'));
}


    /**
     * Delete method
     *
     * @param string|null $id Myaccount id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $myaccount = $this->Myaccount->get($id);
        if ($this->Myaccount->delete($myaccount)) {
            $this->Flash->success(__('The myaccount has been deleted.'));
        } else {
            $this->Flash->error(__('The myaccount could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }



    public function myListings()
    {
        $this->loadModel('Listings');
        $user = $this->Authentication->getIdentity(); // Fetch logged-in user's details

        // Fetch listings added by the logged-in user
        $listings = $this->Listings->find('all')
            ->where(['user_id' => $user->id, 'status' => 1])
            ->toArray();

            $listings2 = $this->Listings->find('all')
            ->where(['user_id' => $user->id, 'status' => 0])
            ->toArray();

        // Pass the data to the view
        $this->set(compact('listings' ,'listings2'));
    }

    public function confirmation($id = null)
{
    // Check if the listing_id is provided
    $this->loadModel('LawArticles');

    if ($id) {
        // Fetch the listing based on listing_id
        $listing = $this->LawArticles->find('all', [
            'conditions' => ['id' => $id]
        ])->first();

        // Check if the listing exists
        if ($listing) {
            // Pass the listing data to the view
            $this->set(compact('listing'));
        } else {
            $this->Flash->error(__('The Article could not be found.'));
            return $this->redirect(['action' => 'submitlawarticle']);
        }
    } else {
        $this->Flash->error(__('No Article ID provided.'));
        return $this->redirect(['action' => 'submitlawarticle']);
    }
}

    
}
