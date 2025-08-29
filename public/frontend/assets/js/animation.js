document.addEventListener('DOMContentLoaded', function() {
    // Initialize all functionality
    initVideoLoading();
    initScrollAnimations();
    initCarousels();
    initFormValidation();
    initFAQ();
    initParticles();
    initCounters();
});

// Video loading and fallback
function initVideoLoading() {
    const video = document.getElementById('heroVideo');
    const videoLoading = document.getElementById('videoLoading');
    const scrollIndicator = document.getElementById('scrollIndicator');
    const brokerSection = document.getElementById('brokerSection');
    
    if (!video) return;
    
    // Handle broker track duplication if exists
    const track = document.querySelector('.broker-track');
    if (track) {
        const items = document.querySelectorAll('.broker-item');
        const totalWidth = Array.from(items).reduce((acc, item) => acc + item.offsetWidth, 0);
        track.innerHTML += track.innerHTML;
        track.style.width = `${totalWidth * 2}px`;
    }
    
    // Scroll to broker section
    if (scrollIndicator && brokerSection) {
        scrollIndicator.addEventListener('click', function() {
            brokerSection.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    }
    
    // Preload and handle video loading
    function handleVideoLoad() {
        video.load();
        
        video.addEventListener('loadeddata', function() {
            if (video.readyState >= 3) {
                video.classList.add('loaded');
                if (videoLoading) videoLoading.style.display = 'none';
            }
        });
        
        // Fallback if loadeddata doesn't fire
        setTimeout(function() {
            video.classList.add('loaded');
            if (videoLoading) videoLoading.style.display = 'none';
        }, 2000);
        
        // Handle video errors
        video.addEventListener('error', function() {
            console.error('Video failed to load, using fallback background');
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                heroSection.style.background = "linear-gradient(rgb(10 16 29 / 70%), rgb(10 16 29)), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80')";
                heroSection.style.backgroundSize = "cover";
                heroSection.style.backgroundPosition = "center";
            }
            if (videoLoading) videoLoading.style.display = 'none';
        });
    }
    
    handleVideoLoad();
}

// Scroll animations with Intersection Observer
function initScrollAnimations() {
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Add visible class to animate element
                entry.target.classList.add('visible');
                
                // Handle specific sections with additional animations
                if (entry.target.id === 'services-section') {
                    setTimeout(() => {
                        entry.target.classList.add('animated');
                    }, 300);
                }
                
                // Stop observing after animation triggers (for performance)
                if (!entry.target.classList.contains('keep-observing')) {
                    observer.unobserve(entry.target);
                }
            }
        });
    }, observerOptions);
    
    // Observe all elements that need scroll animation
    const elementsToObserve = [
        '#services-section',
        '.truck-section',
        '.about-section',
        '.partnership-section',
        '.dispatchers-section',
        '.advantages',
        '.reviews-header',
        '.review-item',
        '#mainSection',
        '#leftPanel',
        '#mainHeading',
        '#mainContainer',
        '#subHeading',
        '#subtitle',
        '#benefit1',
        '#benefit2',
        '#benefit3',
        '#benefit4',
        '#setupForm',
        '#successMessage',
        '#emailGroup',
        '#nameGroup',
        '#formTitle',
        '#phoneError',
        '#emailCheckGroup',
        '#termsCheckGroup',
        '#termsError',
        '#submitBtn',
        '#heroBg',
        '#particlesContainer',
        '#heroContent',
        '#heroTitle',
        '#blueAccent',
        '#heroBtn',
        '#heroText',
        '#section3',
        '#emailError',
        '#phoneGroup',
        '#rightPanel',
        '.coretech-hero-section',
        '.faq-header h2',
        '.faq-item',
        '.stat-item',
        '.process-step',
        '#dispatch-section',
        '#dispatch-section1',
        '.animate-section',
        '.animate-visible',
        '#section2'
    ];
    
    elementsToObserve.forEach(selector => {
        const elements = document.querySelectorAll(selector);
        elements.forEach(el => observer.observe(el));
    });
    
    // Handle specific animations that need special treatment
    initTruckAnimations();
    initAboutAnimations();
    initPartnershipAnimations();
    initDispatcherAnimations();
    initAdvantagesAnimations();
}

