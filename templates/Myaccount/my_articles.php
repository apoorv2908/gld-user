
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
    <div class="m-3 mb-5">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-9 shadow ">


            <div class="cl-2 d-flex text-uppercase justify-content-center h5 p-2">
            My Law Articles
                </div>
<hr>
                <div class="bgcc mt-2 p-2 text-white">
                    Articles Posted
                </div>


<div class = "p-4">
<?php if (!empty($lawarticles)): ?>
        <?php foreach ($lawarticles as $lawarticle): ?>
            <div class="listing-item">
            
    <div class="listing-info">
    <div class=" bg-light ">
            <p> <i class=" mx-2 bi bi-patch-plus-fill"></i>Submitted on: <span class = "mx-1"><?= h($lawarticle->added_on) ?></p>
        </div>
        <h6 class="cl">
            <?= $this->Html->link(h($lawarticle->article_title), ['action' => 'view', 'controller' => 'Articlepage', $lawarticle->id]) ?>
        </h6>
       
        <div>
            <?php 
            $words = explode(' ', $lawarticle->article_body);
            $excerpt = implode(' ', array_slice($words, 0, 30)) . '...';
            ?>
            <?= $excerpt ?>
            <?= $this->Html->link('Read More', ['action' => 'view', 'controller' => 'Articlepage', $lawarticle->id], ['class' => 'read-more-link']) ?>
        </div>
    </div>
</div>

     <?php endforeach; ?>

<?php else: ?>
    <p>You have no added articles.</p>
<?php endif; ?> 
        
</div>
<div class="bgcc mt-2 p-2 text-white">
                    Articles Pending For Approval
                </div>

                <div class = "p-4">
<?php if (!empty($lawarticles2)): ?>
        <?php foreach ($lawarticles2 as $lawarticle): ?>
            <div class="listing-item">
            
    <div class="listing-info">
    <div class=" bg-light ">
            <p> <i class=" mx-2 bi bi-patch-plus-fill"></i>Submitted on: <span class = "mx-1"><?= h($lawarticle->added_on) ?></p>
        </div>
        <hr>
        <h6 class="cl">
            <?= $this->Html->link(h($lawarticle->article_title), ['action' => 'view', 'controller' => 'Articlepage', $lawarticle->id]) ?>
        </h6>
       
        <div >
            <?php 
            $words = explode(' ', $lawarticle->article_body);
            $excerpt = implode(' ', array_slice($words, 0, 30)) . '...';
            ?>
            <?= $excerpt ?>
            <?= $this->Html->link('Read More', ['action' => 'view', 'controller' => 'Articlepage', $lawarticle->id], ['class' => 'read-more-link']) ?>
        </div>
    </div>
</div>

     <?php endforeach; ?>

<?php else: ?>
    <p>You have no articles pending for approval.</p>
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
