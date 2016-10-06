<div id="primary" class="sidebar-no">
    <div class="container group">
        <div class="row">
            <!-- START CONTENT -->
            <div id="content-home" class="span12 offset1 content group">

                <div class="row box-title">
                    <div class="span4 offset1">
                        <div class="border-line"></div>
                    </div>
                    <h3 class="span2 ">ADMINISTRATION MTCT</h3>
                    <div class="span4">
                        <div class="border-line"></div>
                    </div>
                </div>
                <ul>
                    <li><?= $this->html->link('Page d\'accueil', ['contoller' => "News", 'action' => 'index']); ?></li>
                    <li><?= $this->html->link('Les animaux', ['contoller' => "Animals", 'action' => 'add']); ?></li>
                    <li><?= $this->html->link('Les membres', ['contoller' => "Users", 'action' => 'index']); ?></li>
                    <li><?= $this->html->link('Les partenaires', ['contoller' => "Partners", 'action' => 'index']); ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>