<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-home" class="span12 offset1 content group">

                <div class="users form">
                    <?= $this->Flash->render('auth') ?>
                    <?= $this->Form->create() ?>
                    <fieldset>
                        <legend><?= __("Merci de rentrer vos nom d'utilisateur et mot de passe") ?></legend>
                        <p>Nom d'utillisateur</p>
                        <?= $this->Form->input('username', ['label' => '']) ?>
                        <?= $this->Form->input('password', ['label' => 'Mot de passe']) ?>
                    </fieldset>
                    <?= $this->Form->button(__('Se Connecter')); ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
