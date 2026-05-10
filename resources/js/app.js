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

    document.querySelectorAll('[data-message-carousel]').forEach((carousel) => {
        const images = carousel.querySelectorAll('.carousel-image');
        const slides = carousel.querySelectorAll('.message-slide');

        if (slides.length < 2 || images.length !== slides.length) {
            return;
        }

        let index = 0;

        setInterval(() => {
            images[index].classList.remove('is-active');
            slides[index].classList.remove('is-active');
            index = (index + 1) % slides.length;
            images[index].classList.add('is-active');
            slides[index].classList.add('is-active');
        }, 5200);
    });

    document.querySelectorAll('[data-profile-carousel]').forEach((carousel) => {
        const slides = carousel.querySelectorAll('.profile-slide');
        const previous = carousel.querySelector('[data-profile-prev]');
        const next = carousel.querySelector('[data-profile-next]');

        if (slides.length < 2) {
            return;
        }

        let index = 0;
        let timer;

        const showSlide = (nextIndex) => {
            slides[index].classList.remove('is-active');
            index = (nextIndex + slides.length) % slides.length;
            slides[index].classList.add('is-active');
        };

        const start = () => {
            timer = setInterval(() => showSlide(index + 1), 4300);
        };

        const restart = () => {
            clearInterval(timer);
            start();
        };

        previous?.addEventListener('click', () => {
            showSlide(index - 1);
            restart();
        });

        next?.addEventListener('click', () => {
            showSlide(index + 1);
            restart();
        });

        start();
    });
};

document.addEventListener('DOMContentLoaded', rotateImages);
