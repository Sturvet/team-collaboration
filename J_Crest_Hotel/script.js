// Add breathing effect to all slides
const slides = document.querySelectorAll('.slide');

// Apply breathing animation to all slides
slides.forEach((slide, index) => {
    // Add the active class to all slides so they all get the breathing effect
    slide.classList.add('active');
});
