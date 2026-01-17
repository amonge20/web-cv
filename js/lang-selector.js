/**
 * Selector de idiomas - Funcionalidad interactiva
 * Maneja el despliegue y cierre del menú de idiomas
 */

document.addEventListener('DOMContentLoaded', function() {
    const langToggle = document.getElementById('lang-toggle');
    const langMenu = document.getElementById('lang-menu');
    const langSelector = document.getElementById('lang-selector');

    // Validar que los elementos existan
    if (!langToggle || !langMenu) {
        console.warn('Elementos del selector de idioma no encontrados');
        return;
    }

    /**
     * Alternar visibilidad del menú
     */
    langToggle.addEventListener('click', function(e) {
        e.stopPropagation();
        langMenu.classList.toggle('active');
        
        // Actualizar atributo aria-expanded para accesibilidad
        const isExpanded = langMenu.classList.contains('active');
        langToggle.setAttribute('aria-expanded', isExpanded);
    });

    /**
     * Cerrar menú al hacer click fuera
     */
    document.addEventListener('click', function(e) {
        if (!langSelector.contains(e.target)) {
            langMenu.classList.remove('active');
            langToggle.setAttribute('aria-expanded', 'false');
        }
    });

    /**
     * Cerrar menú al presionar ESC
     */
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            langMenu.classList.remove('active');
            langToggle.setAttribute('aria-expanded', 'false');
        }
    });

    /**
     * Permitir navegación con teclado
     */
    const langOptions = langMenu.querySelectorAll('.lang-option');
    
    langOptions.forEach((option, index) => {
        option.addEventListener('keydown', function(e) {
            if (e.key === 'ArrowDown') {
                e.preventDefault();
                const nextIndex = (index + 1) % langOptions.length;
                langOptions[nextIndex].focus();
            } else if (e.key === 'ArrowUp') {
                e.preventDefault();
                const prevIndex = (index - 1 + langOptions.length) % langOptions.length;
                langOptions[prevIndex].focus();
            }
        });
    });

    /**
     * Cerrar menú después de seleccionar idioma
     */
    langOptions.forEach(option => {
        option.addEventListener('click', function(e) {
            // El navegador manejará el cambio de URL
            // Aquí solo cerramos el menú
            langMenu.classList.remove('active');
            langToggle.setAttribute('aria-expanded', 'false');
        });
    });
});
