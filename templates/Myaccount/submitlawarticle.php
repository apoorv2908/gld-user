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
    
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-9 shadow ">


            <div class = "d-flex justify-content-center mt-3 cc h4">
SUBMIT LAW ARTICLE
</div>
<hr>
<div class = "bgcc mt-2 p-2 text-white">
Submit a Law Article
</div>

<div class = "p-4">
            <?= $this->Form->create(null, ['class' => 'row g-3']) ?>
    <div class="col-12">
        <?= $this->Form->control('article_title', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Article Title']
        ]) ?>
    </div>
    <div class="col-12">
        <?= $this->Form->control('article_body', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Article Body', 'id' => 'summernote']
        ]) ?>
    </div>
    <div class="col-12">
    <?= $this->Form->control('category', [
        'type' => 'select',
        'options' => ['' => '--select a category--'] + collection($practiceareas)->combine('sno', 'practice_area_title')->toArray(), // Adjust 'sno' and 'practice_area_title' to your actual column names
        'class' => 'form-control mb-4', 
        'label' => ['class' => 'form-label', 'text' => 'Category']
    ]) ?>
</div>

<br>
    <div class="col-12">
        <?= $this->Form->control('added_on', [
            'type' => 'date',
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Added On'],
            'value' => $currentDate,
            'readonly' => true
        ]) ?>
    </div>
    <div class="col-12">
        <?= $this->Form->control('added_by', [
            'class' => 'form-control', 
            'label' => ['class' => 'form-label', 'text' => 'Added By'],
'value' => $user->firstname . ' ' . $user->lastname,
'readonly' => true
            ]) ?>
    </div>
    
    <div class="text-center">
        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
        <?= $this->Form->button(__('Reset'), ['type' => 'reset', 'class' => 'btn btn-secondary']) ?>
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
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
