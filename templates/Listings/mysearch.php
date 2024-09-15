




<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
      <title>Listing in <?= h($practiceAreaName)?> At <?= h($countryName) ?> - Global Law Directory</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
   </head>
   <body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <section class="slider_section ">
            <div class="slider_bg_box">
            <?= $this->Html->image('map.jpg') ?>            
        </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-12 ">
                              <div class = "d-flex justify-content-center">
                                 <h1>
                                 <p class = "text-uppercase text-white">Listings In <?= h($practiceAreaName)?> AT <?= h($countryName) ?></p>
                                 </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>

    <!-- Content Section -->
    <div class = "mx-4 mt-3">

        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h5>Search More Practice Areas in <?= h($countryName) ?></h5>
        </div>

        <div class="filter-box p-2 ">
        <?= $this->Form->create(null, ['type' => 'get']) ?>
        <div class="form-group ">
            <label for="country" class=" mx-2">Country</label>
            <?= $this->Form->select('country_id', $countries, [
                'empty' => 'Select Country',
                'id' => 'country_id',
                'class' => 'form-control',
                'default' => $this->request->getQuery('country_id') // Set selected country if filter applied
            ]) ?>
        </div>
        <div class="form-group">
            <label for="practice_area" class="me-2">Practice Area</label>
            <?= $this->Form->select('practice_area_id', $practiceareas, [
                'empty' => 'Select Practice Area',
                'id' => 'practice_area_id',
                'class' => 'form-control',
                'default' => $this->request->getQuery('practice_area_id') // Set selected practice area if filter applied
            ]) ?>
        </div>
        <div class="form-group">
            <?= $this->Form->button(__('Filter'), ['class' => 'btn btn-primary']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
        
    </div>
</div>


            <!-- Articles Section -->
            <div class="col-md-9">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5>Found <?= h($totalResults ?? 0) ?> Results</h5>
        <div>
            <?= $this->Form->create(null, ['type' => 'get', 'class' => 'd-inline-block']) ?>
            <label for="entries">Show</label>
            <?= $this->Form->select('entries', [10 => '10', 20 => '20', 50 => '50'], ['default' => 20, 'class' => 'form-control d-inline-block', 'id' => 'entries', 'style' => 'width: auto;']) ?>
            <span>entries</span>
            <?= $this->Form->end() ?>
        </div>
        <div>
            <?= $this->Form->create(null, ['type' => 'get', 'class' => 'd-inline-block']) ?>
            <?= $this->Form->text('search', ['placeholder' => 'Search', 'class' => 'form-control']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

    <!-- Filter Form for Country and Practice Area -->
    

    <hr>
    <?php if (!empty($listings)): ?>
        <?php foreach ($listings as $listing): ?>
    <div class="listing-item mb-4">
        <div class="listing-image me-3">
            <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>" class="img-fluid">
        </div>
        <div class="listing-info">


        <?php if ($listing->listing_type === 'Lawyer'): ?>
         <h3><?= h($listing->firstname) . ' ' . h($listing->lastname) ?></h3>
      <?php elseif ($listing->listing_type === 'Law Firm'): ?>
         <h3><?= h($listing->law_firm) ?></h3>
      <?php endif; ?>

           
            <div class="fs-6 mt-2"><i class="bi bi-map mx-2"></i><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?></div>
            <div class="fs-6"><i class="bi bi-geo-alt-fill mx-2"></i><?= h($listing->country_name) ?></div>
        </div>

        <div class="listing-type mt-2">
    <p><?= h($listing->listing_type) ?></p>
    <?php if ($listing->listing_type === 'Lawyer'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory', 'action' => 'viewLawyerProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php elseif ($listing->listing_type === 'Law Firm'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory','action' => 'viewLawfirmProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php endif; ?>
</div>

    </div>
<?php endforeach; ?>

    <?php else: ?>
        <p>No listings found.</p>
    <?php endif; ?>
</div>

        </div>
                </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>

    <script>
$(document).ready(function() {
    $('#country_id').on('change', function() {
        var countryId = $(this).val();
        if (countryId) {
            $.ajax({
                url: '<?= $this->Url->build(['controller' => 'Listings', 'action' => 'getPracticeAreas']) ?>',
                data: { country_id: countryId },
                success: function(response) {
                    var practiceAreaSelect = $('#practice_area');
                    practiceAreaSelect.empty();
                    practiceAreaSelect.append('<option value="">Select Practice Area</option>');
                    $.each(response.practiceareas, function(key, value) {
                        practiceAreaSelect.append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#practice_area').empty().append('<option value="">Select Practice Area</option>');
        }
    });
});


    </script>

</body></html>


