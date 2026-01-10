<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV</title>
    <link rel="stylesheet" href="css/custom.css">
     <?php
        include("conexion.php");
    ?>
  
</head>
<body>
    <?php
        include("cargar-idiomas.php");
        include("header.php"); 
        include("content/sobre-mi.php");
        include("content/habilidades.php");
        include("content/experiencia-academica.php");
        include("content/experiencia-laboral.php");
        include("footer.php");
    ?>
  
</body>
</html>