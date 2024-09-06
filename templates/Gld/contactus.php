




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


      <section class="slider_section ">
            <div class="slider_bg_box ">
            <?= $this->Html->image('about.jpg') ?>            
        </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="container ">
                        <div class="row">
                           <div class="col-md-7 col-lg-12 ">
                              <div class = "d-flex justify-content-center"> 
                                    <p class = "text-white h2">CONTACT US</P>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
              
            </div>
         </section>

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

<hr>
    <div class="captcha">
        <?= $this->Captcha->display() ?>
        <?= $this->Form->control('captcha', [
            'required' => true,
            'label' => '<strong>Enter CAPTCHA <span style="color: red;">*</span></strong>',
            'escape' => false,
            'placeholder' => "Enter CAPTCHA Code"


        ]) ?>
    </div>
</fieldset>

    <?= $this->Form->submit(__('Submit', ['class' => 'btn btn-primary'])); ?>
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


