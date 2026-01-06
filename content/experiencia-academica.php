<link rel="stylesheet" href="css/experiencia-academica.css">
<section id="experiencia-academica">
    <h2><?php echo $traducciones['experiencia_academica']['titulo']; ?></h2>

    <div class="accordion">
        <?php
            foreach ($traducciones['experiencia_academica']['lista'] as $experiencia) {
                ?>
                <div class="accordion-item">
                    <button class="accordion-header">
                        <?php echo $experiencia['titulo'] ?>
                        <span class="icon">+</span>
                    </button>
                
                    <div class="accordion-content">
                        <p><?php echo $experiencia['centro'] ?></p>
                        <p><?php echo $experiencia['año'] ?></p>
                        <p><?php echo $experiencia['descripcion'] ?></p>
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</section>

<script src="js/experiencia-academica.js"></script>
