document.addEventListener('DOMContentLoaded', () => {
    // 1️⃣ Smooth scroll for the indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', () => {
            window.scrollBy({
                top: window.innerHeight - 100,
                behavior: 'smooth'
            });
        });
    }

    // 2️⃣ Animation on load
    const elements = document.querySelectorAll('[data-animate]');
    elements.forEach((el, index) => {
        setTimeout(() => {
            el.classList.add('animate');
        }, index * 200);
    });

    // 3️⃣ Continuous scrolling effect for brokers
    const track = document.querySelector('.broker-track');
    if (track) {
        const items = document.querySelectorAll('.broker-item');
        const totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth, 0);

        // Duplicate items for seamless scroll
        track.innerHTML += track.innerHTML;

        // Adjust track width
        track.style.width = `${totalWidth * 2}px`;
    }
});
    