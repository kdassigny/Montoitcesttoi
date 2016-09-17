<!DOCTYPE html>

<meta charset="UTF-8">
<title>Title</title>
<!--[if IE 6]>
<html id="ie6" class="ie"lang="en-US">
<![endif]-->
<!--[if IE 7]>
<html id="ie7"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 8]>
<html id="ie8"  class="ie"lang="en-US">
<![endif]-->
<!--[if IE 9]>
<html id="ie9"  class="ie"lang="en-US">
<![endif]-->
<!--[if gt IE 9]>
<html class="ie"lang="en-US">
<![endif]-->
<!--[if !IE]>
<html lang="en-US">
<![endif]-->

<!-- START HEAD -->
    <head>

        <!-- this line will appear only if the website is visited with an iPad -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

        <title>Celestino | only for creative minds.</title>

        <!-- RESET STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/reset.css" />
        <!-- BOOTSTRAP STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.css" />
        <!-- MAIN THEME STYLESHEET -->
        <link rel="stylesheet" type="text/css" media="all" href="style.css" />

        <link rel='stylesheet' id='custom-css'  href='css/custom.css' type='text/css' media='all' />
        <link rel='stylesheet' id='google-fonts-css'  href='http://fonts.googleapis.com/css?family=Oswald%7CDroid+Sans%7CPlayfair+Display%7COpen+Sans+Condensed:300,400,800%3A300%7CRokkitt%7CShadows+Into+Light%7CMaven+Pro:400,700%7CAbel%7CMontez' type='text/css' media='all' />
        <link rel='stylesheet' id='responsive-css'  href='css/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' id='thickbox-css'  href='js/thickbox/thickbox.css' type='text/css' media='all' />
        <link rel='stylesheet' id='tipsy-css'  href='css/tipsy.css' type='text/css' media='all' />

        <link rel='stylesheet' id='fonts-css'  href='css/font-awesome.css' type='text/css' media='all' />
        <link rel='stylesheet' id='full-descriptor-css'  href='portfolios/full-description/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='slide-details-css'  href='portfolios/slide-detail/css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' id='shortcode-css'  href='css/shortcodes.css' type='text/css' media='all' />


        <link rel='stylesheet' id='colorbox-css'  href='css/colorbox.css' type='text/css' media='all' />
        <link rel='stylesheet' id='elastic-slider-css'  href='sliders/elastic/css/elastic.css' type='text/css' media='all' />
        <link rel='stylesheet' id='custom-button-mfast-3-css'  href='css/buttons/mfast-3.css' type='text/css' media='all' />
        <link rel='stylesheet' id='flexi-slider-css'  href='css/contact_form.css' type='text/css' media='all' />

        <!-- [favicon] begin -->
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <link rel="icon" type="image/x-icon" href="favicon.ico" />
        <!-- [favicon] end -->

        <!-- Touch icons more info: http://mathiasbynens.be/notes/touch-icons -->
        <!-- For iPad3 with retina display: -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x.png" />
        <!-- For first- and second-generation iPad: -->
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x.png">
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />
        <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
        <link rel="apple-touch-icon-precomposed" href="apple-touch-icon-57x.png" />


        <script type='text/javascript' src='js/jquery/jquery.js'></script>
</head>

