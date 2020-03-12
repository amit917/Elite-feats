<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentHistory $assessmentHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Assessment History'), ['action' => 'edit', $assessmentHistory->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Assessment History'), ['action' => 'delete', $assessmentHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentHistory->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Assessment History'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assessment History'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assessment'), ['controller' => 'Assessment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assessment'), ['controller' => 'Assessment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Athletes'), ['controller' => 'Athletes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Athlete'), ['controller' => 'Athletes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="assessmentHistory view large-9 medium-8 columns content">
    <h3><?= h($assessmentHistory->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Assessment') ?></th>
            <td><?= $assessmentHistory->has('assessment') ? $this->Html->link($assessmentHistory->assessment->assessment_id, ['controller' => 'Assessment', 'action' => 'view', $assessmentHistory->assessment->assessment_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group') ?></th>
            <td><?= $assessmentHistory->has('group') ? $this->Html->link($assessmentHistory->group->group_id, ['controller' => 'Groups', 'action' => 'view', $assessmentHistory->group->group_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach') ?></th>
            <td><?= $assessmentHistory->has('coach') ? $this->Html->link($assessmentHistory->coach->coach_id, ['controller' => 'Coaches', 'action' => 'view', $assessmentHistory->coach->coach_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Athlete') ?></th>
            <td><?= $assessmentHistory->has('athlete') ? $this->Html->link($assessmentHistory->athlete->athletes_id, ['controller' => 'Athletes', 'action' => 'view', $assessmentHistory->athlete->athletes_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($assessmentHistory->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($assessmentHistory->date) ?></td>
        </tr>
    </table>
</div>
