<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Computers'), ['controller' => 'Computers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Computer'), ['controller' => 'Computers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licenses form large-9 medium-8 columns content">
    <?= $this->Form->create($license) ?>
    <fieldset>
        <legend><?= __('Add License') ?></legend>
        <?php
            echo $this->Form->input('computer_id', ['options' => $computers]);
            echo $this->Form->input('name');
            echo $this->Form->input('registration_key');
            echo $this->Form->input('system_key');
            echo $this->Form->input('activation_key');
            echo $this->Form->input('id_code');
            echo $this->Form->input('program_code');
            echo $this->Form->input('version_code');
            echo $this->Form->input('version_code2');
            echo $this->Form->input('type_code');
            echo $this->Form->input('license_date');
            echo $this->Form->input('expired_date');
            echo $this->Form->input('module');
            echo $this->Form->input('description');
            echo $this->Form->input('generator_version');
            echo $this->Form->input('active');
            echo $this->Form->input('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
