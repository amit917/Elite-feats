<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach[]|\Cake\Collection\CollectionInterface $coaches
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coaches index large-9 medium-8 columns content">
    <h3><?= __('Coaches') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_email') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coaches as $coach): ?>
            <tr>
                <td><?= $this->Number->format($coach->coach_id) ?></td>
                <td><?= h($coach->coach_firstname) ?></td>
                <td><?= h($coach->coach_lastname) ?></td>
                <td><?= h($coach->coach_email) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coach->coach_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coach->coach_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coach->coach_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->coach_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
