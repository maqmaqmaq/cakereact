<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Store'), ['action' => 'edit', $store->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Store'), ['action' => 'delete', $store->id], ['confirm' => __('Are you sure you want to delete # {0}?', $store->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Stores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['controller' => 'Accounts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['controller' => 'Accounts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Computers'), ['controller' => 'Computers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Computer'), ['controller' => 'Computers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="stores view large-9 medium-8 columns content">
    <h3><?= h($store->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Account') ?></th>
            <td><?= $store->has('account') ? $this->Html->link($store->account->name, ['controller' => 'Accounts', 'action' => 'view', $store->account->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Code') ?></th>
            <td><?= h($store->id_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($store->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($store->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($store->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($store->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $store->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($store->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($store->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Computers') ?></h4>
        <?php if (!empty($store->computers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Store Id') ?></th>
                <th scope="col"><?= __('Id Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('System Key') ?></th>
                <th scope="col"><?= __('Active') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($store->computers as $computers): ?>
            <tr>
                <td><?= h($computers->id) ?></td>
                <td><?= h($computers->store_id) ?></td>
                <td><?= h($computers->id_code) ?></td>
                <td><?= h($computers->name) ?></td>
                <td><?= h($computers->description) ?></td>
                <td><?= h($computers->url) ?></td>
                <td><?= h($computers->system_key) ?></td>
                <td><?= h($computers->active) ?></td>
                <td><?= h($computers->deleted) ?></td>
                <td><?= h($computers->created) ?></td>
                <td><?= h($computers->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Computers', 'action' => 'view', $computers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Computers', 'action' => 'edit', $computers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Computers', 'action' => 'delete', $computers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
