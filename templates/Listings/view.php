<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Listing $listing
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Listing'), ['action' => 'edit', $listing->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Listing'), ['action' => 'delete', $listing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listing->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Listings'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Listing'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listings view content">
            <h3><?= h($listing->firstname) ?></h3>
            <table>
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= h($listing->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= h($listing->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pincode') ?></th>
                    <td><?= h($listing->pincode) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address') ?></th>
                    <td><?= h($listing->street_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($listing->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($listing->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($listing->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($listing->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image') ?></th>
                    <td><?= h($listing->image) ?></td>
                </tr>
                <tr>
                    <th><?= __('Qualification') ?></th>
                    <td><?= h($listing->qualification) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affiliating Bar Council Assoc') ?></th>
                    <td><?= h($listing->affiliating_bar_council_assoc) ?></td>
                </tr>
                <tr>
                    <th><?= __('Reg No') ?></th>
                    <td><?= h($listing->reg_no) ?></td>
                </tr>
                <tr>
                    <th><?= __('Practicing Since') ?></th>
                    <td><?= h($listing->practicing_since) ?></td>
                </tr>
                <tr>
                    <th><?= __('Court Of Practice') ?></th>
                    <td><?= h($listing->court_of_practice) ?></td>
                </tr>
                <tr>
                    <th><?= __('Practice Area') ?></th>
                    <td><?= h($listing->practice_area) ?></td>
                </tr>
                <tr>
                    <th><?= __('Brief Detail') ?></th>
                    <td><?= h($listing->brief_detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Free Consultation') ?></th>
                    <td><?= h($listing->free_consultation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Law Firm') ?></th>
                    <td><?= h($listing->law_firm) ?></td>
                </tr>
                <tr>
                    <th><?= __('Designation') ?></th>
                    <td><?= h($listing->designation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estd Year') ?></th>
                    <td><?= h($listing->estd_year) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listing->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= $this->Number->format($listing->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= $this->Number->format($listing->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= $this->Number->format($listing->city) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Listings Data') ?></h4>
                <?php if (!empty($listing->listings_data)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Law Firm Name') ?></th>
                            <th><?= __('Listing Id') ?></th>
                            <th><?= __('Listing Type') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Country') ?></th>
                            <th><?= __('State') ?></th>
                            <th><?= __('City') ?></th>
                            <th><?= __('Pin Code') ?></th>
                            <th><?= __('Street Address Line1') ?></th>
                            <th><?= __('Street Address Line2') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Designation') ?></th>
                            <th><?= __('Website') ?></th>
                            <th><?= __('Phone') ?></th>
                            <th><?= __('Mobile') ?></th>
                            <th><?= __('Image Logo') ?></th>
                            <th><?= __('Professional Qualifications') ?></th>
                            <th><?= __('Affiliating') ?></th>
                            <th><?= __('Registration Number') ?></th>
                            <th><?= __('Year Of Establishment') ?></th>
                            <th><?= __('Practicing Since') ?></th>
                            <th><?= __('Courts Of Practice') ?></th>
                            <th><?= __('Practice Areas') ?></th>
                            <th><?= __('Complete Detail') ?></th>
                            <th><?= __('Free Initial Consultation') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Status') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($listing->listings_data as $listingsData) : ?>
                        <tr>
                            <td><?= h($listingsData->id) ?></td>
                            <td><?= h($listingsData->law_firm_name) ?></td>
                            <td><?= h($listingsData->listing_id) ?></td>
                            <td><?= h($listingsData->listing_type) ?></td>
                            <td><?= h($listingsData->user_id) ?></td>
                            <td><?= h($listingsData->first_name) ?></td>
                            <td><?= h($listingsData->last_name) ?></td>
                            <td><?= h($listingsData->country) ?></td>
                            <td><?= h($listingsData->state) ?></td>
                            <td><?= h($listingsData->city) ?></td>
                            <td><?= h($listingsData->pin_code) ?></td>
                            <td><?= h($listingsData->street_address_line1) ?></td>
                            <td><?= h($listingsData->street_address_line2) ?></td>
                            <td><?= h($listingsData->email) ?></td>
                            <td><?= h($listingsData->designation) ?></td>
                            <td><?= h($listingsData->website) ?></td>
                            <td><?= h($listingsData->phone) ?></td>
                            <td><?= h($listingsData->mobile) ?></td>
                            <td><?= h($listingsData->image_logo) ?></td>
                            <td><?= h($listingsData->professional_qualifications) ?></td>
                            <td><?= h($listingsData->affiliating) ?></td>
                            <td><?= h($listingsData->registration_number) ?></td>
                            <td><?= h($listingsData->year_of_establishment) ?></td>
                            <td><?= h($listingsData->practicing_since) ?></td>
                            <td><?= h($listingsData->courts_of_practice) ?></td>
                            <td><?= h($listingsData->practice_areas) ?></td>
                            <td><?= h($listingsData->complete_detail) ?></td>
                            <td><?= h($listingsData->free_initial_consultation) ?></td>
                            <td><?= h($listingsData->created) ?></td>
                            <td><?= h($listingsData->modified) ?></td>
                            <td><?= h($listingsData->status) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ListingsData', 'action' => 'view', $listingsData->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ListingsData', 'action' => 'edit', $listingsData->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ListingsData', 'action' => 'delete', $listingsData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsData->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
