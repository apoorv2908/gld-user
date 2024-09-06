


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
    <title>Edit Details - Global Law Directory</title>
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
               
                
                <hr>
                <div class="mt-4 px-4">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Edit Your Details') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('email');
                    echo $this->Form->control('contact');
                    echo $this->Form->control('country');
                    echo $this->Form->control('state');
                    echo $this->Form->control('city');


                ?>
            </fieldset>
            <?= $this->Form->button(__('Save Changes')) ?>
            <?= $this->Form->end() ?>
                </div>

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
    <?= $this->element('footer') ?>

    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