<!-- START BODY -->
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
                            <a href="# " class="socials-small facebook-small" title="Facebook"  style="right: 0px;" >facebook</a>

                           <!-- <a href="#" class="socials-small rss-small" title="Rss"  >rss</a>

                            <a href="#" class="socials-small twitter-small" title="Twitter"  >twitter</a>

                            <a href="#" class="socials-small google-small" title="Google"  >google</a>

                            <a href="#" class="socials-small linkedin-small" title="Linkedin"  >linkedin</a>

                            <a href="#" class="socials-small pinterest-small" title="Pinterest"  >pinterest</a>--></div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            jQuery(function($){
                var twitterSlider = function(){
                    $('#topbar .last-tweets ul').addClass('slides');
                    $('#topbar .last-tweets').flexslider({
                        animation: "fade",
                        slideshowSpeed: 5 * 1000,
                        animationDuration: 700,
                        directionNav: false,
                        controlNav: false,
                        keyboardNav: false
                    });
                };
                $('#topbar .last-tweets > div').bind('tweetable_loaded', function(){
                    twitterSlider();
                });
            });
        </script>

        <!-- END TOP BAR -->

        <!-- START HEADER -->
        <div id="header" class="group">
            <div class="group container">
                <div class="row">
                    <div class="span12">

                        <div class="row">
                            <!-- START LOGO -->
                            <div id="logo" class="span4 group">
                                <a id="logo-img" href="index.html" title="Mon toit c'est toi">
                                    <img src="images/mes_images/dog-1484728_960_720.png" title="celestino" alt="Mon toit c'est toi" width="100px" />
                                </a>

                                <p id="tagline">MON TOIT C'EST TOI</p>
                            </div>
                            <!-- END LOGO -->
                            <div id="menu" class="span8 group">
                                <!-- START MAIN NAVIGATION -->
                                <div class="menu">
                                    <ul id="nav" class="sf-menu">
                                        <li class="nav-icon-hi current_page_item">
                                            <a href="index.html">
                                                Accueil
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-heart">
                                            <a href="#">
                                                Adoption
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-home">
                                            <a href="index.html">
                                                Famille d'accueil
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-gift">
                                            <a href="#">
                                                Nous aidez
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="nav-icon-contact">
                                            <a href="#">
                                                Contact
                                                <div style="position:absolute; left: 50%;">
                                                    <span class="triangle">&nbsp;</span>
                                                </div>
                                            </a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="#">
                                                        Nous contacter
                                                        <div style="position:absolute; left: 50%;">
                                                            <span class="triangle">&nbsp;</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        L'équipe
                                                        <div style="position:absolute; left: 50%;">
                                                            <span class="triangle">&nbsp;</span>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#">
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




        <!-- END CONTENT -->
        <!-- START FOOTER -->

        <div id="footer">
            <div class="container">
                <div class="row">
                    <div>
                        <div  class="widget span2 contact-info">
                            <div class="sidebar-nav">
                                <ul>
                                    <li><a href="#">Accueil</a></li>
                                    <li><a href="#">Adoption</a></li>
                                    <li><a href="#">Famille d'accueil</a></li>
                                 </ul>
                            </div>
                        </div>
                        <div  class="widget span2 contact-info">
                            <div class="sidebar-nav">
                                <ul>
                                    <li><a href="#">Dont financier</a></li>
                                    <li><a href="#">Dont materiel</a></li>
                                    <li><a href="#">Devenir adhérant</a></li>
                                </ul>
                            </div>
                        </div>
                        <div  class="widget span2 contact-info">
                            <div class="sidebar-nav">
                                <ul>
                                    <li><a href="#">Contact</a></li>
                                    <li><a href="#">L'équipe</a></li>
                                    <li><a href="#">Partenaire</a></li>
                                </ul>
                            </div>
                        </div>
                        <div  class="widget span3 contact-info">
                            <div class="sidebar-nav">
                                <ul>
                                    <li>
                                        <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
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
                                        <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                        <span>Email:</span> MTCT@hotmail.fr
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class=" widget span3 last">
                            <div class="list-tweets-2">
                                <ul style="margin-left: 30%;">
                                    <br><li><a href="https://www.facebook.com/montoitcesttoi"><img src="images/mes_images/icon-fb.png"></a></li><br>
                                    <li><a href="#"><img src="images/icons/set_icons/letter32.png"></a></li>

                                </ul>
                            </div>

                            <script type="text/javascript">
                                jQuery(function($){
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

</div>
<!-- END BG SHADOW -->

<!-- START CUSTOM SCRIPT -->
<!-- END CUSTOM SCRIPT -->

        <!-- END HEADER -->
<script type='text/javascript' src='sliders/thumbnails/js/jquery.aw-showcase.js'></script>
<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>
<script type='text/javascript' src='js/jquery.tweetable.js'></script>
<script type='text/javascript' src='js/jquery.superfish.js'></script>
<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>
<script type='text/javascript' src='js/jquery.tipsy.js'></script>
<script type='text/javascript' src='js/responsive.js'></script>
<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>
<script type='text/javascript' src='js/shortcodes.js'></script>
<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>
<script type='text/javascript' src='js/jquery.easing.js'></script>
<script type='text/javascript' src='sliders/elastic/js/jquery.eislideshow.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>
<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>
<script type='text/javascript' src='js/jquery.custom.js'></script>

</body>
</html>