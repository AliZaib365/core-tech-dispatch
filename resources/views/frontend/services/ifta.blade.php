@extends('frontend.layouts.master')
@section('title', 'IFTA Reporting - CoreTech Dispatch')
@section('main-content')

    <div class="page-wrapper">
        <section class="header-section">
            <h1 class="main-heading">IFTA Reporting
            </h1>
            <div class="content-box">
                <div class="truck-photo-container">
                    <div class="photo-decoration"></div>
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/image_38-1.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/image_38-1.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/image_38-1.webp') }}" alt="26ft Box Truck"
                            class="truck-photo" loading="lazy">
                    </picture>
                </div>

                <div class="text-content">
                    <p class="service-description1">
                        You focus on the road we handle the reporting.
                        IFTA reporting is a critical part of trucking, ensuring compliance and keeping your operations
                        legally sound. At CoreTech Dispatch, we take the burden off your shoulders by managing all IFTA
                        filings and regular reporting with precision and accuracy. While you keep your wheels moving, we
                        make sure your business stays compliant and worry-free.
                    </p>

                    <ul class="benefits-list1">
                        <li><i class="fas fa-check"></i> Hassle-free IFTA reporting for the US and Canada</li>
                        <li><i class="fas fa-headset"></i> No long-term contracts or hidden fees</li>
                        <li><i class="fas fa-percentage"></i>Personal IFTA specialist with full compliance support</li>
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
                    Simplify Your IFTA Reporting with <span class="logo">CoreTech Dispatch</span>
                </h1>
                <div class="section-desc">
                    IFTA reporting is vital for trucking businesses operating across state or provincial lines but it
                    doesn’t have to be a burden. <span class="logo">CoreTech’s </span>offers a fully managed,
                    expert-driven solution for hassle-free IFTA compliance.

                    With <span class="logo"> CoreTech</span>, you’ll never miss a deadline, overpay on fuel taxes, or
                    risk costly penalties. From
                    data collection to quarterly filings, we take care of everything so you can stay focused on
                    driving and growing your business..</div>

            </div>
            <div class="section-right">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('frontend/assets/images/image-54.webp') }}" type="image/webp">
                        <img src="{{ asset('frontend/assets/images/image-54.webp') }}" alt="26ft Box Truck on the road"
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
        <section class="optimize-section animate-section" id="section3">
            <div class="optimize-title">
                Secure Higher Rates with <span class="highlight">CoreTech Dispatch</span>
            </div>
            <div class="optimize-grid">
                <div class="optimize-card">
                    <h3>Fast and Reliable IFTA Reporting</h3>
                    <p>
                        In trucking, time is money and handling IFTA shouldn’t slow you down.
                        That’s why CoreTech provides <strong>fast, accurate, and professional IFTA compliance
                            support</strong>.
                        From mileage tracking and fuel tax calculations to quarterly filings and audits,
                        we make sure every detail is handled without delay.
                    </p>
                    <p>
                        Our experts double-check every report to prevent costly penalties, missed deadlines,
                        or overpayments. With CoreTech, you stay focused on the road and your loads while
                        we take care of the compliance that keeps your business running smoothly.
                    </p>
                </div>

                <div class="optimize-card">
                    <h3>Transparent and Hassle-Free IFTA Compliance</h3>
                    <p>
                        At CoreTech, <strong>transparency and accuracy</strong> drive everything we do.
                        Every trip, fuel purchase, and jurisdictional tax detail is tracked and organized for
                        complete visibility no confusion, no last-minute surprises.
                    </p>
                    <p>
                        We eliminate hidden errors, reporting stress, and time-consuming paperwork.
                        Instead, we deliver <strong>stress-free IFTA management</strong>
                        that keeps your trucking business compliant, efficient, and penalty-free.
                    </p>
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
