<link rel="stylesheet" href="css/experiencia-laboral.css"> 
<section id="experiencia-laboral">
    <h2><?php echo $traducciones['experiencia_laboral']['titulo']; ?></h2>

    <div class="timeline">
        <?php
        $contador = 0;

        foreach ($traducciones['experiencia_laboral']['lista'] as $experiencia) {
            // Alterna entre left y right usando el módulo
            $clase = ($contador % 2 === 0) ? 'left' : 'right';
            $contador++;
            ?>
            <div class="timeline-item <?php echo $clase; ?>">
                <div class="content">
                    <h3><?php echo $experiencia['puesto']; ?></h3>
                    <span><?php echo $experiencia['empresa']; ?></span>
                    <p><?php echo $experiencia['periodo']; ?></p>

                    <?php
                    // Mostrar lista de tareas si existe
                    if (isset($experiencia['tareas']) && is_array($experiencia['tareas'])) {
                        echo "<ul>";
                        foreach ($experiencia['tareas'] as $tarea) {
                            echo "<li>$tarea</li>";
                        }
                        echo "</ul>";
                    } else {
                        // fallback: descripción si no hay lista de tareas
                        echo "<p>" . $experiencia['descripcion'] . "</p>";
                    }
                    ?>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</section>
