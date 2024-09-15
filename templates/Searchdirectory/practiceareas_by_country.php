




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
      <title><?= h($practiceAreaTitle) ?> Listings - Global Law Directory</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
   </head>
   <body>
    <!-- Header -->
    <?= $this->element('header') ?>
   

         <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/map.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">                                    Listings in <?= h($practiceAreaTitle) ?>
          </span></h1>
        </div>
      </div>
    </div>

    <!-- Content Section -->
    <div class="m-3 mb-5">

        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header sam">
                        <h5 class = "text-white">FILTER</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create(null, ['type' => 'get']) ?>
                        <div class="form-group">
                            <label for="category">Select a Practice Area</label>

                        </div>
                        <?= $this->Form->submit('Apply Filter', ['class' => 'btn btn-primary btn-block mt-3']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <!-- Articles Section -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                <h5>Found <?= h($totalResults) ?> Results</h5>
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
                <hr>

                <?php foreach ($listings as $listing): ?>
                <div class="listing-item">
                                    <div class="listing-image">
                                        <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
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
                                    <div class="listing-type">
                                        <p><?= h($listing->listing_type) ?></p>
                                        <?php if ($listing->listing_type === 'Lawyer'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory', 'action' => 'viewLawyerProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php elseif ($listing->listing_type === 'Law Firm'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory','action' => 'viewLawfirmProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php endif; ?>                                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
                </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>

</body></html>


