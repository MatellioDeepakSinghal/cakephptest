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
<div class="company view large-10 medium-9 columns content">
    <h3><?= h($company->company_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Company') ?></th>
            <td><?= $company->has('company') ? $this->Html->link($company->company->company_id, ['controller' => 'Companies', 'action' => 'view', $company->company->company_id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Name') ?></th>
            <td><?= h($company->company_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Email') ?></th>
            <td><?= h($company->company_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Address') ?></th>
            <td><?= h($company->company_address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Profile') ?></th>
            <td><?= h($company->company_profile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Company Created') ?></th>
            <td><?= date('d M Y', strtotime(h($company->company_created))) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Company Status') ?></h4>
        <?= $this->Text->autoParagraph(h($company->company_status)); ?>
    </div>
</div>
