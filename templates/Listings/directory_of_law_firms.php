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

    <div class="section mt-0 ">
         <div class=" py-5 breadcrumbs-wrap apt-60 apb-60 apt-40-sm apb-40-sm" style="background: linear-gradient(rgba(51, 104, 198,0.3),rgba(51, 104, 198,0.8)),url(../img/about.jpg) center/cover no-repeat; ">
      <div class="text-center">
        <div class="breadcrumbs">
          <h1 class="font36 text-white font30-sm fw-bold text-uppercase"> <span id="Headername1">Submit Your Listing
          </span></h1>
        </div>
      </div>
    </div>
    
    <!-- Content Section -->
    <div class="m-3">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>

            <!-- Articles Section -->
            <div class="col-md-9 shadow">
            <div class="cl-2 d-flex text-uppercase justify-content-center h5 p-2">
            Submit a Listing - Directory of Law Firms

                </div>
                <hr>

                <div class="px-5 py-3">
                    <?= $this->Form->create(null, ['type' => 'file']) ?>
                    <fieldset>
                        <div class="bgcc text-white h5 p-2 mt-2">
                            Personal Information
                        </div>
                        
                        <?= $this->Form->control('law_firm', [
                            'label' => [
                                'text' => 'Name of Law Firm <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Name of Law Firm'
                        ]) ?>

                        <hr class="mt-5 mb-3 text-danger">

                        <div class = "text-primary">Name of Contact Person</div>

                        <?= $this->Form->control('firstname', [
                            'label' => [
                                'text' => 'First Name <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'

                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Contact Person Firstname'

                        ]) ?>


                        <?= $this->Form->control('lastname', [
                            'label' => [
                                'text' => 'Last Name <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Contact Person Lastname'

                        ]) ?>

                        <?= $this->Form->control('designation', [
                            'label' => [
                                'text' => 'Designation <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Designation'
                        ]) ?>

<hr class="mt-5 mb-3 text-danger">


                        <?= $this->Form->control('country', [
                            'type' => 'select',
                            'options' => $countries,
                            'empty' => '--Select Country--',
                            'label' =>  [
                                'text' => 'Country<span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold '
                            ],
                            'class' => 'form-control',
                            'id' => 'country-id'
                        ]) ?>

                        <?= $this->Form->control('state', [
                            'type' => 'select',
                            'empty' => '--Select State--',
                            'label' =>  [
                                'text' => 'State<span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold mt-3'
                            ],
                            'class' => 'form-control',
                            'id' => 'state-id'
                        ]) ?>

                        <?= $this->Form->control('city', [
                            'type' => 'select',
                            'empty' => '--Select City--',
                            'label' =>  [
                                'text' => 'City<span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold mt-3'
                            ],
                            'class' => 'form-control',
                            'id' => 'city-id'
                        ]) ?>

<?= $this->Form->control('pincode', [
                            'label' => [
                                'text' => 'Pincode<span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold mt-3'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Enter Pin/Zip Code'
                        ]) ?>

                        <hr class="mt-5 mb-3 text-danger">

                        <div class = "text-success fw-bold">Write only street address, do not write city street or country</div>

                        <?= $this->Form->control('street_address', [
                            'label' => [
                                'text' => 'Street Address <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Enter Street Address'
                        ]) ?>

                        <hr class="mt-5 mb-3 text-danger">

                        <div class = "text-success fw-bold">Please provide email ID on which you wish to receive online queries from the prospective clients.</div>


                        <?= $this->Form->control('email', [
                            'label' => [
                                'text' => 'Email <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'readonly' => true,
                            'value' => $user->email,

                        ]) ?>

                        <hr class="mt-5 mb-3 text-danger">

                        <div class = "text-success fw-bold">Please provide only the root URL and not the URL of internal pages of your website.
                        </div>


                        <?= $this->Form->control('website', [
                            'label' => [
                                'text' => 'Website',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => false,
                            'class' => 'form-control',
                            'placeholder' => 'Website'
                        ]) ?>
                        <?= $this->Form->control('phone', [
                            'label' => [
                                'text' => 'Phone (s)',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => false,
                            'class' => 'form-control',
                            'placeholder' => 'Landline/Telephone Number'
                        ]) ?>
                        <?= $this->Form->control('mobile', [
                            'label' => [
                                'text' => 'Mobile (s) <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Mobile Number'
                        ]) ?>
                        <?= $this->Form->control('image', [
                            'label' => [
                                'text' => 'Upload Image/Logo <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'type' => 'file',
                            'required' => true,
                            'class' => 'form-control'
                        ]) ?>

                        <div class="bgcc text-white h5 p-2 mt-5 mb-3">
                            Professional Information
                        </div>

                       
                        <?= $this->Form->control('estd_year', [
                            'label' => [
                                'text' => 'Year of Establishment',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'type' => 'select',
                            'options' => array_combine(range(date('Y'), 1900), range(date('Y'), 1900)),
                            'empty' => '--Select--',
                            'class' => 'form-control'
                        ]) ?>

<hr class="mt-5 mb-3 text-danger">


                        <div id="courtOfPracticeContainer">
        <div class="court-row">
        <label>Court(s) of Practice</label>
        <div class = "d-flex justify-content-evenly">
            <div class="form-group ">
                <label>Court</label>
                <?= $this->Form->input('court_of_practice[]', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group mx-4">
                <label>Place</label>
                <?= $this->Form->input('place[]', ['class' => 'form-control']) ?>
            </div>
        </div>
                        </div>
    </div>
    <button type="button" id="addCourtRow" class="btn btn-secondary">Add More Courts</button>

    <div class="bgcc text-white h5 p-2 mt-4">
                            Please Select Practice Area
                        </div>
                        <div class = "text-success fw-bold">In case of Premium Listing, maximum 50 Practice Areas will be displayed</div>
    <div class = "text-success fw-bold mb-3">In case of Basic Listing, maximum 05 Practice Areas will be displayed</div>

    <?php foreach ($practicearea as $id => $name): ?>
    <div class="form-check">
        <?= $this->Form->checkbox('practice_area[]', [
            'value' => $id,
            'class' => 'form-check-input'
        ]) ?>
        <?= $this->Form->label('practice_area[]', $name, ['class' => 'form-check-label']) ?>
    </div>
<?php endforeach; ?>




                        <div class="bgcc text-white h5 p-2 mt-5 mb-3">
                            Brief Profile
                        </div>
<div class = "text-success mb-3">
                        Provide a detailed write up which may include your areas of specialisation, experience, important successful litigations, important clientele, office hours and such other details which may be useful to your prospective clients who look up your Listing page .

Hyperlinks are not allowed. In case hyperlinks are found, the listing will be suspended from display.
        </div>
                        <?= $this->Form->control('brief_detail', [
                            'label' => [
                                'text' => 'Brief Profile <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'type' => 'textarea',
                            'required' => true,
                            'class' => 'form-control'
                        ]) ?>



<?= $this->Form->control('free_consultation', [
                            'label' => [
                                'text' => 'Whether <b> FREE INITIAL CONSULATION </b> provided <span style="color: red; font-size: 20px; ">*</span>',
                                'escape' => false,
                                'class' => 'fw-bold'
                            ],
                            'required' => true,
                            'class' => 'form-control',
                            'placeholder' => 'Yes/No'
                        ]) ?>


                        <div class="mt-4 text-center mb-4">
                            <?= $this->Form->button('Submit', ['class' => 'btn btn-primary']) ?>
                        </div>
                    </fieldset>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- JavaScript -->
    <?= $this->Html->script(['jquery-3.4.1.min.js', 'bootstrap.js']) ?>
    
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
<script>
$(document).ready(function() {
    $('#addCourtRow').click(function() {
        var newRow = `<div class="court-row">
             <div class = "d-flex justify-content-evenly">
            <div class="form-group ">
                <label>Court</label>
                <?= $this->Form->input('court_of_practice[]', ['class' => 'form-control']) ?>
            </div>
            <div class="form-group mx-4">
                <label>Place</label>
                <?= $this->Form->input('place[]', ['class' => 'form-control']) ?>
            </div>
        </div>
                        </div>
        </div>`;
        $('#courtOfPracticeContainer').append(newRow);
    });
});
</script>
</body>

</html>
