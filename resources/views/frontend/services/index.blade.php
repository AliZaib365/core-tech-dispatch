@extends('frontend.layouts.master')
@section('title', 'Our Services - CoreTech Dispatch')
@section('main-content')


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
                    Our clients experience an average <span class="stat-highlight">36% improvement</span> in operational
                    efficiency
                    within the first <span class="stat-highlight">90 days</span> of implementing our dispatch solutions.
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
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Rate performance analytics
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
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Automated submissions</div>
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

                <!-- Service 9 -->

                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source srcset="{{ asset('frontend/assets/images/image_39.webp') }}" type="image/webp">
                            <img src="{{ asset('frontend/assets/images/image_39.webp') }}" alt="Promotions services"
                                class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Freight Factoring</div>
                        <h3 class="service-title">Cash Flow Solutions</h3>
                        <p class="service-description">
                            Eliminate payment delays and keep your trucking business moving with our reliable freight
                            factoring services.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Same-day funding</div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> 24/7 account management
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> No hidden fees</div>
                        </div>
                        <a href="Factoring-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>

                <!-- Service 10 -->

                <div class="service-card">
                    <div class="service-image-container image-dark">
                        <picture>
                            <source srcset="{{ asset('frontend/assets/images/image_33.webp') }}" type="image/webp">
                            <img src="{{ asset('frontend/assets/images/image_33.webp') }}" alt="Promotions services"
                                class="service-image" loading="lazy">
                        </picture>
                        <div class="service-icon">
                            <i class="fas fa-bullhorn"></i>
                        </div>
                    </div>
                    <div class="service-content">
                        <div class="service-category">Compliance & Management</div>
                        <h3 class="service-title">Trucking Documents & Management</h3>
                        <p class="service-description">
                            Simplify paperwork and stay compliant with our complete trucking document and management
                            solutions.
                        </p>
                        <div class="service-features">
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Permit & license processing
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> IFTA & DOT compliance
                            </div>
                            <div class="service-feature"><i class="fas fa-check-circle"></i> Document tracking & renewal
                            </div>
                        </div>
                        <a href="document-management-services.html" class="service-link">
                            Learn more <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </div>
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
