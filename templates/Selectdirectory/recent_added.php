
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
<div class="m-3">
        <div class="row">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Account</h5>
                    </div>
                    <div class="card-body">

                    <div class = "bg-white shadow">

                    <div class="recent-listings">
    <?php foreach ($approvedListings as $listing): ?>
        <div class="listing-item">
            <div class="listing-image">
                <img src="<?= $this->Url->image($listing->image_logo) ?>" alt="<?= h($listing->law_firm_name) ?>">
            </div>
            <div class="listing-info">
                <h3>
                    <?= $this->Html->link(h($listing->law_firm_name), ['action' => 'view', $listing->id]) ?>
                </h3>
                <p><?= h($listing->city) ?>, <?= h($listing->state) ?></p>
                <p><?= h($listing->country) ?></p>
            </div>
            <div class="listing-type">
                <p>Law Firm</p>
                <?= $this->Html->link('View Listing', ['action' => 'view', $listing->id], ['class' => 'view-listing-button']) ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>




                    </div>
                        
                    </div>
                </div>

            </div>
            <div class="col-md-6">

                
            </div>



           

            </div>
        </div>
    </div>
    </body>
    </head>