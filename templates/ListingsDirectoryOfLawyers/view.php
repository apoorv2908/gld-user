<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ListingsDirectoryOfLawyer $listingsDirectoryOfLawyer
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Listings Directory Of Lawyer'), ['action' => 'edit', $listingsDirectoryOfLawyer->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Listings Directory Of Lawyer'), ['action' => 'delete', $listingsDirectoryOfLawyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsDirectoryOfLawyer->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Listings Directory Of Lawyers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Listings Directory Of Lawyer'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="listingsDirectoryOfLawyers view content">
            <h3><?= h($listingsDirectoryOfLawyer->first_name) ?></h3>
            <table>
                <tr>
                    <th><?= __('First Name') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Last Name') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Country') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->country) ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('City') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->city) ?></td>
                </tr>
                <tr>
                    <th><?= __('Pin Code') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->pin_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line1') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->street_address_line1) ?></td>
                </tr>
                <tr>
                    <th><?= __('Street Address Line2') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->street_address_line2) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Website') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->website) ?></td>
                </tr>
                <tr>
                    <th><?= __('Phone') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Mobile') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->mobile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Logo') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->image_logo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Affiliating') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->affiliating) ?></td>
                </tr>
                <tr>
                    <th><?= __('Registration Number') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->registration_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Practicing Since') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->practicing_since) ?></td>
                </tr>
                <tr>
                    <th><?= __('Complete Detail') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->complete_detail) ?></td>
                </tr>
                <tr>
                    <th><?= __('Free Initial Consultation') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->free_initial_consultation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($listingsDirectoryOfLawyer->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($listingsDirectoryOfLawyer->modified) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Professional Qualifications') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawyer->professional_qualifications)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Courts Of Practice') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawyer->courts_of_practice)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Practice Areas') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($listingsDirectoryOfLawyer->practice_areas)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
