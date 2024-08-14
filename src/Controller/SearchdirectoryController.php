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
    }
    
    public function index()
    {
       
    }

   
    public function view($id = null)
    {
        $searchdirectory = $this->Searchdirectory->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('searchdirectory'));
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
    $this->loadModel('PracticeArea');

    // Fetch all lawyers for the selected country with the additional condition for listing_type
    $lawyers = $this->Listings->find('all', [
        'conditions' => [
            'Listings.country' => $countryId,
            'Listings.listing_type' => 'Lawyer'
        ],
    ])->toArray();

    // Fetch the country name
    $country = $this->Countries->get($countryId);
    $countryName = $country->name;

    // Check if no lawyers are found
    if (empty($lawyers)) {
        $noLawyersMessage = __('No lawyers found for this country.');
        $this->set(compact('noLawyersMessage', 'countryName'));
        return;
    }

    // Iterate over each lawyer to process their practice areas
    foreach ($lawyers as $lawyer) {
        // Explode the comma-separated practice_area string into an array of IDs
        $practiceAreaIds = explode(',', $lawyer->practice_area);

        // Fetch the corresponding practice area names from the PracticeArea model
        $practiceAreas = $this->PracticeArea->find('all', [
            'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
        ])->toArray();

        // Attach the country name and practice area names to each lawyer
        $lawyer->country_name = $countryName;
        $lawyer->practice_area_name = implode(', ', $practiceAreas);
    }

    // Pass data to the view
    $this->set(compact('lawyers', 'countryName'));
}

    public function lawfirmsByCountry($countryId)
    {
        // Load the required models
        $this->loadModel('Listings');
        $this->loadModel('Countries');
        $this->loadModel('PracticeArea');
    
        // Fetch all lawyers for the selected country
        $lawfirms = $this->Listings->find('all', [
            'conditions' => ['Listings.country' => $countryId],
        ])->toArray();
    
        // Fetch the country name
        $country = $this->Countries->get($countryId);
        $countryName = $country->name;
    
        // Iterate over each lawyer to process their practice areas
        foreach ($lawfirms as $lawfirm) {
            // Explode the comma-separated practice_area string into an array of IDs
            $practiceAreaIds = explode(',', $lawfirm->practice_area);
    
            // Fetch the corresponding practice area names from the PracticeArea model
            $practiceAreas = $this->PracticeArea->find('all', [
                'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
            ])->toArray();
    
            // Attach the country name and practice area names to each lawyer
            $lawfirm->country_name = $countryName;
            $lawfirm->practice_area_name = implode(', ', $practiceAreas);
        }
    
        // Pass data to the view
        $this->set(compact('lawyers', 'countryName'));
    }
    
    
    public function viewLawyerProfile($id)
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
    $lawyer = $this->Listings->get($id);

    // Check if the lawyer exists
    if (!$lawyer) {
        $this->Flash->error(__('Lawyer profile not found.'));
        return $this->redirect(['controller' => 'Lawyers', 'action' => 'index']);
    }

    // Fetch practice area names associated with the lawyer
    $practiceAreaIds = explode(',', $lawyer->practice_area);
    $practiceAreas = $this->PracticeArea->find('list', [
        'conditions' => ['PracticeArea.sno IN' => $practiceAreaIds],
    ])->toArray();

    // Convert practice area array to a comma-separated string
    $lawyer->practice_area_name = implode(', ', $practiceAreas);

    // Pass the lawyer data to the view
    $this->set(compact('lawyer'));
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




    public function lawfimrs(){
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

}


