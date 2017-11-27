<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libreta $libreta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Libreta'), ['action' => 'edit', $libreta->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Libreta'), ['action' => 'delete', $libreta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libreta->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="libretas view large-9 medium-8 columns content">
    <h3><?= h($libreta->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($libreta->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($libreta->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Carrera') ?></th>
            <td><?= $libreta->has('carrera') ? $this->Html->link($libreta->carrera->id, ['controller' => 'Carreras', 'action' => 'view', $libreta->carrera->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $libreta->has('user') ? $this->Html->link($libreta->user->id, ['controller' => 'Users', 'action' => 'view', $libreta->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($libreta->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($libreta->modified) ?></td>
        </tr>
    </table>
</div>
