<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-2 medium-3 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
       
        <li><?= $this->Html->link(__('Companies'), ['controller' => 'Companies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Branches'), ['controller' => 'Branches', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Departments'), ['controller' => 'Departments', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="branches form large-10 medium-9 columns content">
    <?= $this->Form->create($branch) ?>
    <fieldset>
        <legend><?= __('Add Branch') ?></legend>
        <?php

            
            echo $this->Form->input('branch_name');
            // echo $this->Form->input('branch_created');
            echo $this->Form->input('company_id', ['options' => $companies]);
            $statusArray = array("active"=>"Active", "deactive"=>"Deactive");
            echo $this->Form->input('branch_status', ['options' => $statusArray]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn-info']) ?>
    <?= $this->Form->end() ?>
</div>
