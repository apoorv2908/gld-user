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

      <title><?= h($lawfirm->firstname . ' ' . $lawfirm->lastname . ' ' . $lawfirm->listing_type . ' ' . 'AT'. ' ' . $lawfirm->city_name . ', ' . $lawfirm->state_name . ', ' . $lawfirm->country_name) ?></title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'style.css', 'responsive.css']) ?>

   </head>
   <body>
      
      <!-- why section -->
      <?= $this->element('header') ?>


         <div class="section mt-0 mb-5 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/map.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1"><?= h($lawfirm->law_firm . ', ' .$lawfirm->listing_type . ' ' . 'AT'. ' ' . $lawfirm->city_name . ', ' . $lawfirm->state_name . ', ' . $lawfirm->country_name) ?></span></h1>
        </div>
      </div>
    </div>


         <div class = "d-flex px-5 justify-content-between mt-4 bg-light">
         <div class="listing-details mt-3 mx-5">
         <div class="listing-image">
                            <img src="<?= $this->Url->image($lawfirm->image) ?>" alt="<?= h($lawfirm->law_firm) ?>">
                        </div>
    <div class="listing-info ">
   <div class="tagname mt-2 ">
      <?php if ($lawfirm->listing_type === 'Lawyer'): ?>
         <h5><?= h($lawfirm->firstname) . ' ' . h($lawfirm->lastname) ?></h5>
      <?php elseif ($lawfirm->listing_type === 'Law Firm'): ?>
         <h5><?= h($lawfirm->law_firm) ?></h5>
      <?php endif; ?>
   </div>

   <p><?= h($lawfirm->street_address) ?></p>
   <p><?= h($lawfirm->city_name) ?>, <?= h($lawfirm->state_name) ?>, <?= h($lawfirm->country_name) ?> <?= h($lawfirm->pincode) ?></p>
  <hr></hr>
   <p class = "text-danger fw-bold">Contact Person: <?= h($lawfirm->firstname . ' ' . $lawfirm->lastname) ?></p>
   <table class = "">

<tr>
   <th>
   <i class="fa fa-envelope mx-1"></i>
   </th>
<td>
<?= h($lawfirm->email) ?>
   </td>

   </tr>

   <tr> <th><i class="fa fa-phone mx-1"></i>  </th> <td><?= h($lawfirm->phone) ?></td> </tr>
   <tr> <th><i class="fa fa-mobile mx-1"></i>  </th> <td><?= h($lawfirm->mobile) ?></td> </tr>
   <tr> <th><i class="fa fa-globe mx-1"></i>  </th> <td><?= h($lawfirm->website) ?></td> </tr>



   </table>
   <p class="initial-consultation text-success mt-5 h5"><?= h($lawfirm->free_consultation)?>, Free Initial Consultation Provided</p>
</div>
      </div>
<div class="listing-map mt-3 ">
        <!-- Add a Google Maps iframe based on the address -->
        <iframe
            width="800"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=<?= urlencode($lawfirm->street_address_line_1 . ' ' . $lawfirm->city . ' ' . $lawfirm->state . ' ' . $lawfirm->country) ?>">
        </iframe>
    </div>
      </div>

   <hr> 
    <div class="practice-areas px-5">
        <h5 class = 'px-5'>Practice Areas:</h5>
        <ul>
        <?php foreach (explode(',', $lawfirm->practice_area_name) as $practice_area): ?>
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


