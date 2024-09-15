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

</style>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/privacy.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">REGISTRATION </span></h1>
        </div>
      </div>
    </div>
    <div class="registration-container">

    <div class="users form m-5 p-5 shadow ">
    <h3 class = "text-uppercase cl-2 d-flex justify-content-center mb-3">Registration : Create An Account</h3>
    <hr>
    <?= $this->Form->create($user) ?>
    <fieldset class = "mt-4"><b>
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

<br>
<div class="captcha-field">
        <span class="captcha-code p-2 bg-light border rounded mr-2 h3 text-decoration-line-through" 
      style="background-image: url('../img/colab.jpg'); background-size: cover;">
    <?= h($captchaCode) ?>
</span> <br><br>
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
