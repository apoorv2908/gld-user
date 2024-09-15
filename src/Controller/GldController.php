<?php
declare(strict_types=1);

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;
use Cake\Utility\Security;
use Cake\Validation\Validation;
use Cake\ORM\TableRegistry;


/**
 * Gld Controller
 *
 * @method \App\Model\Entity\Gld[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GldController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    


    public function initialize(): void
    {
        
        parent::initialize();
        $this->loadComponent('Captcha');
        $this->viewBuilder()->setHelpers(['Captcha']);


       

        $this->Authentication->addUnauthenticatedActions(['aboutus', 'contactus']);


    }
    

    public function aboutus(){

    }

    public function contactus()
    {
        $this->loadModel('ContactUs');
    
        if (!$this->request->getSession()->read('captcha_code')) {
            $captchaCode = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'), 0, 6);
            $this->request->getSession()->write('captcha_code', $captchaCode);
        } else {
            $captchaCode = $this->request->getSession()->read('captcha_code');
        }
    
        $contactus = $this->ContactUs->newEmptyEntity();
    
        if ($this->request->is('post')) {
            \Cake\Log\Log::write('debug', 'Request Data: ' . json_encode($this->request->getData()));

    
            $storedCaptcha = $this->request->getSession()->read('captcha_code');
            $inputCaptcha = $this->request->getData('captcha');
    
            if ($inputCaptcha === $storedCaptcha) {
                $contactus = $this->ContactUs->patchEntity($contactus, $this->request->getData());
                \Cake\Log\Log::write('debug', 'User Entity: ' . json_encode($contactus));

    
                if ($this->ContactUs->save($contactus)) {
                    $this->Flash->success(__('Registration successful!'));
    
                    // Attempt to send the email
                    //try {
                       // $mailer = new Mailer('default');
                       // $mailer->setFrom(['test@unitedlawhouse.com' => 'United Law House'])
                            //->setTo($contactus->email)
                            //->setSubject('Welcome to Our Website')
                            //->deliver('Hello ' . $contactus->firstname . ', thank you for registering with us!');
    
                        //$this->Flash->success(__('Registration successful! A confirmation email has been sent to your email address.'));
    
                   // } catch (MailerException $e) {
                     //   \Cake\Log\Log::error('Email sending failed: ' . $e->getMessage());
                    //    $this->Flash->error(__('Registration was successful, but we couldn’t send a confirmation email.'));
                   // }
    
                    $this->request->getSession()->delete('captcha_code');
                    return $this->redirect(['action' => 'contactus']);
                } else {
                    \Cake\Log\Log::write('debug', 'Validation Errors: ' . json_encode($contactus->getErrors()));
                    $this->Flash->error(__('Registration failed. Please try again.'));
                }
            } else {
                $this->Flash->error(__('Invalid CAPTCHA code.'));
            }
        }
    
        $this->set(compact('contactus', 'captchaCode'));
    }



    public function faq(){

    }

    public function sitemap(){

    }

    public function termsNdConditions(){
    }

    public function privacyPolicy(){

    }

    public function legalDisclaimer(){

    }
    
}
