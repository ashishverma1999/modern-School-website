import './bootstrap';

const rotateImages = () => {
    document.querySelectorAll('[data-bg-carousel]').forEach((carousel) => {
        const images = JSON.parse(carousel.dataset.bgCarousel || '[]');

        if (images.length < 2) {
            return;
        }

        let index = 0;

        setInterval(() => {
            index = (index + 1) % images.length;
            carousel.style.backgroundImage = `url('${images[index]}')`;
        }, 4500);
    });

    document.querySelectorAll('[data-carousel]').forEach((carousel) => {
        const slides = carousel.querySelectorAll('.carousel-image');

        if (slides.length < 2) {
            return;
        }

        let index = 0;

        setInterval(() => {
            slides[index].classList.remove('is-active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('is-active');
        }, 4200);
    });

    document.querySelectorAll('[data-review-carousel]').forEach((carousel) => {
        const slides = carousel.querySelectorAll('.review-slide');

        if (slides.length < 2) {
            return;
        }

        let index = 0;

        setInterval(() => {
            slides[index].classList.remove('is-active');
            index = (index + 1) % slides.length;
            slides[index].classList.add('is-active');
        }, 5500);
    });
};

document.addEventListener('DOMContentLoaded', rotateImages);
