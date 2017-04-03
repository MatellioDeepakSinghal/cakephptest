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
    <h3><?= h($department->department_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Department') ?></th>
            <td><?= $department->has('department') ? $this->Html->link($department->department->department_id, ['controller' => 'Departments', 'action' => 'view', $department->department->department_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department Name') ?></th>
            <td><?= h($department->department_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $department->has('company') ? $this->Html->link($department->company->company_name, ['controller' => 'Companies', 'action' => 'view', $department->company->company_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $department->has('company') ? $this->Html->link($department->branch->branch_name, ['controller' => 'Branches', 'action' => 'view', $department->branch->branch_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Department Created') ?></th>
            <td><?= h($department->department_created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Department Status') ?></h4>
        <?= $this->Text->autoParagraph(ucfirst(h($department->department_status))); ?>
    </div>
</div>
