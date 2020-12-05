<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <!-- <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
      integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="/bootstrap.css" />
    <title>Epissure</title>
  </head>
  <body>
    <section class="section-title">
      <div class="container-fluid container-title">
       <?php
       include "../elements/header.php";
       ?>
        <div class="container title">
          <h1>Nos produits</h1>
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

    <?php
    include "../elements/footer.php"
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
