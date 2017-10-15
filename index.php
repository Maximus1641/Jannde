<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>Janndé - Apprendre autrement </title>

        <!-- CSS  -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    
    <body>
        <nav class="white" role="navigation">
            <div class="nav-wrapper container">
                <a id="logo-container" href="#" class="brand-logo"><i class="large material-icons blue-text">local_library</i> Janndé</a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light btn blue lighten-1">Sign In</a></li>
                </ul>

                <ul id="nav-mobile" class="side-nav">
                  <li><a class="waves-effect waves-light btn blue">Sign In</a></li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="blue-text material-icons">menu</i></a>
            </div>
        </nav>

        <div id="index-banner" class="parallax-container">
            <div class="section no-pad-bot">
                <div class="container">
                    <br><br>
                    <h1 class="header center blue-text">JANNDE</h1>
                    <div class="row center">
                        <h5 class="header col s12 light">Apprendre autrement</h5>
                    </div>
                        <div class="row center">
                            <a href=" " id="download-button" class="btn-large waves-effect waves-light blue lighten-1">GET STARTED FOR FREE</a>
                        </div>
                    <br><br>
                </div>
            </div>
            <div class="parallax"><img src="images/background1.jpg" alt="Unsplashed background img 1"></div>
        </div>
<?php 
        if (isset($_POST['email'])) {
            
            $adresse=$_POST['emai'];

            $to    = 'contact@jannde.com';

            $subject  = "Instruction de confirmation" ;

            $message  = 'Welcome '. $adresse .' !' ;

            $headers  = 'From: '. $adresse .' ' . "\r\n" .
                'Reply-To: contact@jannde.com ' . "\r\n" .
                'MIME-Version: 1.0' . "\r\n" .
                'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
                'X-Mailer: PHP/' . phpversion();
        
            if(mail($to, $subject, $message, $headers))
                {
                    echo "<script type='text/javascript'>document.location.replace('index.php');</script>";
                    exit();
                }
        }
?>
        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/cours.png" width="50%" height="50%"></h2>
                            <h5 class="center">Des cours en ligne</h5>
                            <p class="light">Des cours de tous les niveaux, dispensé par des professeurs compétant pour te permettre de revenir sur les cours autant de fois que nécessaire pour ainsi mieux comprendre et avoir toutes les réponses à tes questions.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/exercice.png" width="50%" height="50%"></h2>
                            <h5 class="center">Des exercices corrigés</h5>
                            <p class="light">Tu veux te perfectionner dans certaines matières dont tu te débrouilles déjà et progresser dans celle où tu te débrouilles moins? Alors tu as frappé à la bonne porte. Janndé te propose des exercices corrigés de toutes les matières.</p>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/quiz.png" width="50%" height="50%"></h2>
                            <h5 class="center">Des quizs</h5>
                            <p class="light">Tu veux t’entrainer? Tu veux être sûr d’avoir bien maîtriser tes cours avant le devoir, la composition? Parfait, avec les quizs de Janndé, tu auras toutes les réponses.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container valign-wrapper blue lighten-1">
            <div class="container">
                <div class="row center">
                    <div class="col s12 m4">
                        <div class="card blue lighten-1">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="images/1.png">
                            </div>
                            <div class="card-reveal">
                                <span class="card-title grey-text text-darken-4">Évaluateur de niveau<i class="material-icons right">close</i>
                                <p class="left">Tu souhaites t’évaluer? Janndé te le permet et guidera ensuite vers des exercices en fonction de ton résultat.</p></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue lighten-1">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="images/memoire.png">
                            </div>
                            <div class="card-reveal">
                                <span class="card-title left grey-text text-darken-4">Des mémoires,thèses<i class="material-icons right">close</i>
                                <p class="left">Sur Janndé, tu peux disposer des meilleurs mémoires, thèses classés par domaine pour t'aider à rédiger le tien.</p></span>
                            </div>
                        </div>
                    </div>
                    <div class="col s12 m4">
                        <div class="card blue lighten-1">
                            <div class="card-image waves-effect waves-block waves-light">
                              <img class="activator" src="images/216710-200.png">
                            </div>
                            <div class="card-reveal">
                                <span class="card-title left grey-text text-darken-4">Des CV, lettres...<i class="material-icons right">close</i>
                                <p class="left">Janndé propose de bon exemples de CV, de lettre de motivation, de conseils et astuces pour un bon entretien d'embauche, tout ce que tu peux avoir besoin en tant que jeune diplômé pour faciliter ton insertion professionnelle.</p></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="section">
                <!--   Icon Section   -->
                <div class="row">
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/teacher.png" width="50%" height="50%"></h2>
                            <h5 class="center">Des enseignants qualifiés</h5>
                            <p class="light">Envie d'un bon prof pour ton enfant? Parents, Janndé dispose d'un solide répertoire d'enseignant compétents pour des cours à domicile.</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/formation.jpg" width="50%" height="50%"></h2>
                            <h5 class="center">Des formations sur mesure</h5>
                            <p class="light">Des formations trimestrielles sur mesure pour les diplômés et professionnels.</p>
                        </div>
                    </div>
                     <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/suivi.png" width="50%" height="50%"></h2>
                            <h5 class="center">Suivi de l'élève</h5>
                            <p class="light">Avec votre compte parent, suivez le progrès de vos enfants.</p>
                        </div>
                    </div>
                    <div class="col s12 m3">
                        <div class="icon-block">
                            <h2 class="center brown-text"><img src="images/pourquoi.png" width="50%" height="50%"></h2>
                            <h5 class="center">Pourquoi?</h5>
                            <p class="light">Manque de suivi des élèves par les parents
                                Les parents d’élèves soucieux de l’avenir de leur enfant désirent les meilleurs profs pour leur enfant pour combler les lacunes en cours.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container valign-wrapper blue lighten-1">
            <div class="container">
                <div class="row center">
                    <div class="icon-block">
                        <h2 class="center black-text"><i class="material-icons">group</i></h2>
                        <h5 class="center">Quoi?</h5>
                        <p class="light">Janndé est une plateforme de cours, mémoires, CV, lettres de motivation et tout autre modèle qu’un étudiant peut avoir besoin, c’est également des sessions de formation, des quiz en ligne, des QCM, des examens blancs, des cours de vacances, des kits scolaire (sacs, livres, cahier …) pour tous les niveaux scolaires

                        Janndé permet également d’évaluer, d’orienter et d’accompagner les élèves et étudiants en mettant à leur disposition des ressources matériels (brochures corrigées, ouvrages, etc.) et humains (répertoire d’enseignants et formateurs compétents) pour mieux les préparer dans le cadre de leurs études et formations.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="parallax-container valign-wrapper black lighten-1">
            <div class="container">
                <div class="row center">
                    <h5 class="header col s12 light">Pour être informer lors du lancement officiel du service, veuillez vous abonner!</h5>
                    <form id="form1" action="" method="post" class="col s12">
                        <div class="row">
                            <div class="input-field col s12">
                                <i class="material-icons prefix">email</i>
                                <input id="icon_prefix" name="email" type="text" class="validate">
                                <label for="icon_prefix">xyz@xyz.xxx</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <footer class="page-footer white">          
            
                <div class="black-text container">© 2017 Janndé, Inc.</div><br>
        </footer>


  <!--  Scripts-->
  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="js/materialize.js"></script>
  <script src="js/init.js"></script>

  </body>
</html>
