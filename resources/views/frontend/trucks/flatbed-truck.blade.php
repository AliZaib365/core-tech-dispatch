@extends('frontend.layouts.master')
@section('title', 'Flatbed - CoreTech Dispatch')
@section('main-content')
    <div class="page-wrapper">
        <section class="header-section">
            <span class="header-tag">TRUCKER APPROVED</span>
            <h1 class="main-heading">Flatbed <span>Dispatch Service</span></h1>
            <p class="sub-heading">Optimize your operations with our specialized dispatch solutions for Flatbed
                trucks
            </p>

            <div class="content-box">
                <div class="truck-photo-container">
                    <div class="photo-decoration"></div>
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/flatbed.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/flatbed.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/flatbed.webp') }}" alt="26ft Box Truck" class="truck-photo" loading="lazy">
                    </picture>
                </div>

                <div class="text-content">
                    <p class="service-description1">
                        In the trucking industry, owner-operators thrive when supported by reliable, dedicated
                        dispatchers. This is especially true for flatbed trucking, where transporting cargo demands
                        extra care and precision. Here’s what we can offer to help you succeed!
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
                    Take Your Flatbed Trucking Business Further with <span class="red">CoreTech</span>
                    <span class="blue"> Dispatch</span>
                </h1>
                <div class="section-desc">
                    Flatbed trucking is the backbone of heavy logistics moving construction materials, machinery,
                    steel, lumber, and oversized freight that drives America’s industries. But the challenge of finding
                    the right loads, negotiating top rates, and managing complex paperwork can slow you down and cut
                    into profits.

                    At <span class="logo">CoreTech Dispatch</span>, we’re your partner for smarter flatbed dispatch
                    services. We help owner-operators and small fleets maximize earnings, run efficiently, and stay
                    focused on the road while we take care of the rest.
                </div>


                <div class="benefits-grid">
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-route"></i></div>
                        <div class="benefit-text">Efficient and reliable flatbed route planning</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-calendar-check"></i></div>
                        <div class="benefit-text">On-time scheduling for oversized and heavy-haul freight</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-chart-line"></i></div>
                        <div class="benefit-text">Boost profits with high-paying flatbed load matching</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon"><i class="fas fa-headset"></i></div>
                        <div class="benefit-text">24/7 flatbed dispatch support for smooth operations</div>
                    </div>
                </div>


            </div>
            <div class="section-right">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('frontend/assets/images/flatbed1.webp') }}" type="image/webp">
                        <img src="{{ asset('frontend/assets/images/flatbed1.webp') }}" alt="26ft Box Truck on the road" loading="lazy">
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
                        We don’t settle for just any flatbed load we find the right ones for your business. Our
                        dispatchers leverage multiple platforms, including exclusive networks not available to most
                        drivers, to secure the most profitable loads. We negotiate top rates to ensure every mile pays
                        off. So whether you’re searching for “flatbed dispatch services near me” or the best flatbed
                        trucking dispatch services in Texas, CoreTech has you covered.
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
                        <source srcset="{{ asset('frontend/assets/images/image-77.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/image-77.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/image-77.webp') }}" alt="Dispatcher in Truck Stop" loading="lazy">
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
                Optimize Your Flatbed Truck Operations with <span class="highlight">CoreTech Dispatch</span>
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

    <section class="blue-setup-section" id="mainSection">
        <div class="blue-setup-main" id="mainContainer">
            <div class="blue-setup-left" id="leftPanel">
                <div class="blue-setup-info">
                    <h1 id="mainHeading">Get Your Free Setup Today</h1>
                    <span class="subtitle" id="subtitle">Premium Dispatch Services</span>
                    <h3 id="subHeading">Expert Setup Assistance at No Cost</h3>


                    <ul class="benefits-list">
                        <li id="benefit1">
                            <i class="fas fa-check-circle"></i>
                            <span>24/7 access to premium loads in your area</span>
                        </li>
                        <li id="benefit2">
                            <i class="fas fa-check-circle"></i>
                            <span>Dedicated support team for all your needs</span>
                        </li>
                        <li id="benefit3">
                            <i class="fas fa-check-circle"></i>
                            <span>No hidden fees or long-term contracts</span>
                        </li>
                        <li id="benefit4">
                            <i class="fas fa-check-circle"></i>
                            <span>Customized load matching based on your preferences</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="blue-setup-right" id="rightPanel">
                <form class="blue-setup-form-wrap" id="setupForm" autocomplete="off">
                    <div id="successMessage" class="success-message" style="display: none;">
                        <i class="fas fa-check-circle"></i>
                        <span>Thank you! Your request has been submitted successfully.</span>
                    </div>

                    <h2 class="blue-setup-form-title" id="formTitle">
                        <span class="blue-star">★</span> Free Setup Request
                    </h2>

                    <div class="form-group" id="nameGroup">
                        <label for="name">Full Name</label>
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="John Smith" required>
                        <i class="fas fa-user input-icon"></i>
                        <div class="error-message" id="nameError">Please enter your full name</div>
                    </div>

                    <div class="form-group" id="emailGroup">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="your@email.com" required>
                        <i class="fas fa-envelope input-icon"></i>
                        <div class="error-message" id="emailError">Please enter a valid email address</div>
                    </div>

                    <div class="form-group" id="phoneGroup">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                            placeholder="+1 (___) ___-____" required>
                        <i class="fas fa-phone input-icon"></i>
                        <div class="error-message" id="phoneError">Please enter a valid phone number</div>
                    </div>

                    <div class="checkbox-group" id="emailCheckGroup">
                        <label class="checkbox-label">
                            <input type="checkbox" name="email-updates" checked>
                            <span>I agree to receive email updates, offers, and notifications from Dispatch
                                Service.</span>
                        </label>
                    </div>

                    <div class="checkbox-group" id="termsCheckGroup">
                        <label class="checkbox-label">
                            <input type="checkbox" name="sms-updates" required>
                            <span>I agree to receive text messages for conversational purposes at the phone number
                                provided. Message frequency varies. Reply STOP to opt-out. <a href="#"
                                    target="_blank">Privacy Policy</a> and <a href="#" target="_blank">Terms of
                                    Service</a> apply.</span>
                        </label>
                        <div class="error-message" id="termsError">You must agree to the terms to continue</div>
                    </div>

                    <button type="submit" class="btn pulse" id="submitBtn">
                        <i class="fas fa-paper-plane"></i> Get Started Now
                    </button>
                </form>
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
