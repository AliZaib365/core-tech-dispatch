 // Smooth scroll for the indicator
        document.querySelector('.scroll-indicator').addEventListener('click', () => {
            window.scrollBy({
                top: window.innerHeight - 100,
                behavior: 'smooth'
            });
        });

        // Animation on load
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('[data-animate]');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('animate');
                }, index * 200);
            });
        });