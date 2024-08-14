<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Listing> $listings
 */
?>
<div class="listings index content">
    <?= $this->Html->link(__('New Listing'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Listings') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('country') ?></th>
                    <th><?= $this->Paginator->sort('state') ?></th>
                    <th><?= $this->Paginator->sort('city') ?></th>
                    <th><?= $this->Paginator->sort('pincode') ?></th>
                    <th><?= $this->Paginator->sort('street_address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('website') ?></th>
                    <th><?= $this->Paginator->sort('phone') ?></th>
                    <th><?= $this->Paginator->sort('mobile') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('qualification') ?></th>
                    <th><?= $this->Paginator->sort('affiliating_bar_council_assoc') ?></th>
                    <th><?= $this->Paginator->sort('reg_no') ?></th>
                    <th><?= $this->Paginator->sort('practicing_since') ?></th>
                    <th><?= $this->Paginator->sort('court_of_practice') ?></th>
                    <th><?= $this->Paginator->sort('practice_area') ?></th>
                    <th><?= $this->Paginator->sort('brief_detail') ?></th>
                    <th><?= $this->Paginator->sort('free_consultation') ?></th>
                    <th><?= $this->Paginator->sort('law_firm') ?></th>
                    <th><?= $this->Paginator->sort('designation') ?></th>
                    <th><?= $this->Paginator->sort('estd_year') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listings as $listing): ?>
                <tr>
                    <td><?= $this->Number->format($listing->id) ?></td>
                    <td><?= h($listing->firstname) ?></td>
                    <td><?= h($listing->lastname) ?></td>
                    <td><?= $this->Number->format($listing->country) ?></td>
                    <td><?= $this->Number->format($listing->state) ?></td>
                    <td><?= $this->Number->format($listing->city) ?></td>
                    <td><?= h($listing->pincode) ?></td>
                    <td><?= h($listing->street_address) ?></td>
                    <td><?= h($listing->email) ?></td>
                    <td><?= h($listing->website) ?></td>
                    <td><?= h($listing->phone) ?></td>
                    <td><?= h($listing->mobile) ?></td>
                    <td><?= h($listing->image) ?></td>
                    <td><?= h($listing->qualification) ?></td>
                    <td><?= h($listing->affiliating_bar_council_assoc) ?></td>
                    <td><?= h($listing->reg_no) ?></td>
                    <td><?= h($listing->practicing_since) ?></td>
                    <td><?= h($listing->court_of_practice) ?></td>
                    <td><?= h($listing->practice_area) ?></td>
                    <td><?= h($listing->brief_detail) ?></td>
                    <td><?= h($listing->free_consultation) ?></td>
                    <td><?= h($listing->law_firm) ?></td>
                    <td><?= h($listing->designation) ?></td>
                    <td><?= h($listing->estd_year) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $listing->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $listing->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $listing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $listing->id)]) ?>
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
