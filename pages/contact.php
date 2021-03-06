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
                <div class="col-12 col-lg-8 order-md-2 r-0">
                  <img src="/images/1x/contact.png" alt="contact" width="1000px" id="logo" class="img-fluid mw-md-150 mw-lg-130 mb-6 mb-md-0">
                  </div>
                <div class="col-12 col-lg-4 order-md-1">
                    <h1 class="display-3 text-center text-md-center">Nous contacter</h1>
                      
                </div>
                
            </div>
          </div>
        </div>
    </section>

    <div class="card container shadow-sm  card-contact">
      <div class="card-body">
        <h5 class="card-title text-center">
          N'hésitez pas à prendre contact avec nous pour plus d'
          informations ou pour devenir bénévoles !
        </h5>
        <form class="container">
          <div class="form-group shadow-sm mb-4">
            <label for="username">Votre nom</label>
            <input
              type="text"
              class="form-control"
              id="username"
              placeholder="Jean Dupond"
            />
          </div>
          <div class="form-group shadow-sm mb-4">
            <label for="email">Votre mail</label>
            <input
              type="email"
              class="form-control"
              id="email"
              placeholder="name@example.com"
            />
          </div>
          <div class="form-group shadow-sm mb-4">
            <label for="message">Votre message</label>
            <textarea class="form-control" id="message" rows="6" placeholder="Votre message"></textarea>
          </div>
          <button
            class="btn btn-primary btn-lg col-md-2 text-white"
          ><a href="
          #" class="text-white">Envoyer</a> </button>
        </form>
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
