<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examen[]|\Cake\Collection\CollectionInterface $examens
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Examen'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examens index large-9 medium-8 columns content">
    <h3><?= __('Examens') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fecha') ?></th>
                <th scope="col"><?= $this->Paginator->sort('calificacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('condicion_anterior') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profesor_evaluador') ?></th>
                <th scope="col"><?= $this->Paginator->sort('materia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($examens as $examen): ?>
            <tr>
                <td><?= h($examen->id) ?></td>
                <td><?= h($examen->fecha) ?></td>
                <td><?= $this->Number->format($examen->calificacion) ?></td>
                <td><?= h($examen->condicion_anterior) ?></td>
                <td><?= h($examen->profesor_evaluador) ?></td>
                <td><?= $examen->has('materia') ? $this->Html->link($examen->materia->id, ['controller' => 'Materias', 'action' => 'view', $examen->materia->id]) : '' ?></td>
                <td><?= h($examen->created) ?></td>
                <td><?= h($examen->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $examen->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $examen->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $examen->id], ['confirm' => __('Are you sure you want to delete # {0}?', $examen->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
