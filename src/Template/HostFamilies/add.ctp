<div class="container group">

    <br>

    <div class="row box-title">
        <div class="span4">
            <div class="border-line"></div>
        </div>
        <h3 class="span4 ">Formulair de famille d'accueil</h3>
        <div class="span4">
            <div class="border-line"></div>
        </div>
    </div>
    <?= $this->Form->create($hostFamily, ['class' => 'form-group']); ?>
    <?= $this->Form->hidden('user_id', ['value' => 2]); ?>
    <fieldset>
        <div class="row">
            <div class="span12">
                <div class="pricing_box  radius-right">
                    <div class="header">
                        <h3 class="panel-title">Les Animaux</h3></div>
                    <br>
                    <div class="panel-body">
                        <h4>Vos animaux</h4>
                        <?= $this->Form->input('animal_list', ['label' => '', 'rows' => '8', 'style' => 'width:500px;']); ?>
                        <br>
                        <h4>Animaux acceptés</h4><br>
                        <div class="row">
                            <div class="span2 offset2">
                                <?= $this->Form->input('dog_male', ['label' => 'chien']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('cat_male', ['label' => 'chat']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('rodent', ['label' => 'rongeur']); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span2 offset2">
                                <?= $this->Form->input('dog_female', ['label' => 'chienne']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('cat_female', ['label' => 'chatte']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('bird', ['label' => 'oiseau']); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class="span2 offset2">
                                <?= $this->Form->input('puppy', ['label' => 'chiot']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('kitten', ['label' => 'chaton']); ?>
                            </div>
                            <div class="span2 offset1">
                                <?= $this->Form->input('nac', ['label' => 'NAC (reptil et autre)']); ?>
                                <br>
                            </div>
                            <br>
                            <div class="span12">
                                <?= $this->Form->input('animal_numbre', ['label' => 'Nombre d\'animaux accepté(environ)']); ?>
                                <br>
                                <h4>Les animaux aurons-ils un espaces bien à eux? Si oui precisez.</h4>
                                <?= $this->Form->input('place_animal', ['label' => '', 'rows' => '3']) ?>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="pricing_box  radius-right">
                    <div class="row">
                        <div class="span12">
                            <div class="header">
                                <h3 class="panel-title">Votre lieu de vie</h3></div>
                            <br>
                            <div class="panel-body">

                                <div class="row">
                                    <div class="span5">
                                        <h4>Dans quel type d'habitation vivez vous?</h4>
                                        <?= $this->Form->input('habitation', ['label' => '', 'rows' => '3']); ?>
                                    </div>
                                    <div class="span5">
                                        <h4>Votre espace exterieur est-il cloturé?</h4>
                                        <?= $this->Form->radio('cloture', [
                                            ['value' => '1', 'text' => 'Oui '],
                                            ['value' => '0', 'text' => 'Non'],
                                        ]); ?><br>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="span5">
                                        <h4>Possédez nous un espace exterieur?<br> Si oui décrivez le nous
                                            grossièrement.</h4>
                                        <?= $this->Form->input('garden', ['label' => '', 'rows' => '3']); ?>
                                    </div>
                                    <div class="span5">
                                        <h4>Les animaux seront-ils en mesur de sortir par leurs propres moyens?</h4>
                                        <?= $this->Form->radio('securised', [
                                            ['value' => '1', 'text' => 'Oui ', 'class' => 'radio-inline'],
                                            ['value' => '0', 'text' => 'Non', 'class' => 'radio-inline']
                                        ]); ?><br>
                                    </div>
                                </div>
                                <br>
                                <h4>Combien y a t-il de membres chez vous?</h4>
                                <?= $this->Form->input('familly_membre', ['label' => '']); ?><br>
                                <h4>Nombre d'enfant à votre domicile?</h4>
                                <?= $this->Form->input('children', ['label' => '']); ?><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="span12">
                <div class="pricing_box  radius-right">
                    <div class="row">
                        <div class="span12">
                            <div class="header">
                                <h3 class="panel-title">Quelque renseignement sur vous</h3></div>
                            <br>
                            <div class="panel-body">
                                <h4>Avez vous déjà été famille d'accueil pour animaux?</h4>
                                <?= $this->Form->radio('experience', [
                                        ['value' => '1', 'text' => 'Oui '],
                                        ['value' => '0', 'text' => 'Non'],
                                    ]
                                ); ?>

                                <h4>Êtes vous plutot une personne:</h4>
                                <?= $this->Form->radio('activity', [
                                        ['value' => 'Peu actif', 'text' => 'Peu active'],
                                        ['value' => 'Moyennement actif', 'text' => 'Moyennement active'],
                                        ['value' => 'Actif', 'text' => 'Très active']
                                    ]
                                ); ?><br><br>
                                <h4>Possédez vous un permis pour les chiens de cathégories?</h4>
                                <?= $this->Form->radio('premis', [
                                        ['value' => '1', 'text' => 'Oui '],
                                        ['value' => '0', 'text' => 'Non'],
                                    ]
                                ); ?><br><br>
                                <h4>Êtes vous en mesur de vous rendre au vétérinaire le plus proche?</h4>
                                <?= $this->Form->radio('veterinary', [
                                        ['value' => '1', 'text' => 'Oui '],
                                        ['value' => '0', 'text' => 'Non'],
                                    ]
                                ); ?><br><br>
                                <h4>Serez vous en mesur de mettre des animaux dans un espace de quarantaine?</h4>
                                <?= $this->Form->radio('quarantine', [
                                        ['value' => '1', 'text' => 'Oui'],
                                        ['value' => '0', 'text' => 'Non'],
                                    ]
                                ); ?><br>
                                <hr>
                                <h4>Veuillez renseignez vos disponibilités</h4>
                                <?= $this->Form->input('disponibility', ['label' => '', 'rows' => '5', 'style' => 'width:500px;']); ?>

                                <h4>Informations supplémentaires</h4>
                                <?= $this->Form->input('note', ['label' => '', 'rows' => '5', 'style' => 'width:500px;']) ?>
                                <br>
    </fieldset>
    <div class="row">
        <div class="span2 offset8">
            <?= $this->Form->button('Valider<span class="icon tick">&nbsp;</span>', [
                'type' => 'submit',
                'escape' => false,
                'class' => 'more-button more-button-rtl']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

