<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $hostFamily->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $hostFamily->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Host Families'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="hostFamilies form large-9 medium-8 columns content">
    <?= $this->Form->create($hostFamily) ?>
    <fieldset>
        <legend><?= __('Edit Host Family') ?></legend>
        <?php
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('animal_list');
            echo $this->Form->input('dog_male');
            echo $this->Form->input('dog_female');
            echo $this->Form->input('puppy');
            echo $this->Form->input('cat_male');
            echo $this->Form->input('cat_female');
            echo $this->Form->input('kitten');
            echo $this->Form->input('rodent');
            echo $this->Form->input('nac');
            echo $this->Form->input('poultry');
            echo $this->Form->input('animal_numbre');
            echo $this->Form->input('house');
            echo $this->Form->input('garden');
            echo $this->Form->input('cloture');
            echo $this->Form->input('securised');
            echo $this->Form->input('premis');
            echo $this->Form->input('familly_membre');
            echo $this->Form->input('children');
            echo $this->Form->input('experience');
            echo $this->Form->input('place_animal');
            echo $this->Form->input('activity');
            echo $this->Form->input('disponibility');
            echo $this->Form->input('veterinary_access');
            echo $this->Form->input('quarantine');
            echo $this->Form->input('note');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
