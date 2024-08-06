<?php
declare(strict_types=1);

namespace App\Controller;

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
}
