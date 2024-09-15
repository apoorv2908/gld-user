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
    <title>Select Directory - Global Law Directory
    </title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/about.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">Select A Directory
          </span></h1>
        </div>
      </div>
    </div>
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-9">
            <div class="cl-2 d-flex text-uppercase justify-content-start h5 p-2">
            Select A Directory

                </div>
                <hr>
                <div class="d-flex justify-content-center text-danger h6 mb-3">
                    IMPORTANT INSTRUCTIONS
                </div>
                <div class="text-danger h6">
                    1. Global Law Directories provides 2 major directories which have been described below.
                    <br><br>
                    2. After submitting the listing an option is provided to display the same as a BASIC LISTING absolutely free of cost or a PREMIUM LISTING, which offers a huge advantage over the Basic Listing, on payment of a nominal annual fee of USD 29.
                </div>
                <div class="d-flex justify-content-center text-danger h6 mb-3 mt-4">
                    PLEASE SELECT THE RELEVANT DIRECTORY THAT BEST SUITS YOUR LISTING.
                </div>
                <div class="mt-4">
                    <li class="text-primary">
                        <?= $this->Html->link('Directory of Lawyers', ['controller' => 'Listings', 'action' => 'directoryOfLawyers']) ?>
                    </li>
                    <div class="mx-4">
                        Lawyers, also called attorneys, advocates, counsels, solicitors etc. depending on the country or region, are individuals well versed in the legal profession and authorized to practice law before a court, tribunal, forum or any other judicial authority established by law.
                    </div>
                    <br>
                    <li class="text-primary">
                        <?= $this->Html->link('Directory of Law Firms', ['controller' => 'Listings', 'action' => 'directoryOfLawFirms']) ?>
                    </li>
                    <div class="mx-4">
                        Law Firms are professional entities formed by one or more lawyers in form of a partnership or a corporate entity, engaged in providing legal advice to clients and representing them before any court of law, tribunal, forum or any other judicial authority.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>


    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
