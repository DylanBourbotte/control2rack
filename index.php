<?php
include('includes/header.php');
?>

<section class="home">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
  
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <h1 class="secure">Sécuriser<br><span class="man">L'homme dans son<br> environnement</span></h1>
                    <button class="btn btn-primary optimisation">Découvrez nos<br>méthode d'optimisation</button>
                </div>

                <div class="col-lg-8 col-sm-12">
                    <img src="img/slide1.jpg" class="d-block w-100 img-fluid" alt="...">
                 </div>          
            </div>
        </div>
    <div class="carousel-item">
    <div class="row">
            <div class="col-lg-4 col-sm-12">
                <h1 class="secure">Contrôler<br><span class="man">Les environnement<br>de stockage</span></h1>
                <button class="btn btn-primary optimisation" onclick="window.location.href='controle.php'">Télécharger la<br>norme inrs</button>
            </div>

            <div class="col-lg-8 col-sm-12">
                <img src="img/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>          
        </div>
    </div>
    <div class="carousel-item">
    <div class="row">
            <div class="col-lg-4 col-sm-12">
                <h1 class="secure">Former<br><span class="man">Maîtrisez votre<br>univers stockage</span></h1>
                <button class="btn btn-primary optimisation"  onclick="window.location.href='formation.php'">Découvrez nos<br>modules de formation</button>
            </div>

            <div class="col-lg-8 col-sm-12">
                <img src="img/slide3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>          
        </div>
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
</div>
</section>

<section class="who">
    <div class="container-fluid">
    <div class="row quisommenous">
        <div class="col-lg-6 col-sm-12 image_who">
            <img src="img/whoimg.jpg" alt="Photo section qui somme nous" class="img-fluid whoimg">
        </div>
        <div class="col-lg-3 col-sm-12 whoweare">
            <div class="separateur_who"></div>
            <div class="who-we-are">
            <h2 class="who_title">Qui sommes-nous ?</h2>
            <div class="text_who">
            <p class="sub_title_who">Des hommes et femmes de métier</p>
            <p class="para_who">Chaque expert control2rack® est issu du monde du stockage, avec un minimum de 5 années d’expérience en pré-requis. Il connaît la technique, les préoccupations et les réalités du métier. Il est formé aux référentiels (recommandations & normes) et aux procédés de contrôle. Il s’engage. Il est reconnu pour sa compétence.</p>
            <p class="sub_title_who">Control2rack®, une entreprise responsable</p>
            <p class="para_who para_last">L’expert control2rack® n’est pas infaillible. C’est pourquoi, la société NoRisq est assurée jusqu’à 8 millions d’euros de dommages.</p>    
        </div>
</div>
        </div>
        <div class="col-lg-3 col-sm-12 whoweare ">
            <div class="who-we-are">
            <div class="text_who_two">
            <p class="sub_title_who">Des hommes et des femmes indépendat(e)s</p>
            <p class="para_who">Aucune usine à représenter, aucun matériel à commercialiser, aucune prestation de maintenance à proposer : l’expert Control2Rack® agit en toute indépendance et en transparence. Il suit un protocole strict, gage d’impartiabilité. Néanmoins, il saura vous guider, le cas échéant, à élaborer un plan d’action pour appliquer les mesures préventives ou correctrices idéales.</p>
        </div>
        </div>
        </div>
    </div>
    </div>
</section>

<section class="contactez-nous">
    <div class='container-fluid'>
        <div class='row contactwe'>
            <div class="col-lg-6 col-sm-12">
            <div class="separateur_contact"></div>
            <div class="contact_bloc">
                <h3 class="contact_title">Contactez-nous</h3>
                <p class="contact_text">vous êtes interessés par nos<br> formations, par le contrôle<br> de vos installations ou vous<br> avez un projet ?</p>
                <p class="contact_last_text">Contactez votre conseiller CONTROL2RACK® <br>par mail, téléphone ou fax.</p>    
                <button class="btn btn-primary contact text-center">Prendre contact<br>avec un conseiller</button>
            </div>
            </div>

            <div class="col-lg-6 col-sm-12 imagecontact">
                <img src="img/contactimg.png" alt="contact image" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="actualité">
    <div class="container">
        <div class="row actulite">
            <div class="col-12 actu">
                <div class="separateur_actualite"></div>
                <h4 class="actu_title">Actualités</h4>
            </div>
        </div>
        <div class="row bloc_actu">
            <div class="col-lg col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/actu1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Proteger ses rayonnages à palettes : une vrai démarche</h5>
                    <p class="card-text">Comment protéger ses rayonnages à palettes ? Telle est la question… Avant de résonner sur les moyens pratiques existants, il faut d’abord s’arrêter sur la méthodologie à mettre en place (...)</p>
                    <a href="#" class="btn btn-primary readmore_actu">En savoir +</a>
                </div>
            </div>
        </div>

            <div class="col-lg col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/actu2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Le contrôle des rayonnages : obligatoire ou non ?</h5>
                    <p class="card-text">A cette question, je répondrais par la négative. En effet, il n’existe pas d’Arrêtés imposant le contrôle des systèmes de stockage au sens large. Par contre, comme vous le savez, les articles L4321-1 et R4322-1 du Code du Travail <br> (...)</p>
                    <a href="#" class="btn btn-primary readmore_actu">En savoir +</a>
                </div>
            </div>
        </div>

            <div class="col-lg col-sm-12">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/actu3.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">l’audit control2rack, 3 étapes, un seul objectif !</h5>
                    <p class="card-text">La mission du contrôleur consiste à réaliser un audit des matériels dans le respect  des recommandations et des normes existantes.<br> (...)</p>
                    <a href="#" class="btn btn-primary readmore_actu" >En savoir +</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</section>

<?php
include('includes/footer.php');
?>
