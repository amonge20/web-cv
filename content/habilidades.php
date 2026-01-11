<link rel="stylesheet" href="css/habilidades.css">
<section id="habilidades" class="section">
    <h2><?php echo $traducciones['habilidades']['titulo']; ?></h2>

    <div class="carousel">
        <button class="carousel-btn prev">&#10094;</button>

        <div class="carousel-track">
            <?php
            foreach ($traducciones['habilidades']['lista'] as $habilidad) {
                ?>
                <div class="carousel-item">
                    <h3><?php echo $habilidad['nombre']; ?></h3>
                    <p><?php echo $habilidad['descripcion']; ?></p>
                </div>
                <?php
            }
            ?>
        </div>

        <button class="carousel-btn next">&#10095;</button>
    </div>
</section>
<script src="js/habilidades.js"></script>
