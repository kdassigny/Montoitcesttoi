


<!-- START PRIMARY -->


<div id="primary" class="col-9 sidebar-right">
    <div class="row">
        <div class="row box-title">
            <div class="span4 offset2">
                <div class="border-line"></div>
            </div>
            <h3 class="span2 " >Nos animaux</h3>
            <div class="span4">
                <div class="border-line"></div>
            </div>
        </div>
        <!-- START SIDEBAR -->
        <div id="sidebar-blog-sidebar" class="span4 sidebar group">
            <div id="text-9" class="widget-first widget widget_text">
                <h3>Recherche</h3>
                <form>
                    <?= $this->Form->create($animals, ['url' => ['action' => 'index'], 'type' => 'get']); ?>

                    <ul>sexe
                        <li><input type="checkbox" name="sexe" value="1">Mâles</li>
                        <li><input type="checkbox" name="sexe" value="0">Femelles</li>
                    </ul>
                    <?= $this->Form->input('categorie_id'); ?>
                    <?= $this->Form->button(__('Submit')) ?>
                    <?= $this->Form->end() ?>


                    <ul>
                        <!--                        <li><input type="checkbox" name="espece_id" value="1">Chiens</li>-->
                        <!--                        <li><input type="checkbox" name="espece_id" value="2">Chats</li>-->
                        <!--                        <li><input type="checkbox" name="espece_id" value="3,4,5">Autres</li>-->
                        <!--                    </ul>-->
                        <!--                    <ul>-->
                        <!--                        <li><input type="checkbox" name="sexe" value="1">Mâles</li>-->
                        <!--                        <li><input type="checkbox" name="sexe" value="0">Femelles</li>-->
                        <!--                    </ul>-->
                        <!--                    <input type="checkbox" name="categorie_id" value="1">Adoptables-->
                        <!--                    <ul>-->
                        <li><?= $this->paginator->sort('age', 'trier par age'); ?></li>
                        <li><?= $this->paginator->sort('arrived', 'trier par date d\'arrivé'); ?></li>
                    </ul>
                    <!--                    <input type="button" value="submit">-->
                    <!--                </form>-->
            </div>
        </div>
        <!-- END SIDEBAR -->
            <!-- START CONTENT -->
        <?php if (empty($list->animals)): ?>
            <p>Aucun resultat</p>
        <?php endif; ?>
        <?php foreach ($animals as $animal): ?>

            <div id="content-blog" class="span9 content group offset1">



                <div class="post type-post status-publish format-gallery hentry category-web-design tag-design tag-developing tag-web hentry-post group blog-small">
                    <!-- post featured & title -->
                    <div class="thumbnail">
                        <div class="row">

                            <!-- post featured -->
                            <div class="image-wrap span4">
                                <?= $this->html->image($animal->images[0]->description, [
                                    'alt' => 'Photo',
                                    'width' => '365',
                                    'height'=>'340',
                                    'class'=>'attachment-blog_small wp-post-image',
                                    'alt'=>$animal->images[0]->description
                                ]); ?>
                            </div>

                            <!-- post title -->
                            <div class="span5">
                                <h2 class="post-title">
                                    <?=$this->html->link(h($animal->animal_name),['controller'=>'animals', 'action'=>'view', $animal->id]); ?>
                                </h2>
                                <div class="the-content">
                                 <p>   <?= h($animal->description) ?></p>
                                </div>
                            </div>

                            <div class="clear"></div>

                            <!-- post meta -->
                            <div class="meta group span3">
                                <div>
                                    <p class="author">
                                        <img src="images/icons/author.png" alt="icon-user" />
                                        <span>Sexe: </span><?= h($animal->sexe) ? __('femelle') : __('mâle');?>
                                    </p>
                                    <p class="date">
                                        <img src="images/icons/date.png" alt="icon-calendar" />
                                        <span>Naissance:</span><?= h($animal->age); ?>
                                    </p>
                                    <p class="comments">
                                        <img src="images/icons/comments.png" alt="icon-comment" />
                                        <span>
                                            <a href="blog-detail.html" title="Comment on This is the title of the first article. Enjoy it.">
                                                <span>Race: </span> <?= h($animal->race) ?>
                                            </a>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        <?php endforeach; ?>
        </div>
        <!-- END CONTENT -->




</div>
</div>
<!-- END PRIMARY -->



<div class="row">
<div class='general-pagination group'>
    <ul class="pagination ">
        <?= $this->Paginator->prev('< ' . __('previous'),['class'=>'selected']) ?>
        <?= $this->Paginator->numbers() ?>
        <?= $this->Paginator->next(__('next') . ' >') ?>
    </ul>
    <p><?= $this->Paginator->counter() ?></p>
</div>
</div>
