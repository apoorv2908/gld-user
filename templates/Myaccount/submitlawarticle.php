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
    <title>Submit Law Article - Global Law Directory</title>
    <!-- bootstrap core css -->
    <?= $this->Html->css(['bootstrap.css', 'font-awesome.min.css', 'style.css', 'responsive.css']) ?>

    <!-- Summernote CSS -->
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.css') ?>
</head>
<body>
    <!-- Header -->
    <?= $this->element('header') ?>
    <!-- Banner -->
    
    <!-- Content Section -->
    <div class="m-3 mb-5 ">
        <div class="row">
            <!-- Filter Section -->
            <?= $this->element('user-dashboard') ?>
            <!-- Articles Section -->
            <div class="col-md-9 shadow ">

            <div class="cl-2 d-flex text-uppercase justify-content-center h5 p-2">
            Submit a Law Article
                </div>
                <hr>
               

                <div class="p-4">
                    <div class = "px-5">

                    <?= $this->Form->create(null) ?>
                    <div id="flash-message" class="toast-container position-fixed top-0 end-0 p-3" style="z-index: 1050;">
    <?= $this->Flash->render() ?>
</div>

                    <div class="col-12">
                        <?= $this->Form->control('article_title', [
                            'class' => 'form-control', 
                            'label' => ['class' => 'form-label', 'text' => 'Article Title*'],
                            'placeholder' => "Article Title"
                        ]) ?>
                    </div>

                    <div class="col-12 mt-3">
                        <?= $this->Form->control('category', [
                            'type' => 'select',
                            'options' => ['' => '--select a category--'] + collection($practiceareas)->combine('sno', 'practice_area_title')->toArray(), // Adjust 'sno' and 'practice_area_title' to your actual column names
                            'class' => 'form-control mb-4', 
                            'label' => ['class' => 'form-label', 'text' => 'Article Category*']
                        ]) ?>
                    </div>
                        </div>
                    <br>

                    <div class="bgcc mt-2 p-2 mb-4 text-white">
                     Article
                </div>
                    <div class="col-12">
                        <?= $this->Form->control('article_body', [
                            'type' => 'textarea',
                            'class' => 'form-control summernote', 
                            'label' => false
                        ]) ?>
                    </div>

                    <hr>
                    <div class="col-12">
                        <?= $this->Form->control('added_on', [
                            'type' => 'date',
                            'class' => 'form-control', 
                            'label' => ['class' => 'form-label', 'text' => 'Added On'],
                            'value' => $currentDate,
                            'readonly' => true
                        ]) ?>
                    </div><br>
                    <div class="col-12">
                        <?= $this->Form->control('added_by', [
                            'class' => 'form-control', 
                            'label' => ['class' => 'form-label', 'text' => 'Added By'],
                            'value' => $user->firstname . ' ' . $user->lastname,
                            'readonly' => true
                        ]) ?>
                    </div>
                   
                    
                    <div class="d-flex justify-content-end mt-4">
                        <div>
                            <?= $this->Form->button(__('Post'), ['class' => 'btn btn-primary']) ?>
                        </div>
                        <div class="mx-3">
                            <?= $this->Form->button(__('Reset'), ['type' => 'reset', 'class' => 'btn btn-secondary']) ?>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
    

    <?= $this->element('footer') ?>

    <?= $this->Html->script(['jquery-3.4.1.min.js', 'popper.min.js', 'bootstrap.js', 'custom.js']) ?>
    <!-- Summernote JS -->
    <?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js') ?>

    <!-- Initialize Summernote -->
    <script>
        $(document).ready(function() {
    $('.summernote').summernote({
        height: 300, // Set editor height
        minHeight: null, // Set minimum height of editor
        maxHeight: null, // Set maximum height of editor
        focus: false, // Set focus to editable area after initializing summernote
        toolbar: [
            // Specify only the toolbar options you want to include
            ['style', ['style']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link']], // Remove 'picture' (image) and 'video'
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
});

    </script>

<script>
    // Automatically hide the flash message after 4 seconds
    setTimeout(function() {
        var flashMessage = document.getElementById('flash-message');
        if (flashMessage) {
            flashMessage.style.display = 'none';
        }
    }, 4000);
</script>

</body>
</html>
