<?php
// Definición de la URL base para enlaces
$url_base = "http://localhost/yondos/";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Perfiles de Usuarios Servo</title>
  <!-- Meta etiquetas requeridas -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Enlace al archivo de estilos CSS de Bootstrap v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>

<!-- Barra de navegación Bootstrap -->
<nav class="navbar navbar-expand navbar-dark bg-dark">
    <ul class="nav navbar-nav">
        <!-- Elemento de navegación para la página de inicio -->
        <li class="nav-item">
            <a class="nav-link active" href="#" aria-current="page">Perfiles Servo <span class="visually-hidden">(current)</span></a>
        </li>
        <!-- Elemento de navegación para la página de usuarios -->
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_base ?>modulos/contacto/index.php">Usuarios</a>
        </li>
    </ul>
</nav>

<!-- Contenido principal -->
<main class="container">
    <br> <!-- Salto de línea para separar el contenido -->
