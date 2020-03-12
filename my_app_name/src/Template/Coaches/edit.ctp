<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $coach->coach_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $coach->coach_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Coaches'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="coaches form large-9 medium-8 columns content">
    <?= $this->Form->create($coach) ?>
    <fieldset>
        <legend><?= __('Edit Coach') ?></legend>
        <?php
            echo $this->Form->control('coach_firstname');
            echo $this->Form->control('coach_lastname');
            echo $this->Form->control('coach_email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
