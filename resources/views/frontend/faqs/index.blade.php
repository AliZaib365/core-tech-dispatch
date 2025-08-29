@extends('frontend.layouts.master')
@section('title', 'Faqs - CoreTech Dispatch')
@section('main-content')
    <section class="coretech-faq-section">
        <!-- Floating elements for background -->
        <div class="floating-element float-1"></div>
        <div class="floating-element float-2"></div>
        <div class="floating-element float-3"></div>

        <nav class="coretech-breadcrumb">
            <a href="{{ url('/') }}">
                <i class="fas fa-home coretech-breadcrumb-icon"></i>
                Home
            </a>
            <span class="coretech-breadcrumb-sep">/</span>
            <span>FAQ</span>
        </nav>
        <div class="coretech-faq-header-row">
            <div class="coretech-faq-header-left">
                <span class="coretech-faq-star">*</span>
                <span class="coretech-faq-title">FAQ</span>
                <div class="coretech-faq-subtitle">Frequently Asked Questions</div>
            </div>
            <div class="coretech-faq-header-right">
                <p>
                    At <span class="coretech-red">CoreTech</span> <span class="coretech-blue">Dispatch</span>, we
                    welcome your questions. It's part of our commitment to excellence in customer care and our
                    dedication to honesty and transparency.
                </p>
                <p>
                    Feel free to <a href="{{ url('info/contact-us') }}" class="coretech-faq-link"><b>contact us</b> <i
                            class="fas fa-arrow-right"></i></a>,
                    or see if your question is
                    one we are frequently asked.
                </p>
            </div>
        </div>
        <hr class="coretech-faq-divider" />
    </section>
    <section class="coretech-faq-content-wrap">
        <div class="coretech-faq-sidebar">
            <h2 class="coretech-faq-toc-title">Table of Content</h2>
            <ul class="coretech-faq-toc-list">
                <li class="active" data-section="advantages"><span class="coretech-toc-dot"></span>Advantages</li>
                <li data-section="process"><span class="coretech-toc-dot"></span>Process</li>
                <li data-section="general"><span class="coretech-toc-dot"></span>General</li>
            </ul>
            <div class="coretech-faq-contact-box">
                <div class="coretech-faq-contact-row">
                    <div class="coretech-faq-contact-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <span class="coretech-faq-contact-label">Have any <span
                                class="coretech-blue">questions</span>?</span><br>
                        Feel free to contact us
                    </div>
                </div>
                <a href="{{ url('info/contact-us') }}" class="coretech-faq-contact-btn">Ask a question</a>
            </div>
        </div>
        <div class="coretech-faq-main">
            <div class="coretech-faq-group" id="advantages">
                <h3 class="coretech-faq-group-title">Advantages</h3>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        What will CoreTech Dispatch services do for my business?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>Our dispatch services will streamline your operations by handling load booking, route
                                optimization,
                                customer communication, and paperwork. We'll help you maximize profits by finding the
                                best rates,
                                reducing empty miles, and ensuring on-time deliveries. Our team acts as an extension of
                                your business,
                                providing professional dispatch support 24/7.</p>
                        </div>
                    </div>
                </div>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Isn't it always easier and cheaper to hire an in-house dispatcher?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>Not necessarily. Hiring an in-house dispatcher comes with significant overhead costs
                                including salary,
                                benefits, training, and equipment. With CoreTech Dispatch, you get an entire team of
                                experienced
                                professionals at a fraction of the cost. We also provide coverage during nights,
                                weekends, and holidays
                                without additional fees.</p>
                        </div>
                    </div>
                </div>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Do I have to enter into a long-term contract with CoreTech Dispatch?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>No, we don't believe in locking our clients into long-term contracts. We offer flexible
                                month-to-month
                                service agreements. You can start or stop our services at any time with a 30-day notice.
                                Our goal is to
                                earn your business every month by providing exceptional service.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coretech-faq-group" id="process">
                <h3 class="coretech-faq-group-title">Process</h3>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        How do I sign up with you, and what do I need?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>Signing up is simple. Just contact us through our website or by phone, and we'll guide
                                you through the
                                quick onboarding process. You'll need to provide your MC number, insurance information,
                                and any specific
                                requirements for your operations. We can typically get you set up and dispatching within
                                1-2 business
                                days.</p>
                        </div>
                    </div>
                </div>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Do I have to be working under my own MC authority to hire CoreTech Dispatch?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>No, we work with both owner-operators under their own authority and those leased to
                                carriers. If you're
                                leased to a carrier, we'll coordinate with them as needed while ensuring your specific
                                needs and
                                preferences are prioritized in the dispatch process.</p>
                        </div>
                    </div>
                </div>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Do I have to request insurance certificates every time?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>No, once we have your current insurance certificate on file, we'll handle all the
                                necessary insurance
                                verifications with brokers and shippers. We only need you to update us when your
                                insurance is renewed or
                                changed. Our system automatically tracks expiration dates and will remind you when
                                updates are needed.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="coretech-faq-group" id="general">
                <h3 class="coretech-faq-group-title">General</h3>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Will you work with me if I'm new to the business?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>Absolutely! We specialize in helping new owner-operators navigate the complexities of the
                                trucking
                                industry. We'll guide you through load selection, rate negotiation, and all the
                                paperwork requirements.
                                Many of our most successful clients started with us when they were brand new to the
                                business.</p>
                        </div>
                    </div>
                </div>
                <div class="coretech-faq-item">
                    <div class="coretech-faq-question">
                        <span class="coretech-faq-plus">+</span>
                        Can I choose which CoreTech Dispatch services I want?
                    </div>
                    <div class="coretech-faq-answer">
                        <div class="coretech-faq-answer-content">
                            <p>Yes, we offer customizable service packages. You can choose full dispatch services where
                                we handle
                                everything, or select specific services like load booking, paperwork processing, or
                                after-hours
                                coverage. During your consultation, we'll help design a service package that matches
                                your specific needs
                                and budget.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="back-to-top">
        <i class="fas fa-arrow-up"></i>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Accordion functionality
            const faqItems = document.querySelectorAll('.coretech-faq-item');

            faqItems.forEach(item => {
                const question = item.querySelector('.coretech-faq-question');

                question.addEventListener('click', () => {
                    const currentlyActive = document.querySelector('.coretech-faq-item.active');

                    // If this item is already active, close it
                    if (item.classList.contains('active')) {
                        item.classList.remove('active');
                        return;
                    }

                    // Close any other open items
                    if (currentlyActive) {
                        currentlyActive.classList.remove('active');
                    }

                    // Open this item
                    item.classList.add('active');
                });
            });

            // Table of content navigation
            const tocItems = document.querySelectorAll('.coretech-faq-toc-list li');
            const faqGroups = document.querySelectorAll('.coretech-faq-group');

            tocItems.forEach(item => {
                item.addEventListener('click', () => {
                    // Update active state in TOC
                    tocItems.forEach(i => i.classList.remove('active'));
                    item.classList.add('active');

                    // Scroll to corresponding section
                    const sectionId = item.getAttribute('data-section');
                    const section = document.getElementById(sectionId);

                    if (section) {
                        section.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                });
            });

            // Highlight TOC item based on scroll position
            function updateActiveTOC() {
                let currentSection = '';

                faqGroups.forEach(section => {
                    const sectionTop = section.offsetTop - 100;

                    if (window.scrollY >= sectionTop) {
                        currentSection = section.getAttribute('id');
                    }
                });

                tocItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('data-section') === currentSection) {
                        item.classList.add('active');
                    }
                });
            }

            // Fade-in animation for sections
            function checkVisibility() {
                faqGroups.forEach(section => {
                    const sectionTop = section.getBoundingClientRect().top;
                    const windowHeight = window.innerHeight;

                    if (sectionTop < windowHeight * 0.85) {
                        section.classList.add('visible');
                    }
                });

                // Show/hide back to top button
                const backToTop = document.querySelector('.back-to-top');
                if (window.scrollY > 500) {
                    backToTop.classList.add('visible');
                } else {
                    backToTop.classList.remove('visible');
                }
            }

            // Back to top functionality
            document.querySelector('.back-to-top').addEventListener('click', () => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });

            // Event listeners
            window.addEventListener('scroll', () => {
                updateActiveTOC();
                checkVisibility();
            });

            window.addEventListener('resize', checkVisibility);

            // Initial check
            checkVisibility();

            // Add visible class to first section initially
            document.querySelector('.coretech-faq-group').classList.add('visible');
        });
    </script>
@endsection
