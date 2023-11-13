$(document).ready(function () {
  $("a.botoninfo").on("click", function () {
    var id = $(this).attr("id");
    $.ajax({
      url: "index.php?r=ejecutarajax",
      data: {
        "id": id,
      },
      method: "GET",
      success: function (resposta) {
        var infoJSon = JSON.parse(resposta);

        // Limpiar el contenido del elemento con ID 'info'
        $("#info").empty();

        var title = infoJSon.apartament.titol;
        var titol = $("<p class='title'></p>").text(title);
        $("#info").prepend(titol);

        var postalCode = infoJSon.apartament.codiPostal;
        var codiPostal = $("<p class='informacion'></p>").text("Codi Postal: " + postalCode);
        $("#info").append(codiPostal);

        var description = infoJSon.apartament.descripció;
        var descripcio = $("<p class='informacion'></p>").text("Descripció: " + description);
        $("#info").append(descripcio);

        var cuadM = infoJSon.apartament.metresCuad;
        var metresCuad = $("<p class='informacion'></p>").text("Metres Quadrats: " + cuadM);
        $("#info").append(metresCuad);

        var rommNumber = infoJSon.apartament.habitacions;
        var habitacions = $("<p class='informacion'></p>").text("Habitacions: " + rommNumber);
        $("#info").append(habitacions);

        var fechaActual = new Date();
        var aFormateado = fechaActual.getUTCFullYear();
        var mesFormateado = fechaActual.getUTCMonth() + 1; // Mes en base 0 se suma 1

        var price = "";
        var preu = "";

        if (aFormateado && mesFormateado >= 7) {
          price = infoJSon.apartament.preuTempAlt;
          preu = $("<p class='pprice'></p>").text(price);
          $("#info").append(preu);
        } else {
          price = infoJSon.apartament.preuTempBaixa;
          preu = $("<p class='pprice'></p>").text(price);
          $("#info").append(preu);
        }

        var state = infoJSon.apartament.estatapar;
        var estat = $("<p class='informacion'></p>").text("Estat: " + state);
        $("#info").append(estat);

        var imagen = $("<img class='imagenmodal'>").attr("src", "https://bambooarquitectura.com/wp-content/uploads/2020/06/casas-contemporaneas-02.jpg");
        $("#info").append(imagen);

        // $('#modalInfoApartamento').modal('show');
      },
    });
  });
});


window.jsPDF = window.jspdf.jsPDF;

function generatePDF() {
  // Se crea el objeto PDF
  var doc = new jsPDF();

  // Título
  doc.setFontSize(10); // dar un tamaño de fuente
  doc.text("Nom:", 10, 40); // doc.text('Nom:', posición en el eje x,posición en el eje y);

  // Para hacer un salto de línea, aumenta el valor de 'y'
  var y = 50;
  doc.setFontSize(10);
  doc.text("Informació:", 10, y);

  // Línea 2
  y += 10;
  doc.setFontSize(10);
  doc.text("Serveis:", 10, y);


  doc.setFontSize(8);

  var mensajePieDePagina = "Gracies per realitzar la vostre compra!.";
  var xPieDePagina =
    doc.internal.pageSize.width -
    doc.getStringUnitWidth(mensajePieDePagina) * doc.internal.getFontSize();
  var yPieDePagina = doc.internal.pageSize.height - 10;
  doc.text(mensajePieDePagina, xPieDePagina, yPieDePagina);

  // Se guarda el PDF
  doc.save("Document.pdf");
}