          document.addEventListener('DOMContentLoaded', function() {
      const videoImg1 = document.querySelector('.about-video-img1');
      
      if ('IntersectionObserver' in window) {
        const observer1 = new IntersectionObserver((entries) => {
          entries.forEach(entry => {
            if (entry.isIntersecting) {
              const img1 = entry.target;
              if (img1.dataset.src) {
                img1.src = img1.dataset.src;
              }
              observer1.unobserve(img1);
            }
          });
        }, {
          rootMargin: '200px'
        });
        
        observer1.observe(videoImg1);
      }
      
      // Play button functionality (placeholder)
      document.querySelector('.about-video-play1').addEventListener('click', function() {
        alert('Video player would launch here in a real implementation');
      });
    });
    document.addEventListener('DOMContentLoaded', function () {
            const scrollIndicator = document.getElementById('scrollIndicator');
            const brokerSection = document.getElementById('brokerSection');

            scrollIndicator.addEventListener('click', function () {
                brokerSection.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            });

            // Add video play error handling
            const video = document.querySelector('.video-background');
            video.addEventListener('error', function () {
                console.error('Video failed to load, using fallback background');
                document.querySelector('.hero-section').style.background = "linear-gradient(rgb(10 16 29 / 70%), rgb(10 16 29)), url('https://images.unsplash.com/photo-1504307651254-35680f356dfd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1920&q=80')";
                document.querySelector('.hero-section').style.backgroundSize = "cover";
                document.querySelector('.hero-section').style.backgroundPosition = "center";
            });
        });

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
      // Form validation function
        document.getElementById('setupForm').addEventListener('submit', function (e) {
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
        });

        // Intersection Observer for scroll animations
        document.addEventListener('DOMContentLoaded', function() {
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.15
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        
                        // If it's the main section, animate the container too
                        if (entry.target.id === 'mainSection') {
                            setTimeout(() => {
                                document.getElementById('mainContainer').classList.add('animate');
                            }, 300);
                        }
                        
                        // If it's the left panel, animate its children with delays
                        if (entry.target.id === 'leftPanel') {
                            setTimeout(() => {
                                document.getElementById('mainHeading').classList.add('visible');
                            }, 200);
                            setTimeout(() => {
                                document.getElementById('subtitle').classList.add('visible');
                            }, 400);
                            setTimeout(() => {
                                document.getElementById('subHeading').classList.add('visible');
                            }, 600);
                            setTimeout(() => {
                                document.getElementById('description').classList.add('visible');
                            }, 800);
                            
                            // Animate benefits list items with staggered delay
                            const benefits = ['benefit1', 'benefit2', 'benefit3', 'benefit4'];
                            benefits.forEach((benefit, index) => {
                                setTimeout(() => {
                                    document.getElementById(benefit).classList.add('visible');
                                }, 1000 + (index * 150));
                            });
                        }
                        
                        // If it's the right panel, animate its children with delays
                        if (entry.target.id === 'rightPanel') {
                            setTimeout(() => {
                                document.getElementById('formTitle').classList.add('visible');
                            }, 200);
                            
                            const formGroups = ['nameGroup', 'emailGroup', 'phoneGroup', 'emailCheckGroup', 'termsCheckGroup'];
                            formGroups.forEach((group, index) => {
                                setTimeout(() => {
                                    document.getElementById(group).classList.add('visible');
                                }, 400 + (index * 100));
                            });
                            
                            setTimeout(() => {
                                document.getElementById('submitBtn').classList.add('visible');
                            }, 1000);
                        }
                    }
                });
            }, observerOptions);

            // Observe elements for animation
            const elementsToObserve = [
                document.getElementById('mainSection'),
                document.getElementById('leftPanel'),
                document.getElementById('rightPanel')
            ];
            
            elementsToObserve.forEach(el => {
                if (el) observer.observe(el);
            });
            
            // Add floating animation to some elements after a delay
            setTimeout(() => {
                const floatingEls = document.querySelectorAll('.blue-star, .benefits-list i');
                floatingEls.forEach(el => {
                    el.classList.add('floating');
                });
            }, 2000);
        });
          document.addEventListener('DOMContentLoaded', function() {
            // Background image load simulation
            const heroBg = document.getElementById('heroBg');
            setTimeout(() => {
                heroBg.classList.add('loaded');
            }, 100);
            
            // Create floating particles
            const particlesContainer = document.getElementById('particlesContainer');
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
            
            // Intersection Observer for animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2
            };
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate content container
                        document.getElementById('heroContent').classList.add('visible');
                        
                        // Animate elements with staggered delays
                        setTimeout(() => {
                            document.getElementById('heroTitle').classList.add('visible');
                        }, 300);
                        
                        setTimeout(() => {
                            document.getElementById('blueAccent').classList.add('visible');
                        }, 800);
                        
                        setTimeout(() => {
                            document.getElementById('heroText').classList.add('visible');
                        }, 500);
                        
                        setTimeout(() => {
                            document.getElementById('heroBtn').classList.add('visible');
                        }, 700);
                    }
                });
            }, observerOptions);
            
            // Observe the hero section
            observer.observe(document.querySelector('.coretech-hero-section'));
        });
         document.addEventListener('DOMContentLoaded', function() {
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
        
        // Intersection Observer for fade-in animations
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);
        
        // Observe FAQ header and items
        const faqHeader = document.querySelector('.faq-header h2');
        const faqItems = document.querySelectorAll('.faq-item');
        
        if (faqHeader) observer.observe(faqHeader);
        faqItems.forEach(item => observer.observe(item));
        
        // Add visible class to header immediately if it's already in view
        setTimeout(() => {
            const headerRect = faqHeader.getBoundingClientRect();
            if (headerRect.top < window.innerHeight && headerRect.bottom > 0) {
                faqHeader.classList.add('visible');
            }
        }, 100);
    });
      document.addEventListener('DOMContentLoaded', function() {
            const section = document.querySelector('.coretech-faq-section');
            
            // Add a slight delay to ensure initial animations play
            setTimeout(() => {
                section.style.opacity = '1';
                section.style.transform = 'translateY(0)';
                section.style.transition = 'opacity 1s ease, transform 1s ease';
                
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            section.style.opacity = '1';
                            section.style.transform = 'translateY(0)';
                        } else {
                            section.style.opacity = '0.8';
                            section.style.transform = 'translateY(20px)';
                        }
                    });
                }, { threshold: 0.1 });
                
                observer.observe(section);
            }, 100);
        });
        