// ===============================
// ELEMENTOS
// ===============================
const toggle = document.getElementById("menu-toggle");
const nav = document.getElementById("nav");
const header = document.querySelector(".header");
const headerHeight = header.offsetHeight;

// ===============================
// MENÚ HAMBURGUESA
// ===============================
toggle.addEventListener("click", () => {
    nav.classList.toggle("active");
    toggle.classList.toggle("active"); // ICONO ☰ → ✕
    document.body.classList.toggle("no-scroll");
});

// ===============================
// LINKS DEL MENÚ
// ===============================
document.querySelectorAll(".nav a").forEach(link => {
    link.addEventListener("click", function (e) {
        e.preventDefault();

        const targetId = this.getAttribute("href");
        const target = document.querySelector(targetId);
        if (!target) return;

        // Cerrar menú móvil
        nav.classList.remove("active");
        toggle.classList.remove("active");
        document.body.classList.remove("no-scroll");

        // Posición destino (teniendo en cuenta el header)
        const targetPosition =
            target.getBoundingClientRect().top +
            window.pageYOffset -
            headerHeight;

        smoothScrollTo(targetPosition, 800);
    });
});

// ===============================
// SCROLL SUAVE CON EASING
// ===============================
function smoothScrollTo(targetY, duration) {
    const startY = window.pageYOffset;
    const distance = targetY - startY;
    const startTime = performance.now();

    function animation(currentTime) {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const eased = easeInOutCubic(progress);

        window.scrollTo(0, startY + distance * eased);

        if (progress < 1) {
            requestAnimationFrame(animation);
        }
    }

    requestAnimationFrame(animation);
}

// ===============================
// EASING PROFESIONAL
// ===============================
function easeInOutCubic(t) {
    return t < 0.5
        ? 4 * t * t * t
        : 1 - Math.pow(-2 * t + 2, 3) / 2;
}