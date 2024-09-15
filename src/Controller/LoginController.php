<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Mailer\Exception\MailerException;


use Cake\Mailer\Mailer;


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
    $this->Authentication->addUnauthenticatedActions(['login', 'registration']);
    }
    
    public function index()
    {
        

    }

    public function registration()
    {
        $this->loadModel('Users');
    
        if (!$this->request->getSession()->read('captcha_code')) {
            $captchaCode = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
            $this->request->getSession()->write('captcha_code', $captchaCode);
        } else {
            $captchaCode = $this->request->getSession()->read('captcha_code');
        }
    
        $user = $this->Users->newEmptyEntity();
    
        if ($this->request->is('post')) {
            \Cake\Log\Log::write('debug', 'Request Data: ' . json_encode($this->request->getData()));
    
            $storedCaptcha = $this->request->getSession()->read('captcha_code');
            $inputCaptcha = $this->request->getData('captcha');
    
            if ($inputCaptcha === $storedCaptcha) {
                $user = $this->Users->patchEntity($user, $this->request->getData());
                $user->has_user_paid = 0; // Set hasUserPaid to 0 by default
                \Cake\Log\Log::write('debug', 'User Entity: ' . json_encode($user));
    
                if ($this->Users->save($user)) {
                    $this->Flash->success(__('Registration successful!'));
    
                    // Attempt to send the email
                    //try {
                       // $mailer = new Mailer('default');
                       // $mailer->setFrom(['test@unitedlawhouse.com' => 'United Law House'])
                            //->setTo($user->email)
                            //->setSubject('Welcome to Our Website')
                            //->deliver('Hello ' . $user->firstname . ', thank you for registering with us!');
    
                        //$this->Flash->success(__('Registration successful! A confirmation email has been sent to your email address.'));
    
                   // } catch (MailerException $e) {
                     //   \Cake\Log\Log::error('Email sending failed: ' . $e->getMessage());
                    //    $this->Flash->error(__('Registration was successful, but we couldn’t send a confirmation email.'));
                   // }
    
                    $this->request->getSession()->delete('captcha_code');
                    return $this->redirect(['action' => 'login']);
                } else {
                    \Cake\Log\Log::write('debug', 'Validation Errors: ' . json_encode($user->getErrors()));
                    $this->Flash->error(__('Registration failed. Please try again.'));
                }
            } else {
                $this->Flash->error(__('Invalid CAPTCHA code.'));
            }
        }
    
        $this->set(compact('user', 'captchaCode'));
    }


        public function login()
    {
        $this->request->allowMethod(['get', 'post']);
        
        // Generate a new CAPTCHA code every time the page is accessed
        $captchaCode = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
        $this->request->getSession()->write('captcha_code', $captchaCode);
    
        $result = $this->Authentication->getResult();
    
        if ($result && $result->isValid()) {
            // Redirect if the user is already logged in
            $redirect = $this->request->getQuery('redirect', [
                'controller' => 'homepage',
                'action' => 'index',
            ]);
            return $this->redirect($redirect);
        }
    
        if ($this->request->is('post')) {
            $inputCaptcha = $this->request->getData('captcha'); // User-entered CAPTCHA
    
            // Retrieve CAPTCHA code from session
            $storedCaptcha = $this->request->getSession()->read('captcha_code');
    
            // Validate the CAPTCHA
            if ($inputCaptcha === $storedCaptcha) {
                // CAPTCHA is valid, proceed with authentication
                if (!$result->isValid()) {
                    $this->Flash->error(__('Invalid username or password'));
                }
            } else {
                // CAPTCHA is invalid
                $this->Flash->error(__('Invalid CAPTCHA code'));
            }
    
            // Clear the CAPTCHA code from the session
            $this->request->getSession()->delete('captcha_code');
        }
    
        // Pass the CAPTCHA code to the view
        $this->set('captcha_code', $captchaCode);
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
