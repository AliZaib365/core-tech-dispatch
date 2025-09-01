    <div class="sidebar">
        <div class="sidebar-header">
            <div class="logo">
                <i class="fas fa-envelope-open-text"></i>
                <h1>CoreTech Dashboard</h1>
            </div>
        </div>

        <div class="sidebar-nav">
            <a href="/Admin-Pannel/Admin-pannel.html" class="nav-item">
                <i class="fas fa-home"></i>
                <span class="nav-label">Home</span>
            </a>
            <a href="/Admin-Pannel/user-profile.html" class="nav-item">
                <i class="fas fa-user"></i>
                <span class="nav-label">Profile</span>
            </a>
        </div>

        <div class="sidebar-footer">
            <div class="user-info">
                <img src="https://ui-avatars.com/api/?name=Admin+User&background=4361ee&color=fff" alt="User">
                <div class="user-details">
                    <h4>Admin User</h4>
                    <p>Administrator</p>
                </div>
            </div>
            <div style="margin-top: 16px; text-align: center; width: 100%;">
                <a href="{{ route('logout') }}"
                    style="text-decoration: none; width: 90%; padding: 10px 0; background: #3a56d4; border: 1px solid #2a42b8; color: #fff; font-size: 14px; font-weight: 600; border-radius: 4px; cursor: pointer; box-shadow: 0 2px 4px rgba(0,0,0,0.1); transition: all 0.2s ease; display: flex; align-items: center; justify-content: center; gap: 8px;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </div>

    </div>
