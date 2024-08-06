<div class="listing-details">
    <div class="listing-logo">
        <img src="<?= h($listingDirectoryOfLawFirm->image_logo) ?>" alt="<?= h($listingDirectoryOfLawFirm->name_of_law_firm) ?>">
    </div>
    <div class="listing-info">
        <h2><?= h($listingDirectoryOfLawFirm->name_of_law_firm) ?></h2>
        <p><?= h($listingDirectoryOfLawFirm->street_address_line_1) ?></p>
        <p><?= h($listingDirectoryOfLawFirm->city) ?>, <?= h($listingDirectoryOfLawFirm->state) ?></p>
        <p><?= h($listingDirectoryOfLawFirm->country) ?></p>
        <p><?= h($listingDirectoryOfLawFirm->pin_code) ?></p>
        <p>Contact Person: <?= h($listingDirectoryOfLawFirm->first_name . ' ' . $listingDirectoryOfLawFirm->last_name) ?></p>
        <p>Email: <?= h($listingDirectoryOfLawFirm->email) ?></p>
        <p>Phone: <?= h($listingDirectoryOfLawFirm->phone) ?></p>
        <p>Mobile: <?= h($listingDirectoryOfLawFirm->mobile) ?></p>
        <p>Website: <?= h($listingDirectoryOfLawFirm->website) ?></p>
        <p>Year of Establishment: <?= h($listingDirectoryOfLawFirm->year_of_establishment) ?></p>
        <p class="initial-consultation"><?= h($listingDirectoryOfLawFirm->initial_consultation ? 'Free Initial Consultation Provided' : 'No Free Initial Consultation') ?></p>
    </div>
    <div class="listing-map">
        <!-- Add a Google Maps iframe based on the address -->
        <iframe
            width="600"
            height="450"
            style="border:0"
            loading="lazy"
            allowfullscreen
            referrerpolicy="no-referrer-when-downgrade"
            src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=<?= urlencode($listingDirectoryOfLawFirm->street_address_line_1 . ' ' . $listingDirectoryOfLawFirm->city . ' ' . $listingDirectoryOfLawFirm->state . ' ' . $listingDirectoryOfLawFirm->country) ?>">
        </iframe>
    </div>
    <div class="practice-areas">
        <h3>Practice Areas</h3>
        <ul>
            <?php foreach (json_decode($listingDirectoryOfLawFirm->practice_areas) as $practiceArea): ?>
                <li><?= h($practiceArea) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
