@extends('frontend.layouts.master')
@section('title', 'Hotshot truck- CoreTech Dispatch')
@section('main-content')
    <div class="page-wrapper">
        <section class="header-section">
            <span class="header-tag">TRUCKER APPROVED</span>
            <h1 class="main-heading">Hotshot <span>Dispatch Service</span></h1>
            <p class="sub-heading">Optimize your operations with our specialized dispatch solutions for Hotshot trucks
            </p>

            <div class="content-box">
                <div class="truck-photo-container">
                    <div class="photo-decoration"></div>
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/hotshot-truck-1024x479-4.webp') }}"
                            type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/hotshot-truck-1024x479-4.webp') }}"
                            type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/hotshot-truck-1024x479-4.webp') }}" alt="26ft Box Truck"
                            class="truck-photo" loading="lazy">
                    </picture>
                </div>

                <div class="text-content">
                    <p class="service-description1">
                        Since you’re browsing this page, you are a true hotshot at logistics looking for some reliable
                        and professional assistance at hotshot tucking. You’ve arrived at the right spot, pal! CoreTech
                        Dispatch is here to cover you in your hotshot driving endeavors. Read on to move on!
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
                    Accelerate Your Hotshot Trucking with <span class="red">CoreTech</span>
                    <span class="blue"> Dispatch</span>
                </h1>
                <div class="section-desc">
                    Hotshot trucking demands speed and reliability. At <span class="logo">CoreTech Dispatch</span>, we
                    handle the load search, rate negotiations, and paperwork so you can stay on the road. Trusted by
                    drivers and small fleets across the U.S., we help you minimize downtime, avoid forced dispatch, and
                    maximize profits.
                </div>

                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-route"></i></div>
                        <div class="benefit-text">Fast and reliable hotshot trucking route optimization</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-calendar-check"></i></div>
                        <div class="benefit-text">On-time hotshot delivery scheduling for urgent loads</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="benefit-text">Boost profits with efficient hotshot load matching</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-headset"></i></div>
                        <div class="benefit-text">24/7 hotshot dispatch support for fast freight solutions</div>
                    </div>

                </div>
            </div>
            <div class="section-right">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('frontend/assets/images/hotshot-trucking-1-1-3.webp') }}"
                            type="image/webp">
                        <img src="{{ asset('frontend/assets/images/hotshot-trucking-1-1-3.webp') }}"
                            alt="26ft Box Truck on the road" loading="lazy">
                    </picture>
                </div>
            </div>
        </section>
        <section class="dispatch-section1" id="dispatch-section1">
            <h1 class="dispatch-header1">
                Why Choose <span class="dispatch-highlight1">CoreTech Dispatch</span><br>
                for Premium Step Deck Services
            </h1>
            <div class="dispatch-grid1">
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-hand-paper"></i>No Forced Dispatch</h3>
                    <p class="dispatch-desc1">You always choose the loads and routes no pressure, ever. We respect
                        your preferences and business decisions.</p>
                </div>
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-chart-line"></i>Transparent Pricing</h3>
                    <p class="dispatch-desc1">Only 10% commission on gross no hidden charges, no upfront payments.
                        What you see is what you pay.</p>
                </div>
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-user-tie"></i>Dedicated Dispatchers</h3>
                    <p class="dispatch-desc1">Work with a personal expert who understands your specific equipment,
                        preferred lanes, and operational needs.</p>
                </div>
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-headset"></i>24/7 Support</h3>
                    <p class="dispatch-desc1">Our team is available around the clock to resolve issues and keep your
                        step deck trucks moving efficiently.</p>
                </div>
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-city"></i>Urban Delivery Expertise</h3>
                    <p class="dispatch-desc1"><span class="dispatch-brand1">CoreTech Dispatch</span> specializes in
                        routing and scheduling for urban areas, helping you avoid delays and maximize earnings.</p>
                </div>
                <div class="dispatch-card1">
                    <h3 class="dispatch-title1"><i class="fas fa-microchip"></i>Advanced Technology</h3>
                    <p class="dispatch-desc1">Our proprietary dispatch system ensures you get the best loads with
                        optimal rates and minimal downtime.</p>
                </div>
            </div>
        </section>
        <!-- First Section -->
        <section class="dispatch-services1 animate-section" id="section1">
            <h1 class="dispatch-heading1">
                Services Our Dispatchers<br>
                Provide <span class="accent-text1">to You</span>
            </h1>
            <div class="service-items1">
                <div class="service-card1">
                    <h3><span class="icon-check1">✓</span> <span class="accent-text1">Load sourcing & rate
                            negotiation</span></h3>
                    <p>
                        We don’t chase just any LTL load we find the right ones for your business. Our hotshot
                        dispatchers leverage multiple platforms, including exclusive networks not available to most
                        drivers, to secure the most profitable loads. We handle the negotiations to ensure you get top
                        rates, so every mile truly counts. Whether you’re looking for “hotshot dispatch services near
                        me” or the best hotshot trucking dispatch services in Texas, CoreTech has you covered.
                    </p>
                </div>
                <div class="service-card1">
                    <h3><span class="icon-check1">✓</span> <span class="accent-text1">Operational support</span></h3>
                    <p>
                        The <span class="brand-name1">CoreTech</span> system is built to account for every detail from
                        weight distribution for compliance to meeting all equipment requirements. We prioritize loads
                        that align with your truck’s specifications, ensuring you operate efficiently, safely, and with
                        confidence.
                    </p>
                </div>
                <div class="service-card1">
                    <h3><span class="icon-check1">✓</span> <span class="accent-text1">Route Planning &
                            Optimization</span></h3>
                    <p>
                        We carefully match loads to your specific truck type (CDL or non-CDL), available driving hours,
                        and preferred routes. Our team optimizes both short hauls and backhauls to keep your wheels
                        turning, minimize downtime, and maximize profitability.
                    </p>

                </div>
                <div class="service-card1">
                    <h3><span class="icon-check1">✓</span> <span class="accent-text1">Compliance guidance</span></h3>
                    <p>
                        While we don’t directly manage reporting or insurance, we connect you with reliable partners and
                        guide you through the compliance process removing operational hassles so you can stay focused
                        on growing your business.
                    </p>

                </div>
            </div>
        </section>

        <!-- Second Section -->
        <section class="services-section2 animate-section" id="section2">
            <h1 class="services-title2">
                Services Our Dispatchers<br>
                Provide <span class="highlight2">to You</span>
            </h1>
            <div class="main-row2">
                <div class="left-img2">
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/image-80.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/image-80.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/image-80.webp') }}" alt="Dispatcher in Truck Stop"
                            loading="lazy">
                    </picture>
                </div>
                <div class="right-cards2">
                    <div class="card2">
                        <i class="fas fa-truck card-icon2"></i>
                        <h3 class="card-title2"><span class="card-dot2"></span>Owner-Operators:</h3>
                        <p class="card-desc2">Stay independent but never alone we secure top loads and handle the
                            details for you.</p>
                    </div>
                    <div class="card2">
                        <i class="fas fa-truck-moving card-icon2"></i>
                        <h3 class="card-title2"><span class="card-dot2"></span>Small Fleets:</h3>
                        <p class="card-desc2">We keep your trucks consistently loaded with steady, profitable freight to
                            keep drivers satisfied.</p>
                    </div>
                    <div class="card2">
                        <i class="fas fa-city card-icon2"></i>
                        <h3 class="card-title2"><span class="card-dot2"></span>Urban Delivery Specialists:</h3>
                        <p class="card-desc2">Leverage our expertise in scheduling and routing to handle time-sensitive
                            city deliveries with ease.</p>
                    </div>
                </div>


            </div>
        </section>

        <!-- Third Section -->
        <section class="optimize-section animate-section" id="section3">
            <div class="optimize-title">
                Optimize Your Hotshot Truck Operations with <span class="highlight">CoreTech Dispatch</span>
            </div>
            <div class="optimize-grid">
                <div class="optimize-card">
                    <h3>Verify your eligibility</h3>
                    <p>Validate the compatibility of your equipment and MC authority number with the <span
                            class="logo">CoreTech Dispatch</span> services.</p>
                </div>
                <div class="optimize-card">
                    <h3>Sign the dispatch agreement</h3>
                    <p>Review and sign our simple dispatch agreement to get started with our premium services.</p>
                </div>
                <div class="optimize-card">
                    <h3>Start driving immediately</h3>
                    <p>Begin delivering high-paying loads from day one no upfront payments, pay only after load
                        completion.</p>
                </div>
                <div class="optimize-card">
                    <h3>Drive &amp; maximize earnings</h3>
                    <p>Focus on the road while we handle the logistics, dispatching, and paperwork for optimal
                        efficiency.</p>
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
