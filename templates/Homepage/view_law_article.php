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

    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
     

<section class="slider_section ">
            <div class="slider_bg_box">
            <?= $this->Html->image('tnc.jpg') ?>            
        </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-12 ">
                              <div class = "d-flex justify-content-center">
                                 <h1>
                                 <?= h($lawarticles->article_title) ?>
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
            <!-- Article Detail Section -->
            <div class="col-md-12">
                <div class="article bg-light mt-3 p-2" style="border-radius: 10px;">
                    <h3 class="text-dark mt-2"><?= h($lawarticles->article_title) ?></h3>
                    <hr>
                    <p class="text-secondary">
                        <i class="bi bi-person-fill"></i> Added By: <?= h($lawarticles->added_by) ?><span class ="mx-5"></span>
                        <i class="bi bi-tags-fill "></i> Category: <?= h($lawarticles->category) ?><span class ="mx-5"></span>
                        <i class="bi bi-hash "></i> Article ID: <?= h($lawarticles->id) ?><span class ="mx-5"></span>
                        <i class="bi bi-calendar "></i> Added On: <?= h($lawarticles->added_on) ?><span class ="mx-5"></span>
                        <i class="bi bi-eye-fill"></i> Views: <?= h($lawarticles->views) ?><span class ="mx-5"></span>
                    </p>
                    <hr>
                    <p><?= $lawarticles->article_body ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>

    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>
</body>
</html>
