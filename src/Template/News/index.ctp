<!-- START CONTENT -->
<!-- BEGIN #slider -->
<div id="slider-elastic" class="slider slider-elastic elastic ei-slider" style="width: 100%; height: 400px;">
    <div class="ei-slider-loading">Loading</div>
    <ul class="ei-slider-large">

        <li class="first slide-1 slide align-">
            <img width="1920" height="400" src="images/slider/slider4.jpg" class="attachment-full" alt="001"/>
            <div class="ei-title">
                <h2>Mon Toit C'est Toi</h2>
                <h3>vous souhaite la bienvenu!</h3>
            </div>
        </li>

        <li class="slide-2 slide align-">
            <img src="images/slider/slider1.jpg" class="attachment-full" alt="002"/>
            <div class="ei-title">
                <h2></h2>
                <h3></h3>
            </div>
        </li>

        <li class="slide-3 slide align-">
            <img width="1920" height="400" src="images/slider/slider2.jpg" class="attachment-full" alt="001"/>
            <div class="ei-title">
                <h2></h2>
                <h3></h3>
            </div>
        </li>

        <li class="slide-4 slide align-">
            <img width="1280" height="500" src="images/slider/slider3.jpg" class="attachment-full" alt="003"/>
            <div class="ei-title">
                <h2></h2>
                <h3></h3>
            </div>
        </li>

        <li class="last slide-5 slide align-">
            <img width="1920" height="400" src="images/slider/slider5.jpg" class="attachment-full" alt="005"/>
            <div class="ei-title">
                <h2></h2>
                <h3></h3>
            </div>
        </li>
    </ul>
    <!-- ei-slider-large -->

    <ul class="ei-slider-thumbs">
        <li class="ei-slider-element">
            Current
        </li>

        <li>
            <a href="#">Bienvenu</a>
            <img src="images/slider/slider4.jpg" alt=" - "/>
        </li>

        <li>
            <a href="#"></a>
            <img src="images/slider/slider1.jpg" alt=" - "/>
        </li>

        <li>
            <a href="#"></a>
            <img src="images/slider/slider2.jpg" alt=" - "/>
        </li>

        <li>
            <a href="#"></a>
            <img src="images/slider/slider3.jpg" alt=" - "/>
        </li>

        <li>
            <a href="#"></a>
            <img src="images/slider/slider5.jpg" alt=" - "/>
        </li>
    </ul>
    <!-- ei-slider-thumbs -->

    <div class="shadow"></div>
</div>
<!-- ei-slider -->

<!-- END slider -->

<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('#slider-elastic.elastic').eislideshow({
            easing: 'easeOutExpo',
            titleeasing: 'easeOutExpo',
            titlespeed: 1200,
            autoplay: true,
            slideshow_interval: 3000,
            speed: 800,
            animation: 'sides'
        });
    });
</script>

<!-- START PRIMARY -->
<!-- START PRIMARY -->
<br><br>
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">
            <div id="sidebar-home-3" class="span2 sidebar group">

                <br>
                <!--ASIDE LAST ANIMAL-->
                <div id="popular-posts-5" class="widget-2 widget-last widget popular-posts">
                    <h3>Nos derniers arrivants</h3>

                    <div class="recent-post group">
                        <?php foreach ($last as $lasts): ?>

                            <div class="hentry-post group">
                                <div class="thumb-img">
                                    <a href=<?= $this->Url->build(['controller' => 'animals', 'action' => 'view', $lasts->id]); ?>>
                                        <?= $this->Html->image($lasts->images[0]->description, [
                                            'class' => "attachment-blog_thumb wp-post-image",
                                            'alt' => $lasts->images[0]->description,
                                            'width' => "55",
                                            'height' => "55"
                                        ]); ?></a>
                                </div>
                                <div class="text">
                                    <?= $this->html->link(h($lasts->animal_name), ['controller' => 'animals', 'action' => 'view', $lasts->id]); ?>
                                    <p class="post-date"><?= h($lasts->race) ?></p></div>
                            </div>

                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- START CONTENT -->
            <div id="content-home" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="section portfolio">
                        <!-- section blog wrapper -->

                        <!-- sticky portfolio -->
                        <div class="row">
                            <div
                                class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">
                                <div class="work-thumbnail span4">
                                    <div class="thumb-wrapper">
                                        <div class="related_img">
                                            <div class=""><img style="display: block;
    margin: auto;
    width: 100%;" src="img/welcom.jpg"/>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end thumb wrapper -->
                                </div>
                                <!-- end work-thumbnail -->
                                <div class="span5">
                                    <div class="work-description">
                                        <h2>
                                            Bienvenue
                                        </h2>
                                        <p>
                                            MTCT est une association de protection animale située en Isère.

                                            Nous recueillons les animaux abandonnés ou trouvés errants puis nous les
                                            plaçons en famille d'accueil : le temps pour nous de mettre l'animal en
                                            règle niveau vétérinaire (puce électronique, vaccins, vermifuge,
                                            stérilisation...) mais aussi de lui apprendre quelques bases et/ou de lui
                                            redonner confiance (avec les conseils d'un éducateur/comportementaliste si
                                            besoin).<br>

                                            Nos protégés sont ensuite proposés à l'adoption contre une participation aux
                                            frais vétérinaies car, comme toutes les associations, nous survivons
                                            uniquement grâce à vos dons monnétaires ou matériels, si précieux.<br>

                                        </p>

                                    </div>
                                    <!-- end work-description -->
                                </div>
                            </div>
                        </div>

                        <br> <br>
                        <div class="row box-title">
                            <div class="span3">
                                <div class="border-line"></div>
                            </div>
                            <h3 class="span3 ">Actualités</h3>
                            <div class="span3">
                                <div class="border-line"></div>
                            </div>
                        </div>
                        <!-- span wrapper -->
                        <div id="content-blog" class="span10 content group">
                            <div class="row">
                                <div id="pinterest-container">
                                    <?php foreach ($news as $news): ?>
                                        <div
                                            class="post type-post status-publish format-standard hentry category-elegant-vintage hentry-post group span3 blog-pinterest">
                                            <div class="blog-item">

                                                <div>
                                                    <?= $this->Html->image($news->image->description, [
                                                        'class' => "attachment-thumb_portfolio_pinterest wp-post-image",
                                                        'alt' => $news->image->description,
                                                        'width' => "258",
                                                        'height' => "100"
                                                    ]); ?>
                                                </div>

                                                <h2 class="post-title"><?= $news->title ?></h2>
                                                <p><?= $news->text ?></p>

                                                <div class="clear"></div>

                                                <!-- post meta -->
                                                <div class="meta group">
                                                    <div>
                                                        <p class="date">
                                                            <img src="images/icons/date.png" alt="icon-calendar"/>
                                                            <span>Date:</span> <?= $news->modified->format('d-m-Y'); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- end section blog wrapper -->
                <div class="clear"></div>
            </div>
            <!-- START COMMENTS -->
            <div id="comments"></div>
            <!-- END COMMENTS -->
        </div>
        <!-- END CONTENT -->

        <!-- START SIDEBAR -->

        <!-- END SIDEBAR -->
    </div>
</div>
</div>

