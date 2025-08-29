@extends('frontend.layouts.master')
@section('main-content')
    <section class="container23">
        <div class="driver-breadcrumb">
            <a href="{{ url('/') }}">Home</a><span class="arrow">/</span>Driver Opportunities
        </div>

        <section class="driver-main-row">
            <div class="driver-col-left">
                <span class="driver-star">&#9733;</span>
                <h1 class="driver-title">Driver Opportunities</h1>
                <p class="driver-subtitle">Drive, deliver, and maximize your earnings with our comprehensive support
                    system</p>
                <a href="contact-us.html" class="cta-button1">Join Our Team Today</a>
            </div>

            <div class="driver-col-mid" id="contact">
                <div class="driver-contact-title">Get in Touch</div>
                <div class="driver-contact-row">
                    <span class="driver-contact-icon">&#128222;</span>
                    <a class="driver-contact-link" href="tel:+03132410680">(313) 241-0680</a>
                </div>
                <div class="driver-contact-row">
                    <span class="driver-contact-icon">&#9993;</span>
                    <a class="driver-contact-link" href="mailto:info@logitydispatch.com">info@logitydispatch.com</a>
                </div>
                <div class="driver-contact-row">
                    <span class="driver-contact-icon">&#128205;</span>
                    <span class="driver-contact-link">Mon-Fri: 8AM - 6PM EST</span>
                </div>
            </div>

            <div class="driver-col-right">
                <p>
                    If you're looking for <strong>truck driver jobs</strong> with the best paying loads across America,
                    we have exciting opportunities waiting for you.
                </p>

                <p>
                    We're actively hiring professional truck drivers. Whether you're an <strong>owner-operator</strong>
                    seeking premium contracts or a <strong>part-time hauler</strong> looking for supplemental loads, you
                    can significantly increase your revenue by partnering with <span class="highlight">CORETECH
                        Dispatch</span>.
                </p>

                <p>
                    Our team provides <strong>24/7 dispatch support</strong>, <strong>competitive rates</strong>, and
                    <strong>exclusive access</strong> to the most profitable routes in the industry. Focus on driving
                    while we handle the logistics.
                </p>
            </div>
        </section>
    </section>
    <section class="coretech-hero-section">
        <div class="coretech-hero-bg" id="heroBg"></div>
        <div class="particles" id="particlesContainer"></div>
        <div class="coretech-hero-content" id="heroContent">
            <h1 id="heroTitle">
                Don't drive empty<br>
                Drive with <span class="coretech-blue-accent" id="blueAccent">CoreTech</span>
            </h1>
            <p id="heroText">We'll help you earn more — <span class="coretech-less-stress">and stress less</span></p>
            <a href="contact-us.html" class="coretech-hero-btn" id="heroBtn">Get your free setup</a>
        </div>
    </section>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Background image load simulation
            const heroBg = document.getElementById('heroBg');
            setTimeout(() => {
                heroBg.classList.add('loaded');
            }, 100);

            // Create floating particles
            const particlesContainer = document.getElementById('particlesContainer');
            const particleCount = 20;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random properties
                const size = Math.random() * 8 + 2;
                const posX = Math.random() * 100;
                const delay = Math.random() * 15;
                const duration = Math.random() * 10 + 15;

                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;
                particle.style.left = `${posX}%`;
                particle.style.animationDelay = `${delay}s`;
                particle.style.animationDuration = `${duration}s`;

                particlesContainer.appendChild(particle);
            }

            // Intersection Observer for animations
            const observerOptions = {
                root: null,
                rootMargin: '0px',
                threshold: 0.2
            };

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        // Animate content container
                        document.getElementById('heroContent').classList.add('visible');

                        // Animate elements with staggered delays
                        setTimeout(() => {
                            document.getElementById('heroTitle').classList.add('visible');
                        }, 300);

                        setTimeout(() => {
                            document.getElementById('blueAccent').classList.add('visible');
                        }, 800);

                        setTimeout(() => {
                            document.getElementById('heroText').classList.add('visible');
                        }, 500);

                        setTimeout(() => {
                            document.getElementById('heroBtn').classList.add('visible');
                        }, 700);
                    }
                });
            }, observerOptions);

            // Observe the hero section
            observer.observe(document.querySelector('.coretech-hero-section'));
        });
    </script>
@endsection
