<?php
// FICHEROS
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if ($_FILES['archivo']['error'] != 4) {
    echo "El nombre original del archivo es: " . $_FILES['archivo']['name'];
    echo "El nombre temporal del archivo es: " . $_FILES['archivo']['tmp_name'];
  } else {
    echo "No se ha subido ningun archivo.";
  }
}
?>
<!DOCTYPE html>
<hTml lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Subir Archivo</h3>
  <form method="post" enctype="multipart/form-data">
    <input type="file" name="archivo">
    <br><br>
    <input type="submit" value="Subir Archivo">
  </form>
</body>

</html>