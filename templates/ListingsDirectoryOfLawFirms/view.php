<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListingsDirectoryOfLawFirm $listingsDirectoryOfLawFirm
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Listings Directory Of Law Firm'), ['action' => 'edit', $listingsDirectoryOfLawFirm->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Listings Directory Of Law Firm'), ['action' => 'delete', $listingsDirectoryOfLawFirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsDirectoryOfLawFirm->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Listings Directory Of Law Firms'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Listings Directory Of Law Firm'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listingsDirectoryOfLawFirms view content">
            <h3><?= h($listingsDirectoryOfLawFirm->law_firm_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Law Firm Name') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->law_firm_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pin Code') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->pin_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Logo') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->image_logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Year Of Establishment') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->year_of_establishment) ?></td>
                </tr>
                <tr>
                    <th><?= __('Free Initial Consultation') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->free_initial_consultation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listingsDirectoryOfLawFirm->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listingsDirectoryOfLawFirm->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Phone') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawFirm->phone)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Mobile') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawFirm->mobile)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Courts Of Practice') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawFirm->courts_of_practice)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Practice Areas') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawFirm->practice_areas)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Brief Profile') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawFirm->brief_profile)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
