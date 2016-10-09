        <!-- START CONTENT -->


        <!-- START MAP -->
        <div id="map">
            <iframe
                    style="width:100%;height:335px;"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    src="https://maps.google.it/maps?ll=45.5416666667,5.39222222222&spn=0.00687,0.016512&sll=45.5416666667,5.39222222222&amp;output=embed">
            </iframe>

            <div id="map-handler" class="container">
                <a href="#">[x] Close</a>
            </div>
        </div>
        <!-- END MAP --><!-- START PAGE META -->
        <div id="page-meta" class="container">

            <!-- TITLE -->
            <div class="title">
                <h1>Messagerie MTCT</h1>
            </div>

            <!-- BREDCRUMB -->
            <div class="breadcrumbs">
                <p id="yit-breadcrumb" itemprop="breadcrumb">
                    <a class="home" href="index.html">Mtct</a> &gt;
                    <a class="no-link current" href="#">Contact</a>
                </p>
            </div>
        </div>
        <!-- END PAGE META -->

        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-right">
            <div class="container group">
                <div class="row">
                    <!-- START CONTENT -->
                    <div id="content-page" class="span9 content group">
                        <div class="page type-page status-publish hentry group">
                            <h3>Nous contactez</h3>
                            <p>&nbsp;</p>
                            <?= $this->Form->create($email) ?>
                            <form id="contact-form-contact-form" class="contact-form row" method="post" action="../../../webroot/sendmail.php" enctype="multipart/form-data">

                                <div class="usermessagea"></div>
                                <fieldset>
                                    <ul>
                                        <li class="text-field span3">
                                            <label for="name-contact-form">
                                                <span class="mainlabel">Nom</span>
                                            </label>
                                            <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-user"></i>
                                        </span>
                                                <!--                                                <input type="text" name="yit_contact[name]" id="name-contact-form" class="required" value="" />-->
                                                <?= $this->Form->text('name', [
                                                    'name' => 'yit_contact[name]',
                                                    'id' => 'name-contact-form',
                                                    'class' => 'required'
                                                ]); ?>
                                            </div>
                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="text-field span3">
                                            <label for="email-contact-form">
                                                <span class="mainlabel">Email</span>
                                            </label>
                                            <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-envelope"></i>
                                        </span>
                                                <input type="text" name="yit_contact[email]" id="email-contact-form" class="required email-validate" value="" />
                                            </div>

                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="text-field span3">
                                            <label for="phone-contact-form">
                                                <span class="mainlabel">Téléphone</span>
                                            </label>
                                            <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-phone"></i>
                                        </span>
                                                <input type="text" name="yit_contact[phone]" id="phone-contact-form" class="" value="" />
                                            </div>

                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="textarea-field span9">
                                            <label for="message-contact-form">
                                                <span class="mainlabel">Message</span>
                                            </label>
                                            <div class="input-prepend">
                                        <span class="add-on">
                                            <i class="icon-pencil"></i>
                                        </span>
                                                <textarea name="yit_contact[message]" id="message-contact-form" rows="8" cols="30" class="required"></textarea>
                                            </div>
                                            <div class="msg-error"></div>
                                            <div class="clear"></div>
                                        </li>

                                        <li class="submit-button span9">

                                            <input type="text" name="yit_bot" id="yit_bot" />
                                            <input type="hidden" name="yit_action" value="sendmail" id="yit_action" />
                                            <input type="hidden" name="yit_referer" value="pages-contact.html" />
                                            <input type="hidden" name="id_form" value="3" />
                                            <input type="submit" name="yit_sendemail" value="Envoyer" class="sendmail alignright" />
                                            <div class="clear"></div>
                                        </li>
                                    </ul>
                                </fieldset>
                            </form>

                            <script type="text/javascript">
                                var messages_form_3 = {
                                    name: "Veuillé renseigné votre nom",
                                    email: "Veuillé renseigné un adresse mail vailide",
                                    phone: "",
                                    message: "Ecriver votre message"
                                };
                            </script>

                        </div>


                        <!-- START COMMENTS -->
                        <div id="comments"></div>
                        <!-- END COMMENTS -->
                    </div>
                    <!-- END CONTENT -->

                    <!-- START SIDEBAR -->
                    <div id="sidebar-contact" class="span3 sidebar group">
                        <div id="contact-info-2" class="widget-first widget contact-info">
                            <h3>Information de contact</h3>
                            <div class="sidebar-nav">
                                <ul>
                                    <li>
                                        <i class="icon-map-marker" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                        <span>Addresse:</span> 38110 Saint-Victor-de-Cessieu
                                    </li>

                                    <li>
                                        <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                        <span>Téléphone:</span> 06 44 00 13 35
                                    </li>

                                    <li>
                                        <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                        <span>Fax:</span> ??
                                    </li>

                                    <li>
                                        <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                        <span>Email:</span> ??@hotmail.fr
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div id="text-2" class="widget-2 widget-last widget widget_text">
                            <h3>Mes disponibilité</h3>
                            <div class="textwidget">Praesent ultricies iaculis erat iaculis feugiat. Sed suscipit tempor felis, sit amet aliquam nunc sollicitudin sed.

                        </div>
                    </div>
                    <!-- END SIDEBAR -->

                    <!-- START EXTRA CONTENT -->
                    <!-- END EXTRA CONTENT -->

                </div>
            </div>
        </div>
        </div>
        <!-- END PRIMARY -->

        <!-- END CONTENT -->

<!--<script type='text/javascript' src='sliders/thumbnails/js/jquery.aw-showcase.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.colorbox-min.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.tweetable.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.superfish.js'></script>-->
<!--<script type='text/javascript' src='portfolios/filterable/js/jquery.filterable.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.tipsy.js'></script>-->
<!--<script type='text/javascript' src='js/responsive.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.mobilemenu.js'></script>-->
<!--<script type='text/javascript' src='js/shortcodes.js'></script>-->
<!--<script type='text/javascript' src='js/jquery/jquery.masonry.min.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.flexslider-min.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.easing.js'></script>-->
<!--<script type='text/javascript' src='sliders/elastic/js/jquery.eislideshow.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.themepunch.plugins.min.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.themepunch.revolution.js'></script>-->
<!--<script type='text/javascript' src='js/jquery.custom.js'></script>-->

</body>
</html>