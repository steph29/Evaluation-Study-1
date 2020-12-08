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
          <h1>Contact</h1>
        </div>
      </div>
    </section>

    <div class="card container shadow-sm mb-4">
      <div class="card-body">
        <h5 class="card-title text-center">
          N'hésitez pas à prendre contact avec nous pour avoir de plus ample
          information ou pour devenir bénévoles !
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
            <textarea class="form-control" id="message" rows="6"></textarea>
          </div>
          <input
            class="btn btn-primary btn-lg col-md-2"
            type="submit"
            value="Submit"
          />
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
