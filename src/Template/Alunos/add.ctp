<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Add Aluno') ?></legend>
        <?php
            echo $this->Form->control('id_aluno');
            echo $this->Form->control('nome');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('nome_mae');
            echo $this->Form->control('telefone');
            echo $this->Form->control('email');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
