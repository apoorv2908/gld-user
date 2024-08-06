<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Login Controller
 *
 * @method \App\Model\Entity\Login[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LoginController extends AppController
{
    public function beforeFilter(\Cake\Event\EventInterface $event)
    {
    parent::beforeFilter($event);
    // Configure the login action to not require authentication, preventing
    // the infinite redirect loop issue
    $this->Authentication->addUnauthenticatedActions(['login']);
    }
    
    public function index()
    {
        $this->loadModel('Registration');

        // Fetch the practice areas from the database
        $registration = $this->Registration->find('all');

        // Pass the data to the view
        $this->set(compact('registration'));
    }

    public function login()
{
    $this->request->allowMethod(['get', 'post']);
    $result = $this->Authentication->getResult();

    // Generate CAPTCHA
    if ($this->request->is('get')) {
        $captcha = substr(str_shuffle('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, 6);
        $this->request->getSession()->write('captcha', $captcha);
        $this->set('captcha', $captcha);
    }

    // regardless of POST or GET, redirect if user is logged in
    if ($result && $result->isValid()) {
        // redirect to /articles after login success
        $redirect = $this->request->getQuery('redirect', [
            'controller' => 'homepage',
            'action' => 'index',
        ]);
        return $this->redirect($redirect);
    }

    // display error if user submitted and authentication failed
    if ($this->request->is('post')) {
        if ($this->request->getData('captcha') !== $this->request->getSession()->read('captcha')) {
            $this->Flash->error(__('Invalid CAPTCHA, please try again.'));
        } elseif (!$result->isValid()) {
            $this->Flash->error(__('Invalid username or password'));
        }
    }
}


public function logout()
{
$result = $this->Authentication->getResult();
// regardless of POST or GET, redirect if user is logged in
if ($result && $result->isValid()) {
$this->Authentication->logout();
return $this->redirect(['controller' => 'login', 'action' => 'login']);
}
}


    /**
     * View method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $login = $this->Login->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('login'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $login = $this->Login->newEmptyEntity();
        if ($this->request->is('post')) {
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $this->Flash->success(__('The login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login could not be saved. Please, try again.'));
        }
        $this->set(compact('login'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $login = $this->Login->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $login = $this->Login->patchEntity($login, $this->request->getData());
            if ($this->Login->save($login)) {
                $this->Flash->success(__('The login has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The login could not be saved. Please, try again.'));
        }
        $this->set(compact('login'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Login id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $login = $this->Login->get($id);
        if ($this->Login->delete($login)) {
            $this->Flash->success(__('The login has been deleted.'));
        } else {
            $this->Flash->error(__('The login could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
