<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libreta[]|\Cake\Collection\CollectionInterface $libretas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Libreta'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="libretas index large-9 medium-8 columns content">
    <h3><?= __('Libretas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('carrera_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($libretas as $libreta): ?>
            <tr>
                <td><?= h($libreta->id) ?></td>
                <td><?= h($libreta->nombre) ?></td>
                <td><?= $libreta->has('carrera') ? $this->Html->link($libreta->carrera->id, ['controller' => 'Carreras', 'action' => 'view', $libreta->carrera->id]) : '' ?></td>
                <td><?= $libreta->has('user') ? $this->Html->link($libreta->user->id, ['controller' => 'Users', 'action' => 'view', $libreta->user->id]) : '' ?></td>
                <td><?= h($libreta->created) ?></td>
                <td><?= h($libreta->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $libreta->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $libreta->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $libreta->id], ['confirm' => __('Are you sure you want to delete # {0}?', $libreta->id)]) ?>
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
