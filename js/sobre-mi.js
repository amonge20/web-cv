const openBtn = document.getElementById("open-about-modal");
const closeBtn = document.getElementById("close-about-modal");
const modal = document.getElementById("about-modal");

if (openBtn && closeBtn && modal) {
    openBtn.addEventListener("click", () => {
        modal.classList.add("active");
        document.body.classList.add("no-scroll");
    });

    closeBtn.addEventListener("click", () => {
        modal.classList.remove("active");
        document.body.classList.remove("no-scroll");
    });

    modal.addEventListener("click", e => {
        if (e.target === modal) {
            modal.classList.remove("active");
            document.body.classList.remove("no-scroll");
        }
    });
}
