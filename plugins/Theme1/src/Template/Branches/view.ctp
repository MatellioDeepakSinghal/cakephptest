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
<div class="branches view large-10 medium-9 columns content">
    <h3><?= h($branch->branch_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Branch') ?></th>
            <td><?= $branch->has('branch') ? $this->Html->link($branch->branch->branch_id, ['controller' => 'Branches', 'action' => 'view', $branch->branch->branch_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Branch Name') ?></th>
            <td><?= h($branch->branch_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $branch->has('company') ? $this->Html->link($branch->company->company_name, ['controller' => 'Companies', 'action' => 'view', $branch->company->company_id]) : '' ?></td>
        </tr>
        
        <tr>
            <th scope="row"><?= __('Branch Created') ?></th>
            <td><?= date('d M Y', strtotime(h($branch->branch_created))) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Branch Status') ?></h4>
        <?= $this->Text->autoParagraph(ucfirst(h($branch->branch_status))); ?>
    </div>
</div>
