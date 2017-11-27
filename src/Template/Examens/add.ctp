<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Examen $examen
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Examens'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materias'), ['controller' => 'Materias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Materia'), ['controller' => 'Materias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="examens form large-9 medium-8 columns content">
    <?= $this->Form->create($examen) ?>
    <fieldset>
        <legend><?= __('Add Examen') ?></legend>
        <?php
            echo $this->Form->control('fecha', ['empty' => true]);
            echo $this->Form->control('calificacion');
            echo $this->Form->control('condicion_anterior');
            echo $this->Form->control('profesor_evaluador');
            echo $this->Form->control('materia_id', ['options' => $materias, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
