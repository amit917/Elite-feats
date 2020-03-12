<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Athlete $athlete
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Athletes'), ['action' => 'index']) ?></li>
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
<div class="athletes form large-9 medium-8 columns content">
    <?= $this->Form->create($athlete) ?>
    <fieldset>
        <legend><?= __('Add Athlete') ?></legend>
        <?php
            echo $this->Form->control('coach_id', ['options' => $coaches, 'empty' => true]);
            echo $this->Form->control('user_firstname');
            echo $this->Form->control('user_lastname');
            echo $this->Form->control('user_email');
            echo $this->Form->control('assessment_id', ['options' => $assessment, 'empty' => true]);
            echo $this->Form->control('reports_id', ['options' => $reports, 'empty' => true]);
            echo $this->Form->control('groups_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
