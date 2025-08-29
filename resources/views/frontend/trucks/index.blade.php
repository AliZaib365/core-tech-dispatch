@extends('frontend.layouts.master')
@section('title', 'Our Trucks - CoreTech Dispatch')
@section('main-content')


    <section class="coretech-trucks-section">
        <div class="coretech-trucks-header">
            <h2>
                <h1 class="contact-title">Our Trucks</h1>
            </h2>
            <hr class="coretech-trucks-divider" />
        </div>
        <div class="coretech-trucks-grid">
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/box-truck_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Box Truck</span>
                    <a href="box-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/hotshot-truck-1024x479-4_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Hotshot Truck</span>
                    <a href="Hotshot-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-position: right; background-image: url('{{ asset('frontend/assets/images/Compressed/power-only_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Power Only</span>
                    <a href="power-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/flatbed_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Flatbed Truck</span>
                    <a href="flatbed-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/reefeer_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Reefer Truck</span>
                    <a href="reefer-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/Step-deck-Trailer_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Step Deck</span>
                    <a href="stepdeck-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/dry-van-sunset_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Dry Van</span>
                    <a href="dryvan-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="coretech-truck-card"
                style="background-image: url('{{ asset('frontend/assets/images/Compressed/conestoga_11zon.webp') }}');">
                <div class="coretech-truck-info">
                    <span class="coretech-truck-name">Conestoga Trailer</span>
                    <a href="conestoga-truck.html" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
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
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Smith" required>
                        <i class="fas fa-user input-icon"></i>
                        <div class="error-message" id="nameError">Please enter your full name</div>
                    </div>

                    <div class="form-group" id="emailGroup">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="your@email.com"
                            required>
                        <i class="fas fa-envelope input-icon"></i>
                        <div class="error-message" id="emailError">Please enter a valid email address</div>
                    </div>

                    <div class="form-group" id="phoneGroup">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control" placeholder="+1 (___) ___-____"
                            required>
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
