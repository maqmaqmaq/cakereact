<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Distribiutors'), ['controller' => 'Distribiutors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Distribiutor'), ['controller' => 'Distribiutors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="accounts index large-9 medium-8 columns content">
    <h3><?= __('Accounts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distribiutor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postalcode') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('done') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fv') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nolimit') ?></th>
                <th scope="col"><?= $this->Paginator->sort('termin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('deleted') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($accounts as $account): ?>
            <tr>
                <td><?= $this->Number->format($account->id) ?></td>
                <td><?= h($account->name) ?></td>
                <td><?= $account->has('distribiutor') ? $this->Html->link($account->distribiutor->name, ['controller' => 'Distribiutors', 'action' => 'view', $account->distribiutor->id]) : '' ?></td>
                <td><?= h($account->email) ?></td>
                <td><?= h($account->city) ?></td>
                <td><?= h($account->address) ?></td>
                <td><?= h($account->postalcode) ?></td>
                <td><?= h($account->phone) ?></td>
                <td><?= h($account->id_code) ?></td>
                <td><?= h($account->done) ?></td>
                <td><?= h($account->fv) ?></td>
                <td><?= h($account->nolimit) ?></td>
                <td><?= h($account->termin) ?></td>
                <td><?= h($account->deleted) ?></td>
                <td><?= h($account->created) ?></td>
                <td><?= h($account->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $account->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $account->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?>
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
