<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AssessmentHistory $assessmentHistory
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $assessmentHistory->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $assessmentHistory->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Assessment History'), ['action' => 'index']) ?></li>
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
<div class="assessmentHistory form large-9 medium-8 columns content">
    <?= $this->Form->create($assessmentHistory) ?>
    <fieldset>
        <legend><?= __('Edit Assessment History') ?></legend>
        <?php
            echo $this->Form->control('assessment_id', ['options' => $assessment]);
            echo $this->Form->control('group_id', ['options' => $groups]);
            echo $this->Form->control('coach_id', ['options' => $coaches]);
            echo $this->Form->control('athlete_id', ['options' => $athletes]);
            echo $this->Form->control('date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
