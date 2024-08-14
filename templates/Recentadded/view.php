<?php foreach ($approvedListings as $listing): ?>

<h1><?= h($listing->name_of_law_firm) ?></h1>
<p><strong>First Name:</strong> <?= h($listing->first_name) ?></p>
<p><strong>Last Name:</strong> <?= h($listing->last_name) ?></p>
<p><strong>Country:</strong> <?= h($listing->country) ?></p>
<p><strong>State:</strong> <?= h($listing->state) ?></p>
<p><strong>City:</strong> <?= h($listing->city) ?></p>
<p><strong>Pin Code:</strong> <?= h($listing->pin_code) ?></p>
<p><strong>Street Address Line 1:</strong> <?= h($listing->street_address_line1) ?></p>
<p><strong>Street Address Line 2:</strong> <?= h($listing->street_address_line2) ?></p>
<p><strong>Email:</strong> <?= h($listing->email) ?></p>
<p><strong>Website:</strong> <?= h($listing->website) ?></p>
<p><strong>Phone:</strong> <?= h($listing->phone) ?></p>
<p><strong>Mobile:</strong> <?= h($listing->mobile) ?></p>
<p><strong>Image/Logo:</strong> <img src="<?= $this->Url->image($listing->image_logo) ?>" alt="Logo" width="100"></p>
<p><strong>Year of Establishment:</strong> <?= h($listing->year_of_establishment) ?></p>
<p><strong>Courts of Practice:</strong></p>
<?php endforeach; ?>

<ul>
    <?php
    $courts = json_decode($listing->courts_of_practice, true);
    foreach ($courts as $court):
    ?>
        <li><?= h($court['court']) ?> (<?= h($court['place']) ?>)</li>
    <?php endforeach; ?>
</ul>
<p><strong>Practice Areas:</strong></p>
<ul>
    <?php
    $practiceAreas = explode(',', $listing->practice_areas);
    foreach ($practiceAreas as $area):
    ?>
        <li><?= h($area) ?></li>
    <?php endforeach; ?>
</ul>
<p><strong>Brief Profile:</strong> <?= h($listing->brief_profile) ?></p>
<p><strong>Free Initial Consultation:</strong> <?= h($listing->free_initial_consultation) ?></p>
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $listing->id]) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listing->id)]) ?>
