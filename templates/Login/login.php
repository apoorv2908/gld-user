<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login - Global Law Directory</title>
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<style>
.registration-container{
    margin-left: auto;
    margin-right: auto;
  
}
</style>
<body>
    <?= $this->element('header') ?>
    
    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/privacy.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">LOGIN </span></h1>
        </div>
      </div>
    </div>
    <div class = "registration-container">

    <div class="users form m-5 p-5 shadow">
        <h3 class = "text-uppercase cl-2 d-flex justify-content-center">Login : Manage Your Account</h3>
        <div class="d-flex justify-content-center text-success mt-4">
        <?= $this->Html->link("New User? Register Now", ['action' => 'registration'], ['style' => 'color: green; font-weight: bold;']) ?>
        </div>
        <hr>
        
        <?= $this->Form->create(null, ['type' => 'post']) ?>
        <fieldset>
            <b>
                <br>
            <?= $this->Form->control('email', [
    'required' => true, 
    'placeholder' => 'Enter your EMAIL ', 
    'label' => false
]) ?>
<br>
<?= $this->Form->control('password', [
    'required' => true, 
    'placeholder' => 'Enter your PASSWORD',
    'label' => false
]) ?>

            </b>
            <hr>
            <div class="captcha-container fw-bold mt-4">
            <span class="captcha-code p-2 bg-light border rounded mr-2 h3 text-decoration-line-through" 
      style="background-image: url('../img/colab.jpg'); background-size: cover;">
    <?= h($captcha_code) ?>
</span>
<br></br><b>
                    <?= $this->Form->control('captcha', [
    'required' => true,
    'placeholder' => 'Enter the CAPTCHA code',
]) ?></b>

            </div>
                   
        </fieldset>
        <?= $this->Form->submit(__('Login', ['class' => 'btn btn-primary'])); ?>
      
        <?= $this->Form->end() ?>
        <div class="d-flex justify-content-end text-success mt-4">
        <?= $this->Html->link("Forgot Password?", ['action' => 'registration'], ['style' => 'color: red; font-weight: bold;']) ?>
        </div>
    </div>
 
                    </div>

    <?= $this->element('footer') ?>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
