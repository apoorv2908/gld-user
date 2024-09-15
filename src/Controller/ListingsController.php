<?php
declare(strict_types=1);

namespace App\Controller;
use Laminas\Diactoros\UploadedFile;
use Cake\Log\Log;



/**
 * Listings Controller
 *
 * @property \App\Model\Table\ListingsTable $Listings
 * @method \App\Model\Entity\Listing[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ListingsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $listings = $this->paginate($this->Listings);

        $this->set(compact('listings'));



        
        $this->loadModel('Users');
        $user = $this->Users->find('all');
        $this->set(compact('user'));

    }

    /**
     * View method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $listing = $this->Listings->get($id, [
            'contain' => ['ListingsData'],
        ]);

        $this->set(compact('listing'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        
        $listing = $this->Listings->newEmptyEntity();
        if ($this->request->is('post')) {
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $this->set(compact('listing'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $listing = $this->Listings->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $listing = $this->Listings->patchEntity($listing, $this->request->getData());
            if ($this->Listings->save($listing)) {
                $this->Flash->success(__('The listing has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
        $this->set(compact('listing'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Listing id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $listing = $this->Listings->get($id);
        if ($this->Listings->delete($listing)) {
            $this->Flash->success(__('The listing has been deleted.'));
        } else {
            $this->Flash->error(__('The listing could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function directoryOfLawyers()
{



    $this->loadModel('Practicearea');
    $this->loadModel('Listings');
    $this->loadModel('Countries');
    $this->loadModel('States');
    $this->loadModel('Cities');
    $this->loadModel('Users');

    // Fetch practice areas and countries
    $practicearea = $this->Practicearea->find('list', ['keyField' => 'sno', 'valueField' => 'practice_area_title'])->toArray();
    $countries = $this->Countries->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

    // Fetch logged-in user's details
    $user = $this->Authentication->getIdentity();

    //$userRecord = $this->Users->get($user->id);
    //if ($userRecord->has_user_paid == 0) {
     //   return $this->redirect(['controller' => 'Subscription', 'action' => 'add']);
    //}

    // Pass the data to the view
    $this->set(compact('practicearea', 'countries', 'user'));

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        // Handle file upload
        if (isset($data['image']) && $data['image']->getError() === UPLOAD_ERR_OK) {
            $uploadedFile = $data['image'];
            $fileName = time() . '_' . $uploadedFile->getClientFilename();
            $filePath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $fileName;
            $uploadedFile->moveTo($filePath);
            $data['image'] = 'uploads' . DS . $fileName;
        }

        $data['listing_type'] = 'Lawyer';
        $data['status'] = '0';

        // Fetch country, state, and city names based on IDs
        if (!empty($data['country'])) {
            $country = $this->Countries->find('all', [
                'conditions' => ['id' => $data['country']]
            ])->first();
            if ($country) {
                $data['country_name'] = $country->name;
            }
        }

        if (!empty($data['state'])) {
            $state = $this->States->find('all', [
                'conditions' => ['id' => $data['state']]
            ])->first();
            if ($state) {
                $data['state_name'] = $state->name;
            }
        }

        if (!empty($data['city'])) {
            $city = $this->Cities->find('all', [
                'conditions' => ['id' => $data['city']]
            ])->first();
            if ($city) {
                $data['city_name'] = $city->name;
            }
        }

        if (isset($data['court_of_practice'])) {
            $data['court_of_practice'] = json_encode($data['court_of_practice']);
        }

        if (!empty($data['practice_area']) && is_array($data['practice_area'])) {
            // Remove any empty values
            $data['practice_area'] = array_filter($data['practice_area'], function($value) {
                return !empty($value);
            });

            // Fetch the corresponding practice area names
            $selectedPracticeAreas = $this->Practicearea->find('list', [
                'keyField' => 'sno',
                'valueField' => 'practice_area_title'
            ])
            ->where(['sno IN' => $data['practice_area']])
            ->toArray();

            // Save the IDs and names
            $data['practice_area'] = implode(',', $data['practice_area']);
            $data['practice_area_name'] = implode(', ', $selectedPracticeAreas);
        } else {
            $data['practice_area'] = null;
            $data['practice_area_name'] = null;
        }

        // Create a new entity
        $listing = $this->Listings->newEmptyEntity();
        $listing = $this->Listings->patchEntity($listing, $data);

        // Generate listing_id and set user_id
        $lastListing = $this->Listings->find('all', ['order' => ['id' => 'DESC']])->first();
        $nextId = $lastListing ? $lastListing->id + 1 : 1;
        $listing->listing_id = 'DL' . $nextId;
        $listing->user_id = $user->id;

        // Save the entity
        if ($this->Listings->save($listing)) {
            $this->Flash->success(__('The listing has been saved.'));
            return $this->redirect(['controller' => 'Listings', 'action' => 'confirmation',  $listing->listing_id]);
        } else {
            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
    }

    // Render the specific view for this method
    $this->render('directory_of_lawyers');
}

    

public function directoryOfLawFirms()
{

    $this->loadModel('Practicearea');
    $this->loadModel('Listings');
    $this->loadModel('Countries');
    $this->loadModel('States');
    $this->loadModel('Cities');
    $this->loadModel('Users');

    // Fetch practice areas and countries
    $practicearea = $this->Practicearea->find('list', ['keyField' => 'sno', 'valueField' => 'practice_area_title'])->toArray();
    $countries = $this->Countries->find('list', ['keyField' => 'id', 'valueField' => 'name'])->toArray();

    // Fetch logged-in user's details
    $user = $this->Authentication->getIdentity();

   // $userRecord = $this->Users->get($user->id);
   // if ($userRecord->has_user_paid = 0) {
    //    return $this->redirect(['controller' => 'Subscription', 'action' => 'add']);
    //}

    // Pass the data to the view
    $this->set(compact('practicearea', 'countries', 'user'));

    if ($this->request->is('post')) {
        $data = $this->request->getData();

        // Handle file upload
        if (isset($data['image']) && $data['image']->getError() === UPLOAD_ERR_OK) {
            $uploadedFile = $data['image'];
            $fileName = time() . '_' . $uploadedFile->getClientFilename();
            $filePath = WWW_ROOT . 'img' . DS . 'uploads' . DS . $fileName;
            $uploadedFile->moveTo($filePath);
            $data['image'] = 'uploads' . DS . $fileName;
        }

        $data['listing_type'] = 'Law Firm';
        $data['status'] = '0';

        // Fetch country, state, and city names based on IDs
        if (!empty($data['country'])) {
            $country = $this->Countries->find('all', [
                'conditions' => ['id' => $data['country']]
            ])->first();
            if ($country) {
                $data['country_name'] = $country->name;
            }
        }

        if (!empty($data['state'])) {
            $state = $this->States->find('all', [
                'conditions' => ['id' => $data['state']]
            ])->first();
            if ($state) {
                $data['state_name'] = $state->name;
            }
        }

        if (!empty($data['city'])) {
            $city = $this->Cities->find('all', [
                'conditions' => ['id' => $data['city']]
            ])->first();
            if ($city) {
                $data['city_name'] = $city->name;
            }
        }

        if (isset($data['court_of_practice'])) {
            $data['court_of_practice'] = json_encode($data['court_of_practice']);
        }

        if (!empty($data['practice_area']) && is_array($data['practice_area'])) {
            // Remove any empty values
            $data['practice_area'] = array_filter($data['practice_area'], function($value) {
                return !empty($value);
            });

            // Fetch the corresponding practice area names
            $selectedPracticeAreas = $this->Practicearea->find('list', [
                'keyField' => 'sno',
                'valueField' => 'practice_area_title'
            ])
            ->where(['sno IN' => $data['practice_area']])
            ->toArray();

            // Save the IDs and names
            $data['practice_area'] = implode(',', $data['practice_area']);
            $data['practice_area_name'] = implode(', ', $selectedPracticeAreas);
        } else {
            $data['practice_area'] = null;
            $data['practice_area_name'] = null;
        }

        // Create a new entity
        $listing = $this->Listings->newEmptyEntity();
        $listing = $this->Listings->patchEntity($listing, $data);

        // Generate listing_id and set user_id
        $lastListing = $this->Listings->find('all', ['order' => ['id' => 'DESC']])->first();
        $nextId = $lastListing ? $lastListing->id + 1 : 1;
        $listing->listing_id = 'DLF' . $nextId;
        $listing->user_id = $user->id;

        Log::debug('Listing data: ' . json_encode($data));
        Log::debug('Patched entity: ' . json_encode($listing->toArray()));

        // Save the entity
        if ($this->Listings->save($listing)) {
            $this->Flash->success(__('The listing has been saved.'));
            return $this->redirect(['controller' => 'Listings', 'action' => 'confirmation',  $listing->listing_id]);
        } else {
            $errors = $listing->getErrors();
            Log::debug('Listing save errors: ' . json_encode($errors));

            $this->Flash->error(__('The listing could not be saved. Please, try again.'));
        }
    }

    // Render the specific view for this method
    $this->render('directory_of_law_firms');

}

public function ourSubscriptionPlan()
{

    $this->loadModel('Users');
    $this->loadModel('UserSubscription');



    // Fetch the practice areas from the database
    $user = $this->Users->find('all');

    // Pass the data to the view
    $this->set(compact('user'));
}

protected function createOrder()
{
    $this->loadModel('Orders');

    // Get the logged-in user
    $user = $this->Authentication->getIdentity();
    if (!$user) {
        // Handle case where no user is logged in
        $this->Flash->error(__('User not logged in.'));
        return null;
    }

    // Define the amount for the order (you may want to calculate this based on your listing details)
    $amount = 49.00; // Example amount, replace with actual logic

    // Create a new order entity
    $order = $this->Orders->newEmptyEntity();
    $order->user_id = $user->id;
    $order->amount = $amount;
    $order->status = 'pending';

    // Save the order
    if ($this->Orders->save($order)) {
        // Return the auto-generated ID of the newly created order
        return $order->id;
    } else {
        // Log the error and display a message
        $this->log($order->getErrors(), 'error');
        $this->Flash->error(__('The order could not be created. Please, try again.'));
        return null;
    }
}

public function mysearch()
{
    $this->loadModel('Practicearea');
    $this->loadModel('Countries');
    $this->loadModel('Listings');

    // Fetch practice areas and countries for dropdowns
    $practiceareas = $this->Practicearea->find('list', [
        'keyField' => 'sno',
        'valueField' => 'practice_area_title'
    ])->toArray();

    $countries = $this->Countries->find('list', [
        'keyField' => 'id',
        'valueField' => 'name'
    ])->toArray();

    // Initialize filtered listings, total results, country name, and practice area name
    $listings = [];
    $totalResults = 0;
    $countryName = '';
    $practiceAreaName = '';

    // Handle filtering based on dropdown selections
    if ($this->request->is('get') && !empty($this->request->getQuery('practice_area_id')) && !empty($this->request->getQuery('country_id'))) {
        $practiceAreaId = $this->request->getQuery('practice_area_id');
        $countryId = $this->request->getQuery('country_id');

        // Fetch the selected country name
        $country = $this->Countries->get($countryId);
        $countryName = $country->name;

        // Fetch the selected practice area name
        $practiceArea = $this->Practicearea->get($practiceAreaId);
        $practiceAreaName = $practiceArea->practice_area_title;

        // Fetch listings based on selected practice area and country
        $listings = $this->Listings->find('all', [
            'conditions' => [
                // Use LIKE to match the practice area in the comma-separated string
                'Listings.practice_area LIKE' => '%' . $practiceAreaId . '%',
                'Listings.country' => $countryId,
                'Listings.status' => 1 // Assuming status 1 means approved listings
            ]
        ])->toArray();

        // Calculate total number of filtered listings
        $totalResults = count($listings);
    }

    // Pass the filtered listings, dropdown options, country name, practice area name, and total results to the view
    $this->set(compact('practiceareas', 'countries', 'listings', 'totalResults', 'countryName', 'practiceAreaName'));
}


public function getPracticeAreas()
{
    $this->request->allowMethod('ajax');
    
    $countryId = $this->request->getQuery('country_id');
    
    // Fetch practice areas based on the country (if needed)
    $practiceareas = $this->Practicearea->find('list', [
        'keyField' => 'sno',
        'valueField' => 'practice_area_title',
        'conditions' => ['country_id' => $countryId] // Adjust this condition as necessary
    ])->toArray();

    $this->set('practiceareas', $practiceareas);
    $this->set('_serialize', ['practiceareas']);
}

public function confirmation($listing_id = null)
{
    // Check if the listing_id is provided
    if ($listing_id) {
        // Fetch the listing based on listing_id
        $listing = $this->Listings->find('all', [
            'conditions' => ['listing_id' => $listing_id]
        ])->first();

        // Check if the listing exists
        if ($listing) {
            // Pass the listing data to the view
            $this->set(compact('listing'));
        } else {
            $this->Flash->error(__('The listing could not be found.'));
            return $this->redirect(['action' => 'directoryOfLawyers']);
        }
    } else {
        $this->Flash->error(__('No listing ID provided.'));
        return $this->redirect(['action' => 'directoryOfLawyers']);
    }
}



}
