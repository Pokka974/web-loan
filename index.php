<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Institut de beauté Loan</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/webloan.css" rel="stylesheet">
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Institut de beauté Loan</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#soins-visage">Soins Visage</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#tarifs">Tarifs</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Section -->

    <section id="intro" class="intro-section">
        <a class="btn btn-default page-scroll" href="#about">Scroll to bottom !</a>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Institut de beauté Loan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <p>Adresse: 26 Rue de la Bruyère, 75009 Paris
                        <br /> Métro 12 - Trinité ou Saint Georges
                        <br /> Téléphone: 01 48 74 98 61
                        <br /> Email : contact@institutbeauteloan.com</p>
                </div>
                <div class="col-lg-6">
                    <p>
                        Horaires:
                        <br />
                        <br /> Lundi fermé
                        <br />
                        <!--Insérer un "horaire aujourd'hui" (script php/js)-->
                        Mardi à Samedi ouvert, de 9:30 à 18:30
                        <br />
                    </p>
                </div>
            </div>

        </div>
        </div>
    </section>

    <!-- Soins Visage Section -->
    <section id="soins-visage" class="soins-visage-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Soins du visage</h1>
                </div>
            </div>
            <div class="row panel">
                <div id="beauteexpert" class="col-lg-3 panel-group">
                    <h4>Beauté Expert</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#catiovital" data-parent="#beauteexpert" data-toggle="collapse">Catio Vital</a>
                                </h3>
                        </div>
                        <div id="catiovital" class="panel-collapse collapse">
                            <div class="panel-body">Soin beauté personnalisé, nettoyage traitant et en profondeur
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#catiolift" data-parent="#beauteexpert" data-toggle="collapse">Catio Lift</a>
                                </h3>
                        </div>
                        <div id="catiolift" class="panel-collapse collapse">
                            <div class="panel-body">
                                Méthode de rajeunissement des traits du visage basée sur la stimulation des muscles. Haute technologie de luxe avec l'appareil performante.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#doublecatiovitaljeunesse" data-parent="#beauteexpert" data-toggle="collapse">Double Catio Vital Jeunesse</a>
                                </h3>
                        </div>
                        <div id="doublecatiovitaljeunesse" class="panel-collapse collapse">
                            <div class="panel-body">Nettoyage en profondeur, anti-ride et anti-temps. Retrouver la jeunesse de la peau.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#eyerepair" data-parent="#beauteexpert" data-toggle="collapse">Eye-Repair</a>
                                </h3>
                        </div>
                        <div id="eyerepair" class="panel-collapse collapse">
                            <div class="panel-body">
                                Soin pour le contour des yeux. Anti-rides, anti-poches et anti-cernes
                            </div>
                        </div>
                    </div>
                </div>

                <div id="beauteessentielle" class="col-lg-3 panel-group">
                    <h4>Beauté Essentielle</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#beauteexpress" data-parent="#beauteessentielle" data-toggle="collapse">Beaute Express</a>
                                </h3>
                        </div>
                        <div id="beauteexpress" class="panel-collapse collapse">
                            <div class="panel-body">Soin coup d'éclat, edffet bonne mine.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#beautearomatique" data-parent="#beauteessentielle" data-toggle="collapse">Beauté Aromatique</a>
                                </h3>
                        </div>
                        <div id="beautearomatique" class="panel-collapse collapse">
                            <div class="panel-body">Soin personnalisé aux huiles essentielles.</div>
                        </div>
                    </div>
                </div>

                <div id="beautelifting" class="col-lg-3 panel-group">
                    <h4>Beauté Lifting</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#beautelifting2" data-parent="#beautelifting" data-toggle="collapse">Beauté Lifting</a>
                                </h3>
                        </div>
                        <div id="beautelifting2" class="panel-collapse collapse">
                            <div class="panel-body">Soin lifting et raffermissant au procollagène.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#peeletlift" data-parent="#beautelifting" data-toggle="collapse">Peel & Lift</a>
                                </h3>
                        </div>
                        <div id="peeletlift" class="panel-collapse collapse">
                            <div class="panel-body">Soin rénovateur effet lifting-éclat. Anti-taches brunes aux acides de fruits.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                     <a href="#kobido" data-parent="#beautelifting" data-toggle="collapse">Kobido</a>
                                </h3>
                        </div>
                        <div id="kobido" class="panel-collapse collapse">
                            <div class="panel-body">Stimuler l'ensemble de la circulation énergétique du visage, du cou et du décolleté.
                            </div>
                        </div>
                    </div>


                </div>

                <div id="dle" class="col-lg-3 panel-group">
                    <h4>Drainage Lympho-Energétique</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#dledv" data-parent="#dle" data-toggle="collapse">Drainage Lympho-énergétique du visage</a>
                                </h3>
                        </div>
                        <div id="dledv" class="panel-collapse collapse">
                            <div class="panel-body">Dégonfler, rendre les boutons moins enflés.</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#soinsayurvedique" data-parent="#dle" data-toggle="collapse">Soins Ayurvédiques</a>
                                </h3>
                        </div>
                        <div id="soinsayurvedique" class="panel-collapse collapse">
                            <div class="panel-body">Détente profonde.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                     <a href="#dlecou" data-parent="#dle" data-toggle="collapse">Cou</a>
                                </h3>
                        </div>
                        <div id="dlecou" class="panel-collapse collapse">
                            <div class="panel-body">Retrouver la jeunesse, l'ovale du visage, dégraissage et anti "double-menton".
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            <div class="row panel">
                <div id="psm4s" class="col-lg-3 panel-group">
                    <h4>Programme sur mesure 4 semaines</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#eclatenergie" data-parent="#psm4s" data-toggle="collapse">Eclat Energie</a>
                                </h3>
                        </div>
                        <div id="eclatenergie" class="panel-collapse collapse">
                            <div class="panel-body">Eclat Energie - 4 Soins - BA/PL/DL/BA</div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#eclaircissement" data-parent="#psm4s" data-toggle="collapse">Eclairecissement</a>
                                </h3>
                        </div>
                        <div id="eclaircissement" class="panel-collapse collapse">
                            <div class="panel-body">4 Soins - PL/CL/PL/CL</div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#jeunesseantitache" data-parent="#psm4s" data-toggle="collapse">Jeunesse Anti-tâches</a>
                                </h3>
                        </div>
                        <div id="jeunesseantitache" class="panel-collapse collapse">
                            <div class="panel-body">4 Soins - PL/PL/C/BL</div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#puretematite" data-parent="#psm4s" data-toggle="collapse">Pureté Matité</a>
                                </h3>
                        </div>
                        <div id="puretematite" class="panel-collapse collapse">
                            <div class="panel-body">4 Soins - C/PL/PL/PL</div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#liftfermete" data-parent="#psm4s" data-toggle="collapse">Lift Fermeté</a>
                                </h3>
                        </div>
                        <div id="liftfermete" class="panel-collapse collapse">
                            <div class="panel-body">4 Soins - PL/CL/PL/CL</div>
                        </div>
                    </div>
                </div>
        
                <div id="maquillage" class="col-lg-3 panel-group">
                    <h4>Maquillage</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#maquillagejour" data-parent="#maquillage" data-toggle="collapse">Maquillage Jour</a>
                                </h3>
                        </div>
                        <div id="maquillagejour" class="panel-collapse collapse">
                            <div class="panel-body">...
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#maquillagesoir" data-parent="#maquillage" data-toggle="collapse">Maquillage Soir</a>
                                </h3>
                        </div>
                        <div id="maquillagesoir" class="panel-collapse collapse">
                            <div class="panel-body">Cocktail avec un soin fixateur
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#maquillagemariee" data-parent="#maquillage" data-toggle="collapse">Maquillage Mariée</a>
                                </h3>
                        </div>
                        <div id="maquillagemariee" class="panel-collapse collapse">
                            <div class="panel-body">(Avec 1 essai offert) Atténuer les imperfections, mettre en valeur...<br>
                                Avec un soin éclat du visage, beauté des mains, pied ou forfait + maquillage 
                            </div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#coursautomaquillage" data-parent="#maquillage" data-toggle="collapse">Cours d'automaquillage</a>
                                </h3>
                        </div>
                        <div id="coursautomaquillage" class="panel-collapse collapse">
                            <div class="panel-body">Cours d'automaquillage personnalisé et conseils sur les produits
                            </div>
                        </div>
                    </div>
                </div>
        
                <div id="teinturecils" class="col-lg-3 panel-group">
                    <h4>Teinture Sourcils / Cils</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#teinturecils2" data-parent="#psm4s" data-toggle="collapse">Teinture Cils</a>
                                </h3>
                        </div>
                        <div id="teinturecils2" class="panel-collapse collapse">
                            <div class="panel-body">...</div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#teinturesourcils" data-parent="#psm4s" data-toggle="collapse">Teinture Sourcils</a>
                                </h3>
                        </div>
                        <div id="teinturesourcils" class="panel-collapse collapse">
                            <div class="panel-body">...</div>
                        </div>
                    </div>
                    
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                    <a href="#teinturesourcilsetcils" data-parent="#psm4s" data-toggle="collapse">Teinture Sourcils & Cils</a>
                                </h3>
                        </div>
                        <div id="teinturesourcilsetcils" class="panel-collapse collapse">
                            <div class="panel-body">...</div>
                        </div>
                    </div>
                    
                </div>
                
                <div id="rehaussementcils" class="col-lg-3 panel-group">
                    <h4>Réhaussement de cils</h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <a href="#rehaussementcils2" data-parent="#rehaussementcils" data-toggle="collapse">Réhaussement de cils</a>
                            </h3>
                        </div>
                        <div id="rehaussementcils2" class="panel-collapse collapse">
                            <div class="panel-body">Retrouver des cils plus longs, plus courbés pour un regard de biche surtout avec de vrais cils, points forts: garder le réhaussement des cils pendant deux mois.</div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="tarifs" class="tarifs-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Tarifs Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
                </div>
            </div>
        </div>
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/scrolling-nav.js"></script>
</body>

</html>