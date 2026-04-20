document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.getElementById('menuToggle');
    const menuClose = document.getElementById('menuClose');
    const sideMenu = document.getElementById('sideMenu');
    const menuOverlay = document.getElementById('menuOverlay');
    const accommodationDropdown = document.getElementById('accommodationDropdown');
    const sideAccommodationToggle = document.getElementById('sideAccommodationToggle');
    const sideAccommodationMenu = document.getElementById('sideAccommodationMenu');
    const header = document.getElementById('siteHeader');
    const brandLogo = document.querySelector('.brand-logo');

    function setSideMenuState(isOpen) {
        sideMenu.classList.toggle('open', isOpen);
        menuOverlay.classList.toggle('visible', isOpen);
        sideMenu.setAttribute('aria-hidden', String(!isOpen));
        menuToggle.setAttribute('aria-expanded', String(isOpen));
    }

    function toggleDropdown(dropdown, isOpen) {
        dropdown.classList.toggle('open', isOpen);
    }

    menuToggle.addEventListener('click', function() {
        setSideMenuState(!sideMenu.classList.contains('open'));
    });

    menuClose.addEventListener('click', function() {
        setSideMenuState(false);
    });

    menuOverlay.addEventListener('click', function() {
        setSideMenuState(false);
    });

    document.addEventListener('click', function(event) {
        if (
            sideMenu.classList.contains('open') &&
            !sideMenu.contains(event.target) &&
            event.target !== menuToggle
        ) {
            setSideMenuState(false);
        }
    });

    // Desktop dropdown
    accommodationDropdown.addEventListener('click', function(e) {
        e.preventDefault();
        const isOpen = accommodationDropdown.parentElement.classList.contains('open');
        toggleDropdown(accommodationDropdown.parentElement, !isOpen);
    });

    // Mobile dropdown
    if (sideAccommodationToggle && sideAccommodationMenu) {
        sideAccommodationToggle.addEventListener('click', function() {
            const isOpen = sideAccommodationMenu.classList.contains('open');
            sideAccommodationMenu.classList.toggle('open', !isOpen);
            sideAccommodationToggle.setAttribute('aria-expanded', String(!isOpen));
        });
    }

    // Close dropdowns when clicking outside
    if (accommodationDropdown) {
        document.addEventListener('click', function(event) {
            if (!accommodationDropdown.parentElement.contains(event.target)) {
                toggleDropdown(accommodationDropdown.parentElement, false);
            }
        });
    }

    // Navbar background change when leaving homepage
    function updateHeaderStyle() {
        const homepageFirst = document.querySelector('.homepage-first');
        // Inner pages (no hero): use solid header immediately so nav/book contrast matches the light layout
        const triggerPoint = homepageFirst ? homepageFirst.offsetHeight : 0;

        const isScrolled = window.scrollY > triggerPoint - 50;
        header.classList.toggle('scrolled', isScrolled);

        if (brandLogo) {
            const defaultLogo = brandLogo.getAttribute('data-logo-default') || brandLogo.getAttribute('src');
            const scrolledLogo = brandLogo.getAttribute('data-logo-scrolled') || defaultLogo;
            const nextLogo = isScrolled ? scrolledLogo : defaultLogo;

            if (nextLogo && brandLogo.getAttribute('src') !== nextLogo) {
                brandLogo.setAttribute('src', nextLogo);
            }
        }
    }
    
    window.addEventListener('scroll', updateHeaderStyle);
    // Call once on load to set initial state
    updateHeaderStyle();

    // Promotion cards click functionality
    const promoCards = document.querySelectorAll('.promo-card');
    
    promoCards.forEach(card => {
        const details = card.querySelector('.promo-details');
        
        card.addEventListener('click', function(event) {
            // Don't trigger if clicking on close button
            if (event.target.closest('.close-promo')) {
                return;
            }
            // Let Book Now / other links navigate
            if (event.target.closest('a[href]')) {
                return;
            }

            // Close all other promo details
            promoCards.forEach(otherCard => {
                if (otherCard !== card) {
                    otherCard.querySelector('.promo-details').classList.remove('active');
                }
            });
            
            // Toggle current promo details
            details.classList.toggle('active');
        });
    });

    // Close promo function
    window.closePromo = function(promoType) {
        const details = document.getElementById(promoType + '-details');
        if (details) {
            details.classList.remove('active');
        }
    };

    // Click outside to close promo details
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.promo-card')) {
            promoCards.forEach(card => {
                card.querySelector('.promo-details').classList.remove('active');
            });
        }
    });

    // Hero slideshow - handled by CSS animation

});

// Rooms page animation
document.addEventListener('DOMContentLoaded', function() {
    // Fade-up animation on scroll with stagger
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const delay = entry.target.getAttribute('data-delay') || 0;
                setTimeout(() => {
                    entry.target.classList.add('fade-in');
                }, delay);
            }
        });
    }, {
        threshold: 0.1
    });

    document.querySelectorAll('.room-card').forEach(card => {
        observer.observe(card);
    });
});

// Guest rooms slider (3 visible, one-by-one slide)
document.addEventListener('DOMContentLoaded', function() {
    const roomsWrapper = document.getElementById('roomsAutoWrapper');
    const roomsTrack = document.getElementById('roomsAutoTrack');
    const prevBtn = document.getElementById('roomsPrev');
    const nextBtn = document.getElementById('roomsNext');

    if (!roomsWrapper || !roomsTrack || !prevBtn || !nextBtn) return;

    const sourceCards = Array.from(roomsTrack.children).map((card) => card.cloneNode(true));
    let currentIndex = 0;
    let autoSlideTimer = null;
    let isPaused = false;
    let isDragging = false;
    let dragStartX = 0;
    let dragDeltaX = 0;
    let clonesPerSide = 0;

    function visibleCount() {
        if (window.innerWidth <= 480) return 1;
        if (window.innerWidth <= 768) return 2;
        return 3;
    }

    function cardStep() {
        const renderedCards = roomsTrack.children;
        if (renderedCards.length < 2) return 0;
        const firstCard = renderedCards[0];
        const secondCard = renderedCards[1];
        return secondCard.offsetLeft - firstCard.offsetLeft;
    }

    function rebuildInfiniteTrack() {
        clonesPerSide = Math.min(visibleCount(), sourceCards.length);
        roomsTrack.innerHTML = '';

        const headClones = sourceCards.slice(-clonesPerSide).map((card) => card.cloneNode(true));
        const tailClones = sourceCards.slice(0, clonesPerSide).map((card) => card.cloneNode(true));

        headClones.forEach((card) => roomsTrack.appendChild(card));
        sourceCards.forEach((card) => roomsTrack.appendChild(card.cloneNode(true)));
        tailClones.forEach((card) => roomsTrack.appendChild(card));

        currentIndex = 0;
    }

    function updateSlider(animate = true) {
        const step = cardStep();
        const visualIndex = currentIndex + clonesPerSide;
        const offset = visualIndex * step;
        roomsTrack.style.transition = animate ? 'transform 0.55s cubic-bezier(0.25, 0.46, 0.45, 0.94)' : 'none';
        roomsTrack.style.transform = `translateX(${-offset}px)`;
    }

    function normalizeLoopPosition() {
        const total = sourceCards.length;
        let moved = false;

        if (currentIndex >= total) {
            currentIndex = 0;
            moved = true;
        } else if (currentIndex < 0) {
            currentIndex = total - 1;
            moved = true;
        }

        if (moved) updateSlider(false);
    }

    function goNext() {
        currentIndex += 1;
        updateSlider(true);
    }

    function goPrev() {
        currentIndex -= 1;
        updateSlider(true);
    }

    function stopAutoSlide() {
        if (autoSlideTimer) clearInterval(autoSlideTimer);
    }

    function startAutoSlide() {
        stopAutoSlide();
        autoSlideTimer = setInterval(function() {
            if (!isPaused && !isDragging) {
                goNext();
            }
        }, 3200);
    }

    prevBtn.addEventListener('click', function() {
        goPrev();
        startAutoSlide();
    });

    nextBtn.addEventListener('click', function() {
        goNext();
        startAutoSlide();
    });

    roomsWrapper.addEventListener('mouseenter', function() {
        isPaused = true;
    });

    roomsWrapper.addEventListener('mouseleave', function() {
        isPaused = false;
    });

    roomsWrapper.addEventListener('mousedown', function(event) {
        isDragging = true;
        dragStartX = event.clientX;
        dragDeltaX = 0;
        roomsWrapper.classList.add('dragging');
        isPaused = true;
    });

    document.addEventListener('mousemove', function(event) {
        if (!isDragging) return;
        dragDeltaX = event.clientX - dragStartX;
    });

    document.addEventListener('mouseup', function() {
        if (!isDragging) return;
        const threshold = Math.max(40, cardStep() * 0.18);
        if (dragDeltaX <= -threshold) {
            goNext();
        } else if (dragDeltaX >= threshold) {
            goPrev();
        } else {
            updateSlider(true);
        }

        isDragging = false;
        roomsWrapper.classList.remove('dragging');
        isPaused = false;
        startAutoSlide();
    });

    let touchStartX = 0;
    roomsWrapper.addEventListener('touchstart', function(event) {
        touchStartX = event.changedTouches[0].clientX;
        isPaused = true;
    }, { passive: true });

    roomsWrapper.addEventListener('touchend', function(event) {
        const touchEndX = event.changedTouches[0].clientX;
        const diff = touchStartX - touchEndX;
        const threshold = Math.max(35, cardStep() * 0.12);

        if (diff > threshold) {
            goNext();
        } else if (diff < -threshold) {
            goPrev();
        }

        isPaused = false;
        startAutoSlide();
    }, { passive: true });

    roomsTrack.addEventListener('transitionend', function() {
        normalizeLoopPosition();
    });

    window.addEventListener('resize', function() {
        rebuildInfiniteTrack();
        updateSlider(false);
    });

    rebuildInfiniteTrack();
    updateSlider(false);
    startAutoSlide();

    window.addEventListener('beforeunload', function() {
        stopAutoSlide();
    });
});

// Carousel Analytics Tracking System
window.carouselAnalytics = {
    events: [],
    startTime: Date.now(),
    
    trackEvent: function(eventName, eventData = {}) {
        const event = {
            name: eventName,
            timestamp: Date.now(),
            data: eventData
        };
        this.events.push(event);
        console.log('Carousel Event:', event);
    },
    
    getSessionDuration: function() {
        return Date.now() - this.startTime;
    },
    
    getEventCount: function(eventName) {
        return this.events.filter(e => e.name === eventName).length;
    },
    
    getAnalyticsSummary: function() {
        return {
            totalEvents: this.events.length,
            sessionDuration: this.getSessionDuration(),
            events: {
                autoSlides: this.getEventCount('carousel_auto_slide'),
                manualNavigations: this.getEventCount('carousel_manual_nav'),
                categoryClicks: this.getEventCount('carousel_category_click'),
                dragInteractions: this.getEventCount('carousel_drag_start'),
                touchInteractions: this.getEventCount('carousel_touch_swipe')
            }
        };
    }
};
