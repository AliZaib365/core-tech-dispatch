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
 document.addEventListener('DOMContentLoaded', () => {
        const track = document.querySelector('.broker-track');
        const items = document.querySelectorAll('.broker-item');
        const totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth, 0);
        
        // Duplicate items for continuous scrolling effect
        track.innerHTML += track.innerHTML;
        
        // Set the width of the track to accommodate the duplicated items
        track.style.width = `${totalWidth * 2}px`;
    });