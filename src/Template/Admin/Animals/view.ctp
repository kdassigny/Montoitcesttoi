<!-- START CONTENT -->

<div id="content-page" class="span12 content group">

    <div class="clear"></div>
    <!--start title-->
    <div class="row box-title">
        <div class="span5">
            <div class="border-line"></div>
        </div>
        <h3 class="span2 "><?= h($animal->animal_name) ?></h3>
        <div class="span5">
            <div class="border-line"></div>
        </div>
    </div>
    <!--end title-->
    <div class="posts">

        <div class="hentry-post group portfolio-post internal-post">

            <div id="portfolio" class="portfolio-full-description">
                <div class="portfolios type-portfolios status-publish hentry work group row">
                    <div class="work-thumbnail span6">
                        <div class="thumb-wrapper">
                            <div class="work-thumbnail">
                                <div class="picture_overlay_empty picture_overlay">
                                    <?= $this->html->image($animal->images[0]->description, [
                                        'alt' => 'Photo',
                                        'width' => '574',
                                        'height' => '340',
                                        'class' => 'attachment-thumb_portfolio_fulldesc'
                                    ]); ?>
                                </div>
                            </div>

                            <script>
                                jQuery(document).ready(function ($) {
                                    jQuery(".work-thumbnail .overlay a.lightbox_fulldesc").colorbox({
                                        transition: 'elastic',
                                        rel: 'lightbox_fulldesc',
                                        fixed: true,
                                        maxWidth: '80%',
                                        maxHeight: '80%',
                                        opacity: 0.7
                                    });
                                });
                            </script>
                        </div>
                    </div>

                    <div class="work-description span6">
                        <h3>Qui suis-je?</h3>
                        <blockquote>
                            <p>
                                <?= $this->Text->autoParagraph(h($animal->description)); ?>
                            </p>
                        </blockquote>
                        <div></div>

                        <div class="work-skillsdate span6">

                            <p class="customer">
                                <span
                                    class="meta-label">Sexe</span> <?= h($animal->sexe) ? __('femelle') : __('mâle'); ?>
                            </p>
                            <p class="workdate">
                                <span class="meta-label">Age</span> <?= h($animal->age) ?>
                            </p>
                            <p class="categories paragraph-links">
                                <span class="meta-label">Race</span> <?= h($animal->race) ?>
                            </p>
                            <p class="role">
                                <span class="meta-label">Etat</span> <?= h($animal->category->categorie_name) ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div>
</div>
</div>
</div>
</div>
<div class="clear"></div>
<!-- START SLIDER -->


<!-- END CONTENT -->