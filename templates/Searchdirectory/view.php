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
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'style.css', 'responsive.css']) ?>

   </head>
   <body>
      
      <!-- why section -->
      <?= $this->element('header') ?>


      <section class="slider_section ">
            <div class="slider_bg_box">
            <?= $this->Html->image('about.jpg') ?>            
        </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-12 ">
                              <div class = "d-flex justify-content-center"> 
                                 <h2>
                                 <p class = "text-white text-uppercase h2 fw-bold"><?= h($listing->firstname . ' ' . $listing->lastname . ' ' . $listing->listing_type . ' ' . 'AT'. ' ' . $listing->city_name . ', ' . $listing->state_name . ', ' . $listing->country_name) ?></p>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>


         <div class = "d-flex justify-content-around mt-4 bg-light">
<div class="listing-details mt-3  ">
<div class="listing-image">
                            <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
                        </div>
    <div class="listing-info ">
   <div class="tagname mt-2 ">
      <?php if ($listing->listing_type === 'Lawyer'): ?>
         <h5><?= h($listing->firstname) . ' ' . h($listing->lastname) ?></h5>
      <?php elseif ($listing->listing_type === 'Law Firm'): ?>
         <h5><?= h($listing->name_of_law_firm) ?></h5>
      <?php endif; ?>
   </div>

   <p><?= h($listing->street_address) ?></p>
   <p><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?>, <?= h($listing->country_name) ?> <?= h($listing->pincode) ?></p>
  <hr></hr>
   <p class = "text-danger at-1 fw-bold">Contact Person: <?= h($listing->firstname . ' ' . $listing->lastname) ?></p>
   <p class = "at-1 mx-3"><i class="fa fa-envelope mx-1"></i> <?= h($listing->email) ?></p>
   <p class = "at-1 mx-3"><i class="fa fa-phone mx-1"></i> <?= h($listing->phone) ?></p>
   <p class = "at-1 mx-3"><i class="fa fa-mobile mx-1"></i> <?= h($listing->mobile) ?></p>
   <p class = "at-1 mx-3"><i class="fa fa-globe mx-1"></i> <?= h($listing->website) ?></p><br>
   <p class="initial-consultation text-success h5"><?= h($listing->initial_consultation ? 'Free Initial Consultation Provided' : 'No Free Initial Consultation Provided') ?></p>
</div>
      </div>
<div class="listing-map mt-3 ">
        <!-- Add a Google Maps iframe based on the address -->
        <iframe
            width="600"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=<?= urlencode($listing->street_address_line_1 . ' ' . $listing->city . ' ' . $listing->state . ' ' . $listing->country) ?>">
        </iframe>
    </div>
      </div>

   <hr> 
    <div class="practice-areas px-5">
        <h5 class = 'px-5'>Practice Areas:</h5>
        <ul>
        <?php foreach (explode(',', $listing->practice_area_name) as $practice_area): ?>
                        <li class="list-group-item"><?= h($practice_area) ?></li>
                    <?php endforeach; ?>
        </ul>
    </div>
</div>

     


<?= $this->element('footer') ?>


      
      <!-- end client section -->
      <!-- footer start -->
      
   

      <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>

   </body>
</html>


