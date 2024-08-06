<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ListingsData Controller
 *
 * @property \App\Model\Table\ListingsDataTable $ListingsData
 * @method \App\Model\Entity\ListingsData[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsDataController extends AppController
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
        $listingsData = $this->paginate($this->ListingsData);

        $this->set(compact('listingsData'));
    }

    /**
     * View method
     *
     * @param string|null $id Listings Data id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listingsData = $this->ListingsData->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('listingsData'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $listingsData = $this->ListingsData->newEmptyEntity();
        if ($this->request->is('post')) {
            $listingsData = $this->ListingsData->patchEntity($listingsData, $this->request->getData());
            if ($this->ListingsData->save($listingsData)) {
                $this->Flash->success(__('The listings data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings data could not be saved. Please, try again.'));
        }
        $users = $this->ListingsData->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('listingsData', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listings Data id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listingsData = $this->ListingsData->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listingsData = $this->ListingsData->patchEntity($listingsData, $this->request->getData());
            if ($this->ListingsData->save($listingsData)) {
                $this->Flash->success(__('The listings data has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listings data could not be saved. Please, try again.'));
        }
        $users = $this->ListingsData->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('listingsData', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listings Data id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listingsData = $this->ListingsData->get($id);
        if ($this->ListingsData->delete($listingsData)) {
            $this->Flash->success(__('The listings data has been deleted.'));
        } else {
            $this->Flash->error(__('The listings data could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
