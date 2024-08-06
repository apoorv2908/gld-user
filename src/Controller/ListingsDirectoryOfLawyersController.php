<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ListingsDirectoryOfLawyers Controller
 *
 * @property \App\Model\Table\ListingsDirectoryOfLawyersTable $ListingsDirectoryOfLawyers
 * @method \App\Model\Entity\ListingsDirectoryOfLawyer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsDirectoryOfLawyersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $listingsDirectoryOfLawyers = $this->paginate($this->ListingsDirectoryOfLawyers);

        $this->set(compact('listingsDirectoryOfLawyers'));
    }

    /**
     * View method
     *
     * @param string|null $id Listings Directory Of Lawyer id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('listingsDirectoryOfLawyer'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->newEmptyEntity();
        if ($this->request->is('post')) {
            $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->patchEntity($listingsDirectoryOfLawyer, $this->request->getData());
            if ($this->ListingsDirectoryOfLawyers->save($listingsDirectoryOfLawyer)) {
                $this->Flash->success(__('The listings directory of lawyer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings directory of lawyer could not be saved. Please, try again.'));
        }
        $this->set(compact('listingsDirectoryOfLawyer'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listings Directory Of Lawyer id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->patchEntity($listingsDirectoryOfLawyer, $this->request->getData());
            if ($this->ListingsDirectoryOfLawyers->save($listingsDirectoryOfLawyer)) {
                $this->Flash->success(__('The listings directory of lawyer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings directory of lawyer could not be saved. Please, try again.'));
        }
        $this->set(compact('listingsDirectoryOfLawyer'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listings Directory Of Lawyer id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingsDirectoryOfLawyer = $this->ListingsDirectoryOfLawyers->get($id);
        if ($this->ListingsDirectoryOfLawyers->delete($listingsDirectoryOfLawyer)) {
            $this->Flash->success(__('The listings directory of lawyer has been deleted.'));
        } else {
            $this->Flash->error(__('The listings directory of lawyer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
