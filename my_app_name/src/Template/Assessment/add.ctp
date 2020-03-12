<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Assessment $assessment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Assessment'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="assessment form large-9 medium-8 columns content">
    <?= $this->Form->create($assessment) ?>
    <fieldset>
        <legend><?= __('Add Assessment') ?></legend>
        <?php
            echo $this->Form->control('assessment_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
