<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CoreTech Admin Login</title>
    <meta name="description" content="Admin login for CoreTech job platform">
    <meta name="author" content="CoreTech Platform">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admin/css/login.css') }}">

    <style>
        /* Error Alert */
        .coretech-alert {
            display: none;
            background: #fef2f2;
            color: #991b1b;
            border: 1px solid #fca5a5;
            padding: 12px 16px;
            margin-bottom: 16px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            position: relative;
            animation: fadeIn 0.4s ease;
        }

        .coretech-alert i {
            margin-right: 8px;
        }

        .coretech-alert .close-btn {
            position: absolute;
            top: 8px;
            right: 12px;
            background: none;
            border: none;
            font-size: 16px;
            cursor: pointer;
            color: #991b1b;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .coretech-login-btn.loading {
            opacity: 0.7;
            cursor: not-allowed;
        }
    </style>
</head>

<body>
    <div class="bg-animation">
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
    </div>

    <div class="coretech-login-container">
        <div class="coretech-left-panel">
            <div class="coretech-login-logo">
                <span class="coretech-logo-icon"><i class="fas fa-user-shield"></i></span>
                <div>
                    <h2>CoreTech Admin</h2>
                    <p class="coretech-tagline">Secure. Reliable. Powerful.</p>
                </div>
            </div>
        </div>

        <div class="coretech-right-panel">
            <h1>Admin Panel Login</h1>
            <p class="coretech-subtitle">Sign in to manage your CoreTech platform</p>

            <!-- Error Alert -->
            <div id="coretech-alert" class="coretech-alert">
                <i class="fas fa-exclamation-circle"></i>
                <span id="alert-message">Invalid login attempt</span>
                <button class="close-btn"
                    onclick="document.getElementById('coretech-alert').style.display='none'">&times;</button>
            </div>

            <form class="coretech-login-form">
                <div class="coretech-form-group">
                    <label for="coretech-email"><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" id="coretech-email" name="email" placeholder="admin@coretech.com" required>
                </div>

                <div class="coretech-form-group">
                    <label for="coretech-password"><i class="fas fa-lock"></i> Password</label>
                    <input type="password" id="coretech-password" name="password" placeholder="••••••••" required>
                </div>

                <div class="coretech-actions">
                    <label class="coretech-remember">
                        <input type="checkbox" id="coretech-remember" name="remembered"> Remember me
                    </label>
                    <a href="forget-password.html" class="coretech-forgot">Forgot Password?</a>
                </div>

                <button class="coretech-login-btn" type="submit">
                    <i class="fas fa-sign-in-alt"></i> Login
                </button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        const alertBox = document.getElementById("coretech-alert");
        const alertMessage = document.getElementById("alert-message");

        function showError(message) {
            alertMessage.textContent = message;
            alertBox.style.display = "block";
        }

        document.querySelector('.coretech-login-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = document.getElementById('coretech-email').value.trim();
            const password = document.getElementById('coretech-password').value.trim();
            const remember = document.getElementById('coretech-remember').checked;
            const loginBtn = document.querySelector('.coretech-login-btn');

            // --- Form Validation ---
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showError("Please enter a valid email address.");
                return;
            }
            if (password.length < 6) {
                showError("Password must be at least 6 characters long.");
                return;
            }

            // Show loading state
            loginBtn.classList.add('loading');
            loginBtn.disabled = true;

            // AJAX request
            $.ajax({
                url: "{{ route('login.perform') }}",
                method: "POST",
                data: {
                    email: email,
                    password: password,
                    remember: remember,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    localStorage.setItem("loginSuccess", "Welcome back, Admin!");

                    window.location.href = "{{ route('admin.dashboard') }}";

                },
                error: function(xhr) {
                    showError("Invalid email or password. Please try again.");
                },
                complete: function() {
                    loginBtn.classList.remove('loading');
                    loginBtn.disabled = false;
                }
            });
        });
    </script>
</body>

</html>
