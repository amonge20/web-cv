<?php
// include("mi-perfil.php");
// include("habilidades.php");
// include("idiomas.php");
?>
<link rel="stylesheet" href="css/sobre-mi.css">
<section id="sobre-mi" class="section about">

    <div class="about-container">

        <!-- IMAGEN -->
        <div class="about-image">
            <img src="img/perfil.jpg" alt="Foto de perfil">
        </div>

        <!-- TEXTO -->
        <div class="about-text">
            <h2><?php echo $traducciones['sobre_mi']['titulo']; ?></h2>

            <p>
                <?php echo $traducciones['sobre_mi']['mi_perfil']; ?>
            </p>

            <button class="about-btn" id="open-about-modal">
                Más info
            </button>
        </div>

    </div>

</section>

<!-- MODAL -->
<div class="about-modal" id="about-modal">
    <div class="about-modal-content">
        <span class="about-close" id="close-about-modal">&times;</span>

        <h3><?php echo $traducciones['sobre_mi']['informacion_adicional']['titulo']; ?></h3>
        <p>
            <?php echo $traducciones['sobre_mi']['informacion_adicional']['descripcion']; ?>

        </p>
        <?php include('content/idiomas.php') ?>
    </div>
</div>
<script src="js/sobre-mi.js"></script>