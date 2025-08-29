@extends('frontend.layouts.master')

@section('main-content')
    <section class="about-container1">
        <div class="about-header1">
            <span class="about-star1">&#9733;</span>
            <h1 class="about-title1">About us</h1>
        </div>

        <p class="about-summary1">
            <span class="highlight1">CoreTech Dispatch</span> provides <span class="highlight1">dispatching
                services</span>
            for owner-operators and truck fleets since <span class="bold1">2015</span>
        </p>

        <p class="about-details1">
            We offer not just load searching but comprehensive services for drivers and carriers including billing,
            document
            management, broker communications, <span class="bold1">SAFETY DOT compliance</span>, and much more. Our team
            is
            dedicated to streamlining your operations so you can focus on the road.
        </p>

        <hr>

        <div class="about-video-container1">
            <div class="about-video-box1">
                <span class="about-video-logo1">CORETECH <span class="highlight1">Dispatch</span></span>
                <picture>
                    <!-- Modern browsers (WebP) -->
                    <source srcset="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}" type="image/webp">

                    <!-- Fallback for older browsers -->
                    <source srcset="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}" type="image/jpeg">

                    <!-- Default fallback -->
                    <img class="about-video-img1" src="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}"
                        alt="CoreTech Dispatch services animation" loading="lazy" onload="this.classList.add('loaded1')">
                </picture>

                <span class="about-video-play1" aria-label="Play video"></span>
            </div>
        </div>
    </section>
    <section class="stats-section1">
        <div class="stats-container1">
            <div class="stats-left1">
                <h2 class="section-title1">Why Choose CoreTech Dispatch</h2>
                <p>
                    We give special attention and priority to all the drivers we are working with. To ensure that you
                    get the
                    <span class="highlight1">highest paying loads</span>, we provide every customer with a dedicated
                    dispatcher and
                    <span class="highlight1">24/7 support</span>. You have the right to change your dispatcher and
                    choose another
                    specialist if you're not satisfied with them.
                </p>
                <p>
                    <span class="highlight1">CoreTech Dispatch</span> services include rate negotiation and all the
                    conversation
                    with the brokers and shippers. We make every effort to get the best freight by the highest price for
                    our
                    clients. Though, there is <span class="highlight1">no forced dispatch</span>: drivers may decline
                    any loads if
                    they want to.
                </p>
                <p>
                    Our head office is located in <span class="highlight1">Wilmington, DE</span>, although we dispatch
                    drivers from
                    all across the US.
                </p>
            </div>
            <div class="stats-right1">
                <div class="stat-box1">
                    <span class="stat-num1"><span id="years-counter1">0</span><span class="stat-plus1">+</span></span>
                    <span class="stat-label1">Years of Experience</span>
                </div>
                <div class="stat-box1">
                    <span class="stat-num1"><span id="lbs-counter1">0</span><span class="stat-plus1">m+</span></span>
                    <span class="stat-label1">Lbs Dispatched</span>
                </div>
                <div class="stat-box1">
                    <span class="stat-num1"><span class="stat-red1"></span><span id="revenue-counter1">0</span><span
                            class="stat-red1"></span></span>
                    <span class="stat-label1">Average Gross Revenue</span>
                </div>
                <div class="stat-box1">
                    <span class="stat-num1"><span id="loads-counter1">0</span><span class="stat-plus1">m+</span></span>
                    <span class="stat-label1">Loads Booked</span>
                </div>
            </div>
        </div>
    </section>
    <section class="transparency-container">
        <div class="transparency-img-col">
            <picture>
                <!-- Modern browsers (WebP) -->
                <source srcset="{{ asset('frontend/assets/images/rectangle_1763.webp') }}" type="image/webp">

                <!-- Fallback for older browsers -->
                <source srcset="{{ asset('frontend/assets/images/Compressed/rectangle_1763_11zon.webp') }}" type="image/jpeg">

                <!-- Default fallback -->
                <img class="transparency-img" src="{{ asset('frontend/assets/images/Compressed/rectangle_1763_11zon.webp') }}"
                    alt="CoreTech Dispatch Office" loading="lazy">
            </picture>

        </div>
        <div class="transparency-text-col">
            <h2 class="transparency-title">
                <span>Uncompromising Transparency</span>
            </h2>
            <p class="transparency-desc">
                At CoreTech Dispatch, we believe in complete openness with our partners. Our pricing structure is
                straightforward with absolutely no hidden fees or unexpected termination charges.
            </p>
            <div class="transparency-list-container">
                <div class="transparency-list-title">Our Commission Structure</div>
                <ul class="transparency-list">
                    <li><span class="dot"></span>Dry van (5-7%)</li>
                    <li><span class="dot"></span>Step deck (6-8%)</li>
                    <li><span class="dot"></span>Reefer (7-9%)</li>
                    <li><span class="dot"></span>Flatbed (6-8%)</li>
                    <li><span class="dot"></span>Hotshot (5-10% - 40' trailers & CDL only)</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="coretech-hero-section">
        <div class="coretech-hero-bg" id="heroBg"></div>
        <div class="particles" id="particlesContainer"></div>
        <div class="coretech-hero-content" id="heroContent">
            <h1 id="heroTitle">
                Don't drive empty<br>
                Drive with <span class="coretech-blue-accent" id="blueAccent">CoreTech</span>
            </h1>
            <p id="heroText">We'll help you earn more — <span class="coretech-less-stress">and stress less</span></p>
            <a href="{{ url('contact-us') }}" class="coretech-hero-btn" id="heroBtn">Get your free setup</a>
        </div>
    </section>

    @push('js')
        <script>
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

            function animateCounter1(elementId, targetValue, suffix = '', prefix = '', duration = 2000) {
                const element = document.getElementById(elementId);
                const startValue = 0;
                const increment = targetValue / (duration / 16); // 60fps
                let currentValue = startValue;

                const counterInterval = setInterval(() => {
                    currentValue += increment;
                    if (currentValue >= targetValue) {
                        clearInterval(counterInterval);
                        currentValue = targetValue;
                    }

                    if (suffix === 'k' || suffix === 'm') {
                        // For decimal values (like 1.5k)
                        if (targetValue % 1 !== 0) {
                            element.textContent = prefix + currentValue.toFixed(1) + suffix;
                        } else {
                            element.textContent = prefix + Math.floor(currentValue) + suffix;
                        }
                    } else {
                        element.textContent = prefix + Math.floor(currentValue) + suffix;
                    }
                }, 16);
            }

            // Intersection Observer to trigger animations when scrolled to
            const observer1 = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Start animations
                        animateCounter1('years-counter1', 3);
                        animateCounter1('lbs-counter1', 4);
                        animateCounter1('revenue-counter1', 7.5, 'k', '$');
                        animateCounter1('loads-counter1', 4);

                        // Stop observing after animation starts
                        observer1.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            // Observe the stats section
            const statsSection1 = document.querySelector('.stats-section1');
            observer1.observe(statsSection1);

            // Add smooth hover effects for stat boxes
            document.querySelectorAll('.stat-box1').forEach(box => {
                box.addEventListener('mouseenter', () => {
                    box.style.transform = 'translateY(-5px)';
                    box.style.boxShadow = '0 15px 35px rgba(56, 139, 255, 0.2)';
                });

                box.addEventListener('mouseleave', () => {
                    box.style.transform = '';
                    box.style.boxShadow = '0 10px 30px rgba(56, 139, 255, 0.15)';
                });
            });
            document.querySelectorAll('.faq-question1').forEach(btn => {
                btn.addEventListener('click', function() {
                    const item = btn.parentElement;
                    const open = item.classList.contains('open');
                    document.querySelectorAll('.faq-item1').forEach(el => el.classList.remove('open'));
                    if (!open) item.classList.add('open');
                });
            });
        </script>
    @endpush
@endsection
