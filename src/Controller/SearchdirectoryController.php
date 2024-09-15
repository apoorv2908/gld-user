<?php
declare(strict_types=1);

namespace App\Controller;


class SearchdirectoryController extends AppController
{


    
    public function initialize(): void
    {
        parent::initialize();
        $this->loadModel('Countries');
        $this->loadModel('Listings');
        $this->loadModel('Practicearea'); // Load PracticeArea model]]

        $this->Authentication->addUnauthenticatedActions(['index', 'lawyers', 'lawfirms', 'practiceareas', 'practiceareasByCountry']);


    }
    
    public function index()
    {
       
    }

   
    public function view($id)
    {
        // This method can fetch data based on the ID provided

        $this->loadModel('Listings');

        $listing = $this->Listings->get($id, ['contain' => []]);

        $this->set(compact('listing'));
    }

    
    public function add()
    {
        $searchdirectory = $this->Searchdirectory->newEmptyEntity();
        if ($this->request->is('post')) {
            $searchdirectory = $this->Searchdirectory->patchEntity($searchdirectory, $this->request->getData());
            if ($this->Searchdirectory->save($searchdirectory)) {
                $this->Flash->success(__('The searchdirectory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The searchdirectory could not be saved. Please, try again.'));
        }
        $this->set(compact('searchdirectory'));
    }

   
    public function edit($id = null)
    {
        $searchdirectory = $this->Searchdirectory->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $searchdirectory = $this->Searchdirectory->patchEntity($searchdirectory, $this->request->getData());
            if ($this->Searchdirectory->save($searchdirectory)) {
                $this->Flash->success(__('The searchdirectory has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The searchdirectory could not be saved. Please, try again.'));
        }
        $this->set(compact('searchdirectory'));
    }

   
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $searchdirectory = $this->Searchdirectory->get($id);
        if ($this->Searchdirectory->delete($searchdirectory)) {
            $this->Flash->success(__('The searchdirectory has been deleted.'));
        } else {
            $this->Flash->error(__('The searchdirectory could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }





    public function lawyersByCountry($countryId)
{
    // Load the required models
    $this->loadModel('Listings');
    $this->loadModel('Countries');
    $this->loadModel('States');
    $this->loadModel('PracticeArea');

    // Fetch all practice areas for the dropdown
    $practiceAreasList = $this->PracticeArea->find('list', [
        'keyField' => 'sno',
        'valueField' => 'practice_area_title',
    ])->toArray();

    // Fetch the states for the selected country
    $statesList = $this->States->find('list', [
        'keyField' => 'id',
        'valueField' => 'name',
        'conditions' => ['States.country_id' => $countryId],
    ])->toArray();

    // Fetch selected practice area and state from the query
    $selectedPracticeArea = $this->request->getQuery('practice_area');
    $selectedState = $this->request->getQuery('state');

    // Create the base conditions for the query
    $conditions = [
        'Listings.country' => $countryId,
        'Listings.listing_type' => 'Lawyer'
    ];

    // If a practice area is selected, add it to the conditions
    if ($selectedPracticeArea) {
        $conditions[] = "FIND_IN_SET('$selectedPracticeArea', Listings.practice_area)";
    }

    // If a state is selected, add it to the conditions
    if ($selectedState) {
        $conditions['Listings.state'] = $selectedState;
    }

    // Fetch all lawyers for the selected country and practice area/state
    $lawyers = $this->Listings->find('all', [
        'conditions' => $conditions
    ])->toArray();

    // Fetch the country name
    $country = $this->Countries->get($countryId);
    $countryName = $country->name;
    $totalResults = count($lawyers);

    // Process practice areas for each lawyer
    foreach ($lawyers as $lawyer) {
        $practiceAreaIds = explode(',', $lawyer->practice_area);
        $practiceAreas = $this->PracticeArea->find('list', [
            'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
            'valueField' => 'practice_area_title',
        ])->toArray();
        $lawyer->country_name = $countryName;
        $lawyer->practice_area_name = implode(', ', $practiceAreas);
    }

    // Pass data to the view
    $this->set(compact('lawyers', 'countryName', 'totalResults', 'practiceAreasList', 'selectedPracticeArea', 'statesList', 'selectedState'));
}



public function lawfirmsByCountry($countryId)
{
    // Load the required models
    $this->loadModel('Listings');
    $this->loadModel('Countries');
    $this->loadModel('States');
    $this->loadModel('PracticeArea');

    // Fetch all practice areas for the dropdown
    $practiceAreasList = $this->PracticeArea->find('list', [
        'keyField' => 'sno',
        'valueField' => 'practice_area_title',
    ])->toArray();

    $statesList = $this->States->find('list', [
        'keyField' => 'id',
        'valueField' => 'name',
        'conditions' => ['States.country_id' => $countryId],
    ])->toArray();

    // Fetch the selected practice area from the query parameters
    $selectedPracticeArea = $this->request->getQuery('practice_area');
    $selectedState = $this->request->getQuery('state');


    // Create the base conditions for fetching law firms
    $conditions = [
        'Listings.country' => $countryId,
        'Listings.listing_type' => 'Law Firm'
    ];

    // If a practice area is selected, add it to the conditions
    if ($selectedPracticeArea) {
        $conditions[] = "FIND_IN_SET('$selectedPracticeArea', Listings.practice_area)";
    }

    if ($selectedState) {
        $conditions['Listings.state'] = $selectedState;
    }

    // Fetch all law firms for the selected country and practice area
    $lawfirms = $this->Listings->find('all', [
        'conditions' => $conditions,
    ])->toArray();

    // Fetch the country name
    $country = $this->Countries->get($countryId);
    $countryName = $country->name;

    $totalResults = count($lawfirms);

    // Iterate over each law firm to process their practice areas
    foreach ($lawfirms as $lawfirm) {
        $practiceAreaIds = explode(',', $lawfirm->practice_area);
        $practiceAreas = $this->PracticeArea->find('list', [
            'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
            'valueField' => 'practice_area_title',
        ])->toArray();
        $lawfirm->country_name = $countryName;
        $lawfirm->practice_area_name = implode(', ', $practiceAreas);
    }

    // Set data for the view
    $this->set(compact('lawfirms',  'statesList', 'selectedState', 'countryName', 'totalResults', 'practiceAreasList', 'selectedPracticeArea'));
}

    
    public function viewLawyerProfile($id)
{
   
    $this->loadModel('Listings');


    $listing = $this->Listings->get($id, ['contain' => []]);


    $this->set(compact('listing'));
}




public function viewLawfirmProfile($id)
{
    // Load the necessary models
    $this->loadModel('Listings');
    $this->loadModel('PracticeArea');

    // Check if the ID is provided and valid
    if (!$id) {
        $this->Flash->error(__('Invalid lawyer profile.'));
        return $this->redirect(['controller' => 'Lawyers', 'action' => 'index']);
    }

    // Find the lawyer's details by ID
    $lawfirm = $this->Listings->get($id);

    // Check if the lawyer exists
    if (!$lawfirm) {
        $this->Flash->error(__('Lawyer profile not found.'));
        return $this->redirect(['controller' => 'Lawyers', 'action' => 'index']);
    }

    // Fetch practice area names associated with the lawyer
    $practiceAreaIds = explode(',', $lawfirm->practice_area);
    $practiceAreas = $this->PracticeArea->find('list', [
        'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
    ])->toArray();

    // Convert practice area array to a comma-separated string
    $lawfirm->practice_area_name = implode(', ', $practiceAreas);

    // Pass the lawyer data to the view
    $this->set(compact('lawfirm'));
}





    public function lawyers(){
        $this->loadModel('Countries');

        // Fetching all countries
        $countries = $this->Countries->find('all', [
            'order' => ['Countries.name' => 'ASC']
        ])->toArray();

        // Grouping countries alphabetically
        $groupedCountries = [];
        foreach ($countries as $country) {
            $firstLetter = strtoupper($country->name[0]);
            if (!isset($groupedCountries[$firstLetter])) {
                $groupedCountries[$firstLetter] = [];
            }
            $groupedCountries[$firstLetter][] = $country;
        }

        $this->set(compact('groupedCountries'));
 

    }




    public function lawfirms(){
        $this->loadModel('Countries');

        // Fetching all countries
        $countries = $this->Countries->find('all', [
            'order' => ['Countries.name' => 'ASC']
        ])->toArray();

        // Grouping countries alphabetically
        $groupedCountries = [];
        foreach ($countries as $country) {
            $firstLetter = strtoupper($country->name[0]);
            if (!isset($groupedCountries[$firstLetter])) {
                $groupedCountries[$firstLetter] = [];
            }
            $groupedCountries[$firstLetter][] = $country;
        }

        $this->set(compact('groupedCountries'));
 

    }



    public function practiceareas()
{
    // Fetch all practice areas ordered alphabetically
    $practiceAreas = $this->Practicearea->find('all', [
        'order' => ['Practicearea.practice_area_title' => 'ASC']
    ])->toArray();

    // Grouping practice areas alphabetically
    $groupedPracticeAreas = [];
    foreach ($practiceAreas as $practicearea) {
        $firstLetter = strtoupper($practicearea->practice_area_title[0]);
        if (!isset($groupedPracticeAreas[$firstLetter])) {
            $groupedPracticeAreas[$firstLetter] = [];
        }
        $groupedPracticeAreas[$firstLetter][] = $practicearea;
    }

    $this->set(compact('groupedPracticeAreas'));
}

public function countriesByPracticeArea($practiceAreaId)
{
    // Load the required models
    $this->loadModel('Countries');

    // Fetch the practice area for displaying the title
    $practiceArea = $this->Practicearea->get($practiceAreaId);

    // Fetch all countries (without filtering by practice area)
    $countries = $this->Countries->find('all')->toArray();

    $groupedCountries = [];
    foreach ($countries as $country) {
        $firstLetter = strtoupper($country->name[0]);
        if (!isset($groupedCountries[$firstLetter])) {
            $groupedCountries[$firstLetter] = [];
        }
        $groupedCountries[$firstLetter][] = $country;
    }

    $this->set(compact('practiceArea', 'countries', 'groupedCountries'));
}

public function listingsByPracticeAreaAndCountry($practiceAreaId, $countryId)
{
    // Load the necessary models
    $this->loadModel('States');
    $this->loadModel('Practicearea');
    
    // Fetch the listings based on the selected practice area, country, and optionally the state
    $stateId = $this->request->getQuery('state_id');
    
    $conditions = [
        "FIND_IN_SET(:practiceAreaId, Listings.practice_area)",
        "FIND_IN_SET(:countryId, Listings.country)"
    ];

    // Add state filter if a state is selected
    if (!empty($stateId)) {
        $conditions[] = "Listings.state = :stateId";
    }

    $query = $this->Listings->find('all')
        ->where($conditions)
        ->bind(':practiceAreaId', $practiceAreaId, 'integer')
        ->bind(':countryId', $countryId, 'integer');

    if (!empty($stateId)) {
        $query->bind(':stateId', $stateId, 'integer');
    }

    $listings = $query->toArray();


    // Fetch country, practice area, and states
    $country = $this->Countries->get($countryId);
    $countryName = $country->name;

    $practiceArea = $this->Practicearea->get($practiceAreaId);
    $practiceAreaTitle = $practiceArea->practice_area_title;

    // Fetch states of the selected country
    $statesList = $this->States->find('list', [
        'conditions' => ['States.country_id' => $countryId],
        'keyField' => 'id',
        'valueField' => 'name'
    ])->toArray();

    


    $practiceAreasList = $this->Practicearea->find('list', [
        'keyField' => 'sno',
        'valueField' => 'practice_area_title',
    ])->toArray();

    // Calculate total results
    $totalResults = count($listings);

    // Pass data to the view
    $this->set(compact('listings', 'practiceAreasList', 'countryName', 'practiceAreaTitle', 'country', 'practiceArea', 'practiceAreaId', 'totalResults', 'statesList', 'stateId'));
}





    public function practiceareasByCountry($practiceAreaId)
    {
        // Fetch all listings for the selected practice area
        $listings = $this->Listings->find('all')
        ->where(["FIND_IN_SET(:practiceAreaId, Listings.practice_area)"])
        ->bind(':practiceAreaId', $practiceAreaId, 'integer')
        ->toArray();
        // Fetch the practice area name
        $practicearea = $this->Practicearea->get($practiceAreaId);
        $practiceAreaTitle = $practicearea->practice_area_title;

        $totalResults = count($listings);

        // Check if no listings are found
        if (empty($listings)) {
            $noListingsMessage = __('No listings found for this practice area.');
            $this->set(compact('noListingsMessage', 'practiceAreaTitle'));
            $totalResults = _('0');

            return;
        }

        // Pass data to the view
        $this->set(compact('listings', 'practiceAreaTitle', 'totalResults'));
    }


    public function viewListingsByPracticeareas($id)
    {
        // Load the necessary models
        $this->loadModel('Listings');
        $this->loadModel('PracticeArea');

        // Check if the ID is provided and valid
        if (!$id) {
            $this->Flash->error(__('Invalid listing.'));
            return $this->redirect(['action' => 'practiceareas']);
        }

        // Find the listing details by ID
        $listing = $this->Listings->get($id);

        // Check if the listing exists
        if (!$listing) {
            $this->Flash->error(__('Listing not found.'));
            return $this->redirect(['action' => 'practiceareas']);
        }

        // Fetch practice area names associated with the listing
        $practiceAreaIds = explode(',', $listing->practice_area);
        $practiceareas = $this->Practicearea->find('list', [
            'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
        ])->toArray();

        // Convert practice area array to a comma-separated string
        $listing->practice_area_name = implode(', ', $practiceareas);

        // Pass the listing data to the view
        $this->set(compact('listing'));
    }






}


