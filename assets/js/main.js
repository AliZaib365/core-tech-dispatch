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
     document.addEventListener("DOMContentLoaded", function () {
            function animateCount(el, target, options = {}) {
                let start = 0;
                let isFloat = target % 1 !== 0;
                let duration = 1000;
                let startTime = null;
                let prefix = options.prefix || '';
                let suffix = options.suffix || '';
                
                function animate(ts) {
                    if (!startTime) startTime = ts;
                    const progress = Math.min((ts - startTime) / duration, 1);
                    const value = isFloat
                        ? (progress * target).toFixed(1)
                        : Math.floor(progress * target);
                    el.textContent = prefix + value + suffix;
                    if (progress < 1) {
                        requestAnimationFrame(animate);
                    } else {
                        el.textContent = prefix + target + suffix;
                    }
                }
                requestAnimationFrame(animate);
            }

            // Only animate when element is in viewport
            function handleIntersection(entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        let target = parseFloat(el.getAttribute('data-target'));
                        let prefix = el.getAttribute('data-prefix') || '';
                        let suffix = el.getAttribute('data-suffix') || '';
                        animateCount(el, target, { prefix, suffix });
                        observer.unobserve(el);
                    }
                });
            }

            // Set up intersection observer
            const observer = new IntersectionObserver(handleIntersection, {
                threshold: 0.5
            });

            // Observe all count elements
            document.querySelectorAll('.count').forEach(function (el) {
                observer.observe(el);
            });
        });
                document.addEventListener('DOMContentLoaded', function() {
            const track = document.querySelector('.reviews-track');
            const items = document.querySelectorAll('.review-item');
            const dots = document.querySelectorAll('.carousel-dot');
            const prevBtn = document.querySelector('.carousel-arrow.prev');
            const nextBtn = document.querySelector('.carousel-arrow.next');
            
            let currentIndex = 0;
            let itemWidth = items[0].offsetWidth;
            let visibleItems = window.innerWidth < 768 ? 1 : (window.innerWidth < 1200 ? 2 : 3);

            function updateItemWidth() {
                itemWidth = items[0].offsetWidth;
                visibleItems = window.innerWidth < 768 ? 1 : (window.innerWidth < 1200 ? 2 : 3);
            }

            function updateCarousel() {
                const offset = -currentIndex * itemWidth;
                track.style.transform = `translateX(${offset}px)`;
                // Update dots
                dots.forEach((dot, index) => {
                    dot.classList.toggle('active', index === currentIndex);
                });
                // Show/hide arrows
                prevBtn.style.display = currentIndex === 0 ? 'none' : 'flex';
                nextBtn.style.display = currentIndex >= items.length - visibleItems ? 'none' : 'flex';
            }

            function nextSlide() {
                if (currentIndex < items.length - visibleItems) {
                    currentIndex++;
                } else {
                    currentIndex = 0; // Loop back to start
                }
                updateCarousel();
            }

            function prevSlide() {
                if (currentIndex > 0) {
                    currentIndex--;
                } else {
                    currentIndex = items.length - visibleItems; // Loop to end
                }
                updateCarousel();
            }

            // Button events
            nextBtn.addEventListener('click', nextSlide);
            prevBtn.addEventListener('click', prevSlide);

            // Dot navigation
            dots.forEach((dot, index) => {
                dot.addEventListener('click', () => {
                    currentIndex = index;
                    updateCarousel();
                });
            });

            // Auto-advance
            let autoSlide = setInterval(nextSlide, 5000);

            // Pause on hover
            track.addEventListener('mouseenter', () => {
                clearInterval(autoSlide);
            });
            track.addEventListener('mouseleave', () => {
                autoSlide = setInterval(nextSlide, 5000);
            });

            // Handle window resize
            window.addEventListener('resize', function() {
                updateItemWidth();
                if (currentIndex > items.length - visibleItems) {
                    currentIndex = items.length - visibleItems;
                }
                updateCarousel();
            });

            // Initialize
            updateItemWidth();
            updateCarousel();
        });