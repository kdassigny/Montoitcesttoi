<div class="row box-title">
    <div class="span5 offset1">
        <div class="border-line"></div>
    </div>
    <h3 class="span2 ">Gestion des Actualités</h3>
    <div class="span5">
        <div class="border-line"></div>
    </div>
</div>
<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <div id="content-page" class="span12 content group">
                <div class=" page type-page status-publish hentry group ">
                    <div class="short-table white">
                        <table style="width: 100%;" cellpadding="0" cellspacing="0">
                            <thead>
                            <tr>
                                <th class="align-left"><?= __('Actions') ?></th>
                                <th><?= $this->Paginator->sort('title', 'Titre') ?></th>
                                <th><?= $this->Paginator->sort('text') ?></th>
                                <th><?= $this->Paginator->sort('image_id', 'Image') ?></th>
                                <th><?= $this->Paginator->sort('created', 'Création') ?></th>
                                <th><?= $this->Paginator->sort('modified', 'Modification') ?></th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($news as $news): ?>
                                <tr>
                                    <td class="align-left ">
                                        <?= $this->Html->link(__('Editer'), ['action' => 'edit', $news->id]) ?><br>
                                        <?= $this->Form->postLink(__('Supprimer'), ['action' => 'delete', $news->id], ['confirm' => __('Supprimé ?', $news->id)]) ?>
                                    </td>
                                    <td><?= h($news->title) ?></td>
                                    <td><?= h($news->text) ?></td>
                                    <td><?= $this->html->image($news->image->description,
                                            ['alt style' => 'max-width:150px;',
                                            ]) ?></td>
                                    <td><?= h($news->created) ?></td>
                                    <td><?= h($news->modified) ?></td>

                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
