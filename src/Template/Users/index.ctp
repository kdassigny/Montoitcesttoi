<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Host Families'), ['controller' => 'HostFamilies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Host Family'), ['controller' => 'HostFamilies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('username') ?></th>
                <th><?= $this->Paginator->sort('fisrt_name') ?></th>
                <th><?= $this->Paginator->sort('last_name') ?></th>
                <th><?= $this->Paginator->sort('is_admin') ?></th>
                <th><?= $this->Paginator->sort('is_adherant') ?></th>
                <th><?= $this->Paginator->sort('address_id') ?></th>
                <th><?= $this->Paginator->sort('telephone_portable') ?></th>
                <th><?= $this->Paginator->sort('telephone_fixe') ?></th>
                <th><?= $this->Paginator->sort('facebook') ?></th>
                <th><?= $this->Paginator->sort('postion') ?></th>
                <th><?= $this->Paginator->sort('description') ?></th>
                <th><?= $this->Paginator->sort('image_id') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->fisrt_name) ?></td>
                <td><?= h($user->last_name) ?></td>
                <td><?= h($user->is_admin) ?></td>
                <td><?= $this->Number->format($user->is_adherant) ?></td>
                <td><?= $user->has('address') ? $this->Html->link($user->address->id, ['controller' => 'Addresses', 'action' => 'view', $user->address->id]) : '' ?></td>
                <td><?= h($user->telephone_portable) ?></td>
                <td><?= h($user->telephone_fixe) ?></td>
                <td><?= h($user->facebook) ?></td>
                <td><?= h($user->postion) ?></td>
                <td><?= h($user->description) ?></td>
                <td><?= $user->has('image') ? $this->Html->link($user->image->id, ['controller' => 'Images', 'action' => 'view', $user->image->id]) : '' ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
