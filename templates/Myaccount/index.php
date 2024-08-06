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
            <?= $this->Html->image('privacy.jpg') ?>            
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-12 ">
                                <div class = "d-flex justify-content-center">
                                    <h1 class = "text-white text-bold">
                                        MY ACCOUNT
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
            <div class="col-md-6">

                <div class="d-flex justify-content-center h5 mb-3">
                    ACCOUNT ALERTS
                </div>
                <div class="text-danger h6">
                    <li>
<a>Submit Your Listings</a>
</li>
                </div>
                <div class="d-flex justify-content-center text-danger h5 mb-3 mt-4">
                    LOGIN DETAILS
                </div>
                <hr>
                <div class="mt-4 px-4">
                    <p>
                        Name:                 <?= h($loggedInUser->firstname) ?>  <?= h($loggedInUser->lastname) ?>


</p>
                    
<br>
                    <p >
                        Email:                 <?= h($loggedInUser->email) ?>

</p>
<br>
                    <p>
                        User Id:                 <?= h($loggedInUser->id) ?>

</p>
                   
             <br>      
                </div>
                <?= $this->Html->link('Edit Details', ['action' => 'edit', $loggedInUser->id], ['class' => 'btn btn-primary']) ?>

            </div>



            <div class="col-md-3">
            <div class="card">
                    <div class="card-header">
                        <h5> Submit Listing</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <button class="btn btn-primary btn-block">Directory of Lawyers</button>
                            <button class="btn btn-primary btn-block">Directory of Law Firms</button>
                        </form>
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
