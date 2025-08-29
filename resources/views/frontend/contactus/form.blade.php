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
                        <input type="text" id="name" name="name" class="form-control"
                            placeholder="John Smith"  >
                        <i class="fas fa-user input-icon"></i>
                        <div class="error-message" id="nameError">Please enter your full name</div>
                    </div>

                    <div class="form-group" id="emailGroup">
                        <label for="email">Email Address</label>
                        <input type="email" id="email" name="email" class="form-control"
                            placeholder="your@email.com"  >
                        <i class="fas fa-envelope input-icon"></i>
                        <div class="error-message" id="emailError">Please enter a valid email address</div>
                    </div>

                    <div class="form-group" id="phoneGroup">
                        <label for="phone">Phone Number</label>
                        <input type="tel" id="phone" name="phone" class="form-control"
                            placeholder="+1 (___) ___-____"  >
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
                            <input type="checkbox" name="sms-updates"  >
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


    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            // Apply input mask to phone number field
            $('#phone').mask('+1 (000) 000-0000');

            // Form submission handler
            $('#setupForm').on('submit', function(event) {
                event.preventDefault();

                // Clear previous error messages
                $('.error-message').hide();

                // Validate form fields
                let isValid = true;

                const name = $('#name').val().trim();
                const email = $('#email').val().trim();
                const phone = $('#phone').val().trim();
                const termsChecked = $('input[name="sms-updates"]').is(':checked');

                if (name === '') {
                    $('#nameError').show();
                    isValid = false;
                }

                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailPattern.test(email)) {
                    $('#emailError').show();
                    isValid = false;
                }

                const phonePattern = /^\+1 \(\d{3}\) \d{3}-\d{4}$/;
                if (!phonePattern.test(phone)) {
                    $('#phoneError').show();
                    isValid = false;
                }

                if (!termsChecked) {
                    $('#termsError').show();
                    isValid = false;
                }

                if (isValid) {
                    // Simulate form submission success
                    $('#successMessage').show();
                    $('#setupForm')[0].reset();
                }
            });
        });

        // submit form with ajax
        $('#setupForm').on('submit', function(event) {
            event.preventDefault();
            // Clear previous error messages
            $('.error-message').hide();
            let isValid = true;
            const name = $('#name').val().trim();
            const email = $('#email').val().trim();
            const phone = $('#phone').val().trim();
            const termsChecked = $('input[name="sms-updates"]').is(':checked');
            if (name === '') {
                $('#nameError').show();
                isValid = false;
            }
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailPattern.test(email)) {
                $('#emailError').show();
                isValid = false;
            }
            const phonePattern = /^\+1 \(\d{3}\) \d{3}-\d{4}$/;
            if (!phonePattern.test(phone)) {
                $('#phoneError').show();
                isValid = false;
            }
            if (!termsChecked) {
                $('#termsError').show();
                isValid = false;
            }
            if (isValid) {
                $.ajax({
                    url: "{{ route('contactus.create') }}",
                    method: 'POST',
                    data: {
                        name: name,
                        email: email,
                        phone: phone,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#successMessage').show();
                        $('#setupForm')[0].reset();
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred. Please try again later.');
                    }
                });
            }
        });
    </script>
