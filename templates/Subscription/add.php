
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
    <title>Subscription</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('pricingelement') ?>
            <!-- Articles Section -->
            <div class="col-md-7 shadow ">


            <div class = "d-flex justify-content-center mt-3 cc h4">
SUBSCRIPTION
</div>

<hr>
<p>Please verify your details</p>

<div class = "p-4">
            <?= $this->Form->create(null, ['class' => 'row g-3']) ?>
    <div class="col-12">
        <?= $this->Form->control('firstname', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'First Name'],
'value' => $user->firstname,
'readonly' => true

        ]) ?>
    </div>
    <div class="col-12">
        <?= $this->Form->control('lastname', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Last Name', 'id' => 'summernote'],
            'value' => $user->lastname,
            'readonly' => true


        ]) ?>
    </div>

    <div class="col-12"> (This email will be used for further communication)
        <?= $this->Form->control('email', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Email', 'id' => 'summernote'],
            'value' => $user->email,
            'readonly' => true


        ]) ?>
    </div>

    <div class="col-12">
        <?= $this->Form->control('contact', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Contact', 'id' => 'summernote'],
            'value' => $user->contact,
            'readonly' => true
        ]) ?>
    </div>
    


    <div class="d-flex justify-content-end">
        <div>
        <?= $this->Form->button(__('Proceed to Checkout'), ['class' => 'btn btn-primary']) ?>
        </div>
       
    </div>
<?= $this->Form->end() ?>

        </div>
</div>
        </div>
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
