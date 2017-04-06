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
<div class="company index large-10 medium-9 columns content">
    <div class="large-9 columns">
    <h3><?= __('Company') ?></h3>
    </div>
    <div class="large-3 columns">
        <?= $this->Html->link(__('New Company'), ['controller' => 'Companies', 'action' => 'add'], ['class'=>'btn-info']) ?>
    </div>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th style="width: 8%; " scope="col"><?= $this->Paginator->sort('company_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('company_address') ?></th>
                <th style="width: 13%" scope="col"><?= $this->Paginator->sort('company_profile') ?></th>
                <th style="width: 14%" scope="col"><?= $this->Paginator->sort('company_created') ?></th>
                <th style="width: 10%" scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($companies as $company): ?>
            <tr>
                <td><?= $company->has('company') ? $this->Html->link($company->company->company_id, ['controller' => 'Companies', 'action' => 'view', $company->company->company_id]) : h($company->company_id) ?></td>
                <td style="width: 5%"><?= h($company->company_name) ?></td>
                <td><?= h($company->company_email) ?></td>
                <td><?= h($company->company_address) ?></td>
                <td><?= h($company->company_profile) ?></td>
                <td><?= date('d M Y', strtotime(h($company->company_created))) ?></td>
                <td class="actions">
                    <?= $this->Html->link('', ['action' => 'view', $company->company_id], ['class'=>'fa fa-eye']) ?>
                    <?= $this->Html->link('', ['action' => 'edit', $company->company_id], ['class'=>'fa fa-pencil-square-o']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $company->company_id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->company_id)]) ?>
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
