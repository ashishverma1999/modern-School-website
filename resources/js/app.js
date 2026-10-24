import './bootstrap';

// Hero Carousel
const setupHeroCarousel = () => {
    const container = document.querySelector('[data-hero-carousel]');
    if (!container) return;

    const slides = container.querySelectorAll('.hero-slide');
    const dotsContainer = container.querySelector('[data-hero-dots]');
    if (slides.length < 2) return;

    let currentIndex = 0;
    let timer = null;

    // Create dots if container exists
    if (dotsContainer) {
        dotsContainer.innerHTML = '';
        slides.forEach((_, idx) => {
            const dot = document.createElement('button');
            dot.className = `h-2.5 rounded-full transition-all duration-300 ${idx === 0 ? 'w-8 bg-amber-400' : 'w-2.5 bg-white/50 hover:bg-white'}`;
            dot.setAttribute('aria-label', `Go to slide ${idx + 1}`);
            dot.addEventListener('click', () => {
                goToSlide(idx);
                resetTimer();
            });
            dotsContainer.appendChild(dot);
        });
    }

    const updateDots = () => {
        if (!dotsContainer) return;
        const dots = dotsContainer.querySelectorAll('button');
        dots.forEach((dot, idx) => {
            if (idx === currentIndex) {
                dot.className = 'h-2.5 w-8 rounded-full bg-amber-400 transition-all duration-300';
            } else {
                dot.className = 'h-2.5 w-2.5 rounded-full bg-white/50 hover:bg-white transition-all duration-300';
            }
        });
    };

    const goToSlide = (idx) => {
        slides[currentIndex].classList.remove('is-active');
        currentIndex = (idx + slides.length) % slides.length;
        slides[currentIndex].classList.add('is-active');
        updateDots();
    };

    const startTimer = () => {
        timer = setInterval(() => {
            goToSlide(currentIndex + 1);
        }, 5000);
    };

    const resetTimer = () => {
        clearInterval(timer);
        startTimer();
    };

    startTimer();
};

// Gallery Filtering & Lightbox Modal
const setupGallery = () => {
    const gallerySection = document.querySelector('#gallery');
    if (!gallerySection) return;

    const filterButtons = gallerySection.querySelectorAll('[data-gallery-filter]');
    const galleryItems = Array.from(gallerySection.querySelectorAll('[data-gallery-item]'));
    const modal = document.querySelector('#gallery-lightbox');
    
    if (!modal) return;

    const modalImg = modal.querySelector('[data-lightbox-img]');
    const modalTitle = modal.querySelector('[data-lightbox-title]');
    const modalDesc = modal.querySelector('[data-lightbox-desc]');
    const modalCategory = modal.querySelector('[data-lightbox-category]');
    const modalCounter = modal.querySelector('[data-lightbox-counter]');
    const modalClose = modal.querySelector('[data-lightbox-close]');
    const modalPrev = modal.querySelector('[data-lightbox-prev]');
    const modalNext = modal.querySelector('[data-lightbox-next]');

    let visibleItems = [...galleryItems];
    let currentModalIndex = 0;

    // Filter Logic
    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const category = btn.dataset.galleryFilter;

            filterButtons.forEach(b => b.classList.remove('is-active'));
            btn.classList.add('is-active');

            visibleItems = [];
            galleryItems.forEach(item => {
                const itemCat = item.dataset.galleryCategory;
                const match = category === 'all' || itemCat === category;
                
                if (match) {
                    item.style.display = 'block';
                    visibleItems.push(item);
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });

    // Lightbox Logic
    const openLightbox = (index) => {
        if (!visibleItems[index]) return;
        currentModalIndex = index;
        const item = visibleItems[index];

        const src = item.dataset.imageSrc || item.querySelector('img')?.src;
        const title = item.dataset.imageTitle || '';
        const desc = item.dataset.imageDesc || '';
        const cat = item.dataset.galleryCategory || '';

        if (modalImg) modalImg.src = src;
        if (modalTitle) modalTitle.textContent = title;
        if (modalDesc) modalDesc.textContent = desc;
        if (modalCategory) modalCategory.textContent = cat;
        if (modalCounter) modalCounter.textContent = `${currentModalIndex + 1} / ${visibleItems.length}`;

        modal.classList.add('is-open');
        document.body.style.overflow = 'hidden';
    };

    const closeLightbox = () => {
        modal.classList.remove('is-open');
        document.body.style.overflow = '';
    };

    const nextLightbox = () => {
        if (visibleItems.length === 0) return;
        openLightbox((currentModalIndex + 1) % visibleItems.length);
    };

    const prevLightbox = () => {
        if (visibleItems.length === 0) return;
        openLightbox((currentModalIndex - 1 + visibleItems.length) % visibleItems.length);
    };

    galleryItems.forEach((item) => {
        item.addEventListener('click', () => {
            const idx = visibleItems.indexOf(item);
            if (idx !== -1) {
                openLightbox(idx);
            }
        });
    });

    if (modalClose) modalClose.addEventListener('click', closeLightbox);
    if (modalNext) modalNext.addEventListener('click', nextLightbox);
    if (modalPrev) modalPrev.addEventListener('click', prevLightbox);

    modal.addEventListener('click', (e) => {
        if (e.target === modal || e.target.classList.contains('lightbox-backdrop')) {
            closeLightbox();
        }
    });

    document.addEventListener('keydown', (e) => {
        if (!modal.classList.contains('is-open')) return;
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') nextLightbox();
        if (e.key === 'ArrowLeft') prevLightbox();
    });
};

// FAQ Accordion
const setupFaq = () => {
    const items = document.querySelectorAll('[data-faq-item]');
    items.forEach(item => {
        const toggle = item.querySelector('[data-faq-toggle]');
        if (!toggle) return;

        toggle.addEventListener('click', () => {
            const isActive = item.classList.contains('is-active');
            // Close other items
            items.forEach(other => other.classList.remove('is-active'));

            if (!isActive) {
                item.classList.add('is-active');
            }
        });
    });
};

// Reviews Carousel
const setupReviews = () => {
    const container = document.querySelector('[data-review-carousel]');
    if (!container) return;

    const slides = container.querySelectorAll('.review-card-slide');
    if (slides.length < 2) return;

    let index = 0;
    const prevBtn = container.querySelector('[data-review-prev]');
    const nextBtn = container.querySelector('[data-review-next]');

    const showSlide = (newIndex) => {
        slides[index].classList.remove('is-active');
        index = (newIndex + slides.length) % slides.length;
        slides[index].classList.add('is-active');
    };

    if (prevBtn) prevBtn.addEventListener('click', () => showSlide(index - 1));
    if (nextBtn) nextBtn.addEventListener('click', () => showSlide(index + 1));

    setInterval(() => {
        showSlide(index + 1);
    }, 6500);
};

// Mobile Menu
const setupMobileMenu = () => {
    const button = document.querySelector('.menu-toggle');
    const menu = document.querySelector('#mobile-menu');
    if (!button || !menu) return;

    button.addEventListener('click', () => {
        const isOpen = !menu.classList.toggle('hidden');
        button.setAttribute('aria-expanded', String(isOpen));
        button.innerHTML = isOpen 
            ? '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>'
            : '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>';
    });

    menu.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => {
            menu.classList.add('hidden');
            button.setAttribute('aria-expanded', 'false');
            button.innerHTML = '<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>';
        });
    });
};

// Form handling with feedback
const setupForms = () => {
    document.querySelectorAll('[data-enquiry-form]').forEach((form) => {
        form.addEventListener('submit', () => {
            const button = form.querySelector('button[type="submit"]');
            if (button) {
                button.disabled = true;
                button.innerHTML = '<svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8H4z"></path></svg> Processing Enquiry...';
            }
        });
    });
};

