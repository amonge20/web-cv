<?php
// index.php
include 'lang.php';

// Elegir idioma (por ejemplo, por GET: ?lang=en)
$idioma = isset($_GET['lang']) ? $_GET['lang'] : 'es';
$traducciones = cargarIdioma($idioma);
?>