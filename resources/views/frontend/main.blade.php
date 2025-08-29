@extends('frontend.layouts.master')
@section('title', 'Home - CoreTech Dispatch')
@section('main-content')
    <section class="hero-section">
        <div class="video-loading" id="videoLoading">
            <div class="loader"></div>
        </div>

        <video autoplay muted loop playsinline class="video-background" id="heroVideo" preload="auto">
            <source src="{{ asset('frontend/assets/images/media/video_bg_rl_1920x1080.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>

        <div class="hero-overlay"></div>

        <div class="hero-content">
            <h1 class="hero-title">Automate Your <span>Truck Business</span></h1>
            <p class="hero-subtitle">
                Professional dispatch services that maximize your profits while minimizing your stress.
                We handle the logistics so you can focus on driving your business forward.
            </p>

            <div class="cta-container2">
                <a href="{{ url('info/contact-us') }}" class="cta-button2">
                    Get Started
                </a>
                <a href="faq.html" class="cta-button2 secondary-button">
                    How It Works
                </a>
            </div>

            <div class="trust-container">
                <div class="rating-container">
                    <div class="stars">★★★★★</div>
                    <div class="rating-text">Rated 4.6+ by 1000+ trucking professionals</div>
                </div>
            </div>
        </div>

        <div class="scroll-indicator" id="scrollIndicator">
            <span class="scroll-text">Explore Partners</span>
            <div class="scroll-arrow"></div>
        </div>
    </section>
    <section class="broker-section" id="brokerSection">
        <div class="broker-title">Partnerships with Major Brokers</div>
        <div class="broker-slider">
            <div class="broker-track">
                <div class="broker-item">
                    <img src="{{ asset('frontend/assets/images/CHR_Logo_Horz_2C_RGB-1-2.svg') }}" alt="C.H. Robinson"
                        class="broker-logo">
                </div>
                <div class="broker-item">
                    <img src="{{ asset('frontend/assets/images/Frame-1984077419-1.svg') }}" alt="Coyote Logistics"
                        class="broker-logo logo-coyote">
                </div>
                <div class="broker-item">
                    <img src="{{ asset('frontend/assets/images/Frame-1984077419.svg') }}" alt="TQL"
                        class="broker-logo logo-tql">
                </div>
                <div class="broker-item">
                    <img src="{{ asset('frontend/assets/images/image-9.svg') }}" alt="RXO"
                        class="broker-logo logo-rxo">
                </div>
                <div class="broker-item">
                    <img src="{{ asset('frontend/assets/images/pngegg-1-1.svg') }}" alt="RXO"
                        class="broker-logo logo-rxo">
                </div>
            </div>
        </div>
    </section>
    <section class="services-section" id="services-section">
        <div class="floating-element"></div>
        <div class="floating-element"></div>
        <div class="floating-element"></div>

        <div class="services-container">
            <div class="services-header">
                <h2 class="services-title">Premium Dispatch Solutions</h2>
                <p class="services-description">
                    Streamline your logistics operations with our comprehensive suite of services designed
                    to optimize efficiency, ensure compliance, and maximize profitability for your trucking business.
                </p>
            </div>

            <div class="services-stats">
                <p class="stat-text">
                    Our clients experience an average <span class="stat-highlight">36% improvement</span> in
                    operational
                    efficiency
                    within the first <span class="stat-highlight">90 days</span> of implementing our dispatch
                    solutions.
                </p>
            </div>

            <div class="services-grid">
                <!-- Service 1 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source srcset="{{ asset('frontend/assets/images/Compressed/image_22_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/image_22_11zon.webp') }}"
                                alt="Truck dispatching" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-truck-moving"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Logistics</div>
                        <h3 class="service-title">Professional Truck Dispatching</h3>
                        <p class="service-description">
                            Comprehensive dispatch services that optimize routes, manage loads, and ensure timely
                            deliveries.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Real-time tracking</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Route optimization</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Load management</div>
                        </div>
                        <a href="Dispatching-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1551288049-bebda4e38f71_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1551288049-bebda4e38f71_11zon.webp') }}"
                                alt="Compliance services" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-clipboard-check"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Compliance</div>
                        <h3 class="service-title">DOT Compliance Management</h3>
                        <p class="service-description">
                            Stay compliant with all regulations through our expert documentation and reporting services.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Documentation handling
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Regulatory updates</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Audit preparation</div>
                        </div>
                        <a href="Dot-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 3 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1600880292203-757bb62b4baf_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1600880292203-757bb62b4baf_11zon.webp') }}"
                                alt="Fleet management" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-tachometer-alt"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Operations</div>
                        <h3 class="service-title">Rate Negotiation</h3>
                        <p class="service-description">
                            Comprehensive trucking operations management with live tracking and actionable analytics.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Real-time market rate
                                tracking</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Rate performance
                                analytics
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Automated contract & load
                                scheduling</div>

                        </div>
                        <a href="Neogtiation-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 4 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1450101499163-c8848c66ca85_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1450101499163-c8848c66ca85_11zon.webp') }}"
                                alt="FTA reporting" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Reporting</div>
                        <h3 class="service-title">Automated FTA Reporting</h3>
                        <p class="service-description">
                            Accurate and timely Federal Transit Administration reporting to keep your business
                            compliant.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Automated submissions
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Compliance tracking</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Error reduction</div>
                        </div>
                        <a href="IFTA-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 5 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source srcset="{{ asset('frontend/assets/images/Compressed/image-62_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/image-62_11zon.webp') }}"
                                alt="Document management" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Documentation</div>
                        <h3 class="service-title">Digital Document Management</h3>
                        <p class="service-description">
                            Secure, cloud-based document handling for all your bills of lading, invoices, and records.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Cloud storage</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Secure access</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Easy retrieval</div>
                        </div>
                        <a href="Document-dispatch-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 6 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1554224155-6726b3ff858f_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1554224155-6726b3ff858f_11zon.webp') }}"
                                alt="Trucking accounting" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-calculator"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Finance</div>
                        <h3 class="service-title">Trucking-Specific Accounting</h3>
                        <p class="service-description">
                            Specialized financial services tailored to the unique needs of transportation businesses.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Expense tracking</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Tax preparation</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Financial reporting</div>
                        </div>
                        <a href="Trucking-accounting-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 7 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1542744173-8e7e53415bb0_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1542744173-8e7e53415bb0_11zon.webp') }}"
                                alt="Paperwork services" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Administration</div>
                        <h3 class="service-title">Paperwork Processing</h3>
                        <p class="service-description">
                            Hassle-free handling of all permits, licenses, and regulatory paperwork.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Permit acquisition</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> License renewal</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Regulatory filings</div>
                        </div>
                        <a href="Trucking-document-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 8 -->
                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source
                                srcset="{{ asset('frontend/assets/images/Compressed/photo-1460925895917-afdab827c52f_11zon.webp') }}"
                                type="image/webp">
                            <img src="{{ asset('frontend/assets/images/Compressed/photo-1460925895917-afdab827c52f_11zon.webp') }}"
                                alt="Promotions services" class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Marketing</div>
                        <h3 class="service-title">Company Formation Services</h3>
                        <p class="service-description">
                            Boost your online presence and attract more clients with our targeted marketing solutions.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Digital advertising</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Social media management
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Brand development</div>
                        </div>
                        <a href="company-formation-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
            </div>

            <a href="services.html" class="all-services-link">
                Explore All Services <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </section>
    <section class="truck-section">
        <div class="main-wrapper">
            <div class="truck-content-flex">
                <div class="truck-info-col">
                    <h1 id="title">Choose Your<br><span>Truck Type</span></h1>
                    <p id="description">Your trucks will stay loaded, your routes optimized, and your paperwork handled
                        — so you can
                        focus on what matters most: the road ahead.</p>
                    <a href="{{ url('info/contact-us') }}"><button class="setup-btn" id="cta-button">Get a Free
                            Setup</button></a>
                </div>
                <div class="truck-types-grid" id="truck-grid">
                    <a href="stepdeck-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/Step-deck-Trailer_11zon.webp') }}')">
                        <span>Step Deck</span>
                    </a>
                    <a href="dryvan-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/dry-van-sunset_11zon.webp') }}')">
                        <span>Dry Van</span>
                    </a>
                    <a href="box-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/box-truck_11zon.webp') }}')">
                        <span> Box Truck</span>
                    </a>
                    <a href="reefer-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/reefeer_11zon.webp') }}')">
                        <span> Reefer</span>
                    </a>
                    <a href="power-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/power-only_11zon.webp') }}')">
                        <span> Power Only</span>
                    </a>
                    <a href="Hotshot-truck.html" class="truck-type-card"
                        style="background-position: top; background-image: url('{{ asset('frontend/assets/images/Compressed/hotshot-truck-1024x479-4_11zon.webp') }}') ">
                        <span>Hot Shot</span>
                    </a>
                    <a href="conestoga-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/conestoga_11zon.webp') }}')">
                        <span> Conestoga Trailer</span>
                    </a>
                    <a href="flatbed-truck.html" class="truck-type-card"
                        style="background-image: url('{{ asset('frontend/assets/images/Compressed/flatbed_11zon.webp') }}')">
                        <span> Flatbed</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="about-section">
        <!-- Background decorative elements -->
        <div class="about-bg-circle about-bg-circle-1"></div>
        <div class="about-bg-circle about-bg-circle-2"></div>

        <div class="about-container">
            <div class="about-row">
                <!-- Left Column -->
                <div class="about-left" id="about-left">
                    <h1 class="about-title">
                        About <span>us</span>
                    </h1>
                    <div class="about-subtitle" id="about-subtitle">Our Impact in Numbers</div>
                    <div class="about-desc" id="about-desc-1">
                        <span class="about-highlight">CoreTech <span class="about-highlight-blue">Dispatch</span></span>
                        is committed to empowering truck drivers, owner-operators, and small fleets by providing
                        reliable dispatch solutions. Our team integrates seamlessly with your operations, allowing you
                        to keep your focus on driving and growing your business.
                    </div>
                    <div class="about-desc" id="about-desc-2" style="margin-bottom: 32px;">
                        What makes us different is our tailored approach. We understand that no two clients are the
                        same, so we customize our services to match your specific needs, fleet size, and objectives.
                        Whether you are launching a new venture or expanding your fleet,
                        <span class="about-highlight">CoreTech <span class="about-highlight-blue">Dispatch</span></span>
                        is your trusted partner for sustainable growth.
                    </div>
                    <a href="about-us.html" class="about-btn" id="about-btn">
                        Learn more about us
                        <span class="about-btn-arrow">&#8594;</span>
                    </a>
                </div>
                <!-- Right Column (Video/Image) -->
                <div class="about-right" id="about-right">
                    <div class="about-video-thumb">
                        <picture>
                            <!-- Modern browsers (WebP) -->
                            <source srcset="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}"
                                type="image/webp">

                            <!-- Fallback for browsers without WebP -->
                            <source srcset="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}"
                                type="image/jpeg">

                            <!-- Default fallback -->
                            <img src="{{ asset('frontend/assets/images/Compressed/poster-2_11zon.webp') }}"
                                alt="Dispatch Team at Work" class="service-image" loading="lazy">
                        </picture>

                        <a href="#" class="about-play-btn" tabindex="0">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none">
                                <path d="M10 6L22 14L10 22V6Z" fill="#ffffff" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Stats Row -->
            <div class="about-stats-row" id="about-stats">
                <div class="about-stat-box" id="stat-1">
                    <div class="about-stat-label">YEARS<br>OF EXPERIENCE</div>
                    <div class="about-stat-value"><span class="count" data-target="3">0</span><span
                            class="about-stat-red">+</span></div>
                </div>
                <div class="about-stat-box" id="stat-2">
                    <div class="about-stat-label">LBS<br>DISPATCHED</div>
                    <div class="about-stat-value"><span class="count" data-target="4" data-suffix="m+">0</span>
                    </div>
                </div>
                <div class="about-stat-box" id="stat-3">
                    <div class="about-stat-label">AVERAGE<br>GROSS REVENUE</div>
                    <div class="about-stat-value about-stat-value-red"><span class="count" data-target="7.5"
                            data-prefix="$" data-suffix="k">0</span></div>
                </div>
                <div class="about-stat-box" id="stat-4">
                    <div class="about-stat-label">LOADS<br>BOOKED</div>
                    <div class="about-stat-value"><span class="count" data-target="4" data-suffix="m+">0</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="partnership-section">
        <!-- Decorative shapes -->
        <div class="floating-shape shape-1"></div>
        <div class="floating-shape shape-2"></div>
        <div class="floating-shape shape-3"></div>

        <div class="partnership-overlay"></div>
        <div class="partnership-content">
            <h2 class="partnership-title" id="partnership-title">Transparent Partnership</h2>
            <p class="partnership-desc" id="partnership-desc">
                We provide you with all information on loads, rates, and work conditions
            </p>
            <a href="{{ url('info/contact-us') }}" class="partnership-btn" id="partnership-btn">Get your free setup</a>
        </div>
    </section>
    <section class="dispatchers-section blue-theme">
        <!-- Decorative background elements -->
        <div class="bg-element bg-1"></div>
        <div class="bg-element bg-2"></div>

        <div class="dispatchers-container">
            <div class="dispatchers-header" id="dispatchers-header">
                <h2>
                    CoreTech Dispatchers Who<br>
                    Work <span class="blue-accent">as Hard as You Do</span>
                </h2>
            </div>
            <div class="dispatchers-content-row">
                <div class="dispatchers-features" id="dispatchers-features">
                    <div class="features-grid">
                        <div class="feature-card">
                            <div class="feature-dot"></div>
                            <div class="feature-content">
                                <div class="feature-title">End-To-End Service</div>
                                <div class="feature-desc">From freight sourcing and rate negotiation to invoicing and
                                    reporting — we’ve got your back</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-dot"></div>
                            <div class="feature-content">
                                <div class="feature-title">Dedicated Dispatcher</div>
                                <div class="feature-desc">Your personal dispatcher is available 24/7 to handle
                                    problems,
                                    paperwork, or route changes.</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-dot"></div>
                            <div class="feature-content">
                                <div class="feature-title">You’re In Control</div>
                                <div class="feature-desc">No forced dispatch. You choose the clients, loads, and
                                    schedule. We handle the rest.</div>
                            </div>
                        </div>
                        <div class="feature-card">
                            <div class="feature-dot"></div>
                            <div class="feature-content">
                                <div class="feature-title">Nationwide Reach</div>
                                <div class="feature-desc">Whether you’re doing regional hauls or nationwide runs, we’re
                                    with you every mile.</div>
                            </div>
                        </div>
                        <div class="feature-card wide">
                            <div class="feature-dot"></div>
                            <div class="feature-content">
                                <div class="feature-title">Support For All Various Types</div>
                                <div class="feature-desc">Box Trucks to Dry Vans, from Hot Shots to Step Decks — we
                                    keep
                                    you moving.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dispatchers-info" id="dispatchers-info">
                    <p>
                        Turning a truck into a profit engine takes more than <b>just a driver</b> and a
                        <b>destination</b>.
                    </p>
                    <p>
                        You need smart logistics, strong negotiation, and 24/7 support.<br>
                        That’s where <b>we come in.</b>
                    </p>
                    <p>
                        We line up <b>top-paying loads, optimize routes</b>, and handle the <b>calls, forms</b>, and
                        <b>reports</b> so you don’t have to.
                    </p>
                    <p>
                        Approve what you want to haul and stay in control of your time and revenue.
                    </p>
                    <p>
                        Need help with <b>accounting</b> or route <b>planning</b>?
                    </p>
                    <p>
                        Avoid deadhead miles and lowball offers with the <b>smoothest dispatch</b> services for owner
                        operators in the U.S.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="advantages__container">
            <div class="advantages__features">
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/map-pin.svg"
                            alt="Route planning icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Efficient Route Planning</h3>
                        <p class="advantages__feature-desc">We optimize dispatching to cut empty miles, reduce fuel
                            costs, and boost your profit.</p>
                    </div>
                </div>
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/users.svg"
                            alt="Partnerships icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Dedicated Runs and Partnerships</h3>
                        <p class="advantages__feature-desc">Access high-volume freight from the most trusted brokers in
                            the industry.</p>
                    </div>
                </div>
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/cpu.svg" alt="Automation icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Automation & AI Tools</h3>
                        <p class="advantages__feature-desc">Faster dispatching. Less downtime. Smarter work.</p>
                    </div>
                </div>
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/bar-chart-2.svg"
                            alt="Analytics icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Freight Rate Forecasting</h3>
                        <p class="advantages__feature-desc">Stay ahead with real-time rate trends and predictive
                            analytics.</p>
                    </div>
                </div>
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/user-check.svg"
                            alt="Support icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Personalized Support</h3>
                        <p class="advantages__feature-desc">Dedicated account managers for personalized service.</p>
                    </div>
                </div>
                <div class="advantages__feature">
                    <div class="advantages__feature-icon">
                        <img src="https://cdn.jsdelivr.net/gh/feathericons/feather/icons/truck.svg" alt="Truck icon" />
                    </div>
                    <div class="advantages__feature-content">
                        <h3 class="advantages__feature-title">Full Truck Utilization</h3>
                        <p class="advantages__feature-desc">Maximize revenue with optimized load matching.</p>
                    </div>
                </div>
            </div>
            <div class="advantages__info">
                <h2 class="advantages__title">
                    The CoreTech <span class="advantages__title--accent">advantage</span>
                </h2>
                <p class="advantages__subtitle">Discover what sets us apart</p>
                <p class="advantages__text">
                    <span class="advantages__brand">CoreTech <span
                            class="advantages__brand--accent">Dispatch</span></span> goes beyond dispatching. From
                    negotiating rates to handling paperwork, our team is dedicated to helping owner-operators and small
                    fleets grow with confidence and ease.
                </p>
                <p class="advantages__text">
                    Full Loads, Both Ways: Don't waste miles driving empty! We arrange return freight to keep your truck
                    loaded, ensuring higher profits and lower costs on every trip.
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
    @include('frontend.contactus.form')
    <section class="coretech-hero-section">
        <div class="coretech-hero-bg" id="heroBg"></div>
        <div class="particles" id="particlesContainer"></div>
        <div class="coretech-hero-content" id="heroContent">
            <h1 id="heroTitle">
                Don't drive empty<br>
                Drive with <span class="coretech-blue-accent" id="blueAccent">CoreTech</span>
            </h1>
            <p id="heroText">We'll help you earn more — <span class="coretech-less-stress">and stress less</span></p>
            <a href="{{ url('info/contact-us') }}" class="coretech-hero-btn" id="heroBtn">Get your free setup</a>
        </div>
    </section>
    <section class="faq-section blue-theme">
        <div class="faq-container">
            <div class="faq-header">
                <h2>
                    Questions?<br>
                    <span>We have answers</span>
                </h2>
            </div>
            <div class="faq-list">
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-plus">+</span>
                        How does CoreTech Dispatch help streamline my trucking business?
                    </button>
                    <div class="faq-answer">
                        <div>
                            Our dispatch experts handle route planning, paperwork, and negotiations, so you can focus on
                            driving and growing your business—saving you valuable time.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-plus">+</span>
                        What types of freight can CoreTech Dispatch manage for me?
                    </button>
                    <div class="faq-answer">
                        <div>
                            We support a wide range of freight, including dry vans, reefers, flatbeds, box trucks, and
                            hot
                            shots—no matter your equipment, we've got you covered.
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-plus">+</span>
                        What are the fees for using CoreTech Dispatch services?
                    </button>
                    <div class="faq-answer">
                        <div>
                            Our pricing is transparent and competitive, with no hidden costs. You only pay for loads we
                            book
                            for you—reach out for a custom quote!
                        </div>
                    </div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">
                        <span class="faq-plus">+</span>
                        Can CoreTech Dispatch help me earn more as a truck driver?
                    </button>
                    <div class="faq-answer">
                        <div>
                            Absolutely! We work to secure top-paying loads, minimize empty miles, and optimize your
                            schedule—helping maximize your revenue and efficiency.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
