
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
    <title>My Law Articles - Global Law Directory</title>
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
MY LAW ARTICLES
</div>
<hr>


<div class = "p-4">
<?php if (!empty($lawarticles)): ?>
        <?php foreach ($lawarticles as $lawarticle): ?>
            <div class="listing-item">
    <div class="listing-info">
        <h6 class="cl">
            <?= $this->Html->link(h($lawarticle->article_title), ['action' => 'viewLawArticle', $lawarticle->id]) ?>
        </h6>
        <div class="at-1">
            <p>Submitted on: <span class="cl"><?= h($lawarticle->added_on) ?></span> Submitted by: <span class="cl"><?= h($lawarticle->added_by) ?></span></p>
        </div>
        <div class="at-1">
            <?php 
            $words = explode(' ', $lawarticle->article_body);
            $excerpt = implode(' ', array_slice($words, 0, 30)) . '...';
            ?>
            <?= h($excerpt) ?>
            <?= $this->Html->link('Read More', ['action' => 'viewLawArticle', $lawarticle->id], ['class' => 'read-more-link']) ?>
        </div>
    </div>
</div>
     <?php endforeach; ?>

<?php else: ?>
    <p>You have no added articles.</p>
<?php endif; ?> 
        
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
