<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Curriculum Vitae | Tony Tony Chopper</title>
        <link rel="stylesheet" href="../global/style.css" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/css/uikit.min.css" />
    </head>
    <body>
        <?php include "./TCnavbar.php" ?>
        <header>
            <div class="uk-child-width-1-2@s uk-light" uk-grid>
                <div>
                    <div class="uk-background-top-right uk-background-cover uk-height-large  uk-visible@s" style="background-image: url(../assets/chopper/chopper15.gif);">
                    </div>
                </div>
                <div>
                    <div class="uk-background-top-left uk-background-cover uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-center  uk-visible@s" style="background-image: url(../assets/chopper/chopper12.gif);">
                    </div>
                </div>
                <div>
                    <div class="uk-background-top-left uk-background-cover uk-height-large uk-panel uk-flex uk-flex-middle uk-flex-center uk-hidden@s " style="background-image: url(../assets/chopper/chopper12.gif);">
                    </div>
                </div>
                <script>
                    UIkit.util.on('#js-scroll-trigger', 'scrolled', function () {
                        alert('Done.');
                    });
                </script>
            </div>
            <section class = "presentation">
                <h1> • Tony Tony Chopper • Docteur et Pirate • 17 ans</h1>
            </section>
        </header>

        <main>
            <section class = "biographie">
                <h2 id = "biographie">• Biographie</h2>
                <p>
                    Je  suis le docteur de l'Équipage du Chapeau de Paille. En principe, je suis un renne mais après avoir  mangé le Hito Hito no Mi, j’ai pu me transformer en humain. Je suis originaire de l’ile de Drum. La Marine me considère comme l'Animal de Compagnie de l’équipage mais je suis un très bon docteur.

                </p>
            </section>
            <section class = "competence">
                <h2 id = "competence">• Mes Compétences</h2>
                <p>
                    Je possède de grandes connaissances en médecine ainsi qu'en préparation de remède et de médicaments. Et je me sers très bien de mes sabots et mes cornes pour me battre.
                </p>
            </section>
            <section class = "imgCompetence">
                <div class="uk-child-width-1-2@m uk-grid-match" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-visible@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                            <img src="../assets/chopper/chopper14.gif">
                        </div>
                    </div>
                    <div class="uk-card uk-card-default uk-visible@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-right; repeat: true ">
                        <img src="../assets/chopper/choppercompetences.png">
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default  uk-hidden@s uk-card-body" uk-scrollspy="cls: uk-animation-slide-left; repeat: true">
                        <img src="../assets/chopper/choppercompetences.png">
                    </div>
                </div>

            </section>

            <section class = "personnalite">
                <h2 id = "personnalite">• Ma Personnalité</h2>
                <p>
                    Je très attentionné et gentil. Je n'hésite jamais à aider les personnes dans le besoin. Ca explique surement que je sois devenu médecin.
                    J’adore les compliments même si je ne l’avouerai pas.
                    Je m’émerveille facilement mais j’ai aussi la larme facile… <br/>
                    Je suis plutôt timide, surtout envers les humains inconnus. Et je suis facilement impressionné par toute sorte de choses, mais quand j’ai une mission, je vais tout mettre en oeuvre pour l’accomplir.
                    Je souhaite plus que tout devenir le médecin qui guérira toutes les maladies. Et je mets un point d’honneur à défendre mes patients et à faire mon possible pour les guérir. Je m’énerve facilement si on ne respecte pas mes patients comme il se doit!
                </p>
            </section>

            <section class ="citation uk-visible@s">
                <img src="../assets/chopper/chopper13.jpg"/>
                <p>
                    "Un Docteur, un Docteur, ah oui c'est moi!"
                </p>
            </section>

        </main>

        <?php include "../chopper/TCfooter.php" ?>

        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/uikit@3.6.18/dist/js/uikit-icons.min.js"></script>
    </body>
</html>