<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Module $module
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Module'), ['action' => 'edit', $module->module_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Module'), ['action' => 'delete', $module->module_id], ['confirm' => __('Are you sure you want to delete # {0}?', $module->module_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Modules'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Module'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="modules view large-9 medium-8 columns content">
    <h3><?= h($module->module_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Module Name') ?></th>
            <td><?= h($module->module_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module Description') ?></th>
            <td><?= h($module->module_description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module Id') ?></th>
            <td><?= $this->Number->format($module->module_id) ?></td>
        </tr>
    </table>
</div>
