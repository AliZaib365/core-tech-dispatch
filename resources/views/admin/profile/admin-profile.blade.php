@extends('admin.layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('admin/css/Admin-profile.css') }}">
@endpush



@section('main-content')
    <div class="main-content" id="mainContent">
        <div class="profile-header">
            <div style="position: relative;">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=4361ee&color=fff&size=128" alt="Profile"
                    class="profile-avatar">
                <div class="avatar-edit" title="Change profile picture">
                    <i class="fas fa-camera"></i>
                </div>
            </div>
            <div class="profile-info">
                <h2>{{ auth()->check() ? auth()->user()->name : 'Login first' }}</h2>
                <p>Manage your profile details and credentials securely</p>
            </div>

        </div>

        <div class="profile-settings-card">
            <div class="settings-title">
                <i class="fas fa-user-edit"></i> Profile Settings
            </div>
            <form class="settings-form" id="profileForm" autocomplete="off">
                <div class="form-group">
                    <label for="fullName"><i class="fas fa-user"></i> Full Name</label>
                    <input type="text" id="fullName" name="fullName"
                        value="{{ auth()->check() ? auth()->user()->name : 'Login first' }}" required>
                </div>

                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
                    <input type="email" id="email" name="email"
                        value="{{ auth()->check() ? auth()->user()->email : 'Login first' }}" required>
                </div>

                <div class="form-group">
                    <label for="currentPassword"><i class="fas fa-lock"></i> Current Password</label>
                    <input type="password" id="currentPassword" name="currentPassword" required
                        autocomplete="current-password">
                    <button type="button" class="password-toggle" id="toggleCurrentPassword">
                        <i class="far fa-eye"></i>
                    </button>
                </div>

                <div class="form-group">
                    <label for="newPassword"><i class="fas fa-key"></i> New Password</label>
                    <input type="password" id="newPassword" name="newPassword" autocomplete="new-password">
                    <button type="button" class="password-toggle" id="toggleNewPassword">
                        <i class="far fa-eye"></i>
                    </button>
                    <div class="password-strength">
                        <div class="password-strength-bar" id="passwordStrengthBar"></div>
                    </div>
                    <div class="password-hints" id="passwordHints">
                        Password must be at least 8 characters with uppercase, lowercase, number, and special character.
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirmPassword"><i class="fas fa-key"></i> Confirm New Password</label>
                    <input type="password" id="confirmPassword" name="confirmPassword" autocomplete="new-password">
                    <button type="button" class="password-toggle" id="toggleConfirmPassword">
                        <i class="far fa-eye"></i>
                    </button>
                </div>

                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Save Changes
                    </button>
                    <button type="reset" class="btn btn-secondary">
                        <i class="fas fa-undo"></i> Reset
                    </button>
                </div>
            </form>
            <div id="settingsAlert" class="custom-alert success"></div>
            <div id="settingsError" class="custom-alert error"></div>

        </div>
    </div>

    @push('scripts')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script>
            function showAlert(element, message, type = "success") {
                element.classList.remove("success", "error");
                element.classList.add("custom-alert", type);
                element.innerHTML =
                    `<i class="fas ${type === "success" ? "fa-check-circle" : "fa-exclamation-circle"}"></i> ${message}`;
                element.style.display = "block";

                // Auto-hide after 4s
                setTimeout(() => {
                    element.style.display = "none";
                }, 4000);
            }

            document.addEventListener("DOMContentLoaded", () => {
                const profileForm = document.getElementById("profileForm");
                const settingsAlert = document.getElementById("settingsAlert");
                const settingsError = document.getElementById("settingsError");

                // Password toggle
                function togglePassword(inputId, toggleId) {
                    const input = document.getElementById(inputId);
                    const toggle = document.getElementById(toggleId);
                    toggle.addEventListener("click", () => {
                        const type = input.type === "password" ? "text" : "password";
                        input.type = type;
                        toggle.querySelector("i").classList.toggle("fa-eye");
                        toggle.querySelector("i").classList.toggle("fa-eye-slash");
                    });
                }

                togglePassword("currentPassword", "toggleCurrentPassword");
                togglePassword("newPassword", "toggleNewPassword");
                togglePassword("confirmPassword", "toggleConfirmPassword");

                // Password strength checker
                const newPassword = document.getElementById("newPassword");
                const passwordStrengthBar = document.getElementById("passwordStrengthBar");
                const passwordHints = document.getElementById("passwordHints");

                newPassword.addEventListener("input", () => {
                    const val = newPassword.value;
                    let strength = 0;

                    if (val.length >= 8) strength++;
                    if (/[A-Z]/.test(val)) strength++;
                    if (/[a-z]/.test(val)) strength++;
                    if (/[0-9]/.test(val)) strength++;
                    if (/[^A-Za-z0-9]/.test(val)) strength++;

                    passwordStrengthBar.style.width = (strength * 20) + "%";

                    if (strength <= 2) {
                        passwordStrengthBar.style.background = "red";
                        passwordHints.textContent = "Weak password!";
                    } else if (strength === 3 || strength === 4) {
                        passwordStrengthBar.style.background = "orange";
                        passwordHints.textContent = "Medium strength password.";
                    } else if (strength === 5) {
                        passwordStrengthBar.style.background = "green";
                        passwordHints.textContent = "Strong password!";
                    }
                });

                // Confirm password check
                const confirmPassword = document.getElementById("confirmPassword");
                confirmPassword.addEventListener("input", () => {
                    if (confirmPassword.value !== newPassword.value) {
                        confirmPassword.setCustomValidity("Passwords do not match");
                    } else {
                        confirmPassword.setCustomValidity("");
                    }
                });

                // Form validation & submission
                profileForm.addEventListener("submit", (e) => {
                    e.preventDefault();
                    settingsAlert.textContent = "";
                    settingsError.textContent = "";

                    if (!profileForm.checkValidity()) {
                        settingsError.textContent = "⚠ Please fill out all required fields correctly.";
                        return;
                    }

                    if (newPassword.value !== "" && newPassword.value !== confirmPassword.value) {
                        settingsError.textContent = "⚠ New Password and Confirm Password do not match.";
                        return;
                    }

                    $.ajax({
                        type: "POST",
                        url: "{{ route('admin.profile.update') }}",
                        data: $("#profileForm").serialize(),
                        dataType: "json",
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            showAlert(settingsAlert, "Profile updated successfully!", "success");
                            profileForm.reset();
                            passwordStrengthBar.style.width = "0%";
                        },
                        error: function(xhr) {
                            const msg = xhr.responseJSON?.error || "An error occurred.";
                            showAlert(settingsError, `⚠ ${msg}`, "error");
                        }

                    });

                });
            });
        </script>
    @endpush
@endsection
