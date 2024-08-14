<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Recentadded Controller
 *
 * @method \App\Model\Entity\Recentadded[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class RecentaddedController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    
    
     public function approvedListings()
     {
         $this->loadModel('Listings');
         $approvedListings = $this->Listings->find('all', [
             'conditions' => ['Listings.status' => 1]
         ])->toArray(); // Convert the result set to an array
 
         return $approvedListings;
     }

     public function approvedArticles(){
        $this->loadModel('LawArticle');
         $approvedArticles = $this->LawArticle->find('all', [
             'conditions' => ['LawArticle.status' => 1]
         ])->toArray(); // Convert the result set to an array
 
         return $approvedArticles;
     }
    
     public function index()
    {
        $approvedListings = $this->approvedListings();
        $this->set(compact('approvedListings'));

        $approvedArticles = $this->approvedArticles();
        $this->set(compact('approvedArticles'));

    
    }



   
    /**
     * View method
     *
     * @param string|null $id Recentadded id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $approvedListings = $this->approvedListings();
        $this->set(compact('approvedListings'));

        
        $approvedArticles = $this->approvedArticles();
        $this->set(compact('approvedArticles'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recentadded = $this->Recentadded->newEmptyEntity();
        if ($this->request->is('post')) {
            $recentadded = $this->Recentadded->patchEntity($recentadded, $this->request->getData());
            if ($this->Recentadded->save($recentadded)) {
                $this->Flash->success(__('The recentadded has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recentadded could not be saved. Please, try again.'));
        }
        $this->set(compact('recentadded'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Recentadded id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recentadded = $this->Recentadded->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $recentadded = $this->Recentadded->patchEntity($recentadded, $this->request->getData());
            if ($this->Recentadded->save($recentadded)) {
                $this->Flash->success(__('The recentadded has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recentadded could not be saved. Please, try again.'));
        }
        $this->set(compact('recentadded'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Recentadded id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recentadded = $this->Recentadded->get($id);
        if ($this->Recentadded->delete($recentadded)) {
            $this->Flash->success(__('The recentadded has been deleted.'));
        } else {
            $this->Flash->error(__('The recentadded could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
