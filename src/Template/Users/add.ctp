<div class="row">
    <div class="col-10 offset1">
        <div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Inscrivez-vous') ?></legend>
        <?php
        echo $this->Form->input('email', ["label" => "Adress Email"]);
        echo $this->Form->input('username', ["label" => "Nom d'utilisateur"]);
        echo $this->Form->input('fisrt_name', ["label" => "Prenom"]);
        echo $this->Form->input('last_name', ["label" => "Nom"]);
        echo $this->Form->hidden('is_admin', ['value' => '0']);
        echo $this->Form->hidden('is_adherant', ['value' => '0']);
        echo $this->Form->input('address.address', ['type' => 'text', "label" => "Adresse"]);
        echo $this->Form->input('address.city', ["label" => "Ville"]);
        echo $this->Form->input('address.city_zip_code', ["label" => "Code postal"]);
            echo $this->Form->input('telephone_portable');
            echo $this->Form->input('telephone_fixe');
            echo $this->Form->input('facebook');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
    </div>
</div>