@extends('frontend.layouts.master')
@section('main-content')
    <section class="shippers-main">
        <aside class="shippers-sidebar">
            <div class="shippers-title"><span class="star">★</span>Shippers</div>
            <ul>
                <li>Dispatch Solutions for Shippers and Brokers</li>
                <li>How we help freight brokers and shippers</li>
                <li>Our truck dispatcher service benefits</li>
                <li>Why rely on CoreTech Dispatch</li>
            </ul>
            <div class="ask-block">
                <div class="ask-title">Have any questions?</div>
                <a style="text-decoration: none;" href="{{ url('contact-us') }}"> <button class="ask-btn">
                        <i class="fas fa-question-circle"></i> Ask a question
                    </button></a>
            </div>
        </aside>
        <div class="shippers-content">
            <div class="section-block">
                <h2>Dispatch Solutions for Shippers and Brokers</h2>
                <p>
                    <span class="blue">CoreTech Dispatch</span> is known for its excellent freight dispatch service. Our
                    team has provided dispatching solutions for complex operations and trucking fleets since 2015. We
                    help find the best fits, communicate with their customers, and prioritize all necessary paperwork so
                    they can focus on the important work of transporting goods.
                </p>
                <p>
                    When you choose CoreTech Dispatch as your freight dispatch service, you enjoy clear pricing devoid
                    of hidden payments and termination fees. You can rest assured that the price you see is the price
                    you pay.
                </p>
                <p>
                    Our team believes in assisting both freight brokers and shippers to successfully transport loads. We
                    can help make the process smoother for both parties.
                </p>
            </div>
            <div class="section-block">
                <h3>How we can help freight brokers and shippers</h3>
                <p>
                    One of the biggest advantages we provide freight brokers and shippers is our extensive pool of
                    independent owner-operators eager to work with the best loads. Our dispatchers handle carrier
                    approval processes and vet every job with your needs in mind.
                </p>
                <ul>
                    <li><strong>Eliminate double brokering.</strong> Double brokering is illegal unless the shipper
                        consents to a reassignment. However, that does not stop some companies from engaging in the
                        practice without agreement. We work closely to bring reputable, independent dispatchers to
                        drivers, which means we can provide all your loads with reliable carriers.</li>
                    <li><strong>Offer transparency.</strong> From our pricing model to updates about the progress of
                        your load, we offer full transparency to freight brokers and carriers. Dispatchers keep track of
                        preferred carriers and maintain ongoing communication every step of the way.</li>
                    <li><strong>Provide 24/7 updates.</strong> Our team never leaves freight brokers hanging. We provide
                        timely updates and round-the-clock service for any problem. Potential delays or problems are
                        communicated immediately. We are available 24/7 to track, broker, solve your questions and
                        concerns, and ensure your shipments are all planned.</li>
                </ul>
            </div>
            <div class="section-block">
                <h3>Our truck dispatcher service benefits</h3>
                <p>
                    Working with CoreTech Dispatch ensures satisfaction for all parties involved in the shipping
                    process. Whether you are a freight broker or a carrier, our team offers end-to-end and on-time
                    dispatching for your loads. Here is what you get when you choose our robust dispatch service:
                </p>
                <div class="benefits-lists">
                    <div class="benefits-col">
                        <div class="benefits-col-title">
                            <i class="fas fa-user-tie"></i> Benefits for Brokers
                        </div>
                        <ul>
                            <li>Access to a large pool of reputable carriers</li>
                            <li>Industry flexible carriers to meet every budget</li>
                            <li>Transparent pricing model with no hidden payments</li>
                            <li>Reputable carriers with satisfactory performance</li>
                            <li>Comprehensive, timely and immediate communication for any transport issues or claims
                            </li>
                            <li>Follows relocation adjudications</li>
                        </ul>
                    </div>
                    <div class="benefits-col">
                        <div class="benefits-col-title">
                            <i class="fas fa-truck"></i> Benefits for Carriers
                        </div>
                        <ul>
                            <li>Dedicated dispatchers to help match loads to your profile</li>
                            <li>Direct carrier-broker arrangements set with directly brokered loads</li>
                            <li>Advanced carrierification for all rates</li>
                            <li>Dispatch managers are available to supervise and solve problems</li>
                            <li>Access to a network of freight brokers in good standing</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-block">
                <h3>Why rely on CoreTech Dispatch</h3>
                <p>
                    Shippers and brokers can eliminate the middleman when they work with <span class="blue">CoreTech
                        Dispatch</span>. Our fleet of independent carriers ensures the right fit for every shipment. We
                    provide 24/7 support and quick loads tracking and complete transparency in our operations. Our
                    dispatchers communicate directly with brokers and carriers to ensure the best claims are completed
                    within the haul time. With our commitment to service, you can trust our team. Contact us today to
                    receive your no-obligation quote for service or to discuss options that meet your needs.
                </p>
            </div>
        </div>
    </section>
    <section class="reviews-section">
        <div class="reviews-container">
            <div class="reviews-header">
                <h2>
                    Trusted by our <span class="blue-accent">customers</span>
                </h2>
            </div>

            <div class="reviews-carousel">
                <button class="carousel-arrow prev">❮</button>
                <button class="carousel-arrow next">❯</button>

                <div class="reviews-track">
                    <!-- Review summary card -->
                    <div class="review-item">
                        <div class="review-summary-card">
                            <div class="review-summary-logo">
                                <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-summary-details">
                                <div class="review-summary-title">Dispatch Service</div>
                                <div class="review-summary-rating">
                                    <span class="review-summary-score">4.8</span>
                                    <span class="review-summary-stars">★★★★★</span>
                                </div>
                                <div class="review-summary-reviews">Based on 23 reviews</div>
                                <div class="review-summary-powered">
                                    powered by <span>Google</span>
                                </div>
                                <a href="#" class="review-summary-btn">
                                    Review us on
                                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                        alt="Google">
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Review Cards -->
                    <div class="review-item">
                        <div class="review-card">
                            <div class="review-user">
                                <span class="review-avatar" style="background: #4f8cff;">E</span>
                                <div class="review-user-details">
                                    <div class="review-user-name">Eddie Cole</div>
                                    <div class="review-time">7 months ago</div>
                                </div>
                                <img class="review-g-icon"
                                    src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Colin Faber is Toni Kukoc & I'm Scottie Pipen. Together he is the very best teammate
                                when it comes to dispatching loads. He knows the journey that I've been on and helps me
                                navigate through it.
                            </div>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="review-card">
                            <div class="review-user">
                                <span class="review-avatar" style="background: #2940a8;">H</span>
                                <div class="review-user-details">
                                    <div class="review-user-name">Harjot Kaur</div>
                                    <div class="review-time">8 months ago</div>
                                </div>
                                <img class="review-g-icon"
                                    src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                I have been with this dispatch for more than 3 years, they have been very good, my
                                dispatcher Max Roche is amazing, he goes above and beyond to get me good loads and keeps
                                me moving.
                            </div>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="review-card">
                            <div class="review-user">
                                <span class="review-avatar" style="background: #6cbaff;">C</span>
                                <div class="review-user-details">
                                    <div class="review-user-name">C T</div>
                                    <div class="review-time">10 months ago</div>
                                </div>
                                <img class="review-g-icon"
                                    src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Onyachik LLC Dispatch is hands down 5 stars!! Have only been working with Colin for 2
                                days and never dreamed my owner operator business could be this profitable so quickly.
                            </div>
                        </div>
                    </div>

                    <div class="review-item">
                        <div class="review-card">
                            <div class="review-user">
                                <span class="review-avatar" style="background: #ff6b6b;">A</span>
                                <div class="review-user-details">
                                    <div class="review-user-name">Adam K.</div>
                                    <div class="review-time">3 months ago</div>
                                </div>
                                <img class="review-g-icon"
                                    src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                The team at CoreTech Dispatch has transformed my business. Their attention to detail
                                and commitment to finding the best loads is unmatched in the industry.
                            </div>
                        </div>
                    </div>
                    <div class="review-item">
                        <div class="review-card">
                            <div class="review-user">
                                <span class="review-avatar" style="background: #ff6b6b;">J</span>
                                <div class="review-user-details">
                                    <div class="review-user-name">John D.</div>
                                    <div class="review-time">3 months ago</div>
                                </div>
                                <img class="review-g-icon"
                                    src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/google.svg"
                                    alt="Google">
                            </div>
                            <div class="review-stars">★★★★★</div>
                            <div class="review-text">
                                Working with CoreTech Dispatch has been a game-changer for my operations. Their
                                exceptional service and ability to consistently secure premium loads sets them apart
                                from other dispatch services I've used.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-nav">
                <div class="carousel-dot active"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
                <div class="carousel-dot"></div>
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
        </script>
    @endpush
@endsection
