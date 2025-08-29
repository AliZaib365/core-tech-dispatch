@extends('frontend.layouts.master')
@section('title', 'How to Start - CoreTech Dispatch')
@section('main-content')
    <section class="ctd-container">
        <div class="ctd-breadcrumb">
            <a href="{{ url('/') }}" class="ctd-breadcrumb-link">Home</a>
            <span class="ctd-breadcrumb-separator">/</span>
            <span>How to Start</span>
        </div>

        <main class="ctd-main-content">
            <section class="ctd-hero-section">
                <div class="ctd-hero-text">
                    <span class="ctd-hero-icon">✧</span>
                    <h1 class="ctd-hero-title">How to Get Started</h1>
                    <p class="ctd-hero-subtitle">
                        Accelerate your success with <span class="ctd-hero-subtitle-highlight">CoreTech Dispatch</span>
                        -
                        the smart way to manage your fleet operations.
                    </p>
                </div>
            </section>
            <hr class="ctd-divider">

            <div class="ctd-steps-container">
                <div class="ctd-step-card">
                    <span class="ctd-step-card-icon">✓</span>
                    <span>4 Simple Steps</span>
                </div>
                <span class="ctd-arrow-icon">→</span>
                <div class="ctd-step-card">
                    <span class="ctd-step-card-icon">⏱</span>
                    <span>Under 60 Minutes</span>
                </div>
            </div>
        </main>
    </section>
    <section class="container33">
        <header class="page-header">
            <h1 class="page-title">Join Our Team in 4 Simple Steps</h1>
            <p class="page-subtitle">Follow our streamlined process to become a partner with CoreTech Dispatch and start
                growing your business today</p>
        </header>

        <div class="progress-container">
            <div class="progress-bar" id="form-progress"></div>
        </div>

        <section class="steps-main">
            <!-- Step 1 -->
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <i class="fas fa-clipboard-check"></i>
                </div>
                <h2 class="step-title">Check Your Eligibility</h2>
                <div class="step-divider"></div>
                <div class="step-content">To work with us, make sure you meet these requirements:</div>
                <ul class="step-list">
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>Active MC number for at least 3
                        months</li>
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>Properly insured equipment we work
                        with</li>
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>Willing to travel interstate
                        regularly</li>
                </ul>
                <div class="step-content">If you meet all criteria, proceed to <span class="step-bold">Step 2!</span>
                </div>
                <div class="step-divider"></div>
                <div class="step-note">
                    <strong>Note:</strong> If you don't currently meet these requirements, we'd be happy to connect once
                    you do. Feel free to reach out with any questions about our eligibility criteria.
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <h2 class="step-title">Submit Your Application</h2>
                <div class="step-divider"></div>
                <div class="step-content">Complete our quick application form to get started:</div>

                <form id="application-form">
                    <div class="form-group1">
                        <input type="text" class="form-input" id="fullname" placeholder="Your Full Name" required>
                        <div class="error-message" id="name-error">Please enter your full name</div>
                    </div>
                    <div class="form-group1">
                        <input type="email" class="form-input" id="email" placeholder="Your Email Address" required>
                        <div class="error-message" id="email-error">Please enter a valid email address</div>
                    </div>
                    <div class="form-group1">
                        <input type="tel" class="form-input" id="phone" placeholder="+1 (___) ___-____" required>
                        <div class="error-message" id="phone-error">Please enter a valid phone number</div>
                    </div>

                    <div class="checkbox-group1">
                        <input type="checkbox" id="updates" required>
                        <label for="updates" class="checkbox-label">I agree to receive email updates, offers, and
                            notifications from CoreTech Dispatch.</label>
                    </div>

                    <div class="checkbox-group1">
                        <input type="checkbox" id="textmsg" required>
                        <label for="textmsg" class="checkbox-label">By checking this box, you agree to receive text
                            messages from CoreTech Dispatch for conversational purposes at the phone number provided
                            above. You may reply STOP to opt-out at any time. Reply HELP for assistance. Message and
                            data rates may apply. Message frequency will vary. Learn more on our </label>
                    </div>

                    <div class="step-success-box" id="success-message">
                        <span class="step-success-check"><i class="fas fa-check-circle"></i></span>
                        Success! Your information has been received.
                    </div>



                    <button type="submit" class="step-btn" id="submit-btn">Submit Application <i
                            class="fas fa-arrow-right"></i></button>
                </form>

                <div class="step-phone-row">
                    <span class="step-phone-icon"><i class="fas fa-phone"></i></span>
                    <a class="step-phone-link" href="tel:03132410680">(313) 241-0680</a>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <i class="fas fa-folder-open"></i>
                </div>
                <h2 class="step-title">Prepare Your Documents</h2>
                <div class="step-divider"></div>
                <div class="step-content">After submitting your application, gather these essential documents:</div>
                <ul class="step-list">
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>W9 Form - Request for Taxpayer
                        Identification Number and Certification</li>
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>Insurance Certificate - With
                        liability and cargo policies listing us as certificate holder</li>
                    <li><span class="list-icon"><i class="fas fa-circle"></i></span>MC Certificate - Proof of your
                        active operating authority</li>
                </ul>
                <div class="step-content">Our support team will contact you to clarify specific requirements for each
                    document.</div>
                <div class="step-divider"></div>
                <div class="step-note">
                    <strong>Tip:</strong> Having these documents ready will significantly speed up the onboarding
                    process.
                </div>
            </div>

            <!-- Step 4 -->
            <div class="step-card">
                <div class="step-number">4</div>
                <div class="step-icon">
                    <i class="fas fa-handshake"></i>
                </div>
                <h2 class="step-title">Finalize Partnership</h2>
                <div class="step-divider"></div>
                <div class="step-content">The final step is signing our dispatch agreement to formalize our partnership.
                </div>
                <div class="step-content">
                    This comprehensive agreement includes limited Power of Attorney, authorizing us to represent your
                    company in business interactions on your behalf.
                </div>
                <div class="step-divider"></div>
                <div class="step-content">
                    Once signed, you'll gain access to our carrier portal and can start receiving loads immediately.
                </div>
                <div class="step-ready">
                    <i class="fas fa-check-circle"></i> Welcome to the CoreTech Dispatch family!
                </div>
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
            <a href="{{ url('info/contact-us') }}" class="coretech-hero-btn" id="heroBtn">Get your free setup</a>
        </div>
    </section>


    @push('js')
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
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const form = document.getElementById('application-form');
                const successMessage = document.getElementById('success-message');
                const submitBtn = document.getElementById('submit-btn');
                const progressBar = document.getElementById('form-progress');

                // Initialize progress bar
                updateProgress();

                // Add event listeners to form inputs for validation
                const inputs = form.querySelectorAll('input');
                inputs.forEach(input => {
                    input.addEventListener('blur', function() {
                        validateField(this);
                        updateProgress();
                    });

                    input.addEventListener('input', function() {
                        clearError(this);
                        updateProgress();
                    });
                });

                // Form submission
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    let isValid = true;

                    // Validate all fields
                    inputs.forEach(input => {
                        if (!validateField(input)) {
                            isValid = false;
                        }
                    });

                    if (isValid) {
                        // Simulate form submission
                        submitBtn.disabled = true;
                        submitBtn.innerHTML = 'Processing <i class="fas fa-spinner fa-spin"></i>';

                        setTimeout(() => {
                            successMessage.classList.add('show');
                            submitBtn.innerHTML = 'Application Submitted <i class="fas fa-check"></i>';

                            // You would typically send the form data to a server here
                            console.log('Form submitted with:', {
                                name: document.getElementById('fullname').value,
                                email: document.getElementById('email').value,
                                phone: document.getElementById('phone').value,
                                updates: document.getElementById('updates').checked,
                                textmsg: document.getElementById('textmsg').checked
                            });
                        }, 1500);
                    }
                });

                // Field validation functions
                function validateField(field) {
                    let isValid = true;
                    const errorElement = document.getElementById(`${field.id}-error`);

                    if (field.type === 'checkbox') {
                        if (!field.checked) {
                            isValid = false;
                            showError(field, errorElement, 'This agreement is required');
                        }
                    } else {
                        if (field.value.trim() === '') {
                            isValid = false;
                            showError(field, errorElement, 'This field is required');
                        } else if (field.type === 'email' && !isValidEmail(field.value)) {
                            isValid = false;
                            showError(field, errorElement, 'Please enter a valid email address');
                        } else if (field.type === 'tel' && !isValidPhone(field.value)) {
                            isValid = false;
                            showError(field, errorElement, 'Please enter a valid phone number');
                        }
                    }

                    return isValid;
                }

                function showError(field, errorElement, message) {
                    field.classList.add('error');
                    errorElement.textContent = message;
                    errorElement.classList.add('show');
                }

                function clearError(field) {
                    field.classList.remove('error');
                    const errorElement = document.getElementById(`${field.id}-error`);
                    errorElement.classList.remove('show');
                }

                function isValidEmail(email) {
                    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                    return re.test(email);
                }

                function isValidPhone(phone) {
                    // Simple phone validation - at least 10 digits
                    const digits = phone.replace(/\D/g, '');
                    return digits.length >= 10;
                }

                function updateProgress() {
                    const inputs = form.querySelectorAll('input:not([type="checkbox"])');
                    let filledCount = 0;

                    inputs.forEach(input => {
                        if (input.value.trim() !== '') {
                            filledCount++;
                        }
                    });

                    // Checkboxes are required but not counted in progress
                    const progress = (filledCount / inputs.length) * 100;
                    progressBar.style.width = `${progress}%`;
                }
            });
        </script>
    @endpush
@endsection
