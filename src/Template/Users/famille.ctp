



        <!-- START PRIMARY -->
        <div id="primary" class="sidebar-no">
            <div class="container group">
                <div class="row">
                    <!-- START CONTENT -->
                    <div id="content-home" class="span12 content group">

                        <div class="row box-title">
                            <div class="span4 offset1">
                                <div class="border-line"></div>
                            </div>
                            <h3 class="span2 ">Famille d'accueil</h3>
                            <div class="span4">
                                <div class="border-line"></div>
                            </div>
                        </div>

                        <div class="page type-page status-publish hentry group">
                            <div class="section portfolio">
                                <!-- section blog wrapper -->

                                <!-- sticky portfolio -->
                                <div class="row">
                                    <div class="page type-page status-publish hentry work group portfolio-sticky portfolio-full-description">

                                        <div class="work-thumbnail span5">
                                            <div class="thumb-wrapper">
                                                <div class="related_img">
                                                    <div class="picture_overlay">
                                                        <?= $this->html->image("mes_images/Logo_MTCT_black.png", [
                                                            "class" => "attachment-section_portfolio",
                                                            'width'=>"400", 'max-height'=>"350px"]);?>

                                                        <div class="overlay">
                                                            <div>
                                                                <p>
                                                                    <a href="images/portfolios/0411.jpg" rel="lightbox"
                                                                       class="ch-info-lightbox">
                                                                        <?= $this->html->image("icons/zoom.png", [
                                                                            'alt'=>"Open Lightbox"]);?>
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
                                                        Devenir famille d'accueil, en quoi ça conciste?
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
                                <div class="row">
                                    <div class="col-10 offset2">
                                        <?= $this->Form->create($user) ?>
                                        <fieldset>

                                            <div class="row">
                                                <div class="span4">
                                                    <label>Adress Email</label>
                                                    <?php echo $this->Form->input('email', ['type' => 'text', "label" => false]); ?>
                                                    <label>Nom d'utilisateur</label>
                                                    <?php echo $this->Form->input('username', ["label" => false]); ?>
                                                </div>
                                                <div class="span4">
                                                    <label>Nom</label>
                                                    <?php echo $this->Form->input('last_name', ["label" => false]); ?>
                                                    <label>Prenom</label>
                                                    <?php echo $this->Form->input('fisrt_name', ["label" => false]); ?>
                                                    <label></label>
                                                    <?php echo $this->Form->hidden('is_admin', ['value' => '0']); ?>
                                                    <label></label>
                                                    <?php echo $this->Form->hidden('is_adherant', ['value' => '0']); ?>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row">
                                                <div class="span4">
                                                    <label>Adresse</label>
                                                    <?php echo $this->Form->input('address.address', ['type' => 'text', "label" => false]); ?>
                                                    <label>Ville</label>
                                                    <?php echo $this->Form->input('address.city', ["label" => false]); ?>
                                                    <label>Code postal</label>
                                                    <?php echo $this->Form->input('address.city_zip_code', ['type' => 'text', "label" => false]); ?>
                                                </div>
                                                <div class="span4">
                                                    <label>Telephone portable</label>
                                                    <?php echo $this->Form->input('telephone_portable', ["label" => false]); ?>
                                                    <label>Telephone fixe</label>
                                                    <?php echo $this->Form->input('telephone_fixe', ["label" => false]) ?>
                                                    <label>Facebook</label>
                                                    <?php echo $this->Form->input('facebook', ["label" => false]); ?>
                                                </div>
                                            </div>
                                        </fieldset>
                                        <?= $this->Form->button('Valider<span class="icon tick">&nbsp;</span>', [
                                            'type' => 'submit',
                                            'escape' => false,
                                            'class' => 'more-button more-button-rtl']); ?>
                                        <?= $this->Form->end() ?>
                                    </div>
                                </div>
                            </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!--END CONTACT-->

        <!-- END CONTENT -->

<!-- END HEADER -->
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