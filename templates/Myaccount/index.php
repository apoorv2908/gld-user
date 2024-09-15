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
    <title>My Dashboard - Global Law Directory</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/privacy.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">MY ACCOUNT </span></h1>
        </div>
      </div>
    </div>
    <!-- Content Section -->
    <div class="m-3 mb-5">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-6 shadow p-3">

                <div class="d-flex justify-content-start cl-2 h5 mb-3">
                    ACCOUNT ALERTS
                </div>
<li class = "px-4 mt-4">
                <?= $this->Html->link("Submit Your Listing", ['action' => 'index', 'controller' => 'Selectdirectory'], ['style' => 'color: red; font-weight: bold;']) ?>
</li>
                        <div class="d-flex justify-content-start cl-2 h5 mb-3 mt-4">
                    LOGIN DETAILS
                </div>
                <div class="mt-4 px-4">
                    <table class = "table">
<tr>
<th class = "cl-2">Name:</th>
<td> <?= h($loggedInUser->firstname) ?>  <?= h($loggedInUser->lastname) ?></td>
</tr>

<tr>
<th class = "cl-2">Email:</th>
<td> <?= h($loggedInUser->email) ?></td>
</tr>

<tr>
<th class = "cl-2">User ID:</th>
<td>  <?= h($loggedInUser->id) ?>
</td>
</tr>


</table>
                                  
             <br>      
                </div>
            </div>



            <div class="col-md-3">
            <div class="card">
                    <div class="card-header sam text-white">
                        <h5> SUBMIT LISTING</h5>
                    </div>
                    <div class="card-body">
                    <div class="m-3">
    <form>
        <?= $this->Html->link('Directory of Lawyers', ['controller' => 'Listings', 'action' => 'directoryOfLawyers' ], ['class' => 'btn btn-primary btn-block']) ?>
        <?= $this->Html->link('Directory of Law Firms', ['controller' => 'Listings', 'action' => 'directoryOfLawfirms'], ['class' => 'btn btn-primary btn-block']) ?>
    </form>
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
