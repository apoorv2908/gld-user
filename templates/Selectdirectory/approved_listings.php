<div class="m-3">
        <div class="row">
        <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5>Manage Account</h5>
                    </div>
                    <div class="card-body">

                    <div class = "bg-white shadow">

                    <div class="recent-listings">
    <?php foreach ($listingDirectoryOfLawFirm as $listingDirectoryOfLawFirm): ?>
        <div class="listing-item">
            <div class="listing-image">
                <img src="<?= $this->Url->image($listingDirectoryOfLawFirm->image_logo) ?>" alt="<?= h($listingDirectoryOfLawFirm->law_firm_name) ?>">
            </div>
            <div class="listing-info">
                <h3>
                    <?= $this->Html->link(h($listingDirectoryOfLawFirm->law_firm_name), ['action' => 'view', $listingDirectoryOfLawFirm->id]) ?>
                </h3>
                <p><?= h($listingDirectoryOfLawFirm->city) ?>, <?= h($listingDirectoryOfLawFirm->state) ?></p>
                <p><?= h($listingDirectoryOfLawFirm->country) ?></p>
            </div>
            <div class="listing-type">
                <p>Law Firm</p>
                <?= $this->Html->link('View Listing', ['action' => 'view', $listingDirectoryOfLawFirm->id], ['class' => 'view-listing-button']) ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>




                    </div>
                        
                    </div>
                </div>

            </div>
            <div class="col-md-6">

                
            </div>



           

            </div>
        </div>
    </div>
