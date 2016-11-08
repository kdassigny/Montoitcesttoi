<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Ajouter un animal</h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<form>
    <div class="row">
        <div class="span11 offset2">
            <?= $this->Form->create($animal) ?>
            <fieldset>
                <div class="'row">
                    <div class="span4">
                        <label>Nom</label>
                        <?= $this->Form->input('animal_name', ['label' => false]); ?>
                        <label class="radio-inline">Sexe</label>
                        <?= $this->Form->radio(
                            'sexe',
                            [
                                ['value' => '0', 'text' => 'femelle', 'style' => 'color:red;'],
                                ['value' => '1', 'text' => 'Mâle', 'style' => 'color:blue;'],
                            ]); ?>
                        <label>Escpèce</label>
                        <?= $this->Form->input('espece_id', ['options' => $especes, 'label' => false]); ?>
                        <label>Etat</label>
                        <?= $this->Form->input('categorie_id', ['options' => $categories, 'label' => false]); ?>
                        <label>Race</label>
                        <?= $this->Form->input('race', ['label' => false]); ?>
                        <label>Naissance</label>
                        <?= $this->Form->dateWidget('age', ['type' => 'date', 'label' => false]); ?>
                    </div>
                    <div class="span4">
                        <label>Adresse</label>
                        <?= $this->Form->input('address_id', ['options' => $addresses, 'empty' => true, 'label' => false]); ?>
                        <label>Date d'arrivée</label>
                        <?= $this->Form->dateWidge('arrived', ['type' => 'date', 'label' => false]); ?>
                        <label>Date de départ</label>
                        <?= $this->Form->dateWidge('leaving', ['type' => 'date', 'empty' => true, 'label' => false]); ?>
                        <label>Description</label>
                        <?= $this->Form->input('description', ['label' => false]); ?>
                    </div>
                </div>
            </fieldset>
            <div class="row">
                <div class="span10 offset5">
                    <?= $this->Form->button('Valider<span class="icon tick">&nbsp;</span>', [
                        'type' => 'submit',
                        'escape' => false,
                        'class' => 'more-button more-button-rtl']); ?>
                </div>
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</form>