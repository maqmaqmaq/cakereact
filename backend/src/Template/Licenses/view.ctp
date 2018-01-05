<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit License'), ['action' => 'edit', $license->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete License'), ['action' => 'delete', $license->id], ['confirm' => __('Are you sure you want to delete # {0}?', $license->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Computers'), ['controller' => 'Computers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Computer'), ['controller' => 'Computers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="licenses view large-9 medium-8 columns content">
    <h3><?= h($license->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Computer') ?></th>
            <td><?= $license->has('computer') ? $this->Html->link($license->computer->name, ['controller' => 'Computers', 'action' => 'view', $license->computer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($license->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Registration Key') ?></th>
            <td><?= h($license->registration_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('System Key') ?></th>
            <td><?= h($license->system_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Activation Key') ?></th>
            <td><?= h($license->activation_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Code') ?></th>
            <td><?= h($license->id_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Program Code') ?></th>
            <td><?= h($license->program_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version Code') ?></th>
            <td><?= h($license->version_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Version Code2') ?></th>
            <td><?= h($license->version_code2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type Code') ?></th>
            <td><?= h($license->type_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('License Date') ?></th>
            <td><?= h($license->license_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Expired Date') ?></th>
            <td><?= h($license->expired_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Module') ?></th>
            <td><?= h($license->module) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Generator Version') ?></th>
            <td><?= h($license->generator_version) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($license->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($license->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($license->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $license->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $license->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($license->description)); ?>
    </div>
</div>
