// Footer JS preparado para futuras animaciones
// (no interfiere con header.js)

document.addEventListener("DOMContentLoaded", () => {
    const footer = document.getElementById("contacto");

    if (!footer) return;

    // Ejemplo: animación extra al entrar en viewport (opcional)
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                footer.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(footer);
});
