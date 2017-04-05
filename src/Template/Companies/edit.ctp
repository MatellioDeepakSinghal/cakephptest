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
    <?= $this->Form->create($company) ?>
    <fieldset>
        <legend><?= __('Edit Company') ?></legend>
        <?php
            echo $this->Form->input('company_name');
            echo $this->Form->input('company_email');
            echo $this->Form->input('company_address');
            echo $this->Form->input('company_profile');
             $statusArray = array("active"=>"Active", "deactive"=>"Deactive");
            echo $this->Form->input('company_status', ['options'=>$statusArray]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit'), ['class'=>'btn-info']) ?>
    <?= $this->Form->end() ?>
</div>
