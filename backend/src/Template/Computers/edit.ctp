<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $computer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Computers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List New Licenses'), ['controller' => 'NewLicenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New New License'), ['controller' => 'NewLicenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="computers form large-9 medium-8 columns content">
    <?= $this->Form->create($computer) ?>
    <fieldset>
        <legend><?= __('Edit Computer') ?></legend>
        <?php
            echo $this->Form->input('store_id', ['options' => $stores]);
            echo $this->Form->input('id_code');
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('system_key');
            echo $this->Form->input('active');
            echo $this->Form->input('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
