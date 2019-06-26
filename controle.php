<?php
include('includes/header.php');
?>

<section class="home_page">
    <div class="container-fluid">
        <div class="row home_page_row">
            <div class="col-lg-4 col-sm-12">
                <h1 class="secure">Contrôler<br><span class="man">Les environnement<br>destockage</span></h1>
                <button class="btn btn-primary optimisation" onclick="window.location.href='controle.php'">Télécharger la<br>normes INRS</button>
            </div>

            <div class="col-lg-8 col-sm-12">
                <img src="img/slide2.jpg" class="d-block w-100 img-fluid" alt="...">
            </div>          
        </div>
    </div>
</section>

<section class="audit">
    <div class="container">
        <div class="row">
            <div class="col-12 audit_title"><h1>L'audit control2rack</h1></div>
            <div class="col-12 audit_subtitle"><p>3 Étapes, un seul objectif</p></div>
        </div>
        <div class="row text-center audit_icon">
            <div class="col-sm">
                <img class="img-fluid hoverImg" src="img/eye.png" alt="">
                <p class="hoverText">Le contrôle physique des rayonnages à palettes « in-situ » avec près de 45 points d’analyse.</p>
            </div>

            <div class="col-sm">
                <img class="img-fluid hoverImg" src="img/eye.png" alt="">
                <p class="hoverText">Le rapport détaillé des anomalies relevées, leur classement dans l'echelle du risque.</p>
            </div>

            <div class="col-sm">
                <img class="img-fluid hoverImg" src="img/eye.png" alt="">
                <p class="hoverText">Les préconisations pour adapter les correctifs et proposer les solutions d’améliorations dans le rayonnage.</p>
            </div>
        </div>
    </div>
</section>




<?php
include('includes/footer.php');
?>