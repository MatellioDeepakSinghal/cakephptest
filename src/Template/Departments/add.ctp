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
<div class="company form large-10 medium-9 columns content">
    <?= $this->Form->create($department) ?>
    <fieldset>
        <legend><?= __('Add Department') ?></legend>
        <?php
            echo $this->Form->input('department_name');
            echo $this->Form->input('company_id', ['options' => $companies]);
            echo $this->Form->input('branch_id');
            
            $statusArray = array("active"=>"Active", "deactive"=>"Deactive");
            echo $this->Form->input('department_status', ['options'=>$statusArray]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn-info']) ?>
    <?= $this->Form->end() ?>
</div>
