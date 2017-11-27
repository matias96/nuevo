<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examen $examen
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Examen'), ['action' => 'edit', $examen->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Examen'), ['action' => 'delete', $examen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examen->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Examens'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Examen'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="examens view large-9 medium-8 columns content">
    <h3><?= h($examen->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($examen->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Condicion Anterior') ?></th>
            <td><?= h($examen->condicion_anterior) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profesor Evaluador') ?></th>
            <td><?= h($examen->profesor_evaluador) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Materia') ?></th>
            <td><?= $examen->has('materia') ? $this->Html->link($examen->materia->id, ['controller' => 'Materias', 'action' => 'view', $examen->materia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Calificacion') ?></th>
            <td><?= $this->Number->format($examen->calificacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha') ?></th>
            <td><?= h($examen->fecha) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($examen->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($examen->modified) ?></td>
        </tr>
    </table>
</div>
