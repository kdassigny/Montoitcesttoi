<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Edition d'un utilisateur</h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<div class="row">
    <div class="col-10 offset4">
        <div class="users form large-10 medium-8 columns content">
            <?= $this->Form->create($user) ?>
            <fieldset>

                <div class="row">
                    <div class="span4">
                        <label>Adress Email</label>
                        <?php echo $this->Form->input('email', ['type' => 'text', "label" => false]); ?>
                        <label>Mot de passe</label>
                        <?php echo $this->Form->input('password', ["label" => false]); ?>
                        <label>Nom d'utilisateur</label>
                        <?php echo $this->Form->input('username', ["label" => false]); ?>
                        <label>Administateur</label>
                        <?php echo $this->Form->input('is_admin', ["label" => false]); ?>
                        <label>Adérant</label>
                        <?php echo $this->Form->input('is_adherant', ["label" => false]); ?>
                    </div>
                    <div class="span4">
                        <label>Nom</label>
                        <?php echo $this->Form->input('last_name', ["label" => false]); ?>
                        <label>Prenom</label>
                        <?php echo $this->Form->input('fisrt_name', ["label" => false]); ?>
                        <label></label>
                        <?php echo $this->Form->hidden('is_admin', ['value' => '0']); ?>
                        <label></label>
                        <?php echo $this->Form->hidden('is_adherant', ['value' => '0']); ?>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="span4">
                        <label>Adresse</label>
                        <?php echo $this->Form->input('address.address', ['type' => 'text', "label" => false]); ?>
                        <label>Ville</label>
                        <?php echo $this->Form->input('address.city', ["label" => false]); ?>
                        <label>Code postal</label>
                        <?php echo $this->Form->input('address.city_zip_code', ['type' => 'text', "label" => false]); ?>
                    </div>
                    <div class="span4">
                        <label>Telephone portable</label>
                        <?php echo $this->Form->input('telephone_portable', ["label" => false]); ?>
                        <label>Telephone fixe</label>
                        <?php echo $this->Form->input('telephone_fixe', ["label" => false]) ?>
                        <label>Facebook</label>
                        <?php echo $this->Form->input('facebook', ["label" => false]); ?>
                    </div>
                </div>
            </fieldset>
            <?= $this->Form->button('Valider<span class="icon tick">&nbsp;</span>', [
                'type' => 'submit',
                'escape' => false,
                'class' => 'more-button more-button-rtl']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>