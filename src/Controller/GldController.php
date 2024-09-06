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
        // Load the Contactus model
        $this->loadModel('Contactus');
        
        // Create a new entity
        $contactus = $this->Contactus->newEmptyEntity();
        
        if ($this->request->is('post')) {
            // Verify the CAPTCHA input
            $captchaResult = $this->Captcha->verify($this->request->getData('captcha'));
            
            if (!$captchaResult) {
                $this->Flash->error(__('CAPTCHA verification failed. Please try again.'));
            } else {
                // Patch the entity with form data
                $contactus = $this->Contactus->patchEntity($contactus, $this->request->getData());
                
                if ($this->Contactus->save($contactus)) {
                    $this->Flash->success(__('Your message has been sent successfully.'));
                    
                    return $this->redirect(['action' => 'contact']);
                }
                $this->Flash->error(__('Unable to send your message. Please, try again.'));
            }
        }
        
        // Pass the entity to the view
        $this->set(compact('contactus'));
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
