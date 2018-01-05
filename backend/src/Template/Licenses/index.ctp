<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New License'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Computers'), ['controller' => 'Computers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Computer'), ['controller' => 'Computers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="licenses index large-9 medium-8 columns content">
    <h3><?= __('Licenses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('computer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('registration_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('system_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('activation_key') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('program_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('version_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('version_code2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('type_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('license_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expired_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('module') ?></th>
                <th scope="col"><?= $this->Paginator->sort('generator_version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($licenses as $license): ?>
            <tr>
                <td><?= $this->Number->format($license->id) ?></td>
                <td><?= $license->has('computer') ? $this->Html->link($license->computer->name, ['controller' => 'Computers', 'action' => 'view', $license->computer->id]) : '' ?></td>
                <td><?= h($license->name) ?></td>
                <td><?= h($license->registration_key) ?></td>
                <td><?= h($license->system_key) ?></td>
                <td><?= h($license->activation_key) ?></td>
                <td><?= h($license->id_code) ?></td>
                <td><?= h($license->program_code) ?></td>
                <td><?= h($license->version_code) ?></td>
                <td><?= h($license->version_code2) ?></td>
                <td><?= h($license->type_code) ?></td>
                <td><?= h($license->license_date) ?></td>
                <td><?= h($license->expired_date) ?></td>
                <td><?= h($license->module) ?></td>
                <td><?= h($license->generator_version) ?></td>
                <td><?= h($license->active) ?></td>
                <td><?= h($license->deleted) ?></td>
                <td><?= h($license->created) ?></td>
                <td><?= h($license->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $license->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $license->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $license->id], ['confirm' => __('Are you sure you want to delete # {0}?', $license->id)]) ?>
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
