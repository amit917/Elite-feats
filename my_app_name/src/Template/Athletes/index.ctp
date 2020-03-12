<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Athlete[]|\Cake\Collection\CollectionInterface $athletes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Athlete'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assessment'), ['controller' => 'Assessment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assessment'), ['controller' => 'Assessment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assessment History'), ['controller' => 'AssessmentHistory', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assessment History'), ['controller' => 'AssessmentHistory', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="athletes index large-9 medium-8 columns content">
    <h3><?= __('Athletes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('athletes_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assessment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reports_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('groups_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($athletes as $athlete): ?>
            <tr>
                <td><?= $this->Number->format($athlete->athletes_id) ?></td>
                <td><?= $athlete->has('coach') ? $this->Html->link($athlete->coach->coach_id, ['controller' => 'Coaches', 'action' => 'view', $athlete->coach->coach_id]) : '' ?></td>
                <td><?= h($athlete->user_firstname) ?></td>
                <td><?= h($athlete->user_lastname) ?></td>
                <td><?= h($athlete->user_email) ?></td>
                <td><?= $athlete->has('assessment') ? $this->Html->link($athlete->assessment->assessment_id, ['controller' => 'Assessment', 'action' => 'view', $athlete->assessment->assessment_id]) : '' ?></td>
                <td><?= $athlete->has('report') ? $this->Html->link($athlete->report->reports_id, ['controller' => 'Reports', 'action' => 'view', $athlete->report->reports_id]) : '' ?></td>
                <td><?= $this->Number->format($athlete->groups_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $athlete->athletes_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $athlete->athletes_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $athlete->athletes_id], ['confirm' => __('Are you sure you want to delete # {0}?', $athlete->athletes_id)]) ?>
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
