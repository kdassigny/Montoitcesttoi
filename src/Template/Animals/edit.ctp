<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $animal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $animal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Especes'), ['controller' => 'Especes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Espece'), ['controller' => 'Especes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="animals form large-9 medium-8 columns content">
    <?= $this->Form->create($animal) ?>
    <fieldset>
        <legend><?= __('Edit Animal') ?></legend>
        <?php
            echo $this->Form->input('animal_name');
            echo $this->Form->input('sexe');
            echo $this->Form->input('espece_id', ['options' => $especes]);
            echo $this->Form->input('categorie_id', ['options' => $categories]);
            echo $this->Form->input('race');
            echo $this->Form->input('age');
            echo $this->Form->input('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->input('arrived');
            echo $this->Form->input('leaving', ['empty' => true]);
            echo $this->Form->input('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
