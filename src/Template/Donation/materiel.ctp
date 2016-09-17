
        <!-- START CONTENT -->
        <div id="page-meta" class="container">
            <!-- SLOGAN -->
            <div class="slogan">
                <h2>Dont de materiel</h2>
                <h3>(et autre)</h3>
            </div>
        </div>
        <!-- END PAGE META -->

        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-no">
            <div class="container group">
                <div class="row">
                    <!-- START CONTENT -->
                    <div id="content-home" class="span12 content group">
                        <div class="page type-page status-publish hentry group">
                            <div class="section portfolio">
                                <!-- section blog wrapper -->

                                <!-- sticky portfolio -->
                                <div class="row">
                                    <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">

                                        <div class="work-thumbnail span4">
                                            <div class="thumb-wrapper">
                                                <div class="related_img">
                                                    <div class="picture_overlay">

                                                        <?= $this->html->image("blog/imgbloh-365x340.jpg", [
                                                            "class" => "attachment-section_portfolio",
                                                            'width'=>"573", 'height'=>"285"]);?>
                                                        <div class="overlay">
                                                            <div>
                                                                <p>
                                                                    <a href="images/portfolios/0411.jpg" rel="lightbox"
                                                                       class="ch-info-lightbox">
                                                                        <img src="images/icons/zoom.png"
                                                                             alt="Open Lightbox"/>
                                                                    </a>
                                                                    <a href="portfolio-slide-detail.html">
                                                                        <img src="images/icons/project.png" alt=""/>
                                                                    </a>
                                                                </p>
                                                                <p class="title">titre image</p>
                                                                <p class="subtitle">logo design</p>
                                                            </div>
                                                        </div>
                                                        <!-- end overlay -->
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end thumb wrapper -->
                                        </div>
                                        <!-- end work-thumbnail -->
                                        <div class="span6">
                                            <div class="work-description">
                                                <h2>
                                                    <a href="full-descriptor-digitpool.html">
                                                        Vous désirez nous faire dont de matériel?
                                                    </a>
                                                </h2>
                                                <p>Nullam volutpat, mauris scelerisque iaculis semper, justo odio rutrum
                                                    urna, at cursus urna nisl et ipsum. Donec dapibus lacus nec sapien
                                                    faucibus eget suscipit lorem mattis. Donec non mauris ac nulla
                                                    consectetur pretium sit amet rhoncus neque. Maecenas aliquet, diam
                                                    sed rhoncus vestibulum, sem lacus ultrices est, eu hendrerit tortor
                                                    nulla in dui. Suspendisse enim purus, euismod interdum viverra eget,
                                                    ultricies eu est. Maecenas dignissim mauris id est semper suscipit.
                                                    Suspendisse venenatis vestibulum quam, quis porttitor arcu
                                                    vestibulum et. Sed porttitor erosut purus elementum a consectetur
                                                    purus vulputate</p>
                                            </div>

                                            <!-- end work-description -->
                                        </div>
                                    </div>
                                </div>
                                <!-- span wrapper -->


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end section blog wrapper -->
        <div class="clear"></div>
        <!--START CONTACT-->
        <div class="container group">
            <div class="row">
                <!-- START CONTENT -->
                <div id="content-page" class="span9 content group">
                    <div class="page type-page status-publish hentry group">
                        <h3>Nous contactez</h3>
                        <p>&nbsp;</p>
                        <form id="contact-form-contact-form" class="contact-form row" method="post" action="sendmail.php" enctype="multipart/form-data">

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
                                            <input type="text" name="yit_contact[name]" id="name-contact-form" class="required" value="" />

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
                                name: "Insert the name",
                                email: "Insert a valid email",
                                phone: "",
                                message: "Insert a message"
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
                                    <span>Address:</span> Celestino, 115 Avenue - Italy
                                </li>

                                <li>
                                    <i class="icon-phone" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Phone:</span> +00 39 71717174
                                </li>

                                <li>
                                    <i class="icon-print" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Fax:</span> +39 0035 356 765
                                </li>

                                <li>
                                    <i class="icon-envelope" style="color:#000;font-size:12px;width:12px;height:12px"></i>
                                    <span>Email:</span> pinkrio@yit.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div id="text-2" class="widget-2 widget-last widget widget_text">
                        <h3>Mes disponibilités</h3>
                        <div class="textwidget">Praesent ultricies iaculis erat iaculis feugiat. Sed suscipit tempor felis, sit amet aliquam nunc sollicitudin sed.
                            <br /><br />
                        </div>
                    </div>
                    <!-- END SIDEBAR -->

                    <!-- START EXTRA CONTENT -->
                    <!-- END EXTRA CONTENT -->

                </div>
            </div>
        </div>
        <!--END CONTACT-->

        <!-- END CONTENT -->


<!-- END HEADER -->

</body>
</html>