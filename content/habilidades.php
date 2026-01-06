<link rel="stylesheet" href="css/habilidades.css">
<section id="habilidades" class="section">
    <h2><?php echo $traducciones['habilidades']['titulo']; ?></h2>

    <div class="carousel">
        <button class="carousel-btn prev">&#10094;</button>

        <div class="carousel-track">
            <?php
            foreach ($traducciones['habilidades']['lista'] as $habilidad) {
                echo "<div class='carousel-item'>$habilidad</div>";
            }
            ?>
        </div>

        <button class="carousel-btn next">&#10095;</button>
    </div>
</section>
<script src="js/habilidades.js"></script>
