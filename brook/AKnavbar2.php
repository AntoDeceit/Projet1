<!--navbar desktop book de brook-->
<nav class="uk-navbar-container; uk-visible@s" uk-navbar >
    <div class="uk-navbar-left">
        <ul class="uk-navbar-nav ">
            <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
            <li><a href="./AKcontact.php">Contact</a></li>
            <li><a href="./AKBrook.php">Retour</a></li>
            <li>
                <a href="#">Curriculum Vitae</a>
                <div class="uk-navbar-dropdown">
                     <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="../franky.cv/cvFranky.php">Franky</a></li>
                        <li><a href="../chopper/TCcv.php">Chopper</a></li>
                     </ul>
                </div>
            </li>
        </ul>
    </div>
</nav>
<!--navbar menu burger book de brook-->
<nav class="uk-navbar uk-navbar-container uk-margin uk-hidden@s" uk-offcanvas>
    <div class="uk-navbar-left">
        <a class="uk-navbar-toggle" href="#">
            <button class="uk-button uk-button-default uk-margin-small-right" type="button" uk-toggle="target: #offcanvas-nav-primary"><span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></button>
            <div id="offcanvas-nav-primary" uk-offcanvas="overlay: true">
                <div class="uk-offcanvas-bar uk-flex uk-flex-column">

                    <ul class="uk-nav uk-nav-primary uk-nav-center uk-margin-auto-vertical">
                        <li class="uk-active"><a href="../global/index.php">Accueil</a></li>
                        <li class="uk-parent">
                            <a href="./Akcontact.php">Contact</a>
                            <a href="./AkBrook.php">Retour</a>
                        <li class="uk-nav-header">Curriculum Vitae</li>
                        <li><a href="../franky.cv/cvFranky.php"><span class="uk-margin-small-right" ></span>Franky</a></li>
                        <li><a href="../chopper/TCcv.php"><span class="uk-margin-small-right" ></span>Chopper</a></li>
                    </ul>
                    
                    

                </div>
            </div>


        </a>
    </div>
</nav>
