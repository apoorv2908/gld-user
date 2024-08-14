<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Homepage Controller
 *
 * @method \App\Model\Entity\Homepage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomepageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('Practicearea');

    // Fetch the practice areas from the database
    $practicearea = $this->Practicearea->find('all');

    // Pass the data to the view
    $this->set(compact('practicearea'));


    $this->loadModel('Category');

    // Fetch the practice areas from the database
    $category = $this->Category->find('all');

    // Pass the data to the view
    $this->set(compact('category'));

    $this->loadModel('Listings');

    // Fetch the practice areas from the database
    $listings = $this->Listings->find('all');

    // Pass the data to the view
    $this->set(compact('listings'));

    $this->loadModel('Listings');

        $approvedListings = $this->Listings->find('all', [
            'conditions' => ['Listings.status' => 1]
        ])->toArray();

        $this->set(compact('approvedListings'));
    
        $this->loadModel('LawArticles');

        $approvedArticles = $this->LawArticles->find('all', [
            'conditions' => ['LawArticles.status' => 1]
        ])->toArray();

        $this->set(compact('approvedArticles')); }

    

    

    /**
     * View method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $this->loadModel('ListingsData');

        $approvedListings = $this->ListingsData->find('all', [
            'conditions' => ['ListingsData.status' => 1]
        ])->toArray();

        $this->set(compact('approvedListings'));


    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homepage = $this->Homepage->newEmptyEntity();
        if ($this->request->is('post')) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homepage = $this->Homepage->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homepage = $this->Homepage->get($id);
        if ($this->Homepage->delete($homepage)) {
            $this->Flash->success(__('The homepage has been deleted.'));
        } else {
            $this->Flash->error(__('The homepage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
