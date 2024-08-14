<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Lawyer Profile</title>
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=eastern-perigee-431610-n8"></script>
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
                                    Lawyers in India
                                 </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>

    <!-- Lawyer Profile Section -->
    <div class="container my-4">
        <div class="row">
            <!-- Lawyer Information -->
            <div class="col-md-6">
                <div class="lawyer-info">
                <div class="listing-image">
                                        <img src="<?= $this->Url->image($lawyer->image) ?>" alt="<?= h($lawyer->law_firm) ?>">
                                    </div>
                    <h2><?= h($lawyer->firstname . ' ' . $lawyer->lastname) ?></h2>
                    <p><?= h($lawyer->address) ?></p>
                    <p><?= h($lawyer->city_name) ?>, <?= h($lawyer->state_name) ?></p>
                    <p><?= h($lawyer->country_name) ?>, <?= h($lawyer->pincode) ?></p>
                    <p><strong>Contact Person:</strong> <?= h($lawyer->firstname . ' ' . $lawyer->lastname) ?></p>
                    <p>Phone No: </i> <?= h($lawyer->phone) ?> <?= h($lawyer->mobile) ?></p>
                </div>
            </div>

            <!-- Google Map Section -->
            <div class="col-md-6">
                <div id="map" style="height: 400px;"></div>
            </div>
        </div>

        <!-- Practice Areas Section -->
        <div class="row">
            <div class="col-md-12">
                <h4>Practice Areas</h4>
                <ul class="list-group">
                    <?php foreach (explode(',', $lawyer->practice_area_name) as $practice_area): ?>
                        <li class="list-group-item"><?= h($practice_area) ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?= $this->element('footer') ?>

    <script>
        function initMap() {
            var location = {lat: <?= $lawyer->latitude ?>, lng: <?= $lawyer->longitude ?>};
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 15,
                center: location
            });
            var marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', initMap);
    </script>
</body>
</html>
