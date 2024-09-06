<section class="why_section layout_padding">
        <div class="heading_container heading_center">
            <h4>
                POPULAR PRACTICE AREAS
            </h4>
        </div>
        <div class="row text-center mt-4">
    <?php foreach ($practiceareas2 as $practicearea): ?>
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="practice-area-box mx-5 shadow rounded">
                <div class="detail-box">
                    <h6 class="practice-area-title text-grey">
                        <?= $this->Html->link(
                            h($practicearea->practice_area_title), 
                            ['controller' => 'Searchdirectory', 'action' => 'practiceareasByCountry', $practicearea->sno]
                        ) ?>
                    </h6>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</section>
<style>
    .why_section {
        padding: 60px 0;
        background-color: #f8f9fa; /* Light background */
    }
    .section-title {
        font-size: 2rem;
        font-weight: bold;
        margin-bottom: 40px;
        text-transform: uppercase;
        color: #343a40;
    }
    .practice-area-box {
        transition: all 0.3s ease;
        background-color: #fff;
    }
    .practice-area-box:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    }
    .icon-box {
        margin-bottom: 15px;
    }
    .practice-area-title {
        font-size: "small"
    }
    .detail-box {
        padding: 10px;
    }
    @media (max-width: 767px) {
        .practice-area-title {
            font-size: 1.1rem;
        }
    }
</style>
