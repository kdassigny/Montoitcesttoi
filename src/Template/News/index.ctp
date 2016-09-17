<!-- START CONTENT -->
<!-- BEGIN #slider -->
<div id="slider-elastic" class="slider slider-elastic elastic ei-slider" style="width: 100%; height: 400px;">
    <div class="ei-slider-loading">Loading</div>
    <ul class="ei-slider-large">

        <li class="first slide-1 slide align-">
            <img  src="img/chiens.jpg" class="attachment-full" alt="001" />
            <div class="ei-title">
                <h2>Mon Toit C'est Toi</h2>
                <h3>vous souhaite la bienvenu!</h3>
            </div>
        </li>

        <li class="slide-2 slide align-">
            <img width="1920" height="400" src="images/slider/0021.jpeg" class="attachment-full" alt="002" />
            <div class="ei-title">
                <h2>A new WP theme</h2>
                <h3>powered by YIT</h3>
            </div>
        </li>

        <li class="slide-3 slide align-">
            <img width="1920" height="400" src="images/slider/0013.jpg" class="attachment-full" alt="001" />
            <div class="ei-title">
                <h2>This premium theme</h2>
                <h3>a great solution</h3>
            </div>
        </li>

        <li class="slide-4 slide align-">
            <img width="1280" height="500" src="images/slider/0032.jpg" class="attachment-full" alt="003" />
            <div class="ei-title">
                <h2>Love the red fruit</h2>
                <h3>... a red passion</h3>
            </div>
        </li>

        <li class="last slide-5 slide align-">
            <img width="1920" height="400" src="images/slider/0052.jpg" class="attachment-full" alt="005" />
            <div class="ei-title">
                <h2>Enjoy your freedom...</h2>
                <h3>and love your life</h3>
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
            <img src="img/téléchargement.jpg" alt=" - " />
        </li>

        <li>
            <a href="#">A new WP theme - </a>
            <img src="images/slider/0021-150x59.jpeg" alt=" - " />
        </li>

        <li>
            <a href="#">This premium theme - </a>
            <img src="images/slider/0013-150x59.jpg" alt=" - " />
        </li>

        <li>
            <a href="#">Love the red fruit - </a>
            <img src="images/slider/0032-150x59.jpg" alt=" - " />
        </li>

        <li>
            <a href="#">Enjoy your freedom... - </a>
            <img src="images/slider/0052-150x59.jpg" alt=" - " />
        </li>
    </ul>
    <!-- ei-slider-thumbs -->

    <div class="shadow"></div>
</div>
<!-- ei-slider -->

<!-- END slider -->

<script type="text/javascript">
    jQuery(document).ready(function($){
        $('#slider-elastic.elastic').eislideshow({
            easing		: 'easeOutExpo',
            titleeasing	: 'easeOutExpo',
            titlespeed	: 1200,
            autoplay	: true,
            slideshow_interval : 3000,
            speed       : 800,
            animation   : 'sides'
        });
    });
</script>

