<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Accueil - ASBL L'Éperon</title>
	
	<?php include('../includes/head.php') ?>

</head><!--/head-->

<body class="homepage">

    <?php include('../includes/header.php') ?>

    <section id="main-slider" class="no-margin">
        <div class="carousel slide">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">

                <div class="item active" style="background-image: url(../images/slider3.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 id="titreBlanc" class="animation animated-item-1">Cercle équestre L'Éperon</h1>
                                    <h2 class="animation animated-item-2">Le plus ancien cercle équestre de la Province de Liège</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(../images/slider2.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 id="titreBlanc" class="animation animated-item-1">Des infrastructures exceptionnelles</h1>
                                    <a class="btn-slide animation animated-item-3" href="../pages/infrastructures">Voir les infrastructures</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->

                <div class="item" style="background-image: url(../images/slider1.jpg)">
                    <div class="container">
                        <div class="row slide-margin">
                            <div class="col-sm-6">
                                <div class="carousel-content">
                                    <h1 id="titreBlanc" class="animation animated-item-1">Une école d’équitation motivée</h1>
                                    <a class="btn-slide animation animated-item-3" href="../pages/ecole.php">Voir l'école</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="fa fa-chevron-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="fa fa-chevron-right"></i>
        </a>
    </section><!--/#main-slider-->

    <section id="feature" >
        <div class="container">
           <!--<div class="center wow fadeInDown">
                <h2>Features</h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>
        -->

            <div class="row">
                <div class="features">
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-home"></i>
                            <h2>Infrastructure</h2>
                            <h3>70 boxes, douches et salles de pansages intérieures et extérieures</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-tree"></i>
                            <h2>Pistes extérieures et intérieures</h2>
                            <h3>Une piste extérieure de 80 sur 40 mètres. Deux pistes intérieures de 15 sur 30 mètres et 46 sur 20 mètres</h3>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-users"></i>
                            <h2>Professionnalisme</h2>
                            <h3>Moniteurs brevetés, leçons collectives ou individuelles pour tous niveaux</h3>
                        </div>
                    </div><!--/.col-md-4-->
                
                    <div class="col-md-3 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                        <div class="feature-wrap">
                            <i class="fa fa-video-camera"></i>
                            <h2>Sécurité</h2>
                            <h3>Site sous vidéosurveillance 24 h/24</h3>
                        </div>
                    </div><!--/.col-md-4-->
                </div><!--/.services-->
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#feature-->

    <?php include('../includes/bottom.php') ?>

    <?php include('../includes/footer.php') ?>

    <?php include('../includes/script.php') ?>
</body>
</html>