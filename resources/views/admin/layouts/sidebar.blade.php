        <nav id="sidebar">
            <div class="sidebar-header">
                <a href="{{ route('dashboard') }}">
                    <img class="logo-img"
                        src="{{ auth()->user()->avatar ? asset(auth()->user()->avatar) : 'https://ui-avatars.com/api/?name=' . urlencode(auth()->user()->name) . '&background=random' }}"
                        alt="Admin Logo">
                </a>
                <h3>Admin Panel</h3>
            </div>

            <div class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="bi bi-speedometer2"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('contactus.index') }}">
                            <i class="bi bi-envelope"></i>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" data-view="analytics">
                            <i class="bi bi-graph-up"></i>
                            <span>Analytics</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.profile') }}">
                            <i class="bi bi-gear"></i>
                            <span>Profile Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.logout') }}">
                            <i class="bi bi-box-arrow-right"></i>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
