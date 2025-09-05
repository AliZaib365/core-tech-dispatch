@extends('admin.layouts.master')


<style>
    .messages-hero h2 {
        font-weight: 700;
    }

    .message-card {
        border: none;
        border-radius: var(--border-radius);
        box-shadow: var(--card-shadow);
        transition: transform .2s ease, box-shadow .2s ease, background-color .2s ease;
        background: #fff;
        overflow: hidden;
        animation: msgFade .35s ease both;
    }

    .message-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 14px 30px rgba(0, 0, 0, .12);
    }

    .message-card.unread {
        box-shadow: 0 0 0 2px rgba(67, 97, 238, 0.12) inset;
    }

    .message-item {
        display: flex;
        gap: 14px;
        align-items: flex-start;
        padding: 16px 18px;
    }

    .message-avatar {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 6px 16px rgba(0, 0, 0, .12);
    }

    .message-meta {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .message-title {
        margin: 0;
        font-size: 1rem;
        font-weight: 600;
    }

    .message-snippet {
        margin: 2px 0 0 0;
        color: #6c757d;
    }

    .message-time {
        color: #6c757d;
        font-size: .85rem;
        white-space: nowrap;
    }

    .message-actions {
        opacity: 0;
        transition: opacity .2s ease;
    }

    .message-card:hover .message-actions {
        opacity: 1;
    }

    .messages-list {
        display: grid;
        gap: 14px;
    }

    @keyframes msgFade {
        from {
            opacity: 0;
            transform: translateY(6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Dark mode adjustments */
    html[data-theme="dark"] .message-card {
        background: #161a2e;
        color: #e2e6f3;
    }

    html[data-theme="dark"] .message-snippet,
    html[data-theme="dark"] .message-time {
        color: rgba(226, 230, 243, 0.7);
    }

    html[data-theme="dark"] .message-card.unread {
        box-shadow: 0 0 0 2px rgba(226, 230, 243, 0.12) inset;
    }

    /* Pagination */
    .pagination-modern .page-link {
        border: none;
        color: var(--primary);
        border-radius: 10px;
        padding: 10px 14px;
        transition: background-color .2s ease, transform .15s ease, box-shadow .2s ease;
        background: rgba(67, 97, 238, 0.08);
    }

    .pagination-modern .page-link:hover {
        transform: translateY(-1px);
        box-shadow: 0 8px 20px rgba(67, 97, 238, 0.18);
        background: rgba(67, 97, 238, 0.12);
    }

    .pagination-modern .page-item.active .page-link {
        background: linear-gradient(135deg, var(--primary), var(--secondary));
        color: #fff;
        box-shadow: 0 10px 28px rgba(67, 97, 238, 0.28);
    }

    .pagination-modern .page-link:focus {
        box-shadow: 0 0 0 0.2rem rgba(67, 97, 238, 0.2);
    }

    .pagination-modern .page-item.disabled .page-link {
        opacity: .6;
    }

    html[data-theme="dark"] .pagination-modern .page-link {
        background: rgba(226, 230, 243, 0.08);
        color: #e2e6f3;
    }

    html[data-theme="dark"] .pagination-modern .page-link:hover {
        background: rgba(226, 230, 243, 0.12);
    }

    /* Modal polish */
    .modal-content {
        border: 1px solid rgba(0, 0, 0, 0.06);
        border-radius: var(--border-radius);
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.2);
    }

    .modal-header,
    .modal-footer {
        background: rgba(255, 255, 255, 0.6);
    }

    .modal-title {
        font-weight: 700;
    }

    .modal-body {
        line-height: 1.6;
    }

    #messageModalBody {
        white-space: pre-wrap;
        word-wrap: break-word;
    }

    .modal.fade .modal-dialog {
        transform: translateY(10px);
        transition: transform .25s ease;
    }

    .modal.show .modal-dialog {
        transform: none;
    }

    @media (max-width: 575.98px) {
        .modal-dialog {
            margin: .75rem;
        }
    }

    html[data-theme="dark"] .modal-content {
        background: #161a2e;
        color: #e2e6f3;
        border-color: rgba(255, 255, 255, 0.08);
        box-shadow: 0 24px 60px rgba(0, 0, 0, 0.45);
    }

    html[data-theme="dark"] .modal-header,
    html[data-theme="dark"] .modal-footer {
        background: rgba(22, 26, 46, 0.6);
    }
</style>
<script>
    (function() {
        const saved = localStorage.getItem('theme');
        if (!saved && window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
            document.documentElement.setAttribute('data-theme', 'dark');
        } else if (saved) {
            document.documentElement.setAttribute('data-theme', saved);
        }
    })();
</script>

@section('main-content')
    <section class="messages-hero mb-3">
        <div class="d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div>
                <h2 class="mb-1">Messages</h2>
                <p class="text-muted mb-0">View and manage your recent communications</p>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-outline-secondary"><i class="bi bi-funnel me-1"></i> Filters</button>
                <button class="btn btn-primary"><i class="bi bi-pencil-square me-1"></i> New Message</button>
            </div>
        </div>
    </section>

    <div class="messages-list">
        <!-- Message 1 -->
        <div class="card message-card unread" data-message-id="m1" data-message-title="Order Updates"
            data-message-sender="Alex Johnson" data-message-time="Today, 10:24 AM"
            data-message-body="Your recent order #3245 has been shipped and is on its way. Expected delivery by Friday between 1pm-4pm. You can track your shipment in the Orders section.">
            <div class="message-item">
                <img class="message-avatar" src="https://i.pravatar.cc/88?img=1" alt="Sender">
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="message-meta">
                                <span class="badge bg-primary">New</span>
                                <span class="text-muted">Order Updates</span>
                            </div>
                            <h6 class="message-title">Alex Johnson</h6>
                        </div>
                        <div class="text-end">
                            <div class="message-time">Today, 10:24 AM</div>
                            <div class="message-actions">
                                <button class="btn btn-sm btn-outline-secondary" title="Archive"><i
                                        class="bi bi-archive"></i></button>
                                <button class="btn btn-sm btn-outline-secondary" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                                <button class="btn btn-sm btn-primary view-message" title="View"><i class="bi bi-eye"></i>
                                    View</button>
                            </div>
                        </div>
                    </div>
                    <p class="message-snippet mb-0">Your recent order #3245 has been shipped and is on its way. Expected
                        delivery by Friday...</p>
                </div>
            </div>
        </div>

        <!-- Message 2 -->
        <div class="card message-card" data-message-id="m2" data-message-title="Marketing Brief"
            data-message-sender="Sophie Turner" data-message-time="Yesterday, 4:12 PM"
            data-message-body="We’re launching a new campaign next week. Please review the brief attached and share your thoughts by Monday. We value your feedback on the targeting and creatives.">
            <div class="message-item">
                <img class="message-avatar" src="https://i.pravatar.cc/88?img=5" alt="Sender">
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="message-meta">
                                <span class="text-muted">Marketing</span>
                            </div>
                            <h6 class="message-title">Sophie Turner</h6>
                        </div>
                        <div class="text-end">
                            <div class="message-time">Yesterday, 4:12 PM</div>
                            <div class="message-actions">
                                <button class="btn btn-sm btn-outline-secondary" title="Archive"><i
                                        class="bi bi-archive"></i></button>
                                <button class="btn btn-sm btn-outline-secondary" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                                <button class="btn btn-sm btn-primary view-message" title="View"><i class="bi bi-eye"></i>
                                    View</button>
                            </div>
                        </div>
                    </div>
                    <p class="message-snippet mb-0">We’re launching a new campaign next week. Could you review the brief and
                        share your thoughts by Monday?</p>
                </div>
            </div>
        </div>

        <!-- Message 3 -->
        <div class="card message-card" data-message-id="m3" data-message-title="Ticket Update"
            data-message-sender="Customer Support" data-message-time="Aug 28, 2025"
            data-message-body="Ticket #98231 has been updated. The user confirmed the bug is fixed after the recent patch. We will monitor for 48 hours.">
            <div class="message-item">
                <img class="message-avatar" src="https://i.pravatar.cc/88?img=12" alt="Sender">
                <div class="flex-grow-1">
                    <div class="d-flex justify-content-between align-items-start">
                        <div>
                            <div class="message-meta">
                                <span class="text-muted">Support</span>
                            </div>
                            <h6 class="message-title">Customer Support</h6>
                        </div>
                        <div class="text-end">
                            <div class="message-time">Aug 28, 2025</div>
                            <div class="message-actions">
                                <button class="btn btn-sm btn-outline-secondary" title="Archive"><i
                                        class="bi bi-archive"></i></button>
                                <button class="btn btn-sm btn-outline-secondary" title="Delete"><i
                                        class="bi bi-trash3"></i></button>
                                <button class="btn btn-sm btn-primary view-message" title="View"><i
                                        class="bi bi-eye"></i>
                                    View</button>
                            </div>
                        </div>
                    </div>
                    <p class="message-snippet mb-0">Ticket #98231 has been updated. The user confirmed the bug is fixed
                        after the recent patch.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Pagination -->
    <nav class="mt-4" aria-label="Messages pagination">
        <ul class="pagination pagination-modern justify-content-center gap-2">
            <li class="page-item disabled">
                <button class="page-link" data-action="prev" data-page="1" tabindex="-1"
                    aria-disabled="true">Previous</button>
            </li>
            <li class="page-item active"><button class="page-link" data-page="1">1</button></li>
            <li class="page-item"><button class="page-link" data-page="2">2</button></li>
            <li class="page-item"><button class="page-link" data-page="3">3</button></li>
            <li class="page-item">
                <button class="page-link" data-action="next" data-page="2">Next</button>
            </li>
        </ul>
    </nav>


    <script>
        $(function() {
            // Simple pagination click handlers (ready for backend integration)
            $('.pagination').on('click', '.page-link', function() {
                const page = $(this).data('page');
                const action = $(this).data('action');
                if (!page && !action) return;
                // Replace with backend call, e.g., window.location or fetch
                // console.log('Load page', action || page);
            });

            // View message modal
            $(document).on('click', '.view-message', function() {
                const $card = $(this).closest('.message-card');
                const data = {
                    title: $card.data('message-title'),
                    sender: $card.data('message-sender'),
                    time: $card.data('message-time'),
                    body: $card.data('message-body')
                };
                $('#messageModalLabel').text(data.title);
                $('#messageModalSender').text(data.sender);
                $('#messageModalTime').text(data.time);
                $('#messageModalBody').text(data.body);
                const modal = new bootstrap.Modal(document.getElementById('messageModal'));
                modal.show();
                $card.removeClass('unread');
            });
        });
    </script>

    <!-- Message Details Modal -->
    <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="messageModalLabel">Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-start justify-content-between flex-wrap gap-2 mb-2">
                        <div>
                            <div class="small text-muted">From</div>
                            <div class="fw-semibold" id="messageModalSender">Sender</div>
                        </div>
                        <div class="text-end">
                            <div class="small text-muted">Received</div>
                            <div class="fw-semibold" id="messageModalTime">Time</div>
                        </div>
                    </div>
                    <hr>
                    <p id="messageModalBody" class="mb-0"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">
                        <i class="bi bi-reply"></i> Reply
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
