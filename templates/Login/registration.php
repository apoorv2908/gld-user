

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

    <div class="users form m-5 p-5 shadow">
        <?= $this->Flash->render() ?>
        <h3>Login</h3>
        <hr>
        <div class="d-flex justify-content-center text-green">
        </div>
        <?= $this->Form->create($user) ?>
        <fieldset>
        <?= $this->Form->control('firstname', ['required' => true, 'placeholder' => 'Enter your firstname', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('lastname', ['required' => true, 'placeholder' => 'Enter your lastname', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('email', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('contact', ['required' => true, 'placeholder' => 'Enter your contact number', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('country', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('state', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('city', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold']) ?>
        <?= $this->Form->control('password', ['required' => true, 'placeholder' => 'Enter your email', 'class' => 'form-control fw-bold', 'type' => 'password']) ?>
            
        </fieldset>
        <?= $this->Form->submit(__('Register', ['class' => 'btn btn-primary'])); ?>
        <?= $this->Form->end() ?>
    </div>

    <?= $this->element('footer') ?>

    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
