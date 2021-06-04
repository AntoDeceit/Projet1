<!--nav bar desktop-->

<nav class="uk-navbar-container uk-visible@s " uk-navbar uk-sticky>
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav">
            <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
            <li>
                <a href="#">Curriculum Vitae</a>
                <div class="uk-navbar-dropdown">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="../franky.cv/cvFranky.php">Franky</a></li>
                        <li><a href="../brook/AKBrook.php">Brook</a></li>
                        <li><a href="../chopper/TCcv.php">Chopper</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="contact.php">Contact</a></li>
            <li><a href="agenda.php">Agenda</a></li>
        </ul>
    </div>
</nav>

<!--menu burger mobile-->
<nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@s"  uk-offcanvas>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-nav-primary"><span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></button>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
                        <li class="uk-parent">
                            <a href="#">Agenda</a>
                            <a href="contact.php">Contact</a>
                        </li>
                        <li class="uk-nav-header">Curriculum Vitae</li>
                        <li><a href="../chopper/TCcv.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span> Chopper</a></li>
                        <li><a href="../franky.cv/cvFranky.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Franky</a></li>
                        <li><a href="../brook/AKBrook.php"><span class="uk-margin-small-right" uk-icon="icon: file-text"></span>Brook</a></li>
                    </ul>

                </div>
            </div>
        </a>
    </div>
</nav>