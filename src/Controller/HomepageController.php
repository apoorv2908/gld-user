<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Homepage Controller
 *
 * @method \App\Model\Entity\Homepage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HomepageController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->loadModel('Practicearea');
        $this->loadModel('Countries');
        $this->loadModel('Listings');
        $this->loadModel('LawArticles'); // Assuming Articles model is available

        // Fetch practice areas
        $practiceareas = $this->Practicearea->find('list', [
            'keyField' => 'sno',
            'valueField' => 'practice_area_title'
        ])->toArray();

        $practiceareas2 = $this->Practicearea->find('all');

        $listings2 = $this->Listings->find('all')->toArray();;

        $totalResults = count($listings2);

        $countries2 = $this->Countries->find('all')->toArray();;

        $totalResults2 = count($countries2);





        
        // Fetch countries
        $countries = $this->Countries->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ])->toArray();
    
        // Initialize listings


        $listings = [];


        // Handle form submission for filtering
        if ($this->request->is('get') && !empty($this->request->getQuery('practice_area_id')) && !empty($this->request->getQuery('country_id'))) {
            $practiceAreaId = $this->request->getQuery('practice_area_id');
            $countryId = $this->request->getQuery('country_id');
    
            // Fetch filtered listings based on selected practice area and country
            $listings = $this->Listings->find('all', [
                'conditions' => [
                    'Listings.practice_area' => $practiceAreaId,
                    'Listings.country' => $countryId,
                    'Listings.status' => 1 // Assuming 1 is for approved listings
                ]
            ])->toArray();



}




    

        // Fetch approved listings
        $approvedListings = $this->Listings->find('all', [
            'conditions' => ['Listings.status' => 1]
        ])->toArray();

        // Fetch approved articles
        $approvedArticles = $this->LawArticles->find('all', [
            'conditions' => ['LawArticles.status' => 1]
        ])->toArray();

        // Pass data to the view
        $this->set(compact('practiceareas', 'totalResults', 'totalResults2', 'practiceareas2', 'countries', 'listings', 'totalResults', 'approvedListings', 'approvedArticles'));
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

    // Initialize filtered listings
    $listings = [];

    // Handle filtering based on dropdown selections
    if ($this->request->is('get') && !empty($this->request->getQuery('practice_area_id')) && !empty($this->request->getQuery('country_id'))) {
        $practiceAreaId = $this->request->getQuery('practice_area_id');
        $countryId = $this->request->getQuery('country_id');

        // Fetch listings based on selected practice area and country
        $listings = $this->Listings->find('all', [
            'conditions' => [
                'Listings.practice_area' => $practiceAreaId,
                'Listings.country' => $countryId,
                'Listings.status' => 1 // Assuming status 1 means approved listings
            ]
        ])->toArray();
    }

    $totalResults = count($listings);

    // Pass the filtered listings and dropdown options to the view
    $this->set(compact('practiceareas', 'countries', 'listings', 'totalResults'));
}

    public function view($id)
    {
        // This method can fetch data based on the ID provided

        $this->loadModel('Listings');

        $listing = $this->Listings->get($id, ['contain' => []]);

        $this->set(compact('listing'));
    }

    public function viewLawArticle($id)
    {
        // This method can fetch data based on the ID provided

        $this->loadModel('LawArticles');

        $lawarticles = $this->LawArticles->get($id, ['contain' => []]);

        $this->set(compact('lawarticles'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $homepage = $this->Homepage->newEmptyEntity();
        if ($this->request->is('post')) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
    }

    /**
     * Edit method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $homepage = $this->Homepage->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $homepage = $this->Homepage->patchEntity($homepage, $this->request->getData());
            if ($this->Homepage->save($homepage)) {
                $this->Flash->success(__('The homepage has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The homepage could not be saved. Please, try again.'));
        }
    }

    /**
     * Delete method
     *
     * @param string|null $id Homepage id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $homepage = $this->Homepage->get($id);
        if ($this->Homepage->delete($homepage)) {
            $this->Flash->success(__('The homepage has been deleted.'));
        } else {
            $this->Flash->error(__('The homepage could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
