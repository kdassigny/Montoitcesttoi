<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */


?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes"/>
    <title>
        Mon toit c'est toi
    </title>

    <!-- RESET STYLESHEET -->
    <?= $this->Html->css('reset'); ?>
    <!-- BOOTSTRAP STYLESHEET -->
    <?= $this->Html->css('bootstrap'); ?>
    <!-- MAIN THEME STYLESHEET -->
    <?= $this->Html->css('style'); ?>


    <?= $this->Html->css('custom'); ?>

    <link rel='stylesheet' id='google-fonts-css'
          href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez'
          type='text/css' media='all'/>
    <?= $this->Html->css('responsive'); ?>
    <?= $this->Html->css('/js/thickbox/thickbox'); ?>
    <?= $this->Html->css('tipsy'); ?>

    <?= $this->Html->css('font-awesome'); ?>
    <?= $this->Html->css('/portfolios/full-description/css/style'); ?>
    <?= $this->Html->css('/portfolios/slide-detail/css/style'); ?>
    <?= $this->Html->css('shortcodes'); ?>
    <?= $this->Html->css('../blog/pinterest/css/style'); ?>

    <?= $this->Html->css('colorbox'); ?>
    <?= $this->Html->css('/sliders/elastic/css/elastic'); ?>
    <?= $this->Html->css('buttons/mfast-3'); ?>
    <?= $this->Html->css('contact_form'); ?>
    <?= $this->Html->css('/blog/small/css/style'); ?>

    <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
    <!-- For iPad3 with retina display: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png"/>
    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png"/>
    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png"/>


    <?= $this->Html->script('jquery/jquery'); ?>
</head>
<body class="home page no_js responsive stretched">

<!-- START BG SHADOW -->
<div class="bg-shadow">

    <!-- START WRAPPER -->
    <div id="wrapper" class="container group">
        <!-- START TOP BAR -->

        <!-- START TOP BAR -->
        <div id="topbar">
            <div class="container">
                <div class="row">
                    <!--<div id="last-tweets-3" class="widget-first span6 widget last-tweets">
                        <h3>Last Tweets</h3>
                        <div class="list-tweets-3"></div>

                        <script type="text/javascript">
                            jQuery(function($){
                                $('#last-tweets-3 .list-tweets-3').tweetable({
                                    listClass: 'tweets-widget-3',
                                    username: 'YIW',
                                    time: false,
                                    limit: 3,
                                    replies: false
                                });
                            });
                        </script>

                    </div>-->

                    <div id="text-8" class=" widget-last span12 widget widget_text">
                        <div class="textwidget">
                            <a href="# " class="socials-small facebook-small" title="Facebook" style="right: 0px;">facebook</a>

                            <!-- <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                             <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                             <a href="#" class="socials-small google-small" title="Google"  >google</a>

                             <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                             <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!---->
        <!--        <script>-->
        <!--            jQuery(function ($) {-->
        <!--                var twitterSlider = function () {-->
        <!--                    $('#topbar .last-tweets ul').addClass('slides');-->
        <!--                    $('#topbar .last-tweets').flexslider({-->
        <!--                        animation: "fade",-->
        <!--                        slideshowSpeed: 5 * 1000,-->
        <!--                        animationDuration: 700,-->
        <!--                        directionNav: false,-->
        <!--                        controlNav: false,-->
        <!--                        keyboardNav: false-->
        <!--                    });-->
        <!--                };-->
        <!--                $('#topbar .last-tweets > div').bind('tweetable_loaded', function () {-->
        <!--                    twitterSlider();-->
        <!--                });-->
        <!--            });-->
        <!--        </script>-->

        <!-- END TOP BAR -->

        <!-- START HEADER -->
        <div id="header" class="group">
            <div class="group container">
                <div class="row">
                    <div class="span12">

                        <div class="row">
                            <!-- START LOGO -->
                            <div id="logo" class="span4 group">
                                <a id="logo-img" title="Mon toit c'est toi" href=<?= $this->Url->build('/accueil', [
                                    'controller' => 'News',
                                    'action' => 'index'
                                ]);  ?> >
                                    <?= $this->html->image('mes_images/dog-1484728_960_720.png', [
                                        'title' => 'MonToitCestToi',
                                        'alt' => 'Accueil',
                                        'width' => '100px',
                                        'style' => 'top:15px;'
                                    ]); ?>
                                </a>

                                <p id="tagline">MON TOIT C'EST TOI</p>
                            </div>
                            <!-- END LOGO -->
                            <div id="menu" class="span8 group">
                                <!-- START MAIN NAVIGATION -->
                                <div class="menu">
                                    <ul id="nav" class="sf-menu">
                                        <li class="nav-icon-hi">
                                            <a href=<?= $this->Url->build('/accueil', [
                                                                'controller' => 'News',
                                                                'action' => 'index'
                                                            ]);  ?>>
                                                Accueil
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-heart">
                                            <a href=<?= $this->Url->build('/adoption', [
                                                'controller' => 'Animals',
                                                'action' => 'index'
                                            ]);  ?>
                                            >Adoption
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-home">
                                            <a href=<?= $this->Url->build('/famille', [
                                                'controller' => 'Users',
                                                'action' => 'famille'
                                            ]);  ?>>
                                                Famille d'accueil
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-gift">
                                            <a href=<?= $this->Url->build('/donation', [
                                                'controller' => 'Donation',
                                                'action' => 'index'
                                            ]);  ?>>
                                                Nous aidez
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-contact">
                                            <a href=<?= $this->Url->build('/contact', [
                                                'controller' => 'Contact',
                                                'action' => 'contact'
                                            ]);  ?>>
                                                Contact
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href=<?= $this->Url->build('/contact', [
                                                        'controller' => 'Contact',
                                                        'action' => 'contact'
                                                    ]);  ?>>
                                                        Nous contacter
                                                        <div style="position:absolute; left: 50%;">
                                                            <span class="triangle">&nbsp;</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=<?= $this->Url->build('/equipe', [
                                                        'controller' => 'Users',
                                                        'action' => 'team'
                                                            ]);  ?>>
                                                        L'équipe
                                                        <div style="position:absolute; left: 50%;">
                                                            <span class="triangle">&nbsp;</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href=<?= $this->Url->build('/partenaires', [
                                                        'controller' => 'Partners',
                                                        'action' => 'index'
                                                    ]);  ?>>
                                                        Partenaires
                                                        <div style="position:absolute; left: 50%;">
                                                            <span class="triangle">&nbsp;</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- END MAIN NAVIGATION -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="border-header"></div>
        </div>
        <!-- END  HEADER -->
        <!-- START CONTENT -->


        <?= $this->fetch('content') ?>
    </div>

    <!-- START FOOTER -->

    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-12">
