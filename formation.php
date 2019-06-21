<?php 
include('includes/header.php');
?>

<section class="home_page">
    <div class="container-fluid">
        <div class="row home_page_row">
            <div class="col-lg-4 col-sm-12">
                <h1 class="secure">Former<br><span class="man">Maîtrisez votre<br>univers stockage</span></h1>
                <button class="btn btn-primary optimisation" onclick="window.location.href='formation.php'">Découvrez nos<br>modules de formation</button>
            </div>

            <div class="col-lg-8 col-sm-12">
                <img src="img/slide3.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>          
        </div>
    </div>
</section>

<section class="info">
    <div class="container_fluid">
        <div class="row info_row">
            <div class="col-12 text-left info_first">
                <p>L’un des deux principaux facteurs de risques dans le rayonnage, après l’état du matériel, est « l’inconscience collective. »
                La fragilité d’un système de rayonnage à palettes est méconnue des acteurs. Un choc de 3mm peut réduire la capacité de charge de 40% !<br><br>
                Pour agir, il faut connaître. L’expert CONTROL2RACK® transmet sa compétence en sensibilisant les acteurs «rayonnage», en formant à l’autonomie et en communiquant son savoir-faire dans le rayonnage à palettes afin de créer les procédures internes adaptées à chaque lieu.</p>
                <h2>Exclusif :<br> Créez votre projet formation ! </h2>
                <p class="last">En professionnel à l'écoute de ses clients, Control2Rack® s'enquiert de vos volontés et analyse ce qui est en place pour créer votre module "à la carte", dans le suivi des rayonnages.</p>
            </div>
        </div>
    </div>
</section>

<section class="formation_section">
    <div class="container-fluid">
        <div class="row formation">
            <div class="col-12"><h3 class="formation_title">La formation Control2Rack®</h3></div>
            <div class="col-12"><p class="subtitle_formation">3 Modules de base</p></div>           
        </div>

        <div class="row grid_formation">
            <div class="col-sm grid_forma">
                <p>01</p>
                <p>La sensibilisation</p>
                <div class="text_grid_un"><span>Démontrer aux acteurs que l’apparente solidité des rayonnages à palettes n’est qu’illusion face aux sollicitations, partager les expériences terrains et formaliser un esprit « no risque ».</span></div>
            </div>

            <div class="col-sm grid_forma">
                <p>02</p>
                <p>La formation "d'expert interne"</p>
                <div class="text_grid_deux"><span>Former le référent « stockage » aux normes. Lui donner la capacité de réaliser les contrôles réglementaires de son installation de rayonnage à palettes.</span></div>
            </div>

            <div class="col-sm grid_forma">
                <p>03</p>
                <p>La gestion autonome</p>
                <div class="text_grid_trois"><span>Former les intervenants, créer des procédures internes pour la gestion du risque et l’organisation de la maintenance dans le rayonnage à palettes.</span></div>
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
            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/actu1.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Proteger ses rayonnages à palettes : une vrai démarche</h5>
                    <p class="card-text">Comment protéger ses rayonnages à palettes ? Telle est la question… Avant de résonner sur les moyens pratiques existants, il faut d’abord s’arrêter sur la méthodologie à mettre en place (...)</p>
                    <a href="#" class="btn btn-primary readmore_actu">En savoir +</a>
                </div>
            </div>
        </div>

            <div class="col-sm">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="img/actu2.png" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Le contrôle des rayonnages : obligatoire ou non ?</h5>
                    <p class="card-text">A cette question, je répondrais par la négative. En effet, il n’existe pas d’Arrêtés imposant le contrôle des systèmes de stockage au sens large. Par contre, comme vous le savez, les articles L4321-1 et R4322-1 du Code du Travail <br> (...)</p>
                    <a href="#" class="btn btn-primary readmore_actu">En savoir +</a>
                </div>
            </div>
        </div>

            <div class="col-sm">
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