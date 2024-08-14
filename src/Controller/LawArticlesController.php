<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * LawArticles Controller
 *
 * @property \App\Model\Table\LawArticlesTable $LawArticles
 * @method \App\Model\Entity\LawArticle[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LawArticlesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
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
     * @param string|null $id Law Article id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lawArticle = $this->LawArticles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('lawArticle'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()

    {
        // Fetch the practice areas from the database    
        // Pass the data to the view
        $lawarticles = $this->LawArticles->newEmptyEntity();
        if ($this->request->is('post')) {
            $lawarticles = $this->LawArticles->patchEntity($lawarticles, $this->request->getData());
            if ($this->LawArticles->save($lawarticles)) {
                $this->Flash->success(__('The law article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The law article could not be saved. Please, try again.'));
        }
        $this->set(compact('LawArticles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Law Article id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lawArticle = $this->LawArticles->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $lawArticle = $this->LawArticles->patchEntity($lawArticle, $this->request->getData());
            if ($this->LawArticles->save($lawArticle)) {
                $this->Flash->success(__('The law article has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The law article could not be saved. Please, try again.'));
        }
        $this->set(compact('lawArticle'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Law Article id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lawArticle = $this->LawArticles->get($id);
        if ($this->LawArticles->delete($lawArticle)) {
            $this->Flash->success(__('The law article has been deleted.'));
        } else {
            $this->Flash->error(__('The law article could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
