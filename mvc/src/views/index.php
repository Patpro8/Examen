<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="Assets/Styles/all.min.css">
  <link rel="stylesheet" href="Assets/Styles/estilos.css">

  <title>Excursions Cendrassos</title>
</head>

<body>
  <?php include("head.php"); ?>
  <div class="container">
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        
        <ol class="carousel-indicators">
            <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets\img\9710143253_a8f9dc1296_o.jpg" class="d-block w-100" alt="1">
            </div>

            <div class="carousel-item">
                <img src="assets\img\26430213071_62fbf5b574_k.jpg" class="d-block w-100" alt="2">
            </div>

            <div class="carousel-item">
                <img src="assets\img\191047104724_8104a42b_m.jpg" class="d-block w-100" alt="3">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sid</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Prev</span>
        </button>
    </div>
</div>

  <div id="cookie-notice" class="alert alert-dark text-center mb-0" role="alert">
    🍪 Este sitio web utiliza cookies para mejorar la experiencia del usuario.
    <a href="https://www.cookiesandyou.com/" target="blank">cookies</a>
    <button type="button" id="accept-cookies" class="btn btn-primary btn-sm ms-3 accept-cookies">Aceptar</button>
    <a href="#" id="manage-cookies" class="manage-cookies">No Acepto</a>
  </div>

  <script src="Assets/Scripts/appcokies.js"></script>
  <script src="Assets/Scripts/app.js"></script>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <?php include("head.php"); ?>
</body>

</html>
