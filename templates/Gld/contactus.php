




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

      <title>Contact us - Global Law Directory</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'style.css', 'responsive.css']) ?>

   </head>
   <body>
      
      <!-- why section -->
      <?= $this->element('header') ?>


      <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/about.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">CONTACT US
          </span></h1>
        </div>
      </div>
    </div>

<div class = "bg-light">

<div class = "bg-white p-5 mx-5 my-3" >

<div class = "d-flex justify-content-center h5 cl-2 fw-bold">
<b>CONTACT US</b>
</div>
<hr>

<div>
    <?= $this->Form->create($contactus) ?>
    <fieldset>
        
        <p><span class = "text-red">*</span> Marked fields are mandatory</p>    
    <?= $this->Form->control('name', [
        'required' => true,
        'label' => '<strong>Name <span style="color: red;">*</span></strong>',
        'escape' => false,
        'placeholder' => "Enter your full name"
    ]) ?>
    
    <?= $this->Form->control('email', [
        'required' => true,
        'label' => '<strong>Email <span style="color: red;">*</span></strong>',
        'escape' => false,
        'placeholder' => "Enter your email address"

    ]) ?>
    
    <?= $this->Form->control('subject', [
        'required' => true,
        'label' => '<strong>Subject <span style="color: red;">*</span></strong>',
        'escape' => false,
        'placeholder' => "Enter subject"

    ]) ?>
    
    <?= $this->Form->control('message', [
        'required' => true,
        'type' => 'textarea',
        'label' => '<strong>Message <span style="color: red;">*</span></strong>',
        'escape' => false,
        'placeholder' => "Add message"

    ]) ?>

<div class="captcha-field">
        <span class="captcha-code p-2 bg-light border rounded mr-2 h3 text-decoration-line-through" 
      style="background-image: url('../img/colab.jpg'); background-size: cover;">
    <?= h($captchaCode) ?>
</span> <br><br>
           <?= $this->Form->control('captcha', ['required' => true, 'placeholder' => 'Enter the CAPTCHA code', 'class' => 'fw-bold', 'label' => false]) ?>
        </div></b>
    </fieldset>
    <?= $this->Form->submit(__('Submit', ['class' => 'btn btn-primary'])); ?>
    <?= $this->Form->end() ?>
</div>
</div>
</fieldset>

    <?= $this->Form->end() ?>
</div>
</div>





</div>


       

<?= $this->element('footer') ?>


      
      <!-- end client section -->
      <!-- footer start -->
      
   

      <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>

   </body>
</html>


