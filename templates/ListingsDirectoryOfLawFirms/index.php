<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ListingsDirectoryOfLawFirm> $listingsDirectoryOfLawFirms
 */
?>
<div class="listingsDirectoryOfLawFirms index content">
    <?= $this->Html->link(__('New Listings Directory Of Law Firm'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Listings Directory Of Law Firms') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('law_firm_name') ?></th>
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
                    <th><?= $this->Paginator->sort('image_logo') ?></th>
                    <th><?= $this->Paginator->sort('year_of_establishment') ?></th>
                    <th><?= $this->Paginator->sort('free_initial_consultation') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listingsDirectoryOfLawFirms as $listingsDirectoryOfLawFirm): ?>
                <tr>
                    <td><?= $this->Number->format($listingsDirectoryOfLawFirm->id) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->law_firm_name) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->first_name) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->last_name) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->country) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->state) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->city) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->pin_code) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->street_address_line1) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->street_address_line2) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->email) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->website) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->image_logo) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->year_of_establishment) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->free_initial_consultation) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->created) ?></td>
                    <td><?= h($listingsDirectoryOfLawFirm->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $listingsDirectoryOfLawFirm->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingsDirectoryOfLawFirm->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingsDirectoryOfLawFirm->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsDirectoryOfLawFirm->id)]) ?>
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
