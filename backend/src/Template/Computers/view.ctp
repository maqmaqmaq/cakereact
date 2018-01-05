<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Computer'), ['action' => 'edit', $computer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Computer'), ['action' => 'delete', $computer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Computers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Computer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List New Licenses'), ['controller' => 'NewLicenses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New New License'), ['controller' => 'NewLicenses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="computers view large-9 medium-8 columns content">
    <h3><?= h($computer->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Store') ?></th>
            <td><?= $computer->has('store') ? $this->Html->link($computer->store->name, ['controller' => 'Stores', 'action' => 'view', $computer->store->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Code') ?></th>
            <td><?= h($computer->id_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($computer->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('System Key') ?></th>
            <td><?= h($computer->system_key) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($computer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($computer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($computer->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $computer->active ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $computer->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($computer->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($computer->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Licenses') ?></h4>
        <?php if (!empty($computer->licenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Computer Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Registration Key') ?></th>
                <th scope="col"><?= __('System Key') ?></th>
                <th scope="col"><?= __('Activation Key') ?></th>
                <th scope="col"><?= __('Id Code') ?></th>
                <th scope="col"><?= __('Program Code') ?></th>
                <th scope="col"><?= __('Version Code') ?></th>
                <th scope="col"><?= __('Version Code2') ?></th>
                <th scope="col"><?= __('Type Code') ?></th>
                <th scope="col"><?= __('License Date') ?></th>
                <th scope="col"><?= __('Expired Date') ?></th>
                <th scope="col"><?= __('Module') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Generator Version') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($computer->licenses as $licenses): ?>
            <tr>
                <td><?= h($licenses->id) ?></td>
                <td><?= h($licenses->computer_id) ?></td>
                <td><?= h($licenses->name) ?></td>
                <td><?= h($licenses->registration_key) ?></td>
                <td><?= h($licenses->system_key) ?></td>
                <td><?= h($licenses->activation_key) ?></td>
                <td><?= h($licenses->id_code) ?></td>
                <td><?= h($licenses->program_code) ?></td>
                <td><?= h($licenses->version_code) ?></td>
                <td><?= h($licenses->version_code2) ?></td>
                <td><?= h($licenses->type_code) ?></td>
                <td><?= h($licenses->license_date) ?></td>
                <td><?= h($licenses->expired_date) ?></td>
                <td><?= h($licenses->module) ?></td>
                <td><?= h($licenses->description) ?></td>
                <td><?= h($licenses->generator_version) ?></td>
                <td><?= h($licenses->active) ?></td>
                <td><?= h($licenses->deleted) ?></td>
                <td><?= h($licenses->created) ?></td>
                <td><?= h($licenses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Licenses', 'action' => 'view', $licenses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Licenses', 'action' => 'edit', $licenses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Licenses', 'action' => 'delete', $licenses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $licenses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related New Licenses') ?></h4>
        <?php if (!empty($computer->new_licenses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Computer Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Registration Key') ?></th>
                <th scope="col"><?= __('System Key') ?></th>
                <th scope="col"><?= __('Activation Key') ?></th>
                <th scope="col"><?= __('Id Code') ?></th>
                <th scope="col"><?= __('Program Code') ?></th>
                <th scope="col"><?= __('Version Code') ?></th>
                <th scope="col"><?= __('Type Code') ?></th>
                <th scope="col"><?= __('Expired Date') ?></th>
                <th scope="col"><?= __('Module') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($computer->new_licenses as $newLicenses): ?>
            <tr>
                <td><?= h($newLicenses->id) ?></td>
                <td><?= h($newLicenses->computer_id) ?></td>
                <td><?= h($newLicenses->name) ?></td>
                <td><?= h($newLicenses->registration_key) ?></td>
                <td><?= h($newLicenses->system_key) ?></td>
                <td><?= h($newLicenses->activation_key) ?></td>
                <td><?= h($newLicenses->id_code) ?></td>
                <td><?= h($newLicenses->program_code) ?></td>
                <td><?= h($newLicenses->version_code) ?></td>
                <td><?= h($newLicenses->type_code) ?></td>
                <td><?= h($newLicenses->expired_date) ?></td>
                <td><?= h($newLicenses->module) ?></td>
                <td><?= h($newLicenses->description) ?></td>
                <td><?= h($newLicenses->active) ?></td>
                <td><?= h($newLicenses->deleted) ?></td>
                <td><?= h($newLicenses->created) ?></td>
                <td><?= h($newLicenses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'NewLicenses', 'action' => 'view', $newLicenses->]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'NewLicenses', 'action' => 'edit', $newLicenses->]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'NewLicenses', 'action' => 'delete', $newLicenses->], ['confirm' => __('Are you sure you want to delete # {0}?', $newLicenses->)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
