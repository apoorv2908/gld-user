

<div class="image-cover prelative hero-banner">
    
            <div class="container">
                <h1 class="big-header-capt capti text-center white">Find Lawyers &amp; Law Firms </h1>
               
                 <p class="font18 white text-center amb-30"><label id="lbltotallistingcountry">Search  <?= h($totalResults) ?>  listings from <?= h($totalResults2) ?> Countries</label></p>
                <div class="full-search-2 italian-search hero-search-radius box-style">
                    <div class="hero-search-content">

                        <div action="search" method="get" autocomplete="off">
                            
                            <div class="row form-row">
                                <div class="col-lg-4 col-md-4 col-sm-12 small-padd">
                                    <div class="form-group">
                                        <div class="input-with-icon">
                                            
                                            
                                            <!-- <i class="theme-cl ti-target"></i> -->

                                            <?= $this->Form->create(null, [
    'type' => 'get', 
    'url' => ['controller' => 'Listings', 'action' => 'mysearch'], // Redirect to a new 'filter' action in the Listings controller
    'class' => 'input-group flex-nowrap text-black'
]) ?>
    <!-- Dropdown for Practice Area -->
    <?= $this->Form->select('practice_area_id', $practiceareas, [
        'empty' => 'Select Practice Area',
        'class' => 'form-control'
    ]) ?>
   

                                        </div>
                                    </div>
                                    <div class="search_List"></div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-6 small-padd">
                                    <div class="form-group">
                                        <div class="input-with-icon ">

                                            <!-- <i class="icon-map-marker"></i> -->
                                        
    <!-- Dropdown for Country -->
    <?= $this->Form->select('country_id', $countries, [
        'empty' => 'Select Country',
        'class' => 'form-control'
    ]) ?>
  
                                        </div>
                                    </div>
                                </div>

                                
                                <div class="col-lg-2 col-md-2 col-sm-12 small-padd">

                                    <div class="form-group banner-search-btn">

                                      
    <!-- Submit Button -->
    <?= $this->Form->submit('Search', ['class' => 'form-control btn btn-primary rounded']) ?>
<?= $this->Form->end() ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>
        </div>