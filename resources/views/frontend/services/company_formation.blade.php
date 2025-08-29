@extends('frontend.layouts.master')
@section('title', 'Company Formation Services - CoreTech Dispatch')
@section('main-content')

    <div class="page-wrapper">
        <section class="header-section">
            <h1 class="main-heading">Company Formation Services</h1>
            <div class="content-box">
                <div class="truck-photo-container">
                    <div class="photo-decoration"></div>
                    <picture>
                        <!-- Modern browsers (WebP) -->
                        <source srcset="{{ asset('frontend/assets/images/image_32.webp') }}" type="image/webp">
                        <!-- Fallback for older browsers -->
                        <source srcset="{{ asset('frontend/assets/images/image_32.webp') }}" type="image/jpeg">
                        <!-- Default fallback -->
                        <img src="{{ asset('frontend/assets/images/image_32.webp') }}" alt="26ft Box Truck"
                            class="truck-photo" loading="lazy">
                    </picture>
                </div>

                <div class="text-content">
                    <p class="service-description1">
                        Starting a trucking company is a big step and while it can be overwhelming, it doesn’t have to
                        be. With trusted partners like CoreTech, the process becomes simple and stress-free.
                        We handle every detail of your company formation, guiding you through each step with expertise
                        and efficiency. From paperwork to compliance essentials, we’ve got it covered.
                        With CoreTech, you get fast, affordable company formation services that help you hit the road
                        and start growing your business in no time.
                    </p>

                    <ul class="benefits-list1">
                        <li><i class="fas fa-check"></i>Fast, affordable company formation for trucking businesses</li>
                        <li><i class="fas fa-headset"></i>Delaware, Wyoming, and nationwide expertise</li>
                        <li><i class="fas fa-percentage"></i>Personal support for all company formation documents and
                            registrations</li>
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
                    Start Your Trucking Business with Confidence
                </h1>
                <div class="section-desc">
                    Building a thriving trucking company begins with a solid foundation. <span class="logo">CoreTech
                    </span> delivers professional company formation services tailored for owner-operators, fleet owners,
                    and entrepreneurs in the transportation industry.
                    From establishing your LLC or corporation to handling vehicle and trailer registrations, we take
                    care of every detail so you can hit the road quickly and operate with confidence from day one.
                </div>

            </div>
            <div class="section-right">
                <div class="image-container">
                    <picture>
                        <source srcset="{{ asset('frontend/assets/images/image-57.webp') }}" type="image/webp">
                        <img src="{{ asset('frontend/assets/images/image-57.webp') }}" alt="26ft Box Truck on the road"
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
                    <h3>Fast and Reliable Company Formation</h3>
                    <p>
                        Starting a trucking business shouldn’t be slowed down by paperwork and complicated filings.
                        That’s why CoreTech provides <strong>quick, accurate, and professional company formation
                            services</strong>.
                        From LLC or corporation setup to business registration and operating authority, we handle
                        everything
                        so you can launch without delays.
                    </p>
                    <p>
                        Our experts manage every form and requirement to prevent costly mistakes or rejections.
                        With CoreTech, you can focus on building your business while we take care of the foundation
                        that keeps your company legal and road-ready.
                    </p>
                </div>

                <div class="optimize-card">
                    <h3>Transparent and Hassle-Free Business Setup</h3>
                    <p>
                        At CoreTech, <strong>clarity and precision</strong> are at the core of every company formation
                        service we deliver.
                        Every filing, registration, and license is tracked and organized for complete visibility —
                        no confusion, no last-minute roadblocks.
                    </p>
                    <p>
                        We eliminate hidden errors, unnecessary costs, and startup headaches.
                        Instead, we provide <strong>seamless company formation management</strong> that makes
                        launching your trucking business simple, stress-free, and fully compliant.
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
