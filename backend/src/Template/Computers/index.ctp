<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Computer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Licenses'), ['controller' => 'Licenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New License'), ['controller' => 'Licenses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List New Licenses'), ['controller' => 'NewLicenses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New New License'), ['controller' => 'NewLicenses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="computers index large-9 medium-8 columns content">
    <h3><?= __('Computers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('store_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('system_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($computers as $computer): ?>
            <tr>
                <td><?= $this->Number->format($computer->id) ?></td>
                <td><?= $computer->has('store') ? $this->Html->link($computer->store->name, ['controller' => 'Stores', 'action' => 'view', $computer->store->id]) : '' ?></td>
                <td><?= h($computer->id_code) ?></td>
                <td><?= h($computer->name) ?></td>
                <td><?= h($computer->system_key) ?></td>
                <td><?= h($computer->active) ?></td>
                <td><?= h($computer->deleted) ?></td>
                <td><?= h($computer->created) ?></td>
                <td><?= h($computer->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $computer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $computer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $computer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $computer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
