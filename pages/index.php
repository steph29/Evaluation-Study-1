<!DOCTYPE html>
<html lang="fr">
<?php
include "head.php";
?>
  <body class="mx-auto">
    <section class="section-title ">
      <div class=" container-title">
      <?php
       include "../elements/header.php";
       ?>
        <div class="container title justify-content-center">
          <div class="row align-items-center">
                <div class="col-12 col-md-6 col-lg-6 order-md-2">
                  <img src="/images/logo_courses.png" alt="courses" width="1000px" id="logo" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0">
                </div>
                <div class="col-12 col-md-4 col-lg-6 order-md-1">
                    <h1 class="display-3 text-center text-md-left">Le régal d'Épissure</h1>
                      <p class="lead text-center text-lg-left text-muted mb-6 mb-lg-8">Épicerie 
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ " associative", " locale", " bio", " sympa!"]'></span>
</p>
                </div>
                
            </div>
          </div>
        </div>
    </section>


<section class=" container section-text pt-8 pt-md-11 bg-gradient-light">
    <div class="row my-auto">
      <div class="container-text px-3 col">    
          <p >
            Créée grâce à quelques jeunes muzillacais engagés et désireux de
            faire connaitre
            <strong
              >une agriculture respectueuse de l'homme et de son
              environnement,</strong
            >
            l'association Terre en Vie
            <strong
              >oeuvre pour le développement d'une planète plus responsable et
              plus solidaire.</strong
            ><br /><br />
            25 ans après notre première Foire Bio à Muzillac, cet événement
            accueille,
            <strong>tous les derniers week-ends (entiers) de septembre</strong>
            plus de <strong>120 exposants</strong> et
            <strong>6000 visiteurs.</strong><br />
            Terre en Vie élargie sa réflexion sur
            <strong>le respect de l'environnement</strong> et
            <strong
              >le développement de l'Agriculture biologique, l'éco-habitat, le
              commerce équitable</strong
            >... en organisant toute l'année des conférences, des rencontres et
            des séances de Ciné-débats. <br /><br />
            L'association Terre en Vie c'est aussi la création d'un
            <strong>point de vente de produits bio</strong> à Muzillac : la
            Biocoop Etamine, qui deviendra la Panier Bio en 2003.
            <br />
            Consacrant une attention particulière aux animations aussi bien pour
            les enfants que pour les adultes, de nombreux intervenants et
            groupes de musique locaux interviennent durant tout le week-end.
            C'est pour cette raison , qu'en 2017, la
            <strong>Foire bio</strong> de Muzillac devient
            <strong><span>LA BIO EN FÊTE</span>!</strong>
          </p>
       
      </div>
  </div>
</section>

<section class="container-fluid bg-veryDark container-blue">  
    <div class="row justify-content-around px-5 my-auto h-100 ">
        <div class="col-12 col-md-6 col-lg-4 order-md-1 py-5 my-auto">
          <img src="../images/1x/benevolat.png" alt="benevolat" width="800px" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0 ">
        </div>
        <div class="col-12 col-md-4 col-lg-4 order-md-2 my-auto pb-3 ">
          <h2 class="pb-4">Nous avons besoin de vous !</h2>
          <h3 class="pb-4">Devenez bénévoles et soyez acteur de la vie du bourg</h3>
          <div class="text-center text-md-left">
                    <button class="btn btn-primary btn-lg " type="button" aria-label="Devenir_ Benevole">Devenir bénévole</button>
                </div>
         </div>
    </div>
   
  </div>
</div>
</section>
<section class="my-auto h-100 my-auto">
  <div class="container container-card ">
    <div class="row justify-content-center h-100">
      <div class="card cardMoving col-md-3 px-2 mx-5 text-center my-auto">
        <p>Bénévoles</p>
        <h2 class="text-veryDark"> 
         <div class="count" data-target="80" >0</div> 
        </h2>
      </div>
      <div class="card cardMoving col-md-3 px-2 mx-5 text-center my-auto">
        <p>Ouvert depuis</p>
        <h2 class="text-veryDark">
         <div class="counte" data-target="2015">0</div> 
        </h2>
      </div>
      <div class="card cardMoving col-md-3 px-2 mx-5 text-center my-auto">
        <p>Salarié</p>
        <h2 class="text-veryDark">
          <div class="counter" data-target="3">0</div> 
        </h2>
      </div>
    </div>
  </div>
</section>

<section class="section-map">
<!-- carte -->
<div id="mapid" ></div>
  
</div>
</section>


    <?php
    include "../elements/footer.php";
    ?>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
      crossorigin="anonymous"
    ></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
    <script src="./script.js"></script>
    
  </body>
</html>
