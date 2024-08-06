<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\ListingsData> $listingsData
 */
?>
<div class="listingsData index content">
    <?= $this->Html->link(__('New Listings Data'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Listings Data') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('law_firm_name') ?></th>
                    <th><?= $this->Paginator->sort('listing_id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
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
                    <th><?= $this->Paginator->sort('free_initial_consultation') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listingsData as $listingsData): ?>
                <tr>
                    <td><?= $this->Number->format($listingsData->id) ?></td>
                    <td><?= h($listingsData->law_firm_name) ?></td>
                    <td><?= h($listingsData->listing_id) ?></td>
                    <td><?= $listingsData->has('user') ? $this->Html->link($listingsData->user->email, ['controller' => 'Users', 'action' => 'view', $listingsData->user->id]) : '' ?></td>
                    <td><?= h($listingsData->first_name) ?></td>
                    <td><?= h($listingsData->last_name) ?></td>
                    <td><?= h($listingsData->country) ?></td>
                    <td><?= h($listingsData->state) ?></td>
                    <td><?= h($listingsData->city) ?></td>
                    <td><?= h($listingsData->pin_code) ?></td>
                    <td><?= h($listingsData->street_address_line1) ?></td>
                    <td><?= h($listingsData->street_address_line2) ?></td>
                    <td><?= h($listingsData->email) ?></td>
                    <td><?= h($listingsData->website) ?></td>
                    <td><?= h($listingsData->phone) ?></td>
                    <td><?= h($listingsData->mobile) ?></td>
                    <td><?= h($listingsData->image_logo) ?></td>
                    <td><?= h($listingsData->affiliating) ?></td>
                    <td><?= h($listingsData->registration_number) ?></td>
                    <td><?= $listingsData->practicing_since === null ? '' : $this->Number->format($listingsData->practicing_since) ?></td>
                    <td><?= h($listingsData->free_initial_consultation) ?></td>
                    <td><?= h($listingsData->created) ?></td>
                    <td><?= h($listingsData->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $listingsData->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listingsData->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listingsData->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listingsData->id)]) ?>
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
