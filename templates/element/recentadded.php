<div class="m-3 bg-grey">
    <div class="row">
        <!-- Recent Listings Section -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>RECENT LISTINGS</h5>
                </div>
                <div class="card-body">
                        <div class="recent-listings">
                            <?php foreach ($approvedListings as $listing): ?>
                                <div class="listing-item">
                                    <div class="listing-image">
                                        <img src="<?= $this->Url->image($listing->image) ?>" alt="<?= h($listing->law_firm) ?>">
                                    </div>
                                    <div class="listing-info">
                                        <h3>
                                            <?= $this->Html->link(h($listing->law_firm), ['action' => 'view', $listing->id]) ?>
                                            <?= $this->Html->link(h($listing->firstname . ' ' . $listing->lastname), ['action' => 'view', $listing->id]) ?>
                                        </h3>
                                        <div class="fs-6"><i class="bi bi-map"></i><?= h($listing->city_name) ?>, <?= h($listing->state_name) ?></div>
                                        <div class="fs-6"><i class="bi bi-geo-alt-fill"></i><?= h($listing->country_name) ?></div>
                                    </div>
                                    <div class="listing-type">
                                        <p><?= h($listing->listing_type) ?></p>
                                        <?= $this->Html->link('View Listing', ['action' => 'view', $listing->id], ['class' => 'view-listing-button']) ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Recent Articles Section -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>RECENT LAW ARTICLES</h5>
                </div>
                <div class="card-body">
                        <div class="recent-listings">
                            <?php foreach ($approvedArticles as $article): ?>
                                <div class="listing-item">
                                    <div class="listing-info">
                                        <h3>
                                            <?= $this->Html->link(h($article->article_title), ['action' => 'view', $article->id]) ?>
                                        </h3>
                                        <div class="fs-6"><i class="bi bi-map"></i><?= h($article->added_on) ?>, <?= h($article->added_by) ?></div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
