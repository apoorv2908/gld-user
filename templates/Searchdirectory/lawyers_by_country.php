




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
      <title>Lawyer At <?= h($countryName) ?> - Global Law Directory</title>
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
                                 <p class = "text-uppercase text-white">Lawyer At <?= h($countryName) ?></p>
                                 </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>

    <!-- Content Section -->
    <div class="m-3">

        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
    <div class="card">
        <div class="card-header">
            <h5>Filter</h5>
        </div>
        <div class="card-body">
            <?= $this->Form->create(null, ['type' => 'get']) ?>
            <div class="form-group">
                <label for="category">Select a Practice Area</label>
                <?= $this->Form->control('practice_area', [
                    'type' => 'select',
                    'options' => $practiceAreasList, // Assuming you pass this from the controller
                    'empty' => 'All Practice Areas',
                    'class' => 'form-control'
                ]) ?>
            </div>
            <?= $this->Form->submit('Apply Filter', ['class' => 'btn btn-primary btn-block mt-3']) ?>
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
                <hr>
                <?php if (isset($noLawyersMessage)): ?>
                <p><?= h($noLawyersMessage) ?></p>
                <?php else: ?>
                <?php foreach ($lawyers as $lawyer): ?>
                <div class="listing-item">
                                    <div class="listing-image">
                                        <img src="<?= $this->Url->image($lawyer->image) ?>" alt="<?= h($lawyer->law_firm) ?>">
                                    </div>
                                    <div class="listing-info">
                                        <h3>
                                            <?= $this->Html->link(h($lawyer->law_firm), ['action' => 'viewLawyerProfile', $lawyer->id]) ?>
                                            <?= $this->Html->link(h($lawyer->firstname . ' ' . $lawyer->lastname), ['action' => 'viewLawyerProfile', $lawyer->id]) ?>
                                        </h3>
                                        <div class="fs-6 mt-2"><i class="bi bi-map mx-2"></i><?= h($lawyer->city_name) ?>, <?= h($lawyer->state_name) ?></div>
                                        <div class="fs-6"><i class="bi bi-geo-alt-fill mx-2"></i><?= h($lawyer->country_name) ?></div>
                                    </div>
                                    <div class="listing-type">
                                        <p><?= h($lawyer->listing_type) ?></p>
                                        <?= $this->Html->link('View Listing', ['action' => 'viewLawyerProfile', $lawyer->id], ['class' => 'view-listing-button']) ?>
                                    </div>
                </div>
                <?php endforeach; ?>
                <?php endif; ?>

            </div>
        </div>
                </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>

</body></html>


