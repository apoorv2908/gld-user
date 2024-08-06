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
                    <h3 class="text-primary"><?= h($lawarticles->article_title) ?></h3>
                    <p>
                        <strong>Added By:</strong> <?= h($lawarticles->added_by) ?><br>
                        <strong>Category:</strong> <?= h($lawarticles->category) ?><br>
                        <strong>Article Id:</strong> <?= h($lawarticles->id) ?><br>
                        <strong>Added On:</strong> <?= h($lawarticles->added_on) ?><br>
                        <strong>Views:</strong> <?= h($lawarticles->views) ?>
                    </p>
                    <hr>
                    <p><?= h($lawarticles->article_body) ?></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>
</body>
</html>
