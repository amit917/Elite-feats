<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Coach'), ['action' => 'edit', $coach->coach_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Coach'), ['action' => 'delete', $coach->coach_id], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->coach_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Coaches'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coach'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="coaches view large-9 medium-8 columns content">
    <h3><?= h($coach->coach_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Coach Firstname') ?></th>
            <td><?= h($coach->coach_firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach Lastname') ?></th>
            <td><?= h($coach->coach_lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach Email') ?></th>
            <td><?= h($coach->coach_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Coach Id') ?></th>
            <td><?= $this->Number->format($coach->coach_id) ?></td>
        </tr>
    </table>
</div>
