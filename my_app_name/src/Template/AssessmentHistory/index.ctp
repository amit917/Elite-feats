<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentHistory[]|\Cake\Collection\CollectionInterface $assessmentHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Assessment History'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Assessment'), ['controller' => 'Assessment', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Assessment'), ['controller' => 'Assessment', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Athletes'), ['controller' => 'Athletes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Athlete'), ['controller' => 'Athletes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="assessmentHistory index large-9 medium-8 columns content">
    <h3><?= __('Assessment History') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('assessment_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('group_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('athlete_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($assessmentHistory as $assessmentHistory): ?>
            <tr>
                <td><?= $this->Number->format($assessmentHistory->id) ?></td>
                <td><?= $assessmentHistory->has('assessment') ? $this->Html->link($assessmentHistory->assessment->assessment_id, ['controller' => 'Assessment', 'action' => 'view', $assessmentHistory->assessment->assessment_id]) : '' ?></td>
                <td><?= $assessmentHistory->has('group') ? $this->Html->link($assessmentHistory->group->group_id, ['controller' => 'Groups', 'action' => 'view', $assessmentHistory->group->group_id]) : '' ?></td>
                <td><?= $assessmentHistory->has('coach') ? $this->Html->link($assessmentHistory->coach->coach_id, ['controller' => 'Coaches', 'action' => 'view', $assessmentHistory->coach->coach_id]) : '' ?></td>
                <td><?= $assessmentHistory->has('athlete') ? $this->Html->link($assessmentHistory->athlete->athletes_id, ['controller' => 'Athletes', 'action' => 'view', $assessmentHistory->athlete->athletes_id]) : '' ?></td>
                <td><?= h($assessmentHistory->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $assessmentHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $assessmentHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $assessmentHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentHistory->id)]) ?>
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
