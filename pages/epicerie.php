<!DOCTYPE html>
<html lang="fr">
 <?php
include "head.php";
?>
  <body class="mx-auto">
    <section class="section-title">
      <div class="container-fluid container-title">
        <?php
       include "../elements/header.php";
       ?>
        <div class="container title">
          <h1>L'épicerie</h1>
        </div>
      </div>
    </section>

      <section class="section-text py-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/legumes.jpg"
                alt="legumes"
                width="100%"
                height="225px"
              />
              <div class="card-body">
                <p class="card-text">
                  Des fruits de saisons issus de l'agriculturs biologique local
                  !
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/fruits.jpg"
                alt="fruits"
                width="100%"
                height="225px"
              />
              <div class="card-body">
                <p class="card-text">
                  Des fruits de saisons bio et beau pour toujours avoir la pêche
                  et la banane !
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/fromages.jpg"
                alt="fromages"
                width="100%"
                height="225px"
              />

              <div class="card-body">
                <p class="card-text">
                  Une vitrine des fromages les plus raffinés ainsi que des
                  fromages locaux !
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/bières.jpg"
                alt="bieres"
                width="100%"
                height="225px"
              />

              <div class="card-body">
                <p class="card-text">
                  Les meilleurs produits que la Bretagne est à vous offrir !
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/local.jpg"
                alt="local"
                width="100%"
                height="225px"
              />

              <div class="card-body">
                <p class="card-text">
                  Nous favorisons les produits locaux, quelque soit le type de
                  produits !
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
              <img
                src="/images/boucherie.jpg"
                alt="boucherie"
                width="100%"
                height="225px"
              />

              <div class="card-body">
                <p class="card-text">
                  Nos viandes sont garanties bretonnes et bonnes!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <div class="container ">
      <div class="card shadow-sm  text-center">
      <div class="card-body">
        <h5 class="card-title">Horaire d'ouverture</h5>
     <table class="table table-bordered table-third">
  <thead>
    <tr>
      <th scope="col">jour</th>
      <th scope="col">Matin</th>
      <th scope="col">Après-midi</th>
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Mardi</th>
      <td>09h00 - 12h30</td>
      <td>16h30 - 19h30</td>
    </tr>
    <tr>
      <th scope="row">Mercredi</th>
      <td>09h00 - 12h30</td>
     <td >16h30 - 19h30</td>
    </tr>
    <tr>
      <th scope="row">Jeudi</th>
      <td >09h00 - 12h30</td>

    </tr>
    <tr>
      <th scope="row">Vendredi</th>
      <td >09h00 - 12h30</td>
      <td >16h30 - 19h30</td>
      
    </tr>
    <tr>
      <th scope="row">Samedi</th>
      <td >09h00 - 12h30</td>
      <td >16h30 - 19h30</td>
      
    </tr>
    <tr>
      <th scope="row">Dimanche</th>
      <td >09h30 - 13h00</td>
      
      
    </tr>
  </tbody>
</table>
      </div>
    </div>
      
    </div>
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
