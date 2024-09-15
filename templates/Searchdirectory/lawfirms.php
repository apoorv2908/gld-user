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
    <title>Find Law Firms</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/map.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div>
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">Directory of Law Firms</span></h1>
        </div>

      </div>
      <p class = "text-white mx-5">
      Law Firms are professional entities formed by one or more lawyers in form of a partnership or a corporate entity, engaged in providing legal advice to clients and representing them before any court of law, tribunal, forum or any other judicial authority. At Global Law Directories, the Directory of Law Firms contains the listings of Law Firms from across the globe, which the prospective clients can search or browse by location and the Practice Areas.    </p>

    </div>
    <div class="container my-4">
        <h5 class="text-center mb-3 cl-2 fw-bold" >Directory of Law Firms : Find a Law Firm by Location</h5>
        <hr>
    <h2 class="text-center mb-4">Select a Country</h2>
    <div class=" text-center mb-4">
        <?php foreach (range('A', 'Z') as $letter): ?>
            <a href="#<?= $letter ?>" class="btn btn-outline-primary btn-sm mx-1"><?= $letter ?></a>
        <?php endforeach; ?>
    </div>

    <hr>

    <?php foreach ($groupedCountries as $letter => $countries): ?>
        <div id="<?= $letter ?>" class="country-section mb-5 bg-light p-3">
            <h3 class="text-primary"><?= $letter ?></h3>
            <div class="row">
                <?php foreach ($countries as $country): ?>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="<?= $this->Url->build(['action' => 'lawfirmsByCountry', $country->id]) ?>" class="btn btn-outline-secondary btn-block country-item">
                            <?= h($country->name) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>