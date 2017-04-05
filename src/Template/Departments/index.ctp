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
 <div class="large-9 columns">
    <h3><?= __('Departments') ?></h3>
    </div>
    <div class="large-3 columns">
        <?= $this->Html->link(__('New Departments'), ['controller' => 'Departments', 'action' => 'add'], ['class'=>'btn-info']) ?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('department_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('department_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('branch_id') ?></th>
                
                <th scope="col"><?= $this->Paginator->sort('department_created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($departments as $department): ?>
            <tr>
                <td><?= $department->has('department') ? $this->Html->link($department->department->department_id, ['controller' => 'Departments', 'action' => 'view', $department->department->department_id]) : h($department->department_id) ?></td>
                <td><?= h($department->department_name) ?></td>
                <td><?= $department->has('company') ? $this->Html->link($department->company->company_name, ['controller' => 'Companies', 'action' => 'view', $department->company->company_id]) : '' ?></td>
                <td><?= $department->has('branch') ? $this->Html->link($department->branch->branch_name, ['controller' => 'Branches', 'action' => 'view', $department->branch->branch_id]) : '' ?></td>
                
                <td><?= date('d M Y', strtotime(h($department->department_created))) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $department->department_id], ['class'=>'fa fa-eye']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $department->department_id], ['class'=>'fa fa-pencil-square-o']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $department->department_id], ['confirm' => __('Are you sure you want to delete # {0}?', $department->department_id)]) ?>
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
