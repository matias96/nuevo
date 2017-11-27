<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Libreta $libreta
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Libretas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Carreras'), ['controller' => 'Carreras', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Carrera'), ['controller' => 'Carreras', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="libretas form large-9 medium-8 columns content">
    <?= $this->Form->create($libreta) ?>
    <fieldset>
        <legend><?= __('Add Libreta') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('carrera_id', ['options' => $carreras, 'empty' => true]);
            echo $this->Form->control('user_id', ['options' => $users, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
