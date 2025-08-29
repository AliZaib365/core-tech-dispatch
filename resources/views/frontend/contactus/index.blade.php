@extends('frontend.layouts.master')
@section('title', 'Contact Us - CoreTech Dispatch')
@section('main-content')
    <section class="contact-container" id="contact-section">
        <h1 class="contact-title">Contact Us</h1>
        <div class="contact-subtitle">
            If you have any questions or you'd like to find out more about our services, please get in touch. Our
            team is ready to assist you with any inquiries.
        </div>
        <div class="contact-content">
            <div class="contact-hours">
                <div class="contact-hours-title">
                    <i class="fas fa-clock"></i> Operational Hours (EST Time)
                </div>
                <table class="contact-hours-table">
                    <tbody>
                        <tr>
                            <td>Monday</td>
                            <td class="contact-hours-on">7:00 AM – 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td class="contact-hours-on">7:00 AM – 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td class="contact-hours-on">7:00 AM – 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td class="contact-hours-on">7:00 AM – 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td class="contact-hours-on">7:00 AM – 5:00 PM</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td class="contact-hours-off">Closed</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td class="contact-hours-off">Closed</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="contact-details">
                <ul class="contact-list">
                    <li>
                        <span class="contact-bullet"><i class="fas fa-check"></i></span>
                        <b>Ask your question:</b> Our specialists will dispel any doubts and provide all the
                        necessary information for the best solution to your needs.
                    </li>
                    <li>
                        <span class="contact-bullet"><i class="fas fa-check"></i></span>
                        Fill out the short form below, and we will prepare a personalized load plan tailored to your
                        specific requirements.
                    </li>
                    <li>
                        <span class="contact-bullet"><i class="fas fa-check"></i></span>
                        <b>Quick response:</b> Expect a call from our logistician soon. We will ensure clear
                        communication at all stages of cooperation.
                    </li>
                </ul>
                <div class="contact-social-title">
                    <i class="fas fa-share-alt"></i> Connect With Us
                </div>
                <div class="contact-social-buttons">
                    <a href="#" class="contact-social-btn facebook" aria-label="Facebook">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="#" class="contact-social-btn twitter" aria-label="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="contact-social-btn linkedin" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a href="#" class="contact-social-btn instagram" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="#" class="contact-social-btn youtube" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
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
                            driving and growing your businesssaving you valuable time.
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
                            shotsno matter your equipment, we've got you covered.
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
                            for youreach out for a custom quote!
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
                            schedulehelping maximize your revenue and efficiency.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        // Use Intersection Observer for better performance & smoother fade-in
        document.addEventListener('DOMContentLoaded', function() {
            const contactSection = document.getElementById('contact-section');
            if ('IntersectionObserver' in window) {
                let observer = new IntersectionObserver((entries, observer) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            contactSection.classList.add('visible');
                            observer.disconnect();
                        }
                    });
                }, {
                    threshold: 0.25
                });
                observer.observe(contactSection);
            } else {
                // fallback for browsers without IntersectionObserver
                function isInViewport(element) {
                    const rect = element.getBoundingClientRect();
                    return (
                        rect.top >= 0 &&
                        rect.left >= 0 &&
                        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                    );
                }
                if (isInViewport(contactSection)) {
                    contactSection.classList.add('visible');
                }
                window.addEventListener('scroll', function() {
                    if (isInViewport(contactSection)) {
                        contactSection.classList.add('visible');
                    }
                });
            }
        });
    </script>
@endsection
