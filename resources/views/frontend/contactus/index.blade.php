@extends('frontend.layouts.master')
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
                        <input type="text" id="name" name="name" class="form-control" placeholder="John Smith"
                            required>
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
            <p id="heroText">We'll help you earn more  <span class="coretech-less-stress">and stress less</span></p>
            <a href="{{ url('contact-us') }}" class="coretech-hero-btn" id="heroBtn">Get your free setup</a>
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
