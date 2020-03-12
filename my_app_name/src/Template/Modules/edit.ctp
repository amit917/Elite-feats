<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $module->module_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $module->module_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Modules'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="modules form large-9 medium-8 columns content">
    <?= $this->Form->create($module) ?>
    <fieldset>
        <legend><?= __('Edit Module') ?></legend>
        <?php
            echo $this->Form->control('module_name');
            echo $this->Form->control('module_description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
