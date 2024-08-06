<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ListingsDirectoryOfLawyer> $listingsDirectoryOfLawyers
 */
?>
<div class="listingsDirectoryOfLawyers index content">
    <?= $this->Html->link(__('New Listings Directory Of Lawyer'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Listings Directory Of Lawyers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('first_name') ?></th>
                    <th><?= $this->Paginator->sort('last_name') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('pin_code') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line1') ?></th>
                    <th><?= $this->Paginator->sort('street_address_line2') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('image_logo') ?></th>
                    <th><?= $this->Paginator->sort('affiliating') ?></th>
                    <th><?= $this->Paginator->sort('registration_number') ?></th>
                    <th><?= $this->Paginator->sort('practicing_since') ?></th>
                    <th><?= $this->Paginator->sort('complete_detail') ?></th>
                    <th><?= $this->Paginator->sort('free_initial_consultation') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listingsDirectoryOfLawyers as $listingsDirectoryOfLawyer): ?>
                <tr>
                    <td><?= $this->Number->format($listingsDirectoryOfLawyer->id) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->first_name) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->last_name) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->country) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->state) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->city) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->pin_code) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->street_address_line1) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->street_address_line2) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->email) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->website) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->phone) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->mobile) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->image_logo) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->affiliating) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->registration_number) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->practicing_since) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->complete_detail) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->free_initial_consultation) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->created) ?></td>
                    <td><?= h($listingsDirectoryOfLawyer->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $listingsDirectoryOfLawyer->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingsDirectoryOfLawyer->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingsDirectoryOfLawyer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsDirectoryOfLawyer->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
