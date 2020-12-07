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
          <h1>L'épicerie</h1>
        </div>
      </div>
    </section>

    <div class="container ">
      <div class="card shadow-sm  text-center">
      <div class="card-body">
        <h5 class="card-title">Horaire d'ouverture</h5>
     <table class="table table-bordered table-primary">
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
