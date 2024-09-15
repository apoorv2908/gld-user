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
    <title>Lawyers Listing</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>

<div class = "text-center">

    <img src="<?= $this->Url->image('confimg.webp') ?>" class="centered-image">

    <b class = "mt-5 h5">Thank You ! Your Listing has been submitted successfully </b>

    <p>Your Listing ID is: <strong><?= h($listing->listing_id) ?></strong></p>
<br><br>

    <div class = "text-center">
<div>
<?= $this->Html->link('Back to Dashboard', ['action' => 'index', 'controller' => 'Myaccount', $loggedInUser->id], ['class' => 'btn btn-primary']) ?>
</div>
<br>
</div>


</div>
    <!-- Banner -->
    

            
                        
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'bootstrap.js']) ?>
    
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
