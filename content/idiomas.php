<link rel="stylesheet" href="css/idiomas.css">
<section id="idiomas">
    <h2><?php echo $traducciones['idiomas']['titulo']; ?></h2>

    <div class="idiomas-lista">
    <?php    
        foreach($traducciones['idiomas']['lista'] as $idioma){
            ?>
             <div class="idioma">
                <img src="<?php echo $idioma['imagen'] ?>">
                <span><?php echo $idioma['nombre'] ?></span>
                <span><?php echo $idioma['nivel'] ?></span>
            </div>
            <?php
    } ?>
    </div>
</section>
<script src="js/idiomas.js"></script>
