const track = document.querySelector('.carousel-track');
const items = document.querySelectorAll('.carousel-item');
const nextBtn = document.querySelector('.next');
const prevBtn = document.querySelector('.prev');

let index = 0;

function itemsPerView() {
    return window.innerWidth >= 768 ? 3 : 1;
}

function updateCarousel() {
    const itemWidth = items[0].offsetWidth;
    track.style.transform = `translateX(-${index * itemWidth}px)`;
}

nextBtn.addEventListener('click', () => {
    const maxIndex = items.length - itemsPerView();
    index = index >= maxIndex ? 0 : index + itemsPerView();
    updateCarousel();
});

prevBtn.addEventListener('click', () => {
    const maxIndex = items.length - itemsPerView();
    index = index <= 0 ? maxIndex : index - itemsPerView();
    updateCarousel();
});

window.addEventListener('resize', () => {
    index = 0;
    updateCarousel();
});

