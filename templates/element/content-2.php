<section class="why_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h3>
                POPULAR PRACTICE AREAS
            </h3>
        </div>
        <div class="row">
            <?php foreach ($practicearea as $practicearea): ?>
                <div class="col-md-3">
                    <div class="box">
                        <div class="detail-box">
                            <h6>
                                <?= h($practicearea->practice_area_title) ?>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>