<h1>Directory of Law Firms</h1>
<table>
    <thead>
        <tr>
            <th>Name of Law Firm</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Country</th>
            <th>State</th>
            <th>City</th>
            <th>Pin Code</th>
            <th>Street Address Line 1</th>
            <th>Street Address Line 2</th>
            <th>Email</th>
            <th>Website</th>
            <th>Phone</th>
            <th>Mobile</th>
            <th>Image/Logo</th>
            <th>Year of Establishment</th>
            <th>Courts of Practice</th>
            <th>Practice Areas</th>
            <th>Brief Profile</th>
            <th>Free Initial Consultation</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($listingDirectoryOfLawFirm as $listingDirectoryOfLawFirm): ?>
        <tr>
            <td><?= h($listingDirectoryOfLawFirm->name_of_law_firm) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->first_name) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->last_name) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->country) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->state) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->city) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->pin_code) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->street_address_line1) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->street_address_line2) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->email) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->website) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->phone) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->mobile) ?></td>
            <td><img src="<?= $this->Url->image($listingDirectoryOfLawFirm->image_logo) ?>" alt="Logo" width="100"></td>
            <td><?= h($listingDirectoryOfLawFirm->year_of_establishment) ?></td>
            <td>
                <?php
                $courts = json_decode($listingDirectoryOfLawFirm->courts_of_practice, true);
                foreach ($courts as $court):
                    echo h($court['court']) . ' (' . h($court['place']) . ')<br>';
                endforeach;
                ?>
            </td>
            <td>
                <?php
                $practiceAreas = explode(',', $listingDirectoryOfLawFirm->practice_areas);
                foreach ($practiceAreas as $area):
                    echo h($area) . '<br>';
                endforeach;
                ?>
            </td>
            <td><?= h($listingDirectoryOfLawFirm->brief_profile) ?></td>
            <td><?= h($listingDirectoryOfLawFirm->free_initial_consultation) ?></td>
            <td>
                <?= $this->Html->link(__('View'), ['action' => 'view', $listingDirectoryOfLawFirm->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingDirectoryOfLawFirm->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingDirectoryOfLawFirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingDirectoryOfLawFirm->id)]) ?>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
