<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Edition de l'actualité N°<?= h($news->id) ?></h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<div class="row">
    <div class="span11 offset2">
        <?= $this->Form->create($news) ?>
        <fieldset>

            <?php
            echo $this->Form->input('title');
            echo $this->Form->input('text');
            echo $this->Form->input('image_id', ['options' => $images, 'empty' => true]);
            ?>
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