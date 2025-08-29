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
                    <a href="{{ url('truck-detail/box-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/hot-spot') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/power-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/flatbed-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/reefer-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/stepdeck-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/dryvan-truck') }}" class="coretech-truck-btn">View Details
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
                    <a href="{{ url('truck-detail/conestoga-truck') }}" class="coretech-truck-btn">View Details
                        <svg width="16" height="16" fill="none" viewBox="0 0 16 16">
                            <path stroke="#fff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                d="M4 12l6-6m0 0V4m0 2h-2" />
                        </svg>
                    </a>
                </div>
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
