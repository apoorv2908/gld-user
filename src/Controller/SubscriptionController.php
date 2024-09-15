<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Subscription Controller
 *
 * @property \App\Model\Table\SubscriptionTable $Subscription
 * @method \App\Model\Entity\Subscription[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SubscriptionController extends AppController
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
        $subscription = $this->paginate($this->Subscription);

        $this->set(compact('subscription'));
    }

    /**
     * View method
     *
     * @param string|null $id Subscription id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subscription = $this->Subscription->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set(compact('subscription'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $this->loadModel('Users');
        $users = $this->Users->find('all');
    
        // Fetch logged-in user's details
        $user = $this->Authentication->getIdentity();
    
        // Create a new subscription entity
        $subscription = $this->Subscription->newEmptyEntity();
    
        if ($this->request->is('post')) {
            // Patch the request data into the subscription entity
            $subscription = $this->Subscription->patchEntity($subscription, $this->request->getData());
    
            // Assign the logged-in user's ID to the user_id field
            $subscription->user_id = $user->id;
            $subscription->status = 0; // Set hasUserPaid to 0 by default
            $subscription->amt = 29; // Set hasUserPaid to 0 by default

            // Save the subscription entity first to generate the auto-incremented ID
            if ($this->Subscription->save($subscription)) {
                // After saving, use the auto-incremented ID as the order_id    
                // Update the subscription with the order_id
                if ($this->Subscription->save($subscription)) {
                    $this->Flash->success(__('The subscription has been saved.'));
    
                    // Redirect to the payment access method with the order ID
                    return $this->redirect(['controller' => 'Payments', 'action' => 'createSession', $subscription->id]);
                } else {
                    $this->Flash->error(__('The order ID could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('The subscription could not be saved. Please, try again.'));
            }
        }
    
        // Pass the data to the view
        $this->set(compact('subscription', 'user', 'users'));
    }
    
    



}
