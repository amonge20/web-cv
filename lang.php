<?php
// lang.php
function cargarIdioma($lang = 'es') {
    $file = __DIR__ . "/lang/$lang.json";

    if (!file_exists($file)) {
        $file = __DIR__ . "/lang/es.json"; // fallback a español
    }

    $json = file_get_contents($file);
    return json_decode($json, true);
}
