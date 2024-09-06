<section class="slider_section ">
    <div class="slider_bg_box">
        <?= $this->Html->image('map.jpg') ?>
    </div>
    <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1>Find Lawyers & Law Firms</h1>
                                <p class="text-white">
                                    <b>Search <?= h($totalResults) ?> Listings from 246 Countries</b>
                                </p>
                                <div class = "random2">
                                <?= $this->Form->create(null, ['type' => 'get', 'url' => ['action' => 'index'], 'class' => 'input-group flex-nowrap text-black']) ?>
                                    <!-- Dropdown for Practice Area -->
                                    <?= $this->Form->select('practice_area_id', $practiceareas, [
                                        'empty' => 'Select Practice Area',
                                        'class' => 'form-control  '
                                    ]) ?>
                                    <!-- Dropdown for Country -->
                                    <?= $this->Form->select('country_id', $countries, [
                                        'empty' => 'Select Country',
                                        'class' => 'form-control '
                                    ]) ?>
                                    <!-- Submit Button -->
                                    <?= $this->Form->submit('Search', ['class' => 'form-control btn btn-primary rounded ']) ?>
                                <?= $this->Form->end() ?>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
