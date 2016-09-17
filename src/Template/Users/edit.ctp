<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Host Families'), ['controller' => 'HostFamilies', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Host Family'), ['controller' => 'HostFamilies', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('username');
            echo $this->Form->input('fisrt_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('is_admin');
            echo $this->Form->input('is_adherant');
            echo $this->Form->input('address_id', ['options' => $addresses]);
            echo $this->Form->input('telephone_portable');
            echo $this->Form->input('telephone_fixe');
            echo $this->Form->input('facebook');
            echo $this->Form->input('postion');
            echo $this->Form->input('description');
            echo $this->Form->input('image_id', ['options' => $images, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
