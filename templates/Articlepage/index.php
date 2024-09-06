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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" integrity="sha384-4LISF5TTJX/fLmGSxO53rV4miRxdg84mZsxmO8Rx5jGtp/LbrixFETvWa5a6sESd" crossorigin="anonymous">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
   </head>
   <body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <?= $this->element('banner-2') ?>


    <!-- Content Section -->
    <div class="m-3">

        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Filter</h5>
                    </div>
                    <div class="card-body">
                        <?= $this->Form->create(null, ['type' => 'get']) ?>
                        <div class="form-group">
                            <label for="category">Select a Practice Area</label>
                            <?= $this->Form->select('category', $practiceareas, ['empty' => 'All Categories', 'class' => 'form-control', 'id' => 'category']) ?>
                        </div>
                        <?= $this->Form->submit('Apply Filter', ['class' => 'btn btn-primary btn-block mt-3']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>

            <!-- Articles Section -->
            <div class="col-md-9">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>Found Results</h5>
                    <div>
                        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'd-inline-block']) ?>
                        <label for="entries">Show</label>
                        <?= $this->Form->select('entries', [10 => '10', 20 => '20', 50 => '50'], ['default' => 20, 'class' => 'form-control d-inline-block', 'id' => 'entries', 'style' => 'width: auto;']) ?>
                        <span>entries</span>
                        <?= $this->Form->end() ?>
                    </div>
                    <div>
                        <?= $this->Form->create(null, ['type' => 'get', 'class' => 'd-inline-block']) ?>
                        <?= $this->Form->text('search', ['placeholder' => 'Search', 'class' => 'form-control']) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
                <hr>

                <?php foreach ($lawarticles as $article): ?>
                <div class="article bg-light mt-3 p-2 shadow" style="border-radius: 10px;">
                    <h3 class="text-primary">
                        <?= $this->Html->link($article->article_title, ['controller' => 'Articlepage', 'action' => 'view', $article->id]) ?>
                    </h3>
                    <hr>
                    <p class="text-secondary">
                        <i class="bi bi-person-fill"></i> Added By: <?= h($article->added_by) ?><span class ="mx-3"></span>
                        <i class="bi bi-tags-fill "></i> Category: <?= h($article->category) ?><span class ="mx-3"></span>
                        <i class="bi bi-calendar "></i> Added On: <?= h($article->added_on) ?><span class ="mx-3"></span>
                        <i class="bi bi-eye-fill"></i> Views: <?= h($article->views) ?><span class ="mx-3"></span>
                    </p>
                    <p> <?php 
            $words = explode(' ', $article->article_body);
            $excerpt = implode(' ', array_slice($words, 0, 40)) . '...';
            ?>
            <?= $excerpt ?>
            <?= $this->Html->link('Read More', ['action' => 'viewLawArticle', $article->id], ['class' => 'read-more-link']) ?></p>
                </div>
                <?php endforeach; ?>

                <!-- Pagination -->
                
            </div>
        </div>
                </div>
    <!-- Footer -->
    <?= $this->element('footer') ?>

</body></html>
