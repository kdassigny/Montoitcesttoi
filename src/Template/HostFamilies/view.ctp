<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Host Family'), ['action' => 'edit', $hostFamily->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Host Family'), ['action' => 'delete', $hostFamily->id], ['confirm' => __('Are you sure you want to delete # {0}?', $hostFamily->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Host Families'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Host Family'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="hostFamilies view large-9 medium-8 columns content">
    <h3><?= h($hostFamily->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('User') ?></th>
            <td><?= $hostFamily->has('user') ? $this->Html->link($hostFamily->user->id, ['controller' => 'Users', 'action' => 'view', $hostFamily->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th><?= __('Animal List') ?></th>
            <td><?= h($hostFamily->animal_list) ?></td>
        </tr>
        <tr>
            <th><?= __('Place Animal') ?></th>
            <td><?= h($hostFamily->place_animal) ?></td>
        </tr>
        <tr>
            <th><?= __('Activity') ?></th>
            <td><?= h($hostFamily->activity) ?></td>
        </tr>
        <tr>
            <th><?= __('Disponibility') ?></th>
            <td><?= h($hostFamily->disponibility) ?></td>
        </tr>
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= $this->Number->format($hostFamily->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Animal Numbre') ?></th>
            <td><?= $this->Number->format($hostFamily->animal_numbre) ?></td>
        </tr>
        <tr>
            <th><?= __('Familly Membre') ?></th>
            <td><?= $this->Number->format($hostFamily->familly_membre) ?></td>
        </tr>
        <tr>
            <th><?= __('Children') ?></th>
            <td><?= $this->Number->format($hostFamily->children) ?></td>
        </tr>
        <tr>
            <th><?= __('Created') ?></th>
            <td><?= h($hostFamily->created) ?></td>
        </tr>
        <tr>
            <th><?= __('Modified') ?></th>
            <td><?= h($hostFamily->modified) ?></td>
        </tr>
        <tr>
            <th><?= __('Dog Male') ?></th>
            <td><?= $hostFamily->dog_male ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Dog Female') ?></th>
            <td><?= $hostFamily->dog_female ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Puppy') ?></th>
            <td><?= $hostFamily->puppy ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Cat Male') ?></th>
            <td><?= $hostFamily->cat_male ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Cat Female') ?></th>
            <td><?= $hostFamily->cat_female ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Kitten') ?></th>
            <td><?= $hostFamily->kitten ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Rodent') ?></th>
            <td><?= $hostFamily->rodent ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Nac') ?></th>
            <td><?= $hostFamily->nac ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Poultry') ?></th>
            <td><?= $hostFamily->poultry ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('House') ?></th>
            <td><?= $hostFamily->house ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Cloture') ?></th>
            <td><?= $hostFamily->cloture ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Securised') ?></th>
            <td><?= $hostFamily->securised ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Premis') ?></th>
            <td><?= $hostFamily->premis ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Experience') ?></th>
            <td><?= $hostFamily->experience ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Veterinary Access') ?></th>
            <td><?= $hostFamily->veterinary_access ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th><?= __('Quarantine') ?></th>
            <td><?= $hostFamily->quarantine ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Garden') ?></h4>
        <?= $this->Text->autoParagraph(h($hostFamily->garden)); ?>
    </div>
    <div class="row">
        <h4><?= __('Note') ?></h4>
        <?= $this->Text->autoParagraph(h($hostFamily->note)); ?>
    </div>
</div>
