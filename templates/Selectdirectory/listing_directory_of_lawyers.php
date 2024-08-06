
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
            <?= $this->element('user-dashboard') ?>

            <!-- Articles Section -->
            <div class="col-md-9 shadow">
                <div class = "cc d-flex justify-content-center h3 mt-1 text-uppercase">
                Submit a Listing - Directory of Lawyers
</div>
<hr>

<div class = "bgcc text-white h5 p-2 m3-5">
Personal Information
</div>
<div class = "px-5 py-3">
<?= $this->Form->create(null, ['type' => 'file']) ?>
<fieldset>
    <legend><?= __('Add Lawyer') ?></legend>
    
    <?= $this->Form->control('first_name', [
                        'label' => [
                            'text' => 'First Name <span style="color: red; font-size: 20px; ">*</span>',
                            'escape' => false,
                            'class' => 'fw-bold text-grey'
                        ],
                        'required' => true,
                        'class' => 'form-control',
                        'value' => $user->firstname,
                        'readonly' => true
                    ]) ?>
    <?= $this->Form->control('last_name', [
                        'label' => [
                            'text' => 'Last Name <span style="color: red; font-size: 20px; ">*</span>',
                            'escape' => false,
                            'class' => 'fw-bold'
                        ],
                        'required' => true,
                        'class' => 'form-control',
                        'value' => $user->lastname,
                        'readonly' => true
                    ]) ?>


<?= $this->Form->control('professional_qualifications', [
        'label' => [
            'text' => 'Professional Qualifications',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'type' => 'textarea',
        'required' => false,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('affiliating', [
        'label' => [
            'text' => 'Affiliating (State Bar Council / Bar Association)',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => false,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('registration_number', [
        'label' => [
            'text' => 'Registration/Affiliation Number',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => false,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('practicing_since', [
        'label' => [
            'text' => 'Practicing Since',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'type' => 'select',
        'options' => array_combine(range(date('Y'), 1900), range(date('Y'), 1900)),
        'empty' => true,
        'class' => 'form-control'
    ]) ?>








<?= $this->Form->control('designation', [
                        'label' => [
                            'text' => 'Designation <span style="color: red; font-size: 20px; ">*</span>',
                            'escape' => false,
                            'class' => 'fw-bold'
                        ],
                        'required' => true,
                        'class' => 'form-control',
                    ]) ?>
    <?= $this->Form->control('country', [
        'label' => [
            'text' => 'Country <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('state', [
        'label' => [
            'text' => 'State <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('city', [
        'label' => [
            'text' => 'City <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('pin_code', [
        'label' => [
            'text' => 'Pin Code <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('street_address_line1', [
        'label' => [
            'text' => 'Street Address Line 1 <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('street_address_line2', [
        'label' => [
            'text' => 'Street Address Line 2',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => false,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('email', [
                        'label' => [
                            'text' => 'Email <span style="color: red; font-size: 20px; ">*</span>',
                            'escape' => false,
                            'class' => 'fw-bold'
                        ],
                        'required' => true,
                        'class' => 'form-control',
                        'value' => $user->email,
                        'readonly' => true
                    ]) ?>
    <?= $this->Form->control('website', [
        'label' => [
            'text' => 'Website',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => false,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('phone', [
        'label' => [
            'text' => 'Phone (Include country code)',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => false,
        'class' => 'form-control',
        'placeholder' => 'Include country code'
    ]) ?>
    <?= $this->Form->control('mobile', [
        'label' => [
            'text' => 'Mobile (Include country code) <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'required' => true,
        'class' => 'form-control',
        'placeholder' => 'Include country code'
    ]) ?>
    <?= $this->Form->control('image_logo', [
        'label' => [
            'text' => 'Upload Image/Logo <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'type' => 'file',
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    
    <?= $this->Form->control('year_of_establishment', [
        'label' => [
            'text' => 'Year of Establishment',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'type' => 'select',
        'options' => array_combine(range(date('Y'), 1900), range(date('Y'), 1900)),
        'empty' => true,
        'class' => 'form-control'
    ]) ?>
    <div id="courts-of-practice">
        <h3>Court(s) of Practice</h3>
        <div class="court-practice-row">
            <?= $this->Form->control('courts_of_practice[]', [
                'label' => [
                    'text' => 'Court',
                    'escape' => false,
                    'class' => 'fw-bold'
                ],
                'required' => false,
                'class' => 'form-control'
            ]) ?>
            <?= $this->Form->control('courts_of_practice_place[]', [
                'label' => [
                    'text' => 'Place',
                    'escape' => false,
                    'class' => 'fw-bold'
                ],
                'required' => false,
                'class' => 'form-control'
            ]) ?>
        </div>
    </div>
    <button type="button" id="add-court-practice">Add More</button>


    <br>

    <label>Practice Areas</label><br>
    <?php foreach ($practicearea as $area): ?>
        <?= $this->Form->checkbox('practice_areas[]', ['value' => $area->practice_area_title]) ?>
        <?= $this->Form->label('practice_areas[]', $area->practice_area_title) ?><br>
    <?php endforeach; ?>
   
    <?= $this->Form->control('complete_detail', [
        'label' => [
            'text' => 'Brief Profile <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        'type' => 'textarea',
        'required' => true,
        'class' => 'form-control'
    ]) ?>
    <?= $this->Form->control('free_initial_consultation', [
        'label' => [
            'text' => 'Whether FREE INITIAL CONSULTATION is Provided <span style="color: red; font-size: 20px; ">*</span>',
            'escape' => false,
            'class' => 'fw-bold'
        ],
        '
type' => 'select',
        'options' => ['yes' => 'Yes', 'no' => 'No'],
        'required' => true,
        'class' => 'form-control'
    ]) ?>
</fieldset>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
<?= $this->Form->end() ?>

<script>
document.getElementById('add-court-practice').addEventListener('click', function() {
    var container = document.getElementById('courts-of-practice');
    var row = document.createElement('div');
    row.className = 'court-practice-row';

    var courtInput = document.createElement('input');
    courtInput.type = 'text';
    courtInput.name = 'courts_of_practice[]';
    courtInput.className = 'form-control';
    courtInput.placeholder = 'Court';

    var placeInput = document.createElement('input');
    placeInput.type = 'text';
    placeInput.name = 'courts_of_practice_place[]';
    placeInput.className = 'form-control';
    placeInput.placeholder = 'Place';

    row.appendChild(courtInput);
    row.appendChild(placeInput);

    container.appendChild(row);
});
</script>