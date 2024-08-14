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
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>

   </head>
   <body>
      
      <!-- why section -->
      <?= $this->element('header') ?>

      <?php foreach ($approvedListings as $listing): ?>

      <section class="slider_section ">
            <div class="slider_bg_box ci">
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
                                 <p class = "text-white text-uppercase fw-bold"><?= h($listing->first_name . ' ' . $listing->last_name . ' ' . $listing->listing_type . ' ' . 'AT'. ' ' . $listing->city . ', ' . $listing->state . ', ' . $listing->country) ?></p>
                                 </h2>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>


<div class="listing-details">
    <div class="listing-logo">
        <img src="<?= h($listing->image_logo) ?>" alt="<?= h($listing->name_of_law_firm) ?>">
    </div>
    <div class="listing-info">
        <h2><?= h($listing->name_of_law_firm) ?></h2>
        <p><?= h($listing->street_address_line_1) ?></p>
        <p><?= h($listing->city) ?>, <?= h($listing->state) ?></p>
        <p><?= h($listing->country) ?></p>
        <p><?= h($listing->pin_code) ?></p>
        <p>Contact Person: <?= h($listing->first_name . ' ' . $listing->last_name) ?></p>
        <p>Email: <?= h($listing->email) ?></p>
        <p>Phone: <?= h($listing->phone) ?></p>
        <p>Mobile: <?= h($listing->mobile) ?></p>
        <p>Website: <?= h($listing->website) ?></p>
        <p>Year of Establishment: <?= h($listing->year_of_establishment) ?></p>
        <p class="initial-consultation"><?= h($listing->initial_consultation ? 'Free Initial Consultation Provided' : 'No Free Initial Consultation') ?></p>
    </div>
    <div class="listing-map">
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
    <div class="practice-areas">
        <h3>Practice Areas</h3>
        <ul>
            <?php foreach (json_decode($listing->practice_areas) as $practiceArea): ?>
                <li><?= h($practiceArea) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
<?php endforeach; ?>

     




      
      <!-- end client section -->
      <!-- footer start -->
      
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
         
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         
         </p>
      </div>

      <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>

   </body>
</html>


