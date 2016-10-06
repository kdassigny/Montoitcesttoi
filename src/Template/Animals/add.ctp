<div class="container"
<div class="row"
<div class="span10"
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Animals'), ['action' => 'index']) ?></li>

    </ul>
</nav>
<div class="animals form large-9 medium-8 columns content">
    <?= $this->Form->create($animal) ?>
    <fieldset>
        <legend><?= __('ajouter animal') ?></legend>
        <label>Nom</label>
        <?= $this->Form->input('animal_name', ['label' => '']); ?>
        <label>Sexe</label>
        <?= $this->Form->input('sexe', ['label' => '']); ?>
        <label>Espèce</label>
        <?= $this->Form->input('espece_id', ['options' => $especes, 'label' => '']); ?>
        <label>Catégorie</label>
        <?= $this->Form->input('categorie_id', ['label' => '', 'options' => $categories]); ?>
        <label>Race</label>
        <?= $this->Form->input('race', ['label' => '']); ?>
        <label>Naissance</label>
        <?= $this->Form->input('age', ['label' => '']); ?>
        <label>Adresse</label>
        <?= $this->Form->input('address_id', ['options' => $addresses, 'empty' => true]); ?>
        <?= $this->Form->input('arrived'); ?>
        <?= $this->Form->input('leaving', ['empty' => true]); ?>
        <?= $this->Form->input('description', ['label' => '']); ?>
    </fieldset>
    <?= $this->Form->button(__('valider')) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>
</div>
