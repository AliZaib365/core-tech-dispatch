@extends('admin.layouts.master')
@section('main-content')
    <div class="main-content">

        @if (Session::has('success'))
            <div id="coretech-success"
                class="coretech-alert-success bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4 rounded-r-lg">
                <i class="fas fa-check-circle"></i>
                <span id="success-message">Login Successful</span>
                <button class="close-btn float-right text-green-700 hover:text-green-900"
                    onclick="document.getElementById('coretech-success').style.display='none'">&times;</button>
            </div>
        @endif

        <div class="dashboard-header flex justify-between items-center mb-6">
            <div class="page-title">
                <h2 class="text-2xl font-bold text-gray-800">Contact Messages</h2>
                <p class="text-gray-500">Manage and respond to customer inquiries</p>
            </div>
            <div class="header-actions flex space-x-4">
                <div class="menu-toggle text-gray-600 hover:text-gray-800 cursor-pointer">
                    <i class="fas fa-bars text-lg"></i>
                </div>
                <div class="search-toggle text-gray-600 hover:text-gray-800 cursor-pointer">
                    <i class="fas fa-search text-lg"></i>
                </div>
                <div class="notification-btn text-gray-600 hover:text-gray-800 cursor-pointer">
                    <i class="fas fa-bell text-lg"></i>
                </div>
            </div>
        </div>

        <!-- Stats -->
        <div class="stats grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mb-6">
            <div class="stat-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="stat-icon text-blue-500">
                    <i class="fas fa-inbox text-2xl"></i>
                </div>
                <div class="stat-info">
                    <h3 id="total-messages" class="text-xl font-semibold">{{ $total }}</h3>
                    <p class="text-gray-500">Total Messages</p>
                </div>
            </div>
            <div class="stat-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="stat-icon text-yellow-500">
                    <i class="fas fa-clock text-2xl"></i>
                </div>
                <div class="stat-info">
                    <h3 id="unread-messages" class="text-xl font-semibold">{{ $unread }}</h3>
                    <p class="text-gray-500">Unread Messages</p>
                </div>
            </div>
            <div class="stat-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="stat-icon text-green-500">
                    <i class="fas fa-reply text-2xl"></i>
                </div>
                <div class="stat-info">
                    <h3 id="replied-messages" class="text-xl font-semibold">{{ $replied }}</h3>
                    <p class="text-gray-500">Replied Messages</p>
                </div>
            </div>
            <div class="stat-card bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <div class="stat-icon text-red-500">
                    <i class="fas fa-exclamation-circle text-2xl"></i>
                </div>
                <div class="stat-info">
                    <h3 id="urgent-messages" class="text-xl font-semibold">{{ $urgent }}</h3>
                    <p class="text-gray-500">Urgent Messages</p>
                </div>
            </div>
        </div>

        <!-- Messages Card -->
        <div class="dashboard-card bg-white rounded-lg shadow-md overflow-hidden">
            <div class="card-header flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-semibold text-gray-800">All Messages</h3>
            </div>

            <!-- Controls -->
            <form method="GET" class="controls flex flex-col md:flex-row justify-between p-4 border-b">
                <div class="search-bar relative flex-1 md:mr-4">
                    <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                    <input type="text" name="search" placeholder="Search messages..." value="{{ request('search') }}"
                        class="w-full pl-10 pr-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="filters flex space-x-2 mt-2 md:mt-0">
                    <select name="status"
                        class="filter-select border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All Statuses</option>
                        <option value="new" {{ request('status') == 'new' ? 'selected' : '' }}>New</option>
                        <option value="replied" {{ request('status') == 'replied' ? 'selected' : '' }}>Replied</option>
                        <option value="urgent" {{ request('status') == 'urgent' ? 'selected' : '' }}>Urgent</option>
                    </select>
                    <select name="dir"
                        class="filter-select border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="desc" {{ request('dir') == 'desc' ? 'selected' : '' }}>Newest First</option>
                        <option value="asc" {{ request('dir') == 'asc' ? 'selected' : '' }}>Oldest First</option>
                    </select>
                    <select name="per_page"
                        class="filter-select border rounded-lg px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                        <option value="5" {{ request('per_page') == 5 ? 'selected' : '' }}>5 per page</option>
                        <option value="10" {{ request('per_page') == 10 ? 'selected' : '' }}>10 per page</option>
                        <option value="20" {{ request('per_page') == 20 ? 'selected' : '' }}>20 per page</option>
                        <option value="50" {{ request('per_page') == 50 ? 'selected' : '' }}>50 per page</option>
                    </select>
                    <button type="submit"
                        class="action-btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition">
                        Apply
                    </button>
                </div>
            </form>

            <!-- Messages Table -->
            <div class="card-body overflow-x-auto">
                <table id="messagesTable" class="w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="p-3 text-left">
                                <a href="?{{ http_build_query(array_merge(request()->query(), ['sort_by' => 'name', 'dir' => request('sort_by') == 'name' && request('dir') == 'asc' ? 'desc' : 'asc'])) }}"
                                    class="flex items-center space-x-1">
                                    <span>Name</span>
                                    <i
                                        class="fas fa-sort{{ request('sort_by') == 'name' ? (request('dir') == 'asc' ? '-up' : '-down') : '' }}"></i>
                                </a>
                            </th>
                            <th class="p-3 text-left">
                                <a href="?{{ http_build_query(array_merge(request()->query(), ['sort_by' => 'email', 'dir' => request('sort_by') == 'email' && request('dir') == 'asc' ? 'desc' : 'asc'])) }}"
                                    class="flex items-center space-x-1">
                                    <span>Email</span>
                                    <i
                                        class="fas fa-sort{{ request('sort_by') == 'email' ? (request('dir') == 'asc' ? '-up' : '-down') : '' }}"></i>
                                </a>
                            </th>
                            <th class="p-3 text-left">Status</th>
                            <th class="p-3 text-left">
                                <a href="?{{ http_build_query(array_merge(request()->query(), ['sort_by' => 'created_at', 'dir' => request('sort_by') == 'created_at' && request('dir') == 'asc' ? 'desc' : 'asc'])) }}"
                                    class="flex items-center space-x-1">
                                    <span>Date</span>
                                    <i
                                        class="fas fa-sort{{ request('sort_by') == 'created_at' ? (request('dir') == 'asc' ? '-up' : '-down') : '' }}"></i>
                                </a>
                            </th>
                            <th class="p-3 text-left">Message Preview</th>
                            <th class="p-3 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody id="messagesBody">
                        @foreach ($messages as $msg)
                            <tr class="hover:bg-gray-50 transition @if ($msg->read_or_not == 0) bg-gray-50 @endif">
                                <td class="p-3">{{ $msg->name }}</td>
                                <td class="p-3">{{ $msg->email }}</td>
                                <td class="p-3">
                                    @if ($msg->read_or_not == 0)
                                        <span class="badge bg-yellow-200 text-yellow-800 px-2 py-1 rounded">Unread</span>
                                    @else
                                        <span class="badge bg-green-200 text-green-800 px-2 py-1 rounded">Read</span>
                                    @endif
                                </td>
                                <td class="p-3">{{ $msg->created_at->format('d M Y H:i') }}</td>
                                <td class="p-3 flex space-x-2">
                                    <button type="button"
                                        class="action-btn bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 transition view-btn"
                                        data-id="{{ $msg->id }}" data-name="{{ $msg->name }}"
                                        data-email="{{ $msg->email }}" data-message="{{ $msg->message }}"
                                        data-date="{{ $msg->created_at->format('d M Y H:i') }}"
                                        data-status="{{ $msg->read_or_not ? 'Read' : 'Unread' }}">
                                        <i class="fas fa-eye"></i> View
                                    </button>
                                </td>
                                <td class="p-3">
                                    <button type="button"
                                        class="action-btn bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 transition detail-btn"
                                        data-id="{{ $msg->id }}" data-name="{{ $msg->name }}"
                                        data-email="{{ $msg->email }}" data-message="{{ $msg->message }}"
                                        data-date="{{ $msg->created_at->format('d M Y H:i') }}"
                                        data-status="{{ $msg->read_or_not ? 'Read' : 'Unread' }}">
                                        <i class="fas fa-info-circle"></i> Detail
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Pagination (Enhanced Modern Design with Gradient Icons) -->
            <div class="card-footer flex justify-between items-center p-4 border-t">
                <div class="pagination-info text-gray-600 text-sm">
                    Showing {{ $messages->firstItem() }} to {{ $messages->lastItem() }} of {{ $messages->total() }}
                    entries
                </div>
                <div class="pagination flex items-center space-x-2">
                    <!-- First Page Button -->
                    @if ($messages->onFirstPage())
                        <span
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-400 rounded-full cursor-not-allowed shadow-sm transition-all duration-300">
                            <i class="fas fa-angle-double-left text-base"></i>
                        </span>
                    @else
                        <a href="{{ $messages->url(1) }}"
                            class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full hover:from-blue-600 hover:to-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                            <i class="fas fa-angle-double-left text-base"></i>
                        </a>
                    @endif

                    <!-- Previous Button -->
                    @if ($messages->onFirstPage())
                        <span
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-400 rounded-full cursor-not-allowed shadow-sm transition-all duration-300">
                            <i class="fas fa-chevron-left text-base"></i>
                        </span>
                    @else
                        <a href="{{ $messages->previousPageUrl() }}"
                            class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full hover:from-blue-600 hover:to-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                            <i class="fas fa-chevron-left text-base"></i>
                        </a>
                    @endif

                    <!-- Page Numbers -->
                    @php
                        $start = max(1, $messages->currentPage() - 2);
                        $end = min($messages->lastPage(), $messages->currentPage() + 2);
                    @endphp
                    @if ($start > 1)
                        <a href="{{ $messages->url(1) }}"
                            class="w-10 h-10 flex items-center justify-center text-gray-700 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:border-blue-500 shadow-sm transition-all duration-300 transform hover:scale-105">
                            1
                        </a>
                        @if ($start > 2)
                            <span class="px-3 py-1 text-gray-500 select-none">...</span>
                        @endif
                    @endif
                    @for ($i = $start; $i <= $end; $i++)
                        <a href="{{ $messages->url($i) }}"
                            class="w-10 h-10 flex items-center justify-center {{ $messages->currentPage() == $i ? 'bg-gradient-to-r from-blue-500 to-indigo-600 text-white shadow-md' : 'text-gray-700 bg-white border border-gray-200' }} rounded-full hover:bg-blue-50 hover:border-blue-500 transition-all duration-300 transform hover:scale-105">
                            {{ $i }}
                        </a>
                    @endfor
                    @if ($end < $messages->lastPage())
                        @if ($end < $messages->lastPage() - 1)
                            <span class="px-3 py-1 text-gray-500 select-none">...</span>
                        @endif
                        <a href="{{ $messages->url($messages->lastPage()) }}"
                            class="w-10 h-10 flex items-center justify-center text-gray-700 bg-white border border-gray-200 rounded-full hover:bg-blue-50 hover:border-blue-500 shadow-sm transition-all duration-300 transform hover:scale-105">
                            {{ $messages->lastPage() }}
                        </a>
                    @endif

                    <!-- Next Button -->
                    @if ($messages->hasMorePages())
                        <a href="{{ $messages->nextPageUrl() }}"
                            class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full hover:from-blue-600 hover:to-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                            <i class="fas fa-chevron-right text-base"></i>
                        </a>
                    @else
                        <span
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-400 rounded-full cursor-not-allowed shadow-sm transition-all duration-300">
                            <i class="fas fa-chevron-right text-base"></i>
                        </span>
                    @endif

                    <!-- Last Page Button -->
                    @if ($messages->currentPage() == $messages->lastPage())
                        <span
                            class="w-10 h-10 flex items-center justify-center bg-gray-200 text-gray-400 rounded-full cursor-not-allowed shadow-sm transition-all duration-300">
                            <i class="fas fa-angle-double-right text-base"></i>
                        </span>
                    @else
                        <a href="{{ $messages->url($messages->lastPage()) }}"
                            class="w-10 h-10 flex items-center justify-center bg-gradient-to-r from-blue-500 to-indigo-600 text-white rounded-full hover:from-blue-600 hover:to-indigo-700 shadow-md hover:shadow-lg transition-all duration-300 transform hover:scale-110">
                            <i class="fas fa-angle-double-right text-base"></i>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="messageModal" class="modal hidden fixed inset-0 z-50 justify-center items-center bg-black bg-opacity-40" style="display:none;">
        <div class="modal-content bg-white rounded-lg shadow-xl w-full max-w-lg mx-auto">
            <div class="modal-header flex justify-between items-center bg-blue-600 text-white p-4 rounded-t-lg">
                <h2 class="text-lg font-semibold">Message Details</h2>
                <button id="closeModalBtn" class="close-btn text-2xl font-bold">&times;</button>
            </div>
            <div class="modal-body p-4">
                <div class="mb-2">
                    <span class="font-semibold">Name:</span>
                    <span id="modalName"></span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold">Email:</span>
                    <span id="modalEmail"></span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold">Date:</span>
                    <span id="modalDate"></span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold">Status:</span>
                    <span id="modalStatus"></span>
                </div>
                <div class="mb-2">
                    <span class="font-semibold">Message:</span>
                    <div id="modalMessage" class="bg-gray-100 rounded p-2 mt-1"></div>
                </div>
            </div>
            <div class="modal-actions flex justify-end gap-2 p-4 border-t">
                <button id="closeModalBtnFooter" class="action-btn bg-gray-200 text-gray-700 px-4 py-2 rounded hover:bg-gray-300 transition">Close</button>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            document.querySelectorAll('.filter-select').forEach(el => {
                el.addEventListener('change', () => el.form.submit());
            });

            // Modal logic for View and Detail
            function showModal(data) {
                document.getElementById('modalName').textContent = data.name;
                document.getElementById('modalEmail').textContent = data.email;
                document.getElementById('modalDate').textContent = data.date;
                document.getElementById('modalStatus').textContent = data.status;
                document.getElementById('modalMessage').textContent = data.message;
                document.getElementById('messageModal').classList.remove('hidden');
                document.getElementById('messageModal').style.display = 'flex';
            }
            function closeModal() {
                document.getElementById('messageModal').classList.add('hidden');
                document.getElementById('messageModal').style.display = 'none';
            }
            document.querySelectorAll('.view-btn, .detail-btn').forEach(btn => {
                btn.addEventListener('click', function() {
                    showModal({
                        name: btn.getAttribute('data-name'),
                        email: btn.getAttribute('data-email'),
                        date: btn.getAttribute('data-date'),
                        status: btn.getAttribute('data-status'),
                        message: btn.getAttribute('data-message')
                    });
                });
            });
            document.getElementById('closeModalBtn').addEventListener('click', closeModal);
            document.getElementById('closeModalBtnFooter').addEventListener('click', closeModal);

            // Optional: close modal when clicking outside modal content
            document.getElementById('messageModal').addEventListener('click', function(e) {
                if (e.target === this) closeModal();
            });
        </script>
        <style>
            .modal {align-items: center;}
            .modal-content {animation: modalFadeIn 0.2s;}
            @keyframes modalFadeIn {
                from {opacity: 0; transform: translateY(-20px);}
                to {opacity: 1; transform: translateY(0);}
            }
        </style>
    @endpush

@endsection