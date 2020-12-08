<!DOCTYPE html>
<html lang="fr">
<?php
include "head.php";
?>
  <body class="mx-auto">
    <section class="section-title">
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
                    <p class="lead text-center text-md-left text-muted mb-6 mb-lg-8">Épicerie associative </p>
                    
                </div>
                
            </div>
          </div>
        </div>
    </section>


<section class="pt-8 pt-md-11 bg-gradient-light">
  <div class="container section-text">
    <div class="row">
 
      <div class="container-text px-3">
      
        <p>
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
  </div>
</section>

<section >
<div class="container-fluid bg-veryDark">
  <div class="container ">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-6 order-md-1 py-5">
          <img src="../images/1x/benevolat.png" alt="benevolat" width="600px" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0">
        </div>
        <div class="col-12 col-md-4 col-lg-6 order-md-2 my-auto pb-3">
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

<section>
  <div class="container">
    <div class="row">
      <div id="my-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li class="active" data-target="#my-carousel" data-slide-to="0" aria-current="location"></li>
          <li data-target="#my-carousel" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Title</h5>
              <p>Text</p>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="" alt="">
            <div class="carousel-caption d-none d-md-block">
              <h5>Title</h5>
              <p>Text</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#my-carousel" data-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#my-carousel" data-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
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
  </body>
</html>
