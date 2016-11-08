<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Gestion des Utilisateurs</h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<div class="">
    <div class="row">
        <div id="content-page" class="">
            <div class=" page type-page status-publish hentry group">
                <div class="short-table white">
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="align-left"><?= __('Actions') ?></th>
                            <th><?= $this->Paginator->sort('last_name', 'Nom') ?></th>
                            <th><?= $this->Paginator->sort('fisrt_name', 'Prénom') ?></th>
                            <th><?= $this->Paginator->sort('email') ?></th>
                            <th><?= $this->Paginator->sort('username') ?></th>
                            <th><?= $this->Paginator->sort('is_admin', 'Admin') ?></th>
                            <th><?= $this->Paginator->sort('is_adherant', 'Adérant') ?></th>
                            <th><?= $this->Paginator->sort('address_id', 'Adresse') ?></th>
                            <th><?= $this->Paginator->sort('telephone_portable', 'Telephone portable') ?></th>
                            <th><?= $this->Paginator->sort('telephone_fixe', 'Telephone fixe') ?></th>
                            <th><?= $this->Paginator->sort('facebook') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>
                                <td class="actions align-left">
                                    <?= $this->Html->link(__('Voir profil'), ['action' => 'view', $user->id]) ?>
                                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $user->id]) ?>
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $user->id], ['confirm' => __('Supprimer ?', $user->id)]) ?>
                                </td>
                                <td><?= h($user->last_name) ?></td>
                                <td><?= h($user->fisrt_name) ?></td>
                                <td><?= h($user->email) ?></td>
                                <td><?= h($user->username) ?></td>
                                <td><?= h($user->is_admin) ? __('non') : __('oui'); ?></td>
                                <td><?= h($user->is_adherant) ? __('non') : __('oui'); ?></td>
                                <td><?= h($user->address->address) ?><br><?= h($user->address->city) ?></td>
                                <td><?= h($user->telephone_portable) ?></td>
                                <td><?= h($user->telephone_fixe) ?></td>
                                <td><?= h($user->facebook) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                    <div class="row">
                        <div class="span6 offset5">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
