<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ListingsDirectoryOfLawFirms Controller
 *
 * @property \App\Model\Table\ListingsDirectoryOfLawFirmsTable $ListingsDirectoryOfLawFirms
 * @method \App\Model\Entity\ListingsDirectoryOfLawFirm[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsDirectoryOfLawFirmsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $listingsDirectoryOfLawFirms = $this->paginate($this->ListingsDirectoryOfLawFirms);

        $this->set(compact('listingsDirectoryOfLawFirms'));
    }

    /**
     * View method
     *
     * @param string|null $id Listings Directory Of Law Firm id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('listingsDirectoryOfLawFirm'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->newEmptyEntity();
        if ($this->request->is('post')) {
            $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->patchEntity($listingsDirectoryOfLawFirm, $this->request->getData());
            if ($this->ListingsDirectoryOfLawFirms->save($listingsDirectoryOfLawFirm)) {
                $this->Flash->success(__('The listings directory of law firm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings directory of law firm could not be saved. Please, try again.'));
        }
        $users = $this->ListingsDirectoryOfLawFirms->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('listingsDirectoryOfLawFirm', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listings Directory Of Law Firm id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->patchEntity($listingsDirectoryOfLawFirm, $this->request->getData());
            if ($this->ListingsDirectoryOfLawFirms->save($listingsDirectoryOfLawFirm)) {
                $this->Flash->success(__('The listings directory of law firm has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings directory of law firm could not be saved. Please, try again.'));
        }
        $users = $this->ListingsDirectoryOfLawFirms->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('listingsDirectoryOfLawFirm', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listings Directory Of Law Firm id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingsDirectoryOfLawFirm = $this->ListingsDirectoryOfLawFirms->get($id);
        if ($this->ListingsDirectoryOfLawFirms->delete($listingsDirectoryOfLawFirm)) {
            $this->Flash->success(__('The listings directory of law firm has been deleted.'));
        } else {
            $this->Flash->error(__('The listings directory of law firm could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
