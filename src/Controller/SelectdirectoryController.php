<?php
declare(strict_types=1);

namespace App\Controller;
use Laminas\Diactoros\UploadedFile;
use Cake\Log\Log;
use Cake\Http\Exception\NotFoundException;




/**
 * Selectdirectory Controller
 *
 * @method \App\Model\Entity\Selectdirectory[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SelectdirectoryController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('Category');

        $category = $this->Category->find('all');

        // Pass the data to the view
        $this->set(compact('category'));


        $this->loadModel('Users');

        // Fetch the practice areas from the database
        $user = $this->Users->find('all');
    
        // Pass the data to the view
        $this->set(compact('user'));

    }

    /**
     * View method
     *
     * @param string|null $id Selectdirectory id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $selectdirectory = $this->Selectdirectory->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('selectdirectory'));
    }

// In your controller
public function listingDirectoryOfLawyers()
{
    $this->loadModel('Practicearea');
    $this->loadModel('ListingsData');
    $this->loadModel('Countries');
    $this->loadModel('States');
    $this->loadModel('Cities');

    // Fetch practice areas and countries
    $practicearea = $this->Practicearea->find('all')->toArray();
    $countries = $this->Countries->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

    $user = $this->Authentication->getIdentity(); // Fetch logged-in user's details

    // Pass the data to the view
    $this->set(compact('practicearea', 'countries', 'user'));

    if ($this->request->is('post')) {
        $data = $this->request->getData();
        
        // Handle file upload
        if ($data['image_logo'] instanceof UploadedFile) {
            $uploadedFile = $data['image_logo'];
            if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                $fileName = time() . '_' . $uploadedFile->getClientFilename();
                $filePath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $fileName;
                
                // Move the uploaded file to the desired location
                $uploadedFile->moveTo($filePath);
                
                // Set the file path to be stored in the database
                $data['image_logo'] = 'uploads' . DS . $fileName;
            }
        }
        
        // Serialize the courts of practice
        if (!empty($data['courts_of_practice']) && !empty($data['courts_of_practice_place'])) {
            $courtsOfPractice = [];
            foreach ($data['courts_of_practice'] as $index => $court) {
                $place = isset($data['courts_of_practice_place'][$index]) ? $data['courts_of_practice_place'][$index] : '';
                $courtsOfPractice[] = [
                    'court' => $court,
                    'place' => $place
                ];
            }
            // Convert the array to a JSON string
            $data['courts_of_practice'] = json_encode($courtsOfPractice);
        }

        $data['listing_type'] = 'Lawyers';
        $data['status'] = '0';

        // Serialize the practice areas
        if (!empty($data['practice_areas'])) {
            // Remove any empty values and convert to comma-separated string
            $data['practice_areas'] = implode(',', array_filter($data['practice_areas']));
        } else {
            $data['practice_areas'] = ''; // Set as empty if no practice areas selected
        }

        // Create a new entity
        $listing = $this->ListingsData->newEmptyEntity();
        $listing = $this->ListingsData->patchEntity($listing, $data);

        // Generate listing_id and set user_id
        $lastListing = $this->ListingsData->find('all', ['order' => ['id' => 'DESC']])->first();
        $nextId = $lastListing ? $lastListing->id + 1 : 1;
        $listing->listing_id = 'DL' . $nextId;
        $listing->user_id = $user->id;

        // Save the entity
        if ($this->ListingsData->save($listing)) {
            $this->Flash->success(__('The listing has been saved.'));
        } else {
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
    }
}

public function getstates($countryId)
{
    $this->loadModel('States');
    $states = $this->States->find('list', ['keyField' => 'id', 'valueField' => 'name'])
                            ->where(['country_id' => $countryId])
                            ->toArray();

    $this->set(compact('states'));
    $this->viewBuilder()->setOption('serialize', 'states');
}

public function getCities($stateId)
{
    $this->loadModel('Cities');
    $cities = $this->Cities->find('list', ['keyField' => 'id', 'valueField' => 'name'])
                            ->where(['state_id' => $stateId])
                            ->toArray();

    $this->set(compact('cities'));
    $this->viewBuilder()->setOption('serialize', 'cities');
}



    public function listingDirectoryOfLawFirms()
    {
        $this->loadModel('Practicearea');
        $this->loadModel('ListingsData');
        $this->loadModel('Users'); // Assuming 'Users' is your users table
    
        $practicearea = $this->Practicearea->find('all');
        $this->set(compact('practicearea'));
    
        $user = $this->Authentication->getIdentity(); // Fetch logged-in user's details
        $this->set(compact('user'));
    
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            
            // Handle file upload
            if ($data['image_logo'] instanceof UploadedFile) {
                $uploadedFile = $data['image_logo'];
                if ($uploadedFile->getError() === UPLOAD_ERR_OK) {
                    $fileName = time() . '_' . $uploadedFile->getClientFilename();
                    $filePath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $fileName;
                    
                    // Move the uploaded file to the desired location
                    $uploadedFile->moveTo($filePath);
                    
                    // Set the file path to be stored in the database
                    $data['image_logo'] = 'uploads' . DS . $fileName;
                }
            }
            
            // Serialize the courts of practice
            if (!empty($data['courts_of_practice']) && !empty($data['courts_of_practice_place'])) {
                $courtsOfPractice = [];
                foreach ($data['courts_of_practice'] as $index => $court) {
                    $place = isset($data['courts_of_practice_place'][$index]) ? $data['courts_of_practice_place'][$index] : '';
                    $courtsOfPractice[] = [
                        'court' => $court,
                        'place' => $place
                    ];
                }
                // Convert the array to a JSON string
                $data['courts_of_practice'] = json_encode($courtsOfPractice);
            }


            $data['listing_type'] = 'Law Firm';
            $data['status'] = '0';


    
            // Serialize the practice areas
            if (!empty($data['practice_areas'])) {
                // Remove any empty values and convert to comma-separated string
                $data['practice_areas'] = implode(',', array_filter($data['practice_areas']));
            } else {
                $data['practice_areas'] = ''; // Set as empty if no practice areas selected
            }
    
            // Create a new entity
            $listing = $this->ListingsData->newEmptyEntity();
            $listing = $this->ListingsData->patchEntity($listing, $data);
    
            // Generate listing_id and set user_id
            $lastListing = $this->ListingsData->find('all', ['order' => ['id' => 'DESC']])->first();
            $nextId = $lastListing ? $lastListing->id + 1 : 1;
            $listing->listing_id = 'DLF' . $nextId;
            $listing->user_id = $user->id;

            // Save the entity
            if ($this->ListingsData->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));
            } else {
                Log::debug($listing->getErrors());

                $this->Flash->error(__('The listing could not be saved. Please, try again.'));
            }
        }
    }

        public function approvedListings()
    {
        $this->loadModel('ListingsData');
        $approvedListings = $this->ListingsData->find('all', [
            'conditions' => ['ListingsData.status' => 1]
        ])->toArray(); // Convert the result set to an array

        return $approvedListings;
    }

    public function recentAdded()
    {
        $approvedListings = $this->approvedListings();
        $this->set(compact('approvedListings'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $selectdirectory = $this->Selectdirectory->newEmptyEntity();
        if ($this->request->is('post')) {
            $selectdirectory = $this->Selectdirectory->patchEntity($selectdirectory, $this->request->getData());
            if ($this->Selectdirectory->save($selectdirectory)) {
                $this->Flash->success(__('The selectdirectory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The selectdirectory could not be saved. Please, try again.'));
        }
        $this->set(compact('selectdirectory'));
    }

}

