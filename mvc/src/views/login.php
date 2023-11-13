<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <title>iniciar Sessió</title>
</head>

<body>
  <?php include("head.php"); ?>
  <div class="container">
    <div class="row mt-1 mb-3">
      <div class="col">
        <h1>inici sessió</h1>
      </div>
    </div>


    <div class="row justify-content-md-center">
      <div class="col-5  p-3">
        <div class="card text-white bg-info mb-3">
          <div class="card-body">
            <h5 class="card-title">Hola!</h5>
            <form action="index.php" method="post">
              <input type="hidden" name="r" value="dologin">

              <div class="form-group">
                <label for="inputUsuari">Abans d'entrar que et sembla si t'identifiques?</label>
                <input name="user" type="text" class="form-control" id="inputUsuari" value="">

              </div>
              <div class="form-group">
                <label for="inputclau">Paraula clau *</label>
                <input name="pass" type="password" class="form-control" id="inputclau">
              </div>
              <button type="submit" class="btn btn-primary">Hola!</button>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</body>

</html>