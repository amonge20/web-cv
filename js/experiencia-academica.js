const headers = document.querySelectorAll('.accordion-header');

headers.forEach(header => {
    header.addEventListener('click', () => {
        const item = header.parentElement;

        // Cierra los demás (opcional)
        document.querySelectorAll('.accordion-item').forEach(i => {
            if (i !== item) i.classList.remove('active');
        });

        item.classList.toggle('active');
    });
});
