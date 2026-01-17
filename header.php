<link rel="stylesheet" href="css/header.css">
<link rel="stylesheet" href="css/lang-selector.css">

<header class="header">
    <div class="logo">Aitor Monge Santiago</div>

    <div class="header-right">
        <!-- MENÚ HAMBURGUESA -->
        <div class="menu-toggle" id="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>

        <!-- MENÚ -->
        <nav class="nav" id="nav">
            <a href="#sobre-mi"><?php echo $traducciones['sobre_mi']['titulo']; ?></a>
            <a href="#habilidades"><?php echo $traducciones['habilidades']['titulo']; ?></a>
            <a href="#experiencia-academica"><?php echo $traducciones['experiencia_academica']['titulo']; ?></a>
            <a href="#experiencia-laboral"><?php echo $traducciones['experiencia_laboral']['titulo']; ?></a>
        </nav>

        <!-- SELECTOR DE IDIOMA -->
        <div class="lang-selector" id="lang-selector">
            <button class="lang-toggle" id="lang-toggle" aria-label="Cambiar idioma" aria-haspopup="true" aria-expanded="false">
                <span class="lang-code"><?php echo strtoupper($idioma); ?></span>
                <span class="lang-icon">🌐</span>
            </button>
            <div class="lang-menu" id="lang-menu">
                <?php
                    // Array con información de idiomas (código => bandera)
                    $idiomas_disponibles = [
                        'es' => 'img/es.png',
                        'en' => 'img/en.png',
                        'cat' => 'img/cat.png'
                    ];
                    
                    // Iterar sobre los idiomas disponibles
                    foreach ($idiomas_disponibles as $codigo => $bandera) {
                        // Obtener nombre del idioma desde JSON
                        $nombre_idioma = isset($traducciones['idiomas'][$codigo]) 
                            ? $traducciones['idiomas'][$codigo] 
                            : ucfirst($codigo);
                        
                        $es_activo = $idioma === $codigo ? 'active' : '';
                        echo '<a href="?lang=' . $codigo . '" class="lang-option ' . $es_activo . '">
                                <span class="flag"><img src="' . $bandera . '" alt="' . $nombre_idioma . '"></span>
                                <span class="lang-name">' . htmlspecialchars($nombre_idioma, ENT_QUOTES, 'UTF-8') . '</span>
                              </a>';
                    }
                ?>
            </div>
        </div>
    </div>
</header>

<script src="js/header.js"></script>
<script src="js/lang-selector.js"></script>
