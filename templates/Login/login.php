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
                                <div class="d-flex justify-content-center">
                                    <h1 class="text-white text-bold">
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

    <div class="users form m-5 p-5 shadow">
        <?= $this->Flash->render() ?>
        <h3>Login</h3>
        <hr>
        <div class="d-flex justify-content-center text-green">
            New User? Register Here
        </div>
        <?= $this->Form->create() ?>
        <fieldset>
            <?= $this->Form->control('email', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold']) ?>
            <?= $this->Form->control('password', ['required' => true, 'placeholder' => 'Enter your password', 'class' => "form-control"]) ?>
            
        </fieldset>
        <?= $this->Form->submit(__('Login', ['class' => 'btn btn-primary'])); ?>
        <?= $this->Form->end() ?>
        <?= $this->Html->link("Add User", ['action' => 'add']) ?>
    </div>

    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
