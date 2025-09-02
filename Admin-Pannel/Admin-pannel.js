        // Generate dummy message data
        function generateDummyMessages(count = 50) {
            const names = ['John Smith', 'Emma Johnson', 'Michael Brown', 'Sarah Williams', 'David Jones', 
                          'Jennifer Davis', 'Robert Miller', 'Lisa Wilson', 'William Taylor', 'Jessica Anderson',
                          'Christopher Thomas', 'Amanda Martin', 'Matthew White', 'Elizabeth Thompson', 'Daniel Harris'];
            
            const domains = ['example.com', 'test.com', 'demo.com', 'mail.com', 'company.com'];
            
            const statuses = ['new', 'replied', 'urgent'];
            
            const messages = [
                "Hello, I'm interested in your services and would like to know more about your pricing...",
                "Thank you for your quick response to my initial inquiry. I have some follow-up questions...",
                "URGENT: There's an issue with my account that needs immediate attention. Please contact me as soon as possible...",
                "I wanted to follow up on our conversation from last week. Have you had a chance to review my proposal?",
                "I'm writing to request more information about your product features and implementation process.",
                "Could you please clarify the terms of service mentioned in your documentation?",
                "I'm experiencing difficulties with the login process. The system doesn't recognize my password.",
                "We're considering upgrading our plan and would like to know about enterprise options.",
                "The dashboard seems to be loading slowly today. Is there ongoing maintenance?",
                "I'd like to schedule a demo session with one of your product specialists."
            ];
            
            const dummyMessages = {};
            
            for (let i = 1; i <= count; i++) {
                const name = names[Math.floor(Math.random() * names.length)];
                const email = name.toLowerCase().replace(' ', '.') + '@' + domains[Math.floor(Math.random() * domains.length)];
                const status = statuses[Math.floor(Math.random() * statuses.length)];
                const date = new Date();
                date.setDate(date.getDate() - Math.floor(Math.random() * 30));
                
                dummyMessages[i] = {
                    id: i,
                    name: name,
                    email: email,
                    date: date.toLocaleDateString('en-US', { month: 'short', day: 'numeric', year: 'numeric' }),
                    status: status,
                    message: messages[Math.floor(Math.random() * messages.length)] + " " + 
                            "Additional details about the inquiry that provide more context to the situation. " +
                            "This helps customer service representatives understand the full scope of the request."
                };
            }
            
            return dummyMessages;
        }
        
        // Initialize variables
        const allMessages = generateDummyMessages(50);
        let currentPage = 1;
        let itemsPerPage = 10;
        let filteredMessages = Object.values(allMessages);
        let sortField = 'date';
        let sortDirection = 'desc';
        
        // DOM elements
        const messagesBody = document.getElementById('messagesBody');
        const paginationElement = document.getElementById('pagination');
        const searchInput = document.getElementById('searchInput');
        const statusFilter = document.getElementById('statusFilter');
        const dateFilter = document.getElementById('dateFilter');
        const itemsPerPageSelect = document.getElementById('itemsPerPage');
        const totalMessagesElement = document.getElementById('total-messages');
        const unreadMessagesElement = document.getElementById('unread-messages');
        const repliedMessagesElement = document.getElementById('replied-messages');
        const urgentMessagesElement = document.getElementById('urgent-messages');
        
        // Update stats
        function updateStats() {
            const messages = Object.values(allMessages);
            totalMessagesElement.textContent = messages.length;
            unreadMessagesElement.textContent = messages.filter(m => m.status === 'new').length;
            repliedMessagesElement.textContent = messages.filter(m => m.status === 'replied').length;
            urgentMessagesElement.textContent = messages.filter(m => m.status === 'urgent').length;
        }
        
        // Filter messages based on search and filters
        function filterMessages() {
            const searchText = searchInput.value.toLowerCase();
            const statusValue = statusFilter.value;
            
            filteredMessages = Object.values(allMessages).filter(message => {
                const matchesSearch = message.name.toLowerCase().includes(searchText) || 
                                    message.email.toLowerCase().includes(searchText) || 
                                    message.message.toLowerCase().includes(searchText);
                
                const matchesStatus = statusValue === 'all' || message.status === statusValue;
                
                return matchesSearch && matchesStatus;
            });
            
            sortMessages();
            currentPage = 1;
            renderTable();
            setupPagination();
        }
        
        // Sort messages
        function sortMessages() {
            filteredMessages.sort((a, b) => {
                let valueA, valueB;
                
                if (sortField === 'date') {
                    valueA = new Date(a.date);
                    valueB = new Date(b.date);
                } else {
                    valueA = a[sortField].toLowerCase();
                    valueB = b[sortField].toLowerCase();
                }
                
                if (valueA < valueB) {
                    return sortDirection === 'asc' ? -1 : 1;
                }
                if (valueA > valueB) {
                    return sortDirection === 'asc' ? 1 : -1;
                }
                return 0;
            });
        }
        
        // Render table with current page messages
        function renderTable() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const paginatedMessages = filteredMessages.slice(startIndex, startIndex + itemsPerPage);
            
            messagesBody.innerHTML = '';
            
            if (paginatedMessages.length === 0) {
                messagesBody.innerHTML = `<tr><td colspan="6" style="text-align: center; padding: 20px;">No messages found</td></tr>`;
                return;
            }
            
            paginatedMessages.forEach(message => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${message.name}</td>
                    <td>${message.email}</td>
                    <td class="message-preview">${message.message}</td>
                    <td>${message.date}</td>
                    <td><span class="status ${message.status}">${message.status.charAt(0).toUpperCase() + message.status.slice(1)}</span></td>
                    <td><button class="action-btn" data-id="${message.id}">View</button></td>
                `;
                messagesBody.appendChild(row);
            });
            
            // Add event listeners to view buttons
            document.querySelectorAll('.action-btn').forEach(button => {
                button.addEventListener('click', function() {
                    const messageId = this.getAttribute('data-id');
                    const message = allMessages[messageId];
                    
                    if (message) {
                        // Populate modal with message data
                        document.getElementById('modal-name').textContent = message.name;
                        document.getElementById('modal-email').textContent = message.email;
                        document.getElementById('modal-date').textContent = message.date;
                        document.getElementById('modal-status').textContent = message.status.charAt(0).toUpperCase() + message.status.slice(1);
                        document.getElementById('modal-message').textContent = message.message;
                        
                        // Show modal
                        document.getElementById('messageModal').style.display = 'flex';
                    }
                });
            });
        }
        
        // Setup pagination
        function setupPagination() {
            const pageCount = Math.ceil(filteredMessages.length / itemsPerPage);
            
            paginationElement.innerHTML = '';
            
            if (pageCount <= 1) return;
            
            // Previous button
            const prevButton = document.createElement('button');
            prevButton.innerHTML = '&laquo; Previous';
            prevButton.disabled = currentPage === 1;
            prevButton.addEventListener('click', () => {
                if (currentPage > 1) {
                    currentPage--;
                    renderTable();
                    setupPagination();
                }
            });
            paginationElement.appendChild(prevButton);
            
            // Page buttons
            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(pageCount, startPage + maxVisiblePages - 1);
            
            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageButton = document.createElement('button');
                pageButton.textContent = i;
                pageButton.classList.toggle('active', i === currentPage);
                pageButton.addEventListener('click', () => {
                    currentPage = i;
                    renderTable();
                    setupPagination();
                });
                paginationElement.appendChild(pageButton);
            }
            
            // Next button
            const nextButton = document.createElement('button');
            nextButton.innerHTML = 'Next &raquo;';
            nextButton.disabled = currentPage === pageCount;
            nextButton.addEventListener('click', () => {
                if (currentPage < pageCount) {
                    currentPage++;
                    renderTable();
                    setupPagination();
                }
            });
            paginationElement.appendChild(nextButton);
        }
        
        // Initialize the dashboard
        function initDashboard() {
            updateStats();
            sortMessages();
            renderTable();
            setupPagination();
            
            // Add event listeners
            searchInput.addEventListener('input', filterMessages);
            statusFilter.addEventListener('change', filterMessages);
            dateFilter.addEventListener('change', function() {
                sortField = 'date';
                sortDirection = this.value === 'newest' ? 'desc' : 'asc';
                filterMessages();
            });
            
            itemsPerPageSelect.addEventListener('change', function() {
                itemsPerPage = parseInt(this.value);
                currentPage = 1;
                renderTable();
                setupPagination();
            });
            
            // Add sort functionality to table headers
            document.querySelectorAll('th[data-sort]').forEach(header => {
                header.addEventListener('click', function() {
                    const newSortField = this.getAttribute('data-sort');
                    
                    if (sortField === newSortField) {
                        sortDirection = sortDirection === 'asc' ? 'desc' : 'asc';
                    } else {
                        sortField = newSortField;
                        sortDirection = 'asc';
                    }
                    
                    filterMessages();
                });
            });
            
            // Modal close functionality
            document.querySelector('.close-btn').addEventListener('click', function() {
                document.getElementById('messageModal').style.display = 'none';
            });
            
            document.querySelector('.close-modal-btn').addEventListener('click', function() {
                document.getElementById('messageModal').style.display = 'none';
            });
            
            window.addEventListener('click', function(event) {
                if (event.target === document.getElementById('messageModal')) {
                    document.getElementById('messageModal').style.display = 'none';
                }
            });
        }
        
        // Initialize the dashboard when the page loads
        document.addEventListener('DOMContentLoaded', initDashboard);
  // DOM Elements
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const sidebar = document.getElementById('sidebar');
        const mainContent = document.getElementById('mainContent');
        const profileForm = document.getElementById('profileForm');
        const alertBox = document.getElementById('settingsAlert');
        const errorBox = document.getElementById('settingsError');
        const toggleCurrentPassword = document.getElementById('toggleCurrentPassword');
        const toggleNewPassword = document.getElementById('toggleNewPassword');
        const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
        const currentPassword = document.getElementById('currentPassword');
        const newPassword = document.getElementById('newPassword');
        const confirmPassword = document.getElementById('confirmPassword');
        const passwordStrengthBar = document.getElementById('passwordStrengthBar');
        const passwordHints = document.getElementById('passwordHints');

        // Toggle sidebar on mobile
        mobileMenuBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
            mainContent.classList.toggle('sidebar-active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', (e) => {
            if (window.innerWidth < 992 && 
                !sidebar.contains(e.target) && 
                !mobileMenuBtn.contains(e.target) && 
                sidebar.classList.contains('active')) {
                sidebar.classList.remove('active');
            }
        });

        // Password visibility toggles
        toggleCurrentPassword.addEventListener('click', () => {
            const type = currentPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            currentPassword.setAttribute('type', type);
            toggleCurrentPassword.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
        });

        toggleNewPassword.addEventListener('click', () => {
            const type = newPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            newPassword.setAttribute('type', type);
            toggleNewPassword.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
        });

        toggleConfirmPassword.addEventListener('click', () => {
            const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
            confirmPassword.setAttribute('type', type);
            toggleConfirmPassword.innerHTML = type === 'password' ? '<i class="far fa-eye"></i>' : '<i class="far fa-eye-slash"></i>';
        });

        // Password strength indicator
        newPassword.addEventListener('input', checkPasswordStrength);

        function checkPasswordStrength() {
            const password = newPassword.value;
            let strength = 0;
            let hints = [];
            
            // Check password length
            if (password.length >= 8) strength += 20;
            else hints.push('at least 8 characters');
            
            // Check for uppercase letters
            if (/[A-Z]/.test(password)) strength += 20;
            else hints.push('uppercase letters');
            
            // Check for lowercase letters
            if (/[a-z]/.test(password)) strength += 20;
            else hints.push('lowercase letters');
            
            // Check for numbers
            if (/[0-9]/.test(password)) strength += 20;
            else hints.push('numbers');
            
            // Check for special characters
            if (/[^A-Za-z0-9]/.test(password)) strength += 20;
            else hints.push('special characters');
            
            // Update strength bar
            passwordStrengthBar.style.width = strength + '%';
            
            // Update color based on strength
            if (strength < 40) {
                passwordStrengthBar.style.background = 'var(--danger)';
            } else if (strength < 80) {
                passwordStrengthBar.style.background = 'var(--warning)';
            } else {
                passwordStrengthBar.style.background = 'var(--success)';
            }
            
            // Update hints
            if (password.length > 0 && hints.length > 0) {
                passwordHints.textContent = 'Needs: ' + hints.join(', ');
            } else if (password.length === 0) {
                passwordHints.textContent = 'Password must be at least 8 characters with uppercase, lowercase, number, and special character.';
            } else {
                passwordHints.textContent = 'Strong password!';
            }
        }

        // Form validation and submission
        profileForm.addEventListener('submit', function (e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value.trim();
            const fullName = document.getElementById('fullName').value.trim();
            const currentPasswordVal = currentPassword.value;
            const newPasswordVal = newPassword.value;
            const confirmPasswordVal = confirmPassword.value;
            
            // Reset messages
            alertBox.style.display = 'none';
            errorBox.style.display = 'none';
            
            // Validate required fields
            if (!email || !fullName || !currentPasswordVal) {
                showError("Please fill in all required fields.");
                return;
            }
            
            // Validate email format
            if (!isValidEmail(email)) {
                showError("Please enter a valid email address.");
                return;
            }
            
            // Validate passwords if new password is provided
            if (newPasswordVal || confirmPasswordVal) {
                if (newPasswordVal !== confirmPasswordVal) {
                    showError("New passwords do not match.");
                    return;
                }
                
                if (newPasswordVal.length < 8) {
                    showError("New password must be at least 8 characters long.");
                    return;
                }
                
                // Check password strength
                if (!isStrongPassword(newPasswordVal)) {
                    showError("Password is not strong enough. Include uppercase, lowercase, number, and special character.");
                    return;
                }
            }
            
            // Simulate successful save (in a real app, this would be an API call)
            simulateSave();
        });

        // Helper functions
        function isValidEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        function isStrongPassword(password) {
            return /[A-Z]/.test(password) && 
                   /[a-z]/.test(password) && 
                   /[0-9]/.test(password) && 
                   /[^A-Za-z0-9]/.test(password) && 
                   password.length >= 8;
        }

        function showError(message) {
            errorBox.textContent = message;
            errorBox.style.display = 'block';
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                errorBox.style.display = 'none';
            }, 5000);
        }

        function showSuccess(message) {
            alertBox.textContent = message;
            alertBox.style.display = 'block';
            
            // Auto hide after 5 seconds
            setTimeout(() => {
                alertBox.style.display = 'none';
            }, 5000);
        }

        function simulateSave() {
            // Show loading state
            const submitBtn = profileForm.querySelector('button[type="submit"]');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Saving...';
            submitBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                showSuccess("Profile updated successfully!");
                submitBtn.innerHTML = originalText;
                submitBtn.disabled = false;
                
                // Clear password fields
                currentPassword.value = '';
                newPassword.value = '';
                confirmPassword.value = '';
                passwordStrengthBar.style.width = '0%';
                passwordHints.textContent = 'Password must be at least 8 characters with uppercase, lowercase, number, and special character.';
            }, 1500);
        }

        // Handle window resize
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 992) {
                sidebar.classList.remove('active');
            }
        });