<!-- Latest compiled and minified CSS -->
<style>
    body {
        background-color: #507479;
    }
</style>
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
    <?= $this->Form->create($hostFamily, ['class' => 'form-horizontal']); ?>
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
                        <div class="row">
                            <div class="span12">
                                <div class="input_fields_wrap">
                                    <button class=" offset7 add_field_button btn btn-large btn-friends-and-foes-2 ">
                                        Ajouter un animal<i class="icon-plus-sign" style="font-size: 12px;"></i>
                                    </button>
                                    <br>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <br>
                        <button class=" offset7 validator btn btn-large  btn-identification-4 ">Valider les animaux<i
                                class="icon-check" style="font-size: 12px;"></i></button>

                        <?= $this->Form->input('animal_list', ['id' => 'list', 'label' => '', 'rows' => '8', 'style' => 'width:500px;']); ?>
                        <br>
                        <h4>Animaux acceptés</h4><br>
                        <div class="row">
                            <div class=" checkbox span2 offset2">chien
                                <?= $this->Form->checkbox('dog_male', ['label' => 'chien']); ?>
                            </div>
                            <div class=" checkbox span2 offset1">chat
                                <?= $this->Form->checkbox('cat_male', ['label' => 'chat']); ?>
                            </div>
                            <div class="checkbox span2 offset1">rongeur
                                <?= $this->Form->checkbox('rodent', ['label' => 'rongeur']); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" checkbox span2 offset2">chienne
                                <?= $this->Form->checkbox('dog_female', ['label' => 'chienne']); ?>
                            </div>
                            <div class=" checkbox span2 offset1">chatte
                                <?= $this->Form->checkbox('cat_female', ['label' => 'chatte']); ?>
                            </div>
                            <div class=" checkbox span2 offset1">oiseau
                                <?= $this->Form->checkbox('bird', ['label' => 'oiseau']); ?>
                            </div>
                        </div>

                        <div class="row">
                            <div class=" checkbox span2 offset2">chiot
                                <?= $this->Form->checkbox('puppy', ['label' => 'chiot']); ?>
                            </div>
                            <div class=" checkbox span2 offset1">chaton
                                <?= $this->Form->checkbox('kitten', ['label' => 'chaton']); ?>
                            </div>
                            <div class=" checkbox span2 offset1">reptil
                                <?= $this->Form->checkbox('nac', ['label' => 'NAC (reptil et autre)']); ?>
                                <br>
                            </div>
                            <br><br>
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
                                <br>
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

<script>
    $(document).ready(function () {

        function steril(s) {
            if (s == null) {
                s = "non stérilisé";
            }
            return s;
        }

        function check(s) {
            if (s == null) {
                s = "non defini";
            }
            return s;
        }

        $('.validator').click(function (e) {
            e.preventDefault();
            var list = new Array();

            $('.animal').each(function (i) {

                list.push("\n" +
                    "- " + $(this).find("select").val() +
                    " né le " + $(this).find("input:eq(0)").val() +
                    " de sexe " + check($(this).find("input:radio:checked").val()) +
                    " et " + steril($(this).find("input:checkbox:checked").val()));
            });

            $('#list').val(list);
        });

        var max_fields = 10; //maximum input row
        var wrapper = $(".input_fields_wrap"); //Fields wrapper
        var add_button = $(".add_field_button"); //Add button ID
        var row = $("div.animal").html();

        var x = 1; //initlal row count
        $(add_button).click(function (e) { //on add input button click
            e.preventDefault();
            if (x < max_fields) { //max input
                x++; //row increment
                $(wrapper).append('<div class="row">' +
                    '<div class="span12 animal form-inline" >' +
                    '<label >Animal<select> <option>Chien</option>' +
                    ' <option>Chat</option>' +
                    '<option>Rongeur</option>' +
                    '<option>Oiseau</option>' +
                    '<option>Reptil</option>' +
                    ' </select></label>' +
                    '<label >Naissance<input class="input" type="date" placeholder="Amount" value=""></label>' +
                    '<label class="radio-inline"><input class="radio-field" type="radio" name="sexe' + x + '" value="mâle">Male</label>' +
                    '<label class="radio-inline"><input  class="radio-field" type="radio" name="sexe' + x + '" value="femelle">Femelle</label>' +
                    '<label class="checkbox-inline">' +
                    '<input type="checkbox"  value="stérilisé"> Animal stérilisé' +
                    '</label>' +
                    '<a href="#" class="remove_field btn   btn-hem-5 " style="margin: 20px;"><i class="icon-trash" style="font-size: 12px;"></i></a>' +
                    '</div> </div>'); //add input box
            }
        });

        $(wrapper).on("click", ".remove_field", function (e) { //user click on remove text
            e.preventDefault();
            $(this).parent('div').remove();
            x--;
        })
    });

</script>