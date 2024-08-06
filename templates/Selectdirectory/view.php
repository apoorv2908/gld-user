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
    <section class="slider_section ">
        <div class="slider_bg_box">
            <?= $this->Html->image('about.jpg') ?>            
        </div>
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-12 ">
                                <div class = "d-flex justify-content-center">
                                    <h1 class = "text-white text-bold">
                                        SELECT A DIRECTORY
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Account</h5>
                    </div>
                    <div class="card-body">
                        <form>
                            <button class="btn btn-primary btn-block">Edit Account Information</button>
                            <button class="btn btn-primary btn-block">Submit Directory Listing</button>
                            <button class="btn btn-primary btn-block">Submit Law Article</button>
                            <button class="btn btn-primary btn-block">View/Edit Law Articles</button>
                            <button class="btn btn-primary btn-block">View Transactions</button>
                            <button class="btn btn-primary btn-block">Change Password</button>
                            <button class="btn btn-primary btn-block">Logout</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Articles Section -->
            <div class="col-md-9">
            <h1>Add Listing - Directory of Lawyers</h1>

<?= $this->Form->create(null, ['type' => 'file']) ?>
<fieldset>
    <legend><?= __('Add Listing') ?></legend>

    <?= $this->Form->control('first_name', ['label' => 'First Name', 'required' => true]) ?>
    <?= $this->Form->control('last_name', ['label' => 'Last Name', 'required' => true]) ?>
    <?= $this->Form->control('country', ['label' => 'Country', 'required' => true]) ?>
    <?= $this->Form->control('state', ['label' => 'State', 'required' => true]) ?>
    <?= $this->Form->control('city', ['label' => 'City', 'required' => true]) ?>
    <?= $this->Form->control('pin_code', ['label' => 'Pin Code', 'required' => true]) ?>
    <?= $this->Form->control('street_address_line1', ['label' => 'Street Address Line 1', 'required' => true]) ?>
    <?= $this->Form->control('street_address_line2', ['label' => 'Street Address Line 2', 'required' => false]) ?>
    <?= $this->Form->control('email', ['label' => 'Email', 'required' => true]) ?>
    <?= $this->Form->control('website', ['label' => 'Website', 'required' => false]) ?>
    <?= $this->Form->control('phone', ['label' => 'Phone', 'required' => false, 'placeholder' => 'Include country code']) ?>
    <?= $this->Form->control('mobile', ['label' => 'Mobile', 'required' => true, 'placeholder' => 'Include country code']) ?>
    <?= $this->Form->control('image_logo', ['type' => 'file', 'label' => 'Upload Image/Logo', 'required' => true]) ?>
    <?= $this->Form->control('professional_qualifications', ['label' => 'Professional Qualifications', 'type' => 'textarea', 'required' => false]) ?>
    <?= $this->Form->control('affiliating', ['label' => 'Affiliating (State Bar Council / Bar Association)', 'required' => false]) ?>
    <?= $this->Form->control('registration_number', ['label' => 'Registration/Affiliation Number', 'required' => false]) ?>
    
    <?= $this->Form->control('practicing_since', [
        'label' => 'Practicing Since',
        'type' => 'select',
        'options' => array_combine(range(date('Y'), 1900), range(date('Y'), 1900)),
        'empty' => true
    ]) ?>
    
    <div id="courts-of-practice">
        <h3>Court(s) of Practice</h3>
        <div class="court-practice-row">
            <?= $this->Form->control('courts_of_practice[]', ['label' => 'Court', 'required' => false]) ?>
            <?= $this->Form->control('courts_of_practice_place[]', ['label' => 'Place', 'required' => false]) ?>
        </div>
    </div>
    <button type="button" id="add-court-practice">Add More</button>
    
    <h3>Practice Area</h3>
    <?php foreach ($practiceAreas as $practiceArea): ?>
        <div>
            <?= $this->Form->checkbox('practice_areas[]', ['value' => $practiceArea->id, 'hiddenField' => false]) ?>
            <?= $this->Form->label('practice_areas[]', $practiceArea->title) ?>
        </div>
    <?php endforeach; ?>
    
    <?= $this->Form->control('complete_detail', ['label' => 'Complete Detail', 'type' => 'textarea', 'required' => true]) ?>
    
    <?= $this->Form->control('free_initial_consultation', [
        'label' => 'Whether FREE INITIAL CONSULTATION is Provided',
        'type' => 'select',
        'options' => ['yes' => 'Yes', 'no' => 'No'],
        'required' => true
    ]) ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

<script>
    document.getElementById('add-court-practice').addEventListener('click', function() {
        var div = document.createElement('div');
        div.className = 'court-practice-row';
        div.innerHTML = `
            <?= $this->Form->control('courts_of_practice[]', ['label' => 'Court', 'required' => false]) ?>
            <?= $this->Form->control('courts_of_practice_place[]', ['label' => 'Place', 'required' => false]) ?>
        `;
        document.getElementById('courts-of-practice').appendChild(div);
    });
</script>

            </div>
        </div>
    </div>
    <!-- Footer -->
    <div class="cpy_">
        <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a></p>
    </div>
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
</body>
</html>
