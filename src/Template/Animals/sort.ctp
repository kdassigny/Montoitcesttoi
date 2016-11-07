<?php if (empty($animals)): ?>
    <p>Aucun resultat</p>
<?php endif; ?>

<?php foreach ($animals as $animal): ?>

    <div id="content-blog" class="span9 content group offset1">

        <div
            class="post type-post status-publish format-gallery hentry category-web-design tag-design tag-developing tag-web hentry-post group blog-small">
            <!-- post featured & title -->
            <div class="thumbnail">
                <div class="row">

                    <!-- post featured -->
                    <div class="image-wrap span4">
                        <?= $this->html->image($animal->images[0]->description, [
                            'alt' => 'Photo',
                            'width' => '365',
                            'height' => '340',
                            'class' => 'attachment-blog_small wp-post-image',
                            'alt' => $animal->images[0]->description
                        ]); ?>
                    </div>

                    <!-- post title -->
                    <div class="span5">
                        <h2 class="post-title">
                            <?= $this->html->link(h($animal->animal_name), ['controller' => 'animals', 'action' => 'view', $animal->id]); ?>
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
                                <img src="images/icons/author.png" alt="icon-user"/>
                                <span>Sexe: </span><?= h($animal->sexe) ? __('femelle') : __('mâle'); ?>
                            </p>
                            <p class="date">
                                <img src="images/icons/date.png" alt="icon-calendar"/>
                                <span>Naissance:</span><?= h($animal->age); ?>
                            </p>
                            <p class="comments">
                                <img src="images/icons/comments.png" alt="icon-comment"/>
                                <span>
                                            <a href="blog-detail.html"
                                               title="Comment on This is the title of the first article. Enjoy it.">
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