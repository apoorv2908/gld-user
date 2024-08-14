


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

            <div>
            <div class = "d-flex justify-content-center mt-3 cc h4">
MY ARTICLES
</div>

<hr>

        <?php foreach ($lawarticles as $article): ?>
            <div class="listing-item">
            <div class="listing-info">
                <h3>
                    <?= $this->Html->link(h($article->article_title), ['action' => 'view', $article->id]) ?>

                </h3>
                <p><?= h($article->article_body) ?></p>

            </div>
            <div class = "d-flex justify-content-between">
            <p><?= h($article->added_on) ?></p>
            <div>
                <?= $this->Html->link(__('View'), ['action' => 'view', $article->id, 'class'=> 'btn btn-primary']) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit2', $article->id, 'class'=> 'btn btn-primary']) ?>

            </div>
        </div>
        </div>

        
    <?php endforeach; ?>


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
