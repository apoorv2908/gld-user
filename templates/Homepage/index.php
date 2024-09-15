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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">

      <link rel="shortcut icon" href="images/favicon.png" type="">
      
      <title>Homepage - Global Law Directory</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'style.css', 'style2.css', 'responsive.css']) ?>
      

   </head>
   <body>
      
      <?= $this->element('header') ?>

      <?= $this->element('banner') ?>
    
      <?= $this->element('content-2') ?>
    

<?= $this->element('recentadded') ?>



      
      <?= $this->element('footer') ?>

      <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

   </body>
</html>