<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Articlepage Controller
 *
 * @method \App\Model\Entity\Articlepage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ArticlepageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
{
    parent::initialize();
    $this->loadModel('LawArticles');
}
    
     public function index()
    {
       
        $this->loadModel('LawArticles');

    // Fetch the practice areas from the database
    $lawarticles = $this->LawArticles->find('all');

    // Pass the data to the view
    $this->set(compact('lawarticles'));
    }

    /**
     * View method
     *
     * @param string|null $id Articlepage id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
  

        
        $lawarticles = $this->LawArticles->get($id);

        $lawarticles->views = $lawarticles->views + 1;

        if ($this->LawArticles->save($lawarticles)) {
            $this->set(compact('lawarticles'));
        } else {
            $this->Flash->error(__('The view count could not be updated. Please, try again.'));
        }

        $this->set(compact('lawarticles'));

        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlepage = $this->Articlepage->newEmptyEntity();
        if ($this->request->is('post')) {
            $articlepage = $this->Articlepage->patchEntity($articlepage, $this->request->getData());
            if ($this->Articlepage->save($articlepage)) {
                $this->Flash->success(__('The articlepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlepage could not be saved. Please, try again.'));
        }
        $this->set(compact('articlepage'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Articlepage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlepage = $this->Articlepage->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlepage = $this->Articlepage->patchEntity($articlepage, $this->request->getData());
            if ($this->Articlepage->save($articlepage)) {
                $this->Flash->success(__('The articlepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articlepage could not be saved. Please, try again.'));
        }
        $this->set(compact('articlepage'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Articlepage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlepage = $this->Articlepage->get($id);
        if ($this->Articlepage->delete($articlepage)) {
            $this->Flash->success(__('The articlepage has been deleted.'));
        } else {
            $this->Flash->error(__('The articlepage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
