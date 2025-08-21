        document.addEventListener('DOMContentLoaded', function() {
            const section = document.getElementById('services-section');
            let animated = false;
            
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
                    rect.bottom >= 0
                );
            }
            
            // Check on load
            if (isInViewport(section) && !animated) {
                section.classList.add('visible');
                setTimeout(() => {
                    section.classList.add('animated');
                }, 300);
                animated = true;
            }
            
            // Check on scroll
            window.addEventListener('scroll', function() {
                if (isInViewport(section) && !animated) {
                    section.classList.add('visible');
                    setTimeout(() => {
                        section.classList.add('animated');
                    }, 300);
                    animated = true;
                }
            });
        });
          document.addEventListener('DOMContentLoaded', function() {
            const title = document.getElementById('title');
            const description = document.getElementById('description');
            const ctaButton = document.getElementById('cta-button');
            const truckGrid = document.getElementById('truck-grid');
            const truckCards = document.querySelectorAll('.truck-type-card');
            
            // Reset animation state
            title.classList.remove('animate');
            description.classList.remove('animate');
            ctaButton.classList.remove('animate');
            truckGrid.classList.remove('animate');
            truckCards.forEach(card => card.classList.remove('animate'));
            
            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate text elements
                        title.classList.add('animate');
                        description.classList.add('animate');
                        ctaButton.classList.add('animate');
                        
                        // Animate grid container
                        truckGrid.classList.add('animate');
                        
                        // Animate individual cards with delays
                        truckCards.forEach(card => {
                            card.classList.add('animate');
                        });
                        
                        // Stop observing after animation triggers
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 }); // Trigger when 30% of section is visible
            
            // Observe the truck section
            const truckSection = document.querySelector('.truck-section');
            observer.observe(truckSection);
            
            // Handle window resize to reset animations if needed
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (window.innerWidth <= 1024) {
                        // On mobile, show elements without animation
                        title.classList.add('animate');
                        description.classList.add('animate');
                        ctaButton.classList.add('animate');
                        truckGrid.classList.add('animate');
                        truckCards.forEach(card => card.classList.add('animate'));
                    }
                }, 250);
            });
        });
         document.addEventListener('DOMContentLoaded', function() {
            // Elements to animate
            const aboutLeft = document.getElementById('about-left');
            const aboutSubtitle = document.getElementById('about-subtitle');
            const aboutDesc1 = document.getElementById('about-desc-1');
            const aboutDesc2 = document.getElementById('about-desc-2');
            const aboutBtn = document.getElementById('about-btn');
            const aboutRight = document.getElementById('about-right');
            const aboutStats = document.getElementById('about-stats');
            const statBoxes = [
                document.getElementById('stat-1'),
                document.getElementById('stat-2'),
                document.getElementById('stat-3'),
                document.getElementById('stat-4')
            ];
            
            // Reset animation state
            aboutLeft.classList.remove('animate');
            aboutSubtitle.classList.remove('animate');
            aboutDesc1.classList.remove('animate');
            aboutDesc2.classList.remove('animate');
            aboutBtn.classList.remove('animate');
            aboutRight.classList.remove('animate');
            aboutStats.classList.remove('animate');
            statBoxes.forEach(box => box.classList.remove('animate'));
            
            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate left content
                        aboutLeft.classList.add('animate');
                        aboutSubtitle.classList.add('animate');
                        aboutDesc1.classList.add('animate');
                        aboutDesc2.classList.add('animate');
                        aboutBtn.classList.add('animate');
                        
                        // Animate right content
                        aboutRight.classList.add('animate');
                        
                        // Animate stats with delay
                        setTimeout(() => {
                            aboutStats.classList.add('animate');
                            statBoxes.forEach(box => box.classList.add('animate'));
                        }, 300);
                        
                        // Animate counters
                        animateCounters();
                        
                        // Stop observing after animation triggers
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            
            // Observe the about section
            const aboutSection = document.querySelector('.about-section');
            observer.observe(aboutSection);
            
            // Counter animation function
            function animateCounters() {
                const counters = document.querySelectorAll('.count');
                const speed = 200; // The lower the slower
                
                counters.forEach(counter => {
                    const target = +counter.getAttribute('data-target');
                    const suffix = counter.getAttribute('data-suffix') || '';
                    const prefix = counter.getAttribute('data-prefix') || '';
                    let count = 0;
                    
                    // Update counter function
                    const updateCount = () => {
                        const increment = target / speed;
                        
                        if (count < target) {
                            count += increment;
                            if (counter.getAttribute('data-target').includes('.')) {
                                counter.innerText = prefix + count.toFixed(1) + suffix;
                            } else {
                                counter.innerText = prefix + Math.ceil(count) + suffix;
                            }
                            setTimeout(updateCount, 1);
                        } else {
                            counter.innerText = prefix + target + suffix;
                            counter.classList.add('animated');
                        }
                    };
                    
                    updateCount();
                });
            }
            
            // Handle window resize to reset animations if needed
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (window.innerWidth <= 1024) {
                        // On mobile/tablet, show elements without animation
                        aboutLeft.classList.add('animate');
                        aboutSubtitle.classList.add('animate');
                        aboutDesc1.classList.add('animate');
                        aboutDesc2.classList.add('animate');
                        aboutBtn.classList.add('animate');
                        aboutRight.classList.add('animate');
                        aboutStats.classList.add('animate');
                        statBoxes.forEach(box => box.classList.add('animate'));
                    }
                }, 250);
            });
        });
          document.addEventListener('DOMContentLoaded', function() {
            const title = document.getElementById('partnership-title');
            const desc = document.getElementById('partnership-desc');
            const btn = document.getElementById('partnership-btn');
            
            // Reset animation state
            title.classList.remove('animate');
            desc.classList.remove('animate');
            btn.classList.remove('animate');
            
            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate elements with delays
                        title.classList.add('animate');
                        desc.classList.add('animate');
                        btn.classList.add('animate');
                        
                        // Stop observing after animation triggers
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.5 }); // Trigger when 50% of section is visible
            
            // Observe the partnership section
            const partnershipSection = document.querySelector('.partnership-section');
            observer.observe(partnershipSection);
            
            // Handle window resize to reset animations if needed
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    // On mobile, show elements without animation delay
                    if (window.innerWidth <= 768) {
                        title.classList.add('animate');
                        desc.classList.add('animate');
                        btn.classList.add('animate');
                    }
                }, 250);
            });
        });
         document.addEventListener('DOMContentLoaded', function() {
            const header = document.getElementById('dispatchers-header');
            const features = document.getElementById('dispatchers-features');
            const info = document.getElementById('dispatchers-info');
            
            // Reset animation state
            header.classList.remove('animate');
            features.classList.remove('animate');
            info.classList.remove('animate');
            
            // Create intersection observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate elements with delays
                        header.classList.add('animate');
                        features.classList.add('animate');
                        info.classList.add('animate');
                        
                        // Stop observing after animation triggers
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            
            // Observe the dispatchers section
            const dispatchersSection = document.querySelector('.dispatchers-section');
            observer.observe(dispatchersSection);
            
            // Handle window resize to reset animations if needed
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(function() {
                    if (window.innerWidth <= 900) {
                        // On mobile/tablet, show elements without animation
                        header.classList.add('animate');
                        features.classList.add('animate');
                        info.classList.add('animate');
                    }
                }, 250);
            });
        });
                document.addEventListener('DOMContentLoaded', function() {
            const advantagesSection = document.querySelector('.advantages');
            const features = document.querySelectorAll('.advantages__feature');
            const info = document.querySelector('.advantages__info');
            
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
                    rect.bottom >= 0
                );
            }
            
            // Function to handle scroll events
            function handleScroll() {
                if (isInViewport(advantagesSection)) {
                    // Animate features with staggered delay
                    features.forEach((feature, index) => {
                        setTimeout(() => {
                            feature.classList.add('animate');
                        }, index * 100);
                    });
                    
                    // Animate info section
                    setTimeout(() => {
                        info.classList.add('animate');
                    }, 600);
                    
                    // Remove event listener after animation
                    window.removeEventListener('scroll', handleScroll);
                }
            }
            
            // Initial check on page load
            handleScroll();
            
            // Add scroll event listener
            window.addEventListener('scroll', handleScroll);
        });
        document.addEventListener('DOMContentLoaded', function () {
        const track = document.querySelector('.reviews-track');
        const items = document.querySelectorAll('.review-item');
        const dots = document.querySelectorAll('.carousel-dot');
        const prevBtn = document.querySelector('.carousel-arrow.prev');
        const nextBtn = document.querySelector('.carousel-arrow.next');
        const header = document.querySelector('.reviews-header');

        let currentIndex = 0;
        let itemWidth = items[0].offsetWidth;
        let visibleItems = window.innerWidth < 768 ? 1 : (window.innerWidth < 1200 ? 2 : 3);

        // Intersection Observer for fade-in animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.2
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('reviews-header')) {
                        entry.target.classList.add('visible');
                    } else if (entry.target.classList.contains('review-item')) {
                        setTimeout(() => {
                            entry.target.classList.add('visible');
                        }, 100 * parseInt(entry.target.dataset.index));
                    }
                }
            });
        }, observerOptions);

        // Observe header
        observer.observe(header);

        // Observe each review item
        items.forEach((item, index) => {
            item.dataset.index = index;
            observer.observe(item);
        });

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

        // Auto-advance (faster)
        let autoSlide = setInterval(nextSlide, 2500);

        // Pause on hover
        const carousel = document.querySelector('.reviews-carousel');
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        carousel.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, 2500);
        });

        // Handle window resize
        window.addEventListener('resize', function () {
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