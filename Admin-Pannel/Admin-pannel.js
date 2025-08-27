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
