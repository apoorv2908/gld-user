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
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>
   </head>
   <body>
      <!-- Header -->
      <?= $this->element('header') ?>
      <!-- Banner -->
      <?= $this->element('banner-2') ?>
      <!-- Content Section -->
      <div class="  m-3">
         <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
               <div class="card">
                  <div class="card-header">
                     <h5>Filter</h5>
                  </div>
                  <div class="card-body">
                     <form>

                        <div class="form-group">
                           <label for="category">Select a Category</label>
                           <select id="category" class="form-control">
                              <option value="">All Categories</option>
                              <option value="category1">Category 1</option>
                              <option value="category2">Category 2</option>
                              <option value="category3">Category 3</option>
                           </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Apply Filter</button>
                     </form>
                  </div>
               </div>
            </div>
            <!-- Articles Section -->
            <div class="col-md-9">

               <div class="d-flex justify-content-between align-items-center mb-3">
                  <h5>Found           
                  Results</h5>
                  <div>
                     <label for="entries">Show</label>
                     <select id="entries" class="form-control d-inline-block" style="width: auto;">
                        <option value="10">10</option>
                        <option value="20" selected>20</option>
                        <option value="50">50</option>
                     </select>
                     <span>entries</span>
                  </div>
                  <div>
                     <input type="text" class="form-control" placeholder="Search">
                  </div>
               </div>
               <hr>
               <?php foreach ($lawarticles as $lawarticles): ?>

                <div class="article bg-light mt-3 p-2" style="border-radius: 10px;">

                  <h3 class = "text-primary">              
                  <a href="<?= $this->Url->build(['controller' => 'Articlepage', 'action' => 'view', $lawarticles->id]) ?>">
                <?= h($lawarticles->article_title) ?>
            </a>
                  </h3>
                  <p>Added By:                <?= h($lawarticles->added_by) ?>
                  , Category:                <?= h($lawarticles->category) ?>
                  , Article Id:                <?= h($lawarticles->id) ?>
                  , Added On:                <?= h($lawarticles->added_on) ?>
                  , Views:                <?= h($lawarticles->views) ?>
                  </p>
                  <p>               <?= h($lawarticles->article_body) ?>
                  <a href="#">Read More...</a></p>
               </div>
               <?php endforeach; ?>

            </div>

         </div>
      </div>
      <!-- Footer -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
      </div>
      <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js' ]) ?>
   </body>
</html>
