<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Account'), ['action' => 'edit', $account->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Account'), ['action' => 'delete', $account->id], ['confirm' => __('Are you sure you want to delete # {0}?', $account->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Accounts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Account'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Distribiutors'), ['controller' => 'Distribiutors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Distribiutor'), ['controller' => 'Distribiutors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Stores'), ['controller' => 'Stores', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Store'), ['controller' => 'Stores', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="accounts view large-9 medium-8 columns content">
    <h3><?= h($account->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($account->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Distribiutor') ?></th>
            <td><?= $account->has('distribiutor') ? $this->Html->link($account->distribiutor->name, ['controller' => 'Distribiutors', 'action' => 'view', $account->distribiutor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($account->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($account->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($account->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postalcode') ?></th>
            <td><?= h($account->postalcode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($account->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Code') ?></th>
            <td><?= h($account->id_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($account->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($account->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($account->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Done') ?></th>
            <td><?= $account->done ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fv') ?></th>
            <td><?= $account->fv ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nolimit') ?></th>
            <td><?= $account->nolimit ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Termin') ?></th>
            <td><?= $account->termin ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Deleted') ?></th>
            <td><?= $account->deleted ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($account->description)); ?>
    </div>
    <div class="row">
        <h4><?= __('Url') ?></h4>
        <?= $this->Text->autoParagraph(h($account->url)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Stores') ?></h4>
        <?php if (!empty($account->stores)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Account Id') ?></th>
                <th scope="col"><?= __('Id Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Deleted') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($account->stores as $stores): ?>
            <tr>
                <td><?= h($stores->id) ?></td>
                <td><?= h($stores->account_id) ?></td>
                <td><?= h($stores->id_code) ?></td>
                <td><?= h($stores->name) ?></td>
                <td><?= h($stores->description) ?></td>
                <td><?= h($stores->url) ?></td>
                <td><?= h($stores->deleted) ?></td>
                <td><?= h($stores->created) ?></td>
                <td><?= h($stores->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Stores', 'action' => 'view', $stores->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Stores', 'action' => 'edit', $stores->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Stores', 'action' => 'delete', $stores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $stores->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