<!-- START PRIMARY -->
<!-- START PRIMARY -->
<br><br>
<div id="primary" class="sidebar-right">
    <div class="container group">
        <div class="row">

            <!-- START CONTENT -->
            <div id="content-home" class="span9 content group">
                <div class="page type-page status-publish hentry group">
                    <div class="section portfolio">
                        <!-- section blog wrapper -->

                        <!-- sticky portfolio -->
                        <div class="row">
                            <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">
                                <div class="work-thumbnail span4">
                                    <div class="thumb-wrapper">
                                        <div class="related_img">
                                            <div class="picture_overlay"><img style="display: block;
    margin: auto;
    width: 100%;" src="img/welcom.jpg" class="attachment-section_portfolio_sidebar" alt="004" />
                                                <div class="overlay">
                                                    <div>
                                                        <p>
                                                            <a href="img/welcom.jpg" rel="lightbox" class="ch-info-lightbox">
                                                                <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                            </a>

                                                            <a href="portfolio-slide-detail.html">
                                                                portfolios/0049.jpg                                                       <img src="images/icons/project.png" alt="" />
                                                            </a>
                                                        </p>
                                                        <p class="title">Mon toi c'est toi</p>
                                                        <p class="subtitle">logo</p>
                                                    </div>
                                                </div>
                                                <!-- end overlay -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end thumb wrapper -->
                                </div>
                                <!-- end work-thumbnail -->
                                <div class="span5">
                                    <div class="work-description">
                                        <h2>
                                                Bienvenu
                                        </h2>
                                        <p>
                                            MTCT est une association de protection animale située en Isère.

                                            Nous recueillons les animaux abandonnés ou trouvés errants puis nous les plaçons en famille d'accueil : le temps pour nous de mettre l'animal en règle niveau vétérinaire (puce électronique, vaccins, vermifuge, stérilisation...) mais aussi de lui apprendre quelques bases et/ou de lui redonner confiance (avec les conseils d'un éducateur/comportementaliste si besoin).<br>

                                            Nos protégés sont ensuite proposés à l'adoption contre une participation aux frais vétérinaies car, comme toutes les associations, nous survivons uniquement grâce à vos dons monnétaires ou matériels, si précieux.<br>

                                        </p>

                                    </div>
                                    <!-- end work-description -->
                                </div>
                            </div>
                        </div>
                        <!-- span wrapper -->
                        <br><br>
                        <div class="portfolio-projects row">
                            <?php foreach ($news as $news): ?>

                            <div class="work span3">
                                <div class="related_img">
                                    <div class="picture_overlay">
                                        <?= $this->Html->image($news->image->description,[
                                            'class'=>"attachment-thumb_portfolio_fulldesc_related",
                                            'alt'=>$news->image->description,
                                            'width'=>"258",
                                            'height'=>"170"
                                        ]);?>
                                        <div class="overlay">
                                            <div>
                                                <p>
                                                    <a href="images/portfolios/001.jpg" rel="lightbox" class="ch-info-lightbox">
                                                        <img src="images/icons/zoom.png" alt="Open Lightbox" />
                                                    </a>
                                                    <a href="#">
                                                        <img src="images/icons/project.png" alt="" />
                                                    </a>
                                                </p>
                                                <p class="title"><?= $news->title?></p>
                                                <p class="subtitle">photoshop</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="work-description">
                                    <h4>
                                        <a href="#"><?= $news->title?></a>
                                    </h4>
                                    <p><?= $news->text?></p>
                                </div>
                            </div>
                            <?php endforeach; ?>


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
            <div id="sidebar-home-3" class="span3 sidebar group">
                <div id="testimonial-widget-2" class="widget-first widget testimonial-widget">
                    <h3>Testimonials</h3>
                    <div class="testimonial-text">
                        <ul class="slides">

                            <li>
                                <div>
                                    <blockquote>
                                        <p>
                                            I purchased this theme and I really like it. The theme authors have been very helpful in the support area of their website.
                                            Would definitely recommend to anyone needing a corporate wordpress theme.
                                        </p>
                                        <a href="testimonials-erica.html" class="more-link">[...]</a>
                                    </blockquote>
                                    <img width="94" height="94" src="images/pages/Fotolia_20568380_Subscription_XXL-300x142-94x94.jpg" class="thumbnail wp-post-image" alt="Fotolia_20568380_Subscription_XXL-300x142" />
                                    <div class="name-testimonial">
                                        <a class="name-testimonial" href="testimonials-erica.html">Erica Evans</a>
                                        <br />
                                        <a class='url-testimonial' href=""></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div>
                                    <blockquote>
                                        <p>
                                            Bookmark this theme as one of your “Must Haves for 2012” This theme is without a doubt one of our Top 5 Purchases.
                                            Once you get used to how the content is organised in Admin, the applications are endless. The support for this theme is outstanding. Great job Team Yi!!
                                        </p>
                                        <a href="#" class="more-link">[...]</a>
                                    </blockquote>
                                    <img width="94" height="94" src="images/pages/ricardo-300x123-94x94.jpg" class="thumbnail wp-post-image" alt="ricardo-300x123" />
                                    <div class="name-testimonial">
                                        <a class="name-testimonial" href="#">Ricardo Mori</a>
                                        <br />
                                        <a class='url-testimonial' href=""></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div>
                                    <blockquote>
                                        <p>
                                            I am absolutely thrilled with this theme! I have never built a website before but your instructions and design make it both fun and easy to do.
                                            …Thanks a lot for your help! your support is AMAZING. 5 themeforest stars from Germany to Italy!
                                        </p>
                                        <a href="#" class="more-link">[...]</a>
                                    </blockquote>
                                    <img width="94" height="94" src="images/pages/Fotolia_24730952_Subscription_XXL-300x135-94x94.jpg" class="thumbnail wp-post-image" alt="Fotolia_24730952_Subscription_XXL-300x135" />
                                    <div class="name-testimonial">
                                        <a class="name-testimonial" href="#">Elisa Meis</a>
                                        <br />
                                        <a class='url-testimonial' href=""></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>

                            <li>
                                <div>
                                    <blockquote>
                                        <p>
                                            I already given a <strong>5-star rating</strong>, but I also wanted to provide my two cents in case anyone is unsure about purchasing this theme.
                                            Not only is the theme itself very versatile and easy to manipulate, but the support we get in the forum is amazing – the developers are very, very quick to respond
                                        </p>
                                        <a href="#" class="more-link">[...]</a>
                                    </blockquote>
                                    <img width="94" height="94" src="images/pages/Fotolia_7454857_Subscription_XXL-300x181-94x94.jpg" class="thumbnail wp-post-image" alt="Fotolia_7454857_Subscription_XXL-300x181" />
                                    <div class="name-testimonial">
                                        <a class="name-testimonial" href="#">Joy Mergot</a>
                                        <br />
                                        <a class='url-testimonial' href=""></a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <script type="text/javascript">
                        jQuery(document).ready(function($){
                            $('.testimonial-widget ul').css( 'max-height', 'none' );

                            var animation = $.browser.msie || $.browser.opera ? 'fade' : 'slide';
                            $('.testimonial-widget').flexslider({
                                animation: animation,
                                slideshowSpeed: 8000,
                                animationSpeed: 300,
                                selectors: '.slides > li',
                                directionNav: true,
                                slideshow: true,

                                pauseOnAction: false,
                                controlNav: false,
                                touch: true
                            });
                        });
                    </script>
                </div>

                <!--ASIDE LAST ANIMAL-->
                <div id="popular-posts-5" class="widget-2 widget-last widget popular-posts">
                    <h3>Nos derniers arrivants</h3>

                    <div class="recent-post group">
                        <?php foreach ($last as $lasts): ?>

                        <div class="hentry-post group">
                            <div class="thumb-img">

                                <?= $this->Html->image($lasts->images[0]->description,[
                                    'class'=>"attachment-blog_thumb wp-post-image",
                                    'alt'=>$lasts->images[0]->description,
                                    'width'=>"55",
                                    'height'=>"55"
                                ]);?>
                            </div>
                            <div class="text">
                                <a href="#" title="Another theme by YIThemes!" class="title">
                                   <?= h($lasts->animal_name)?>
                                </a>
                                <p class="post-date"><?=h($lasts->race)?></p></div>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- END SIDEBAR -->
        </div>
    </div>
</div>

