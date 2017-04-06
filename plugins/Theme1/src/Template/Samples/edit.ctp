<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $sample->sample_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $sample->sample_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Samples'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="samples form large-9 medium-8 columns content">
    <?= $this->Form->create($sample) ?>
    <fieldset>
        <legend><?= __('Edit Sample') ?></legend>
        <?php
            echo $this->Form->input('sample_name');
            echo $this->Form->input('sample_description');
            echo $this->Form->input('sample_timestamp');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
