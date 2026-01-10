// contacto JS preparado para futuras animaciones
// (no interfiere con header.js)

document.addEventListener("DOMContentLoaded", () => {
    const contacto = document.getElementById("contacto");

    if (!contacto) return;

    // Ejemplo: animación extra al entrar en viewport (opcional)
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                contacto.classList.add("visible");
            }
        });
    }, { threshold: 0.3 });

    observer.observe(contacto);
});
