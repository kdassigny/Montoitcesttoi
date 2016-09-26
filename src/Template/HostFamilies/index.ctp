<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Host Family'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hostFamilies index large-9 medium-8 columns content">
    <h3><?= __('Host Families') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('user_id') ?></th>
                <th><?= $this->Paginator->sort('animal_list') ?></th>
                <th><?= $this->Paginator->sort('dog_male') ?></th>
                <th><?= $this->Paginator->sort('dog_female') ?></th>
                <th><?= $this->Paginator->sort('puppy') ?></th>
                <th><?= $this->Paginator->sort('cat_male') ?></th>
                <th><?= $this->Paginator->sort('cat_female') ?></th>
                <th><?= $this->Paginator->sort('kitten') ?></th>
                <th><?= $this->Paginator->sort('rodent') ?></th>
                <th><?= $this->Paginator->sort('nac') ?></th>
                <th><?= $this->Paginator->sort('poultry') ?></th>
                <th><?= $this->Paginator->sort('animal_numbre') ?></th>
                <th><?= $this->Paginator->sort('house') ?></th>
                <th><?= $this->Paginator->sort('cloture') ?></th>
                <th><?= $this->Paginator->sort('securised') ?></th>
                <th><?= $this->Paginator->sort('premis') ?></th>
                <th><?= $this->Paginator->sort('familly_membre') ?></th>
                <th><?= $this->Paginator->sort('children') ?></th>
                <th><?= $this->Paginator->sort('experience') ?></th>
                <th><?= $this->Paginator->sort('place_animal') ?></th>
                <th><?= $this->Paginator->sort('activity') ?></th>
                <th><?= $this->Paginator->sort('disponibility') ?></th>
                <th><?= $this->Paginator->sort('veterinary_access') ?></th>
                <th><?= $this->Paginator->sort('quarantine') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($hostFamilies as $hostFamily): ?>
            <tr>
                <td><?= $this->Number->format($hostFamily->id) ?></td>
                <td><?= $hostFamily->has('user') ? $this->Html->link($hostFamily->user->id, ['controller' => 'Users', 'action' => 'view', $hostFamily->user->id]) : '' ?></td>
                <td><?= h($hostFamily->animal_list) ?></td>
                <td><?= h($hostFamily->dog_male) ?></td>
                <td><?= h($hostFamily->dog_female) ?></td>
                <td><?= h($hostFamily->puppy) ?></td>
                <td><?= h($hostFamily->cat_male) ?></td>
                <td><?= h($hostFamily->cat_female) ?></td>
                <td><?= h($hostFamily->kitten) ?></td>
                <td><?= h($hostFamily->rodent) ?></td>
                <td><?= h($hostFamily->nac) ?></td>
                <td><?= h($hostFamily->poultry) ?></td>
                <td><?= $this->Number->format($hostFamily->animal_numbre) ?></td>
                <td><?= h($hostFamily->house) ?></td>
                <td><?= h($hostFamily->cloture) ?></td>
                <td><?= h($hostFamily->securised) ?></td>
                <td><?= h($hostFamily->premis) ?></td>
                <td><?= $this->Number->format($hostFamily->familly_membre) ?></td>
                <td><?= $this->Number->format($hostFamily->children) ?></td>
                <td><?= h($hostFamily->experience) ?></td>
                <td><?= h($hostFamily->place_animal) ?></td>
                <td><?= h($hostFamily->activity) ?></td>
                <td><?= h($hostFamily->disponibility) ?></td>
                <td><?= h($hostFamily->veterinary_access) ?></td>
                <td><?= h($hostFamily->quarantine) ?></td>
                <td><?= h($hostFamily->created) ?></td>
                <td><?= h($hostFamily->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $hostFamily->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $hostFamily->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $hostFamily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hostFamily->id)]) ?>
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
