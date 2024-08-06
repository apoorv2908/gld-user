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
                                 <h1>
                                 </h1>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>
    <!-- Content Section -->

    <div class="users form">
    <?= $this->Flash->render() ?>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Login: Manage Your Account') ?></legend>
        <?= $this->Form->control('email', ['label' => 'Email Address']) ?>
        <?= $this->Form->control('password', ['label' => 'Password']) ?>
        <div>
            <?= $this->Form->button(__('Refresh'), ['type' => 'button', 'onclick' => 'location.reload();']) ?>
        </div>
        <?= $this->Form->control('captcha', ['label' => 'Enter the characters seen above']) ?>
    </fieldset>
    <?= $this->Form->button(__('Log In')) ?>
    <?= $this->Form->end() ?>
    <div>
        <p><?= $this->Html->link(__('New User? Register Now'), ['action' => 'register']) ?></p>
        <p><?= $this->Html->link(__('Forgot Password?'), ['action' => 'forgotPassword']) ?></p>
    </div>
</div>

    
    <!-- Footer -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>
</body>
</html>
