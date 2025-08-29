@extends('frontend.layouts.master')
@section('title', 'Dispatching Services - CoreTech Dispatch')
@section('main-content')

    <div class="page-wrapper">
        <section class="header-section">
            <h1 class="main-heading">Dispatching – Trucking Services</span></h1>
            <div class="content-box">
                <div class="truck-photo-container">
                    <div class="photo-decoration"></div>
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/image_22.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/image_22.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/image_22.webp') }}" alt="26ft Box Truck" class="truck-photo" loading="lazy">
                    </picture>
                </div>

                <div class="text-content">
                    <p class="service-description1">
                        “Reliable Truck Dispatch Solutions for Owner-Operators & Carriers – 24/7 Load Support, Clear
                        Pricing, and Full Compliance Assurance”
                    </p>

                    <ul class="benefits-list1">
                        <li><i class="fas fa-check"></i> No forced dispatch and clear pricing with no surprises</li>
                        <li><i class="fas fa-headset"></i> Your personal dispatcher available 24/7</li>
                        <li><i class="fas fa-percentage"></i> Only <span class="emphasis-blue">10% of gross</span> -
                            industry-low rates</li>
                        <li><i class="fas fa-bolt"></i> Priority access to high-paying loads</li>
                        <li><i class="fas fa-shield-alt"></i> <span class="emphasis-pink">100% satisfaction
                                guarantee</span></li>
                    </ul>

                    <div class="action-buttons">
                        <a href="{{ url('info/contact-us') }}" class="main-button">
                            <i class="fas fa-paper-plane"></i> Get Free Setup
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-container" id="dispatch-section">
            <div class="section-left">
                <h1 class="section-title">
                    What Makes <span class="logo">CoreTech Dispatch</span> the Partner Your Trucking Business Needs
                </h1>
                <div class="section-desc">
                    At <span class="logo">CoreTech</span>, we go beyond standard truck dispatching by delivering
                    real-time load optimization and
                    personalized support for owner-operators and carriers. Our licensed professionals act as an
                    extension of your team, using 10+ years of expertise to secure high-paying freight while ensuring
                    full FMCSA compliance.
                    With a flexible month-to-month service model, you’re free from long-term contracts, hidden fees, or
                    forced dispatch. Your dedicated dispatcher is always accessible—by phone, email, or SMS—providing
                    the responsiveness your business demands, whether you’re hauling on I-80 in a snowstorm or
                    negotiating detention pay at a warehouse.
                </div>

            </div>
            <div class="section-right">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('frontend/assets/images/service2.webp') }}" type="image/webp">
                        <img src="{{ asset('frontend/assets/images/service2.webp') }}" alt="26ft Box Truck on the road"
                            loading="lazy">
                    </picture>
                </div>
            </div>
        </section>
        <section style="background-color: #ffffff;" class="truck-section">
            <div class="main-wrapper">
                <div class="truck-content-flex">
                    <div class="truck-info-col">
                        <h1 style="color: black;" id="title">Choose Your<br><span>Truck Type</span></h1>
                        <p style="color: black;" id="description">Your trucks will stay loaded, your routes optimized,
                            and your paperwork handled
                            so you can
                            focus on what matters most: the road ahead.</p>
                        <a href="{{ url('info/contact-us') }}"><button class="setup-btn" id="cta-button">Get a Free
                                Setup</button></a>
                    </div>
                    <div class="truck-types-grid" id="truck-grid">
                        <a href="{{ url('truck-detail/stepdeck-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/Step-deck-Trailer_11zon.webp') }}')">
                            <span>Step Deck</span>
                        </a>
                        <a href="{{ url('truck-detail/dryvan-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/dry-van-sunset_11zon.webp') }}')">
                            <span>Dry Van</span>
                        </a>
                        <a href="{{ url('truck-detail/box-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/box-truck_11zon.webp') }}')">
                            <span> Box Truck</span>
                        </a>
                        <a href="{{ url('truck-detail/reefer-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/reefeer_11zon.webp') }}')">
                            <span> Reefer</span>
                        </a>
                        <a href="{{ url('truck-detail/power-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/power-only_11zon.webp') }}')">
                            <span> Power Only</span>
                        </a>
                        <a href="{{ url('truck-detail/hot-spot') }}" class="truck-type-card"
                            style="background-position: top; background-image: url('{{ asset('frontend/assets/images/Compressed/hotshot-truck-1024x479-4_11zon.webp') }}') ">
                            <span>Hot Shot</span>
                        </a>
                        <a href="{{ url('truck-detail/conestoga-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/conestoga_11zon.webp') }}')">
                            <span> Conestoga Trailer</span>
                        </a>
                        <a href="{{ url('truck-detail/flatbed-truck') }}" class="truck-type-card"
                            style="background-image: url('{{ asset('frontend/assets/images/Compressed/flatbed_11zon.webp') }}')">
                            <span> Flatbed</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <!-- Third Section -->
        <section class="optimize-section animate-section" id="section3 ">
            <div class="optimize-title">
               Truck dispatch services crafted for your profitability with <span class="highlight">CoreTech Dispatch</span>
            </div>
            <div class="optimize-grid">
                <div class="optimize-card">
                    <h3>Smart Load Procurement & Optimized Routing</h3>
                    <p>24/7 Load Sourcing: Our dispatch experts leverage premium load boards and exclusive broker
                        networks to secure the most profitable freight tailored to your equipment and preferred lanes.
                        AI-Powered Route Optimization: Reduce deadhead miles with intelligent routing that accounts for
                        traffic, weather, and delivery windows—maximizing efficiency, fuel savings, and revenue per
                        mile.</p>
                </div>
                <div class="optimize-card">
                    <h3>Transparent Financial Management</h3>
                    <p>CoreTech is dedicated to providing drivers with the most profitable loads available. We prioritize your interests with our rate negotiation guarantee, securing competitive rates through broker negotiations, and our automated detention and lumper fee tracking ensures you are compensated for every hour spent waiting at shipper facilities. Our experienced team makes sure that drivers from every state and region have access to high-quality, top-paying freight opportunities. Contact CoreTech today to get started with a free setup and take advantage of our expert dispatch services.</p>
                </div>

            </div>
        </section>
    </div>

   @include('frontend.contactus.form')
    <section class="coretech-hero-section">
        <div class="coretech-hero-bg" id="heroBg"></div>
        <div class="particles" id="particlesContainer"></div>
        <div class="coretech-hero-content" id="heroContent">
            <h1 id="heroTitle">
                Don't drive empty<br>
                Drive with <span class="coretech-blue-accent" id="blueAccent">CoreTech</span>
            </h1>
            <p id="heroText">We'll help you earn more <span class="coretech-less-stress">and stress less</span></p>
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
