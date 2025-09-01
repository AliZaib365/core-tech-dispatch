@extends('admin.layouts.master')
@section('main-content')
    <div class="main-content">

        @if (Session::has('success'))
            <div id="coretech-success" class="coretech-alert-success">
                <i class="fas fa-check-circle"></i>
                <span id="success-message">Login Successful</span>
                <button class="close-btn"
                    onclick="document.getElementById('coretech-success').style.display='none'">&times;</button>
            </div>
        @endif

        <div class="dashboard-header">
            <div class="page-title">
                <h2>Contact Messages</h2>
                <p>Manage and respond to customer inquiries</p>
            </div>
            <div class="header-actions">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="search-toggle">
                    <i class="fas fa-search"></i>
                </div>
                <div class="notification-btn">
                    <i class="fas fa-bell"></i>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-inbox"></i>
                </div>
                <div class="stat-info">
                    <h3 id="total-messages">{{ $total }}</h3>
                    <p>Total Messages</p>
                </div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 12%
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-clock"></i>
                </div>
                <div class="stat-info">
                    <h3 id="unread-messages">{{ $unread }}</h3>
                    <p>Unread Messages</p>
                </div>
                <div class="stat-trend trend-down">
                    <i class="fas fa-arrow-down"></i> 8%
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-reply"></i>
                </div>
                <div class="stat-info">
                    <h3 id="replied-messages">{{ $replied }}</h3>
                    <p>Replied Messages</p>
                </div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 16%
                </div>
            </div>
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-exclamation-circle"></i>
                </div>
                <div class="stat-info">
                    <h3 id="urgent-messages">{{ $urgent }}</h3>
                    <p>Urgent Messages</p>
                </div>
                <div class="stat-trend trend-up">
                    <i class="fas fa-arrow-up"></i> 3%
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3>All Messages</h3>
                <div class="card-tools">
                    <button class="action-btn">
                        <i class="fas fa-download"></i> Export
                    </button>
                    <button class="action-btn">
                        <i class="fas fa-plus"></i> Add Filter
                    </button>
                </div>
            </div>

            <!-- Controls -->
            <div class="controls">
                <div class="search-bar">
                    <i class="fas fa-search"></i>
                    <input type="text" id="searchInput" placeholder="Search messages...">
                </div>
                <div class="filters">
                    <select id="statusFilter" class="filter-select">
                        <option value="all">All Statuses</option>
                        <option value="new">New</option>
                        <option value="replied">Replied</option>
                        <option value="urgent">Urgent</option>
                    </select>
                    <select id="dateFilter" class="filter-select">
                        <option value="newest">Newest First</option>
                        <option value="oldest">Oldest First</option>
                    </select>
                    <select id="itemsPerPage" class="filter-select">
                        <option value="5">5 per page</option>
                        <option value="10" selected>10 per page</option>
                        <option value="20">20 per page</option>
                        <option value="50">50 per page</option>
                    </select>
                </div>
            </div>

            <!-- Messages Table -->
            <div class="card-body">
                <table id="messagesTable">
                    <thead>
                        <tr>
                            <th data-sort="name">Name <i class="fas fa-sort"></i></th>
                            <th data-sort="email">Email <i class="fas fa-sort"></i></th>
                            <th data-sort="status">Status <i class="fas fa-sort"></i></th>
                            <th data-sort="date">Date <i class="fas fa-sort"></i></th>
                            <th>Message Preview</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody id="messagesBody">
                        @foreach ($messages as $msg)
                            <tr @if ($msg->read_or_not == 0) style="background:#f9f9f9" @endif>
                                <td>{{ $msg->name }}</td>
                                <td>{{ $msg->email }}</td>
                                <td>
                                    @if ($msg->read_or_not == 0)
                                    <span class="badge badge-warning">Unread</span>
                                    @else
                                    <span class="badge badge-success">Read</span>
                                    @endif
                                </td>
                                <td>{{ $msg->created_at->format('d M Y H:i') }}</td>
                                <td>
                                    <button class="action-btn view-btn" data-id="{{ $msg->id }}"
                                        data-name="{{ $msg->name }}" data-email="{{ $msg->email }}"
                                        data-message="{{ $msg->message }}"
                                        data-date="{{ $msg->created_at->format('d M Y H:i') }}"
                                        data-status="{{ $msg->read_or_not ? 'Read' : 'Unread' }}">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                </td>
                                <td>
                                    <button class="action-btn delete-btn" data-id="{{ $msg->id }}">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>

            <!-- Pagination -->
            <div class="card-footer">
                <div class="pagination-info">
                    Showing <span id="startItem">5</span> to <span id="endItem">5</span> of <span
                        id="totalItems">{{ $total }}</span> entries
                </div>
            </div>
        </div>
    </div>

    <!-- Message Detail Modal -->
    <div class="modal" id="messageModal">
        <div class="modal-content">
            <div class="modal-header">
                <h2>Message Details</h2>
                <button class="close-btn">&times;</button>
            </div>
            <div class="modal-body">
                <div class="message-detail">
                    <span class="detail-label">From:</span>
                    <span class="detail-value" id="modal-name"></span>
                </div>
                <div class="message-detail">
                    <span class="detail-label">Email:</span>
                    <span class="detail-value" id="modal-email"></span>
                </div>
                <div class="message-detail">
                    <span class="detail-label">Date:</span>
                    <span class="detail-value" id="modal-date"></span>
                </div>
                <div class="message-detail">
                    <span class="detail-label">Status:</span>
                    <span class="detail-value" id="modal-status"></span>
                </div>
                <div class="message-detail">
                    <span class="detail-label">Message:</span>
                    <div class="full-message" id="modal-message"></div>
                </div>
            </div>
            <div class="modal-actions">
                <button class="modal-btn reply-btn">
                    <i class="fas fa-reply"></i> Reply
                </button>
                <button class="modal-btn close-modal-btn">
                    <i class="fas fa-times"></i> Close
                </button>
            </div>
        </div>
    </div>
@endsection