// Back to top
const setupBackToTop = () => {
    const btn = document.querySelector('#back-to-top');
    if (!btn) return;

    window.addEventListener('scroll', () => {
        if (window.scrollY > 400) {
            btn.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-4');
            btn.classList.add('opacity-100', 'translate-y-0');
        } else {
            btn.classList.add('opacity-0', 'pointer-events-none', 'translate-y-4');
            btn.classList.remove('opacity-100', 'translate-y-0');
        }
    });

    btn.addEventListener('click', () => {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
};

// Language Switcher (English <-> Hindi)
const setupLanguageTranslator = () => {
    // Reads active language from cookies or translated state
    const getActiveLanguage = () => {
        const match = document.cookie.match(/googtrans=(?:%2F|\/)[^/;\s]+(?:%2F|\/)([a-z]{2})/i);
        if (match && match[1]) {
            return match[1].toLowerCase();
        }
        return 'en';
    };

    // Update active UI classes on all language buttons
    const updateLanguageSwitcherUI = (activeLang) => {
        document.querySelectorAll('[data-language-switcher]').forEach(container => {
            const isDark = container.closest('.bg-\\[\\#07192f\\]') || !container.classList.contains('bg-white');
            container.querySelectorAll('.lang-btn').forEach(btn => {
                const isActive = btn.dataset.lang === activeLang;
                if (isActive) {
                    btn.classList.add('is-active');
                    if (isDark) {
                        btn.className = 'lang-btn is-active px-2.5 py-0.5 rounded-md transition-all font-bold bg-amber-400 text-slate-950 shadow-xs';
                    } else {
                        btn.className = 'lang-btn is-active px-3 py-1 rounded-md text-xs font-bold transition-all bg-amber-500 text-white shadow-xs';
                    }
                } else {
                    btn.classList.remove('is-active');
                    if (isDark) {
                        btn.className = 'lang-btn px-2.5 py-0.5 rounded-md transition-all font-semibold text-slate-300 hover:text-white hover:bg-white/10';
                    } else {
                        btn.className = 'lang-btn px-3 py-1 rounded-md text-xs font-semibold transition-all text-slate-600 hover:text-slate-950 hover:bg-slate-100';
                    }
                }
            });
        });
    };

    // Completely clear all googtrans cookies across current host and parent domains
    const clearGoogleTranslateCookies = () => {
        const host = window.location.hostname;
        const domains = [host, `.${host}`, ''];
        const parts = host.split('.');
        for (let i = 0; i < parts.length - 1; i++) {
            domains.push('.' + parts.slice(i).join('.'));
        }

        const paths = ['/', window.location.pathname];
        const cookieNames = ['googtrans', 'googtrans_saved'];

        cookieNames.forEach(name => {
            domains.forEach(domain => {
                paths.forEach(path => {
                    const domainStr = domain ? `; domain=${domain}` : '';
                    document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=${path}${domainStr}`;
                });
            });
        });

        if (window.location.hash && window.location.hash.includes('googtrans')) {
            history.replaceState('', document.title, window.location.pathname + window.location.search);
        }
    };

    const triggerTranslation = (targetLang) => {
        const currentLang = getActiveLanguage();
        if (targetLang === currentLang) {
            return;
        }

        if (targetLang === 'en') {
            // Revert back to original English:
            // Clear all googtrans cookies and reload to restore clean English DOM
            clearGoogleTranslateCookies();
            updateLanguageSwitcherUI('en');
            window.location.reload();
            return;
        }

        if (targetLang === 'hi') {
            const host = window.location.hostname;
            document.cookie = `googtrans=/en/hi; path=/; domain=${host}`;
            document.cookie = `googtrans=/en/hi; path=/; domain=.${host}`;
            document.cookie = `googtrans=/en/hi; path=/;`;

            updateLanguageSwitcherUI('hi');

            const select = document.querySelector('.goog-te-combo');
            if (select) {
                select.value = 'hi';
                select.dispatchEvent(new Event('change'));
            } else {
                window.location.reload();
            }
        }
    };

    // Attach click listeners to language buttons
    document.querySelectorAll('[data-language-switcher] .lang-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.preventDefault();
            const lang = btn.dataset.lang;
            triggerTranslation(lang);
        });
    });

    // Sync initial state on load
    const activeLang = getActiveLanguage();
    updateLanguageSwitcherUI(activeLang);

    // Sync when Google Translate initializes or changes
    window.addEventListener('google-translate-ready', () => {
        updateLanguageSwitcherUI(getActiveLanguage());
    });
};

document.addEventListener('DOMContentLoaded', () => {
    setupHeroCarousel();
    setupGallery();
    setupFaq();
    setupReviews();
    setupMobileMenu();
    setupForms();
    setupBackToTop();
    setupLanguageTranslator();
});
