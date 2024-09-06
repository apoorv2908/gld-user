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
    <!-- Banner -->
    
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>

            <!-- Articles Section -->
            <div class="col-md-9 shadow">
                <div class="cc d-flex justify-content-center h3 mt-1 text-uppercase">
                    Submit a Listing - Directory of Lawyers
                </div>
                <hr>

                <div class="px-5 py-3">
                    <fieldset>
                        <div class="bgcc text-white h5 p-2 mt-2">
                            Personal Information
                        </div>
                        
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'bootstrap.js']) ?>
    
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</body>

</html>
