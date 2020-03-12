<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Athlete $athlete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Athlete'), ['action' => 'edit', $athlete->athletes_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Athlete'), ['action' => 'delete', $athlete->athletes_id], ['confirm' => __('Are you sure you want to delete # {0}?', $athlete->athletes_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Athletes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Athlete'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assessment'), ['controller' => 'Assessment', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assessment'), ['controller' => 'Assessment', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Reports'), ['controller' => 'Reports', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Report'), ['controller' => 'Reports', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['controller' => 'Groups', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['controller' => 'Groups', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Assessment History'), ['controller' => 'AssessmentHistory', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Assessment History'), ['controller' => 'AssessmentHistory', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="athletes view large-9 medium-8 columns content">
    <h3><?= h($athlete->athletes_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coach') ?></th>
            <td><?= $athlete->has('coach') ? $this->Html->link($athlete->coach->coach_id, ['controller' => 'Coaches', 'action' => 'view', $athlete->coach->coach_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Firstname') ?></th>
            <td><?= h($athlete->user_firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Lastname') ?></th>
            <td><?= h($athlete->user_lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Email') ?></th>
            <td><?= h($athlete->user_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Assessment') ?></th>
            <td><?= $athlete->has('assessment') ? $this->Html->link($athlete->assessment->assessment_id, ['controller' => 'Assessment', 'action' => 'view', $athlete->assessment->assessment_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Report') ?></th>
            <td><?= $athlete->has('report') ? $this->Html->link($athlete->report->reports_id, ['controller' => 'Reports', 'action' => 'view', $athlete->report->reports_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Athletes Id') ?></th>
            <td><?= $this->Number->format($athlete->athletes_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Groups Id') ?></th>
            <td><?= $this->Number->format($athlete->groups_id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Groups') ?></h4>
        <?php if (!empty($athlete->groups)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Athlete Id') ?></th>
                <th scope="col"><?= __('Coach Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($athlete->groups as $groups): ?>
            <tr>
                <td><?= h($groups->group_id) ?></td>
                <td><?= h($groups->athlete_id) ?></td>
                <td><?= h($groups->coach_id) ?></td>
                <td><?= h($groups->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Groups', 'action' => 'view', $groups->group_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Groups', 'action' => 'edit', $groups->group_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Groups', 'action' => 'delete', $groups->group_id], ['confirm' => __('Are you sure you want to delete # {0}?', $groups->group_id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Assessment History') ?></h4>
        <?php if (!empty($athlete->assessment_history)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Assessment Id') ?></th>
                <th scope="col"><?= __('Group Id') ?></th>
                <th scope="col"><?= __('Coach Id') ?></th>
                <th scope="col"><?= __('Athlete Id') ?></th>
                <th scope="col"><?= __('Date') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($athlete->assessment_history as $assessmentHistory): ?>
            <tr>
                <td><?= h($assessmentHistory->id) ?></td>
                <td><?= h($assessmentHistory->assessment_id) ?></td>
                <td><?= h($assessmentHistory->group_id) ?></td>
                <td><?= h($assessmentHistory->coach_id) ?></td>
                <td><?= h($assessmentHistory->athlete_id) ?></td>
                <td><?= h($assessmentHistory->date) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'AssessmentHistory', 'action' => 'view', $assessmentHistory->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'AssessmentHistory', 'action' => 'edit', $assessmentHistory->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'AssessmentHistory', 'action' => 'delete', $assessmentHistory->id], ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentHistory->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
