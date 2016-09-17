<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Host Families'), ['controller' => 'HostFamilies', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Host Family'), ['controller' => 'HostFamilies', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th><?= __('Fisrt Name') ?></th>
            <td><?= h($user->fisrt_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Last Name') ?></th>
            <td><?= h($user->last_name) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= $user->has('address') ? $this->Html->link($user->address->id, ['controller' => 'Addresses', 'action' => 'view', $user->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone Portable') ?></th>
            <td><?= h($user->telephone_portable) ?></td>
        </tr>
        <tr>
            <th><?= __('Telephone Fixe') ?></th>
            <td><?= h($user->telephone_fixe) ?></td>
        </tr>
        <tr>
            <th><?= __('Facebook') ?></th>
            <td><?= h($user->facebook) ?></td>
        </tr>
        <tr>
            <th><?= __('Postion') ?></th>
            <td><?= h($user->postion) ?></td>
        </tr>
        <tr>
            <th><?= __('Description') ?></th>
            <td><?= h($user->description) ?></td>
        </tr>
        <tr>
            <th><?= __('Image') ?></th>
            <td><?= $user->has('image') ? $this->Html->link($user->image->id, ['controller' => 'Images', 'action' => 'view', $user->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Adherant') ?></th>
            <td><?= $this->Number->format($user->is_adherant) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Is Admin') ?></th>
            <td><?= $user->is_admin ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Host Families') ?></h4>
        <?php if (!empty($user->host_families)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th><?= __('Id') ?></th>
                <th><?= __('User Id') ?></th>
                <th><?= __('Animal List') ?></th>
                <th><?= __('Dog Male') ?></th>
                <th><?= __('Dog Female') ?></th>
                <th><?= __('Puppy') ?></th>
                <th><?= __('Cat Male') ?></th>
                <th><?= __('Cat Female') ?></th>
                <th><?= __('Kitten') ?></th>
                <th><?= __('Rodent') ?></th>
                <th><?= __('Nac') ?></th>
                <th><?= __('Poultry') ?></th>
                <th><?= __('Animal Numbre') ?></th>
                <th><?= __('House') ?></th>
                <th><?= __('Garden') ?></th>
                <th><?= __('Cloture') ?></th>
                <th><?= __('Securised') ?></th>
                <th><?= __('Premis') ?></th>
                <th><?= __('Familly Membre') ?></th>
                <th><?= __('Children') ?></th>
                <th><?= __('Experience') ?></th>
                <th><?= __('Place Animal') ?></th>
                <th><?= __('Activity') ?></th>
                <th><?= __('Disponibility') ?></th>
                <th><?= __('Veterinary Access') ?></th>
                <th><?= __('Quarantine') ?></th>
                <th><?= __('Note') ?></th>
                <th><?= __('Created') ?></th>
                <th><?= __('Modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->host_families as $hostFamilies): ?>
            <tr>
                <td><?= h($hostFamilies->id) ?></td>
                <td><?= h($hostFamilies->user_id) ?></td>
                <td><?= h($hostFamilies->animal_list) ?></td>
                <td><?= h($hostFamilies->dog_male) ?></td>
                <td><?= h($hostFamilies->dog_female) ?></td>
                <td><?= h($hostFamilies->puppy) ?></td>
                <td><?= h($hostFamilies->cat_male) ?></td>
                <td><?= h($hostFamilies->cat_female) ?></td>
                <td><?= h($hostFamilies->kitten) ?></td>
                <td><?= h($hostFamilies->rodent) ?></td>
                <td><?= h($hostFamilies->nac) ?></td>
                <td><?= h($hostFamilies->poultry) ?></td>
                <td><?= h($hostFamilies->animal_numbre) ?></td>
                <td><?= h($hostFamilies->house) ?></td>
                <td><?= h($hostFamilies->garden) ?></td>
                <td><?= h($hostFamilies->cloture) ?></td>
                <td><?= h($hostFamilies->securised) ?></td>
                <td><?= h($hostFamilies->premis) ?></td>
                <td><?= h($hostFamilies->familly_membre) ?></td>
                <td><?= h($hostFamilies->children) ?></td>
                <td><?= h($hostFamilies->experience) ?></td>
                <td><?= h($hostFamilies->place_animal) ?></td>
                <td><?= h($hostFamilies->activity) ?></td>
                <td><?= h($hostFamilies->disponibility) ?></td>
                <td><?= h($hostFamilies->veterinary_access) ?></td>
                <td><?= h($hostFamilies->quarantine) ?></td>
                <td><?= h($hostFamilies->note) ?></td>
                <td><?= h($hostFamilies->created) ?></td>
                <td><?= h($hostFamilies->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'HostFamilies', 'action' => 'view', $hostFamilies->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'HostFamilies', 'action' => 'edit', $hostFamilies->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'HostFamilies', 'action' => 'delete', $hostFamilies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hostFamilies->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
