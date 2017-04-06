<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sample'), ['action' => 'edit', $sample->sample_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sample'), ['action' => 'delete', $sample->sample_id], ['confirm' => __('Are you sure you want to delete # {0}?', $sample->sample_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Samples'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sample'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="samples view large-9 medium-8 columns content">
    <h3><?= h($sample->sample_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Sample Name') ?></th>
            <td><?= h($sample->sample_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Id') ?></th>
            <td><?= $this->Number->format($sample->sample_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sample Timestamp') ?></th>
            <td><?= h($sample->sample_timestamp) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Sample Description') ?></h4>
        <?= $this->Text->autoParagraph(h($sample->sample_description)); ?>
    </div>
</div>
