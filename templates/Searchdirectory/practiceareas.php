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
    <title>Search - Global Law Directory</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    <div class="container my-5">
    <h3 class="text-center mb-4">Select a Country</h3>
    <div class=" text-center mb-4">
        <?php foreach (range('A', 'Z') as $letter): ?>
            <a href="#<?= $letter ?>" class="btn btn-outline-primary btn-sm mx-1"><?= $letter ?></a>
        <?php endforeach; ?>
    </div>

    <hr>

    <?php foreach ($groupedPracticeAreas as $letter => $practiceAreas): ?>
        <div id="<?= $letter ?>" class="country-section mb-5 bg-light p-3">
            <h3 class="text-primary"><?= $letter ?></h3>
            <div class="row">
                <?php foreach ($practiceAreas as $practicearea): ?>
                    <div class="col-md-3 col-sm-6 mb-3">
                        <a href="<?= $this->Url->build(['action' => 'practiceareasByCountry', $practicearea->sno]) ?>" class="btn btn-outline-secondary btn-block country-item">
                            <?= h($practicearea->practice_area_title) ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>
</body>
</html>