<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Subscription> $subscription
 */
?>
<div class="subscription index content">
    <?= $this->Html->link(__('New Subscription'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Subscription') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('firstname') ?></th>
                    <th><?= $this->Paginator->sort('lastname') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('contact') ?></th>
                    <th><?= $this->Paginator->sort('created_on') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($subscription as $subscription): ?>
                <tr>
                    <td><?= $this->Number->format($subscription->id) ?></td>
                    <td><?= $subscription->has('user') ? $this->Html->link($subscription->user->email, ['controller' => 'Users', 'action' => 'view', $subscription->user->id]) : '' ?></td>
                    <td><?= h($subscription->firstname) ?></td>
                    <td><?= h($subscription->lastname) ?></td>
                    <td><?= h($subscription->email) ?></td>
                    <td><?= h($subscription->contact) ?></td>
                    <td><?= h($subscription->created_on) ?></td>
                    <td><?= h($subscription->status) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $subscription->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $subscription->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $subscription->id], ['confirm' => __('Are you sure you want to delete # {0}?', $subscription->id)]) ?>
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
