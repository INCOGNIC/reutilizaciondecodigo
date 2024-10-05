<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="resources/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/css/bootstrap-icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="resources/css/main.css">
</head>

<body class="px-3">
    <!-- encabezado -->
<?php include 'partes/header.php';?>
    <!-- fin de encabezado -->
    <div class="container mt-4">
        <h1 class="h1">SOLUCIONES CREATIVAS</h1>
        <p>Sin importar cual sea tu negocio, nuestro equipo puede hacer todo desde cero.</p>
        <div class="row">
        <?php include 'partes/disenio.php';?>
        <?php include 'partes/desarrollo.php';?>
        <?php include 'partes/ediciondelibros.php';?>
        </div>
    </div>
        <!-- footer -->
    <?php include 'partes/footer.php';?>
</body>

</html>