<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Gestion des Animaux</h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<div>
    <div class="row">
        <div id="content-page">
            <div class=" page type-page status-publish hentry group ">
                <div class="short-table white span12">
                    <table cellpadding="0" cellspacing="0">
                        <thead>
                        <tr>
                            <th class="align-left"><?= __('Actions') ?></th>
                            <th><?= $this->Paginator->sort('animal_name', 'nom') ?></th>
                            <th><?= $this->Paginator->sort('sexe') ?></th>
                            <th><?= $this->Paginator->sort('espece_id', 'espèce') ?></th>
                            <th><?= $this->Paginator->sort('categorie_id', 'catégorie') ?></th>
                            <th><?= $this->Paginator->sort('race') ?></th>
                            <th><?= $this->Paginator->sort('age', 'naissance') ?></th>
                            <th><?= $this->Paginator->sort('address_id', 'adresse') ?></th>
                            <th><?= $this->Paginator->sort('arrived', 'date d\'arrivée') ?></th>
                            <th><?= $this->Paginator->sort('leaving', 'date de dépard') ?></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($animals as $animal): ?>
                            <tr>
                                <td class="actions align-left">
                                    <?= $this->Html->link(__('Voir profil'), ['controller' => 'Animals', 'action' => 'view', $animal->id]) ?>
                                    <br>
                                    <?= $this->Html->link(__('Editer'), ['action' => 'edit', $animal->id]) ?><br>
                                    <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $animal->id], ['confirm' => __('Supprimé ?', $animal->name)]) ?>
                                </td>
                                <td><?= h($animal->animal_name) ?></td>
                                <td><?= h($animal->sexe) ? __('femelle') : __('mâle'); ?></td>
                                <td><?= h($animal->espece->espece_name) ?></td>
                                <td><?= h($animal->category->categorie_name) ?></td>
                                <td><?= h($animal->race) ?></td>
                                <td><?= h($animal->age) ?></td>
                                <td><?= h($animal->address->address) ?><br><?= h($animal->address->city) ?></td>
                                <td><?= h($animal->arrived) ?></td>
                                <td><?= h($animal->leaving) ?></td>
                            </tr>
                        <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</div>


