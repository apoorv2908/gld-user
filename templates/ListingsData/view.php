<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListingsData $listingsData
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Listings Data'), ['action' => 'edit', $listingsData->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Listings Data'), ['action' => 'delete', $listingsData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsData->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Listings Data'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Listings Data'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listingsData view content">
            <h3><?= h($listingsData->law_firm_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Law Firm Name') ?></th>
                    <td><?= h($listingsData->law_firm_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Listing Id') ?></th>
                    <td><?= h($listingsData->listing_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $listingsData->has('user') ? $this->Html->link($listingsData->user->email, ['controller' => 'Users', 'action' => 'view', $listingsData->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($listingsData->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($listingsData->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($listingsData->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($listingsData->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($listingsData->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pin Code') ?></th>
                    <td><?= h($listingsData->pin_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($listingsData->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($listingsData->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($listingsData->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($listingsData->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($listingsData->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($listingsData->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Logo') ?></th>
                    <td><?= h($listingsData->image_logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affiliating') ?></th>
                    <td><?= h($listingsData->affiliating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Number') ?></th>
                    <td><?= h($listingsData->registration_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Free Initial Consultation') ?></th>
                    <td><?= h($listingsData->free_initial_consultation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listingsData->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Practicing Since') ?></th>
                    <td><?= $listingsData->practicing_since === null ? '' : $this->Number->format($listingsData->practicing_since) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listingsData->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listingsData->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Professional Qualifications') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsData->professional_qualifications)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Courts Of Practice') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsData->courts_of_practice)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Practice Areas') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsData->practice_areas)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Complete Detail') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsData->complete_detail)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
