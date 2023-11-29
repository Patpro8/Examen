<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Registre</title>
</head>
<body>
<?php include("head.php"); ?>

<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-md-5 p-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-body">
                    <h5 class="card-title">Registre</h5>
                    <form action="?r=alumnes" method="POST">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom:</label>
        <input type="text" id="nom" name="nom" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="cognoms" class="form-label">Cognoms:</label>
        <input type="text" id="cognoms" name="cognoms" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="data_de_naixement" class="form-label">Data de Naixement:</label>
        <input type="date" id="data_de_naixement" name="data_de_naixement" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="carrer" class="form-label">Carrer:</label>
        <input type="text" id="carrer" name="carrer" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="numero" class="form-label">Número:</label>
        <input type="text" id="numero" name="numero" class="form-control" required>
        </div>
    <div class="mb-3">
        <label for="ciutat" class="form-label">Ciutat:</label>
        <input type="text" id="ciutat" name="ciutat" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="codi_postal" class="form-label">Codi Postal:</label>
        <input type="text" id="codi_postal" name="codi_postal" class="form-control" required>
    </div>
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-floppy-disk"></i> Guardar</button>
</form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@