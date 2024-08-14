
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


<div class = "px-5 py-3">
<?= $this->Form->create(null, ['type' => 'file']) ?>
<fieldset>
    <div class = "bgcc text-white h5 p-2 mt-2">
Personal Information
</div>
    
    <?= $this->Form->control('first_name', [
                        'label' => [
                            'text' => 'First Name <span style="color: red; font-size: 20px; ">*</span>',
                            'escape' => false,
                            'class' => 'fw-bold'
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

<hr class = "mt-5 mb-5 text-danger">


    <?= $this->Form->control('country', [
        'type' => 'select',
        'options' => $countries,
        'empty' => '--Select Country--',
        'label' => 'Country',
        'class' => 'form-control',
        'id' => 'country-id'
    ]) ?>

    <?= $this->Form->control('state', [
        'type' => 'select',
        'empty' => '--Select State--',
        'label' => 'State',
        'class' => 'form-control',
        'id' => 'state-id'
    ]) ?>

    <?= $this->Form->control('city', [
        'type' => 'select',
        'empty' => '--Select City--',
        'label' => 'City',
        'class' => 'form-control',
        'id' => 'city-id'
    ]) ?>
    <hr class = "mt-5 mb-5 text-danger">

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

<hr class = "mt-5 mb-5 text-danger">

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


<hr class = "mt-5 mb-5 text-danger">

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
    

    <div class = "bgcc text-white h5 p-2 mt-5 mb-3">
Professional Information
</div>

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


    <div class = "bgcc text-white h5 p-2 mt-5 mb-3">
        Please Select your Practice Areas
</div>

    <label>Practice Areas</label><br>
    <?php foreach ($practicearea as $area): ?>
        <?= $this->Form->checkbox('practice_areas[]', ['value' => $area->practice_area_title]) ?>
        <?= $this->Form->label('practice_areas[]', $area->practice_area_title) ?><br>
    <?php endforeach; ?>
   
    <div class = "bgcc text-white h5 p-2 mt-5 mb-3">
Brief Profile
</div>
    
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('#country-id').change(function() {
        var countryId = $(this).val();
        if (countryId) {
            $.ajax({
                url: '<?= $this->Url->build(['controller' => 'Selectdirectory', 'action' => 'getstates']) ?>/' + countryId,
                type: 'GET',
                dataType: 'json', 
                success: function(data) {
                    $('#state-id').html('<option value="">--Select State--</option>');
                    $.each(data, function(key, value) {
                        $('#state-id').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#state-id').html('<option value="">--Select State--</option>');
            $('#city-id').html('<option value="">--Select City--</option>');
        }
    });

    $('#state-id').change(function() {
        var stateId = $(this).val();
        if (stateId) {
            $.ajax({
                url: '<?= $this->Url->build(['controller' => 'Selectdirectory', 'action' => 'getCities']) ?>/' + stateId,
                type: 'GET',
                dataType: 'json', // Expect JSON response
                success: function(data) {
                    $('#city-id').html('<option value="">--Select City--</option>');
                    $.each(data, function(key, value) {
                        $('#city-id').append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        } else {
            $('#city-id').html('<option value="">--Select City--</option>');
        }
    });
});
</script>