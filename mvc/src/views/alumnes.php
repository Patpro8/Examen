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

  <title>Alumnes</title>
</head>

<body>
  <?php include("head.php"); ?>
  <?php if ($alumnes) : ?>
        <div class="container">
            <h1 align="center">Alumnes Inscrits</h1>
            <br />
            <table id="member_table" class="table table-striped">
                <thead bgcolor="#6cd8dc">
                    <tr class="table-primary">
                        <th whidth="20%">IDA</th>
                        <th width="20%">Nom</th>
                        <th width="20%">Cognom</th>
                        <th width="20%">DataNaixament</th>
                        <th width="20%">Adreca</th>
                    </tr>
                </thead>
                <tbody id="table_body">
                    <?php foreach ($alumnes as $alumne) : ?>
                        <?php $alumneid = $alumne["IDAlumne"]; ?>
                        <?php $alumneNom = $alumne["Nom"]; ?>
                        <?php $alumneCognom = $alumne["Cognoms"]; ?>
                        <?php $alumneDataNaix = $alumne["DataNaix"]; ?>
                        <?php $alumneAdreca = $alumne["Adreca"] ?>
                        <tr>
                            <td><?php echo $alumneid ?></td>
                            <td><?php echo $alumneNom ?></td>
                            <td><?php echo $alumneCognom ?></td>
                            <td><?php echo $alumneDataNaix ?></td>
                            <td><?php echo $alumneAdreca ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="Assets/Scripts/datatables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>