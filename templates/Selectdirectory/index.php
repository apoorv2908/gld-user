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
            <?= $this->Html->image('about.jpg') ?>            
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-12 ">
                                <div class = "d-flex justify-content-center">
                                    <h1 class = "text-white text-bold">
                                        SELECT A DIRECTORY
                                    </h1>
                                </div>
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
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-9">
                <div class="d-flex justify-content-center text-primary h2 mb-3">
                    SELECT A DIRECTORY
                </div>
                <hr>
                <div class="d-flex justify-content-center text-danger h6 mb-3">
                    IMPORTANT INSTRUCTIONS
                </div>
                <div class="text-danger h6">
                    1. Global Law Directories provides 5 major directories which have been described below.
                    <br><br>
                    2. After submitting the listing an option is provided to display the same as a BASIC LISTING absolutely free of cost or a PREMIUM LISTING, which offers a huge advantage over the Basic Listing, on payment of a nominal annual fee of USD 40.
                </div>
                <div class="d-flex justify-content-center text-danger h6 mb-3 mt-4">
                    PLEASE SELECT THE RELEVANT DIRECTORY THAT BEST SUITS YOUR LISTING.
                </div>
                <div class="mt-4">
                    <li class="text-primary">
                        <?= $this->Html->link('Directory of Lawyers', ['controller' => 'Selectdirectory', 'action' => 'listingDirectoryOfLawyers']) ?>
                    </li>
                    <div class="mx-4">
                        Lawyers, also called attorneys, advocates, counsels, solicitors etc. depending on the country or region, are individuals well versed in the legal profession and authorized to practice law before a court, tribunal, forum or any other judicial authority established by law.
                    </div>
                    <br>
                    <li class="text-primary">
                        <?= $this->Html->link('Directory of Law Firms', ['controller' => 'Selectdirectory', 'action' => 'listingDirectoryOfLawFirms']) ?>
                    </li>
                    <div class="mx-4">
                        Law Firms are professional entities formed by one or more lawyers in form of a partnership or a corporate entity, engaged in providing legal advice to clients and representing them before any court of law, tribunal, forum or any other judicial authority.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
