
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
    <title> My Listings- Global Law Directory</title>
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
            My Listings
                </div>
<hr>
<div class="bgcc mt-2 p-2 text-white">
                    Listings Approved
                </div>


<div class = "p-4">
<?php if (!empty($listings)): ?>
        <?php foreach ($listings as $listing): ?>
            <div class=" bg-light ">
            <p> <i class=" mx-2 bi bi-patch-plus-fill"></i>Submitted on: <span class = "mx-1"><?= h($listing->date_added) ?></p>
      
        </div>
        <hr>

    <div class="listing-item">
                        <div class="listing-image">
                            <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
                        </div>
                        <div class="listing-info">
                        <?php if ($listing->listing_type === 'Lawyer'): ?>
         <h6 class = "cl-2"><?= h($listing->firstname) . ' ' . h($listing->lastname) ?></h6>
      <?php elseif ($listing->listing_type === 'Law Firm'): ?>
         <h6 class = "cl-2"><?= h($listing->law_firm) ?></h6>
      <?php endif; ?>
                            <div ><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480-144 144-408l58-46 278 218 278-218 58 46-336 264Zm0-192L144-600l336-264 336 264-336 264Zm0-258Zm0 166 219-172-219-172-219 172 219 172Z"/></svg><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?></div>
                            <div><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z"/></svg><?= h($listing->country_name) ?></div>
                        </div>
                        <div class="listing-type">
                            <p><?= h($listing->listing_type) ?></p>
                            <?php if ($listing->listing_type === 'Lawyer'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory', 'action' => 'viewLawyerProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php elseif ($listing->listing_type === 'Law Firm'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory','action' => 'viewLawfirmProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php endif; ?>                        </div>
                    </div>
                    <?php endforeach; ?>

<?php else: ?>
    <p>You have no added listings.</p>
<?php endif; ?> 
        
</div>
<div class="bgcc mt-2 p-2 text-white">
                    Listings Pending for Approval
                </div>
                <div class = "p-4">
<?php if (!empty($listings2)): ?>
        <?php foreach ($listings2 as $listing): ?>

            <div class=" bg-light ">
            <p> <i class=" mx-2 bi bi-patch-plus-fill"></i>Submitted on: <span class = "mx-1"><?= h($listing->date_added) ?></p>
        </div>
        <hr>
    <div class="listing-item">
   
                        <div class="listing-image">
                            <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
                        </div>
                        <div class="listing-info">
                        <?php if ($listing->listing_type === 'Lawyer'): ?>
         <h6 class = "cl-2"><?= h($listing->firstname) . ' ' . h($listing->lastname) ?></h6>
      <?php elseif ($listing->listing_type === 'Law Firm'): ?>
         <h6 class = "cl-2"><?= h($listing->law_firm) ?></h6>
      <?php endif; ?>
                            <div ><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480-144 144-408l58-46 278 218 278-218 58 46-336 264Zm0-192L144-600l336-264 336 264-336 264Zm0-258Zm0 166 219-172-219-172-219 172 219 172Z"/></svg><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?></div>
                            <div><svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#000000"><path d="M480.21-480Q510-480 531-501.21t21-51Q552-582 530.79-603t-51-21Q450-624 429-602.79t-21 51Q408-522 429.21-501t51 21ZM480-191q119-107 179.5-197T720-549q0-105-68.5-174T480-792q-103 0-171.5 69T240-549q0 71 60.5 161T480-191Zm0 95Q323.03-227.11 245.51-339.55 168-452 168-549q0-134 89-224.5T479.5-864q133.5 0 223 90.5T792-549q0 97-77 209T480-96Zm0-456Z"/></svg><?= h($listing->country_name) ?></div>
                        </div>
                        <div class="listing-type">
                            <p><?= h($listing->listing_type) ?></p>
                            <?php if ($listing->listing_type === 'Lawyer'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory', 'action' => 'viewLawyerProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php elseif ($listing->listing_type === 'Law Firm'): ?>
        <?= $this->Html->link('View Listing', ['controller' => 'Searchdirectory','action' => 'viewLawfirmProfile', $listing->id], ['class' => 'view-listing-button btn btn-secondary']) ?>
    <?php endif; ?>                        </div>
                    </div>
                    <?php endforeach; ?>

<?php else: ?>
    <p>You have no listings pending for approval.</p>
<?php endif; ?> 
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