<!--                    sart like feed-->
                    <div class="widget span2 contact-info">
                        <div class="sidebar-nav">
                            <ul>
                                <li><?= $this->html->link('Accueil', ['controller' => 'News',
                                        'action' => 'index'
                                    ]); ?></li>
                                <li><?= $this->html->link('Adoption', ['controller' => 'Animals',
                                        'action' => 'index'
                                    ]); ?></li>
                                <li><?= $this->html->link('Famille d\'accueil', ['controller' => 'Users',
                                        'action' => 'famille'
                                    ]); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget span2 contact-info">
                        <div class="sidebar-nav">
                            <ul>
                                <li><?= $this->html->link('Dont financier', ['controller' => 'Donation',
                                        'action' => 'dont'
                                    ]); ?></li>
                                <li><?= $this->html->link('Dont materiel', ['controller' => 'Donation',
                                        'action' => 'materiel'
                                    ]); ?></li>
                                <li><?= $this->html->link('Devenir adhérant', ['controller' => 'Donation',
                                        'action' => 'adherant'
                                    ]); ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="widget span2 contact-info">
                        <div class="sidebar-nav">
                            <ul>
                                <li>
                                    <?= $this->html->link('Contact', ['controller' => 'Contact',
                                        'action' => 'contact'
                                    ]); ?></li>
                                <li>
                                    <?= $this->html->link('L\'équipe', ['controller' => 'Users',
                                        'action' => 'team'
                                    ]); ?></li>
                                <li>
                                    <?= $this->html->link('Partenaire', ['controller' => 'Partners',
                                        'action' => 'index'
                                    ]); ?></li>
                            </ul>
                        </div>
                    </div>
<!--                    end like feed-->
<!--                    start adress-->
                    <div class="widget span3 contact-info">
                        <div class="sidebar-nav">
                            <ul>
                                <li>
                                    <i class="icon-map-marker"
                                       style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Address:</span> 38110 Saint-Victor-de-Cessieu
                                </li>
                                <li>
                                    <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Mobile:</span> 06 44 00 13 35
                                </li>
                                <li>
                                    <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Fax:</span> ??
                                </li>
                                <li>
                                    <i class="icon-envelope"
                                       style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Email:</span> MTCT@hotmail.fr
                                </li>
                            </ul>
                        </div>
                    </div>
                     <!--    end adress-->
                    <!--    start like icon-->
                    <div class=" widget span3 last">
                        <div class="list-tweets-2">
                            <ul style="margin-left: 30%;">

                                <br>
                                <li><a href="https://www.facebook.com/montoitcesttoi">
                                        <?= $this->Html->image("mes_images/icon-fb.png", [
                                            "alt" => "contact"
                                        ]); ?></a></li>
                                <br>

                                <li><?= $this->Html->image("icons/set_icons/letter32.png", [
                                        "alt" => "contact",
                                        'url' => ['controller' => 'Contact', 'action' => 'contact']
                                    ]); ?></li>

                            </ul>
                        </div>
                    <!--end like icon-->
                        <script type="text/javascript">
                            jQuery(function ($) {
                                $('#last-tweets-2 .list-tweets-2').tweetable({
                                    listClass: 'tweets-widget-2',
                                    username: 'envato',
                                    time: true,
                                    limit: 2,
                                    replies: true
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END FOOTER -->
</div>
<!-- END WRAPPER -->

<!-- END BG SHADOW -->

<!-- START CUSTOM SCRIPT -->
<!-- END CUSTOM SCRIPT -->

<!-- END HEADER -->
<?= $this->Html->script('/sliders/thumbnails/js/jquery.aw-showcase'); ?>
<?= $this->Html->script('jquery.colorbox-min'); ?>
<?= $this->Html->script('jquery.tweetable'); ?>
<?= $this->Html->script('jquery.superfish'); ?>
<?= $this->Html->script('/portfolios/filterable/js/jquery.filterable'); ?>
<?= $this->Html->script('jquery.tipsy'); ?>
<?= $this->Html->script('responsive'); ?>
<?= $this->Html->script('jquery.mobilemenu'); ?>
<?= $this->Html->script('shortcodes'); ?>
<?= $this->Html->script('jquery/jquery.masonry.min'); ?>
<?= $this->Html->script('jquery.flexslider-min'); ?>
<?= $this->Html->script('jquery.easing'); ?>
<?= $this->Html->script('/sliders/elastic/js/jquery.eislideshow'); ?>
<?= $this->Html->script('jquery.themepunch.plugins.min'); ?>
<?= $this->Html->script('jquery.themepunch.revolution'); ?>
<?= $this->Html->script('jquery.custom'); ?>


</body>
</html>