// Truck section animations
function initTruckAnimations() {
    const truckSection = document.querySelector('.truck-section');
    if (!truckSection) return;
    
    const title = document.getElementById('title');
    const description = document.getElementById('description');
    const ctaButton = document.getElementById('cta-button');
    const truckGrid = document.getElementById('truck-grid');
    const truckCards = document.querySelectorAll('.truck-type-card');
    
    if (!title || !truckGrid) return;
    
    // Reset animation state
    [title, description, ctaButton, truckGrid].forEach(el => {
        if (el) el.classList.remove('animate');
    });
    truckCards.forEach(card => card.classList.remove('animate'));
    
    const truckObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate text elements
                if (title) title.classList.add('animate');
                if (description) description.classList.add('animate');
                if (ctaButton) ctaButton.classList.add('animate');
                
                // Animate grid container
                if (truckGrid) truckGrid.classList.add('animate');
                
                // Animate individual cards with delays
                truckCards.forEach(card => {
                    card.classList.add('animate');
                });
            }
        });
    }, { threshold: 0.3 });
    
    truckObserver.observe(truckSection);
}

// About section animations
function initAboutAnimations() {
    const aboutSection = document.querySelector('.about-section');
    if (!aboutSection) return;
    
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
    [aboutLeft, aboutSubtitle, aboutDesc1, aboutDesc2, aboutBtn, aboutRight, aboutStats].forEach(el => {
        if (el) el.classList.remove('animate');
    });
    statBoxes.forEach(box => {
        if (box) box.classList.remove('animate');
    });
    
    const aboutObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate left content
                if (aboutLeft) aboutLeft.classList.add('animate');
                if (aboutSubtitle) aboutSubtitle.classList.add('animate');
                if (aboutDesc1) aboutDesc1.classList.add('animate');
                if (aboutDesc2) aboutDesc2.classList.add('animate');
                if (aboutBtn) aboutBtn.classList.add('animate');
                
                // Animate right content
                if (aboutRight) aboutRight.classList.add('animate');
                
                // Animate stats with delay
                setTimeout(() => {
                    if (aboutStats) aboutStats.classList.add('animate');
                    statBoxes.forEach(box => {
                        if (box) box.classList.add('animate');
                    });
                }, 300);
                
                // Animate counters
                animateCounters();
            }
        });
    }, { threshold: 0.3 });
    
    aboutObserver.observe(aboutSection);
}

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

// Partnership section animations
function initPartnershipAnimations() {
    const partnershipSection = document.querySelector('.partnership-section');
    if (!partnershipSection) return;
    
    const title = document.getElementById('partnership-title');
    const desc = document.getElementById('partnership-desc');
    const btn = document.getElementById('partnership-btn');
    
    // Reset animation state
    [title, desc, btn].forEach(el => {
        if (el) el.classList.remove('animate');
    });
    
    const partnershipObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate elements with delays
                if (title) title.classList.add('animate');
                if (desc) desc.classList.add('animate');
                if (btn) btn.classList.add('animate');
            }
        });
    }, { threshold: 0.5 });
    
    partnershipObserver.observe(partnershipSection);
}

// Dispatchers section animations
function initDispatcherAnimations() {
    const dispatchersSection = document.querySelector('.dispatchers-section');
    if (!dispatchersSection) return;
    
    const header = document.getElementById('dispatchers-header');
    const features = document.getElementById('dispatchers-features');
    const info = document.getElementById('dispatchers-info');
    
    // Reset animation state
    [header, features, info].forEach(el => {
        if (el) el.classList.remove('animate');
    });
    
    const dispatcherObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Animate elements with delays
                if (header) header.classList.add('animate');
                if (features) features.classList.add('animate');
                if (info) info.classList.add('animate');
            }
        });
    }, { threshold: 0.3 });
    
    dispatcherObserver.observe(dispatchersSection);
}

// Advantages section animations
function initAdvantagesAnimations() {
    const advantagesSection = document.querySelector('.advantages');
    if (!advantagesSection) return;
    
    const features = document.querySelectorAll('.advantages__feature');
    const info = document.querySelector('.advantages__info');
    
    function handleScroll() {
        const rect = advantagesSection.getBoundingClientRect();
        const isInViewport = (
            rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.9 &&
            rect.bottom >= 0
        );
        
        if (isInViewport) {
            // Animate features with staggered delay
            features.forEach((feature, index) => {
                setTimeout(() => {
                    feature.classList.add('animate');
                }, index * 100);
            });
            
            // Animate info section
            setTimeout(() => {
                if (info) info.classList.add('animate');
            }, 600);
            
            // Remove event listener after animation
            window.removeEventListener('scroll', handleScroll);
        }
    }
    
    // Initial check on page load
    handleScroll();
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
}

// Carousel functionality
function initCarousels() {
    const track = document.querySelector('.reviews-track');
    if (!track) return;
    
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
        if (prevBtn) prevBtn.style.display = currentIndex === 0 ? 'none' : 'flex';
        if (nextBtn) nextBtn.style.display = currentIndex >= items.length - visibleItems ? 'none' : 'flex';
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
    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);
    
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
    if (carousel) {
        carousel.addEventListener('mouseenter', () => {
            clearInterval(autoSlide);
        });
        carousel.addEventListener('mouseleave', () => {
            autoSlide = setInterval(nextSlide, 2500);
        });
    }
    
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
}

// Form validation
function initFormValidation() {
    const form = document.getElementById('setupForm');
    if (!form) return;
    
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Reset error messages
        document.querySelectorAll('.error-message').forEach(el => {
            el.style.display = 'none';
        });
        
        // Validate form
        let isValid = true;
        const name = document.getElementById('name').value.trim();
        const email = document.getElementById('email').value.trim();
        const phone = document.getElementById('phone').value.trim();
        const termsChecked = document.querySelector('input[name="sms-updates"]').checked;
        
        if (name === '') {
            document.getElementById('nameError').style.display = 'block';
            isValid = false;
        }
        
        if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            document.getElementById('emailError').style.display = 'block';
            isValid = false;
        }
        
        if (phone === '' || phone.length < 10) {
            document.getElementById('phoneError').style.display = 'block';
            isValid = false;
        }
        
        if (!termsChecked) {
            document.getElementById('termsError').style.display = 'block';
            isValid = false;
        }
        
        if (isValid) {
            // Simulate form submission
            const successMessage = document.getElementById('successMessage');
            if (successMessage) {
                successMessage.style.display = 'flex';
                successMessage.classList.add('animate-fade-in');
                
                // Reset form
                this.reset();
                
                // Scroll to success message
                successMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
                
                // Hide success message after 5 seconds
                setTimeout(() => {
                    successMessage.style.display = 'none';
                    successMessage.classList.remove('animate-fade-in');
                }, 5000);
            }
        }
    });
}

// FAQ functionality
function initFAQ() {
    // FAQ toggle functionality
    document.querySelectorAll('.faq-question').forEach(btn => {
        btn.addEventListener('click', function() {
            const item = this.parentElement;
            const isOpen = item.classList.contains('open');
            
            // Close all FAQ items
            document.querySelectorAll('.faq-item').forEach(el => {
                el.classList.remove('open');
            });
            
            // Open the clicked item if it wasn't already open
            if (!isOpen) {
                item.classList.add('open');
            }
        });
    });
    
    // Add visible class to header immediately if it's already in view
    setTimeout(() => {
        const faqHeader = document.querySelector('.faq-header h2');
        if (faqHeader) {
            const headerRect = faqHeader.getBoundingClientRect();
            if (headerRect.top < window.innerHeight && headerRect.bottom > 0) {
                faqHeader.classList.add('visible');
            }
        }
    }, 100);
}

// Particle animation
function initParticles() {
    const particlesContainer = document.getElementById('particlesContainer');
    if (!particlesContainer) return;
    
    const particleCount = 20;
    
    for (let i = 0; i < particleCount; i++) {
        const particle = document.createElement('div');
        particle.classList.add('particle');
        
        // Random properties
        const size = Math.random() * 8 + 2;
        const posX = Math.random() * 100;
        const delay = Math.random() * 15;
        const duration = Math.random() * 10 + 15;
        
        particle.style.width = `${size}px`;
        particle.style.height = `${size}px`;
        particle.style.left = `${posX}%`;
        particle.style.animationDelay = `${delay}s`;
        particle.style.animationDuration = `${duration}s`;
        
        particlesContainer.appendChild(particle);
    }
    
    // Background image load simulation
    const heroBg = document.getElementById('heroBg');
    if (heroBg) {
        setTimeout(() => {
            heroBg.classList.add('loaded');
        }, 100);
    }
}
       document.addEventListener('DOMContentLoaded', function() {
      // Create Intersection Observer
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.2
      };
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('animate-visible');
          }
        });
      }, observerOptions);
      
      // Observe all sections with animation classes
      const sections = document.querySelectorAll('.animate-section');
      sections.forEach(section => {
        observer.observe(section);
      });
    });
    
// Initialize counters
function initCounters() {
    // This is handled in the about section animation
    // The animateCounters function is called when the about section comes into view
}
