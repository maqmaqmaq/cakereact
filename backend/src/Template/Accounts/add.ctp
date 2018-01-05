<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Distribiutors'), ['controller' => 'Distribiutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Distribiutor'), ['controller' => 'Distribiutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts form large-9 medium-8 columns content">
    <?= $this->Form->create($account) ?>
    <fieldset>
        <legend><?= __('Add Account') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('distribiutor_id', ['options' => $distribiutors, 'empty' => true]);
            echo $this->Form->input('description');
            echo $this->Form->input('url');
            echo $this->Form->input('email');
            echo $this->Form->input('city');
            echo $this->Form->input('address');
            echo $this->Form->input('postalcode');
            echo $this->Form->input('phone');
            echo $this->Form->input('id_code');
            echo $this->Form->input('done');
            echo $this->Form->input('fv');
            echo $this->Form->input('nolimit');
            echo $this->Form->input('termin');
            echo $this->Form->input('deleted');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
