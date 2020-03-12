<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Group $group
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Group'), ['action' => 'edit', $group->group_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Group'), ['action' => 'delete', $group->group_id], ['confirm' => __('Are you sure you want to delete # {0}?', $group->group_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Groups'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Group'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Athletes'), ['controller' => 'Athletes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Athlete'), ['controller' => 'Athletes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['controller' => 'Coaches', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['controller' => 'Coaches', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="groups view large-9 medium-8 columns content">
    <h3><?= h($group->group_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Athlete') ?></th>
            <td><?= $group->has('athlete') ? $this->Html->link($group->athlete->athletes_id, ['controller' => 'Athletes', 'action' => 'view', $group->athlete->athletes_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach') ?></th>
            <td><?= $group->has('coach') ? $this->Html->link($group->coach->coach_id, ['controller' => 'Coaches', 'action' => 'view', $group->coach->coach_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($group->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Group Id') ?></th>
            <td><?= $this->Number->format($group->group_id) ?></td>
        </tr>
    </table>
</div>
