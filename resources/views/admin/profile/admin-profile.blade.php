@extends('admin.layouts.master')

@push('css')
    <link rel="stylesheet" href="{{ asset('admin/assets/css/admin-profile.css') }}">
@endpush



@section('main-content')
    <section class="profile-hero mb-4">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
                <h2 class="mb-1">Your Profile</h2>
                <p class="text-muted mb-0">Manage your personal information and account security</p>
            </div>
            <div>
                <a href="index.html" class="btn btn-outline-secondary"><i class="bi bi-arrow-left me-1"></i> Back to
                    Dashboard</a>
            </div>
        </div>
    </section>
    <div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="card">
                    <div class="card-header bg-white d-flex align-items-center justify-content-between">
                        <h5 class="card-title mb-0">Edit Profile</h5>
                        <span class="text-muted small">Update your account details</span>
                    </div>
                    <div class="card-body">
                        <form id="profileForm" novalidate>
                            <div class="mb-3">
                                <label for="profileName" class="form-label">Full Name</label>
                                <div class="input-group input-with-icon">
                                    <span class="input-group-text"><i class="bi bi-person"></i></span>
                                    <input type="text" class="form-control" id="profileName"
                                        placeholder="Enter your full name" required>
                                </div>
                                <div class="invalid-feedback">Please enter your name.</div>
                            </div>
                            <div class="mb-3">
                                <label for="profileEmail" class="form-label">Email address</label>
                                <div class="input-group input-with-icon">
                                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                    <input type="email" class="form-control" id="profileEmail"
                                        placeholder="name@example.com" required>
                                </div>
                                <div class="invalid-feedback">Please enter a valid email.</div>
                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="profilePassword" class="form-label">New Password</label>
                                    <div class="input-group input-with-icon">
                                        <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                                        <input type="password" class="form-control" id="profilePassword"
                                            placeholder="Enter new password" minlength="8">
                                        <button type="button" class="btn password-toggle-btn" aria-label="Show password"
                                            data-target="#profilePassword"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="form-text">Minimum 8 characters.</div>
                                    <div class="password-strength mt-2" id="passwordStrength" aria-live="polite"></div>
                                </div>
                                <div class="col-md-6">
                                    <label for="profileConfirm" class="form-label">Confirm Password</label>
                                    <div class="input-group input-with-icon">
                                        <span class="input-group-text"><i class="bi bi-check2-circle"></i></span>
                                        <input type="password" class="form-control" id="profileConfirm"
                                            placeholder="Re-enter new password" minlength="8">
                                        <button type="button" class="btn password-toggle-btn" aria-label="Show password"
                                            data-target="#profileConfirm"><i class="bi bi-eye"></i></button>
                                    </div>
                                    <div class="invalid-feedback">Passwords must match.</div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mt-4">
                                <button type="button" id="resetProfile"
                                    class="btn btn-outline-secondary me-2">Reset</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <div class="card h-100">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center text-center">
                        <div class="avatar-uploader mb-3">
                            <img src="https://ui-avatars.com/api/?name=Admin+User&background=random"
                                class="rounded-circle profile-avatar-img" alt="Avatar" id="profileAvatarPreview">
                            <button class="btn btn-sm btn-primary change-avatar-btn" type="button"
                                aria-label="Change profile picture" title="Change profile picture"><i class="bi bi-camera"
                                    aria-hidden="true"></i></button>
                            <input type="file" id="profileAvatarInput" class="visually-hidden"
                                accept="image/png, image/jpeg" aria-label="Upload profile picture">
                            <label for="profileAvatarInput" class="visually-hidden">Upload profile picture</label>
                        </div>
                        <small class="text-muted" id="avatarHelp">Click the image to upload a new picture</small>
                        <h6 class="mb-1">Profile Picture</h6>
                        <p class="text-muted small mb-3">JPG or PNG, max 2MB</p>
                        <h6 class="mb-1">Profile Tips</h6>
                        <p class="text-muted small mb-0">Use a strong password and keep your email up to date.</p>
                    </div>
                </div>
            </div>
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
