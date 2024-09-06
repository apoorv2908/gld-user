<!DOCTYPE html>
<html>
<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <title>Registration - Global Law Directory</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<style>
.registration-container{
    width: 800px;
    margin: 50px auto;
  
}
</style>
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
                                        REGISTRATION
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="registration-container">

    <div class="users form m-5 p-5 shadow ">
    <h3>Registration: Create Account</h3>
    <hr>
    <?= $this->Form->create($user) ?>
    <fieldset><b>
    <?= $this->Form->control('firstname', [
    'required' => true,
    'placeholder' => 'Enter your firstname',
    'class' => 'fw-bold',
    'label' => ['text' => 'First Name *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('lastname', [
    'required' => true,
    'placeholder' => 'Enter your lastname',
    'class' => 'fw-bold',
    'label' => ['text' => 'Last Name *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('email', [
    'required' => true,
    'placeholder' => 'Enter your email',
    'class' => 'fw-bold',
    'autocomplete' => 'email',
    'autocapitalize' => 'none',
    'label' => ['text' => 'Email *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('contact', [
    'required' => true,
    'placeholder' => 'Enter your contact number',
    'class' => 'fw-bold',
    'label' => ['text' => 'Contact Number *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('country', [
    'required' => true,
    'placeholder' => 'Enter your country',
    'class' => 'fw-bold',
    'label' => ['text' => 'Country *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('state', [
    'required' => true,
    'placeholder' => 'Enter your state',
    'class' => 'fw-bold',
    'label' => ['text' => 'State *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('city', [
    'required' => true,
    'placeholder' => 'Enter your city',
    'class' => 'fw-bold',
    'label' => ['text' => 'City *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<?= $this->Form->control('password', [
    'required' => true,
    'placeholder' => 'Enter your password',
    'class' => 'fw-bold',
    'type' => 'password',
    'label' => ['text' => 'Password *', 'escape' => false, 'style' => 'color: black;']
]) ?>

<hr>
        <div class="captcha-field">
            <label for="captcha" class = "h3 border p-1 bg-light"> <?= $captchaCode ?></label>
            <?= $this->Form->control('captcha', ['required' => true, 'placeholder' => 'Enter the CAPTCHA code', 'class' => 'fw-bold', 'label' => false]) ?>
        </div></b>
    </fieldset>
    <?= $this->Form->submit(__('Register', ['class' => 'btn btn-primary'])); ?>
    <?= $this->Form->end() ?>
</div>
</div>
    <?= $this->element('footer') ?>

    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
