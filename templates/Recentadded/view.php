<h1><?= h($listingDirectoryOfLawFirm->name_of_law_firm) ?></h1>
<p><strong>First Name:</strong> <?= h($listingDirectoryOfLawFirm->first_name) ?></p>
<p><strong>Last Name:</strong> <?= h($listingDirectoryOfLawFirm->last_name) ?></p>
<p><strong>Country:</strong> <?= h($listingDirectoryOfLawFirm->country) ?></p>
<p><strong>State:</strong> <?= h($listingDirectoryOfLawFirm->state) ?></p>
<p><strong>City:</strong> <?= h($listingDirectoryOfLawFirm->city) ?></p>
<p><strong>Pin Code:</strong> <?= h($listingDirectoryOfLawFirm->pin_code) ?></p>
<p><strong>Street Address Line 1:</strong> <?= h($listingDirectoryOfLawFirm->street_address_line1) ?></p>
<p><strong>Street Address Line 2:</strong> <?= h($listingDirectoryOfLawFirm->street_address_line2) ?></p>
<p><strong>Email:</strong> <?= h($listingDirectoryOfLawFirm->email) ?></p>
<p><strong>Website:</strong> <?= h($listingDirectoryOfLawFirm->website) ?></p>
<p><strong>Phone:</strong> <?= h($listingDirectoryOfLawFirm->phone) ?></p>
<p><strong>Mobile:</strong> <?= h($listingDirectoryOfLawFirm->mobile) ?></p>
<p><strong>Image/Logo:</strong> <img src="<?= $this->Url->image($listingDirectoryOfLawFirm->image_logo) ?>" alt="Logo" width="100"></p>
<p><strong>Year of Establishment:</strong> <?= h($listingDirectoryOfLawFirm->year_of_establishment) ?></p>
<p><strong>Courts of Practice:</strong></p>
<ul>
    <?php
    $courts = json_decode($listingDirectoryOfLawFirm->courts_of_practice, true);
    foreach ($courts as $court):
    ?>
        <li><?= h($court['court']) ?> (<?= h($court['place']) ?>)</li>
    <?php endforeach; ?>
</ul>
<p><strong>Practice Areas:</strong></p>
<ul>
    <?php
    $practiceAreas = explode(',', $listingDirectoryOfLawFirm->practice_areas);
    foreach ($practiceAreas as $area):
    ?>
        <li><?= h($area) ?></li>
    <?php endforeach; ?>
</ul>
<p><strong>Brief Profile:</strong> <?= h($listingDirectoryOfLawFirm->brief_profile) ?></p>
<p><strong>Free Initial Consultation:</strong> <?= h($listingDirectoryOfLawFirm->free_initial_consultation) ?></p>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingDirectoryOfLawFirm->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingDirectoryOfLawFirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingDirectoryOfLawFirm->id)]) ?>
