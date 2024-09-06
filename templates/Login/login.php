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
    width: 800px;
    margin: 50px auto;
  
}
</style>
<body>
    <?= $this->element('header') ?>

    <section class="slider_section">
        <div class="slider_bg_box">
            <?= $this->Html->image('privacy.jpg') ?>            
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-lg-12">
                                <div class="d-flex justify-content-center">
                                    <h1 class="text-white text-bold">MY ACCOUNT</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="registration-container">

    <div class="users form m-5 p-5 shadow">
        <h3>Login</h3>
        <hr>
        
        <?= $this->Form->create(null, ['type' => 'post']) ?>
        <fieldset>
            <b>
            <?= $this->Form->control('email', [
                'required' => true, 
                'placeholder' => 'Enter your email', 
                'class' => ' fw-bold'
            ]) ?>
            </b>
            <b>
            <?= $this->Form->control('password', [
                'required' => true, 
                'placeholder' => 'Enter your password'
            ]) ?>
            </b>
            <hr>
            <div class="captcha-container fw-bold mt-4">
                    <span class="captcha-code p-2 bg-light border rounded mr-2 h3 text-decoration-line-through">
                        <?= h($captcha_code) ?>
                    </span><br></br><b>
                    <?= $this->Form->control('captcha', [
    'required' => true,
    'placeholder' => 'Enter the CAPTCHA code',
]) ?></b>

            </div>
                   
        </fieldset>
        <?= $this->Form->submit(__('Login', ['class' => 'btn btn-primary'])); ?>
        <div class="d-flex justify-content-end text-success">
            <?= $this->Html->link("New User? Register Here", ['action' => 'registration']) ?>
        </div>
        <?= $this->Form->end() ?>
    </div>
                    </div>

    <?= $this->element('footer') ?>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
