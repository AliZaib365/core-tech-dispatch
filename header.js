        // Mobile Menu Toggle
        const hamburger = document.getElementById('hamburger');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const closeBtn = document.getElementById('closeBtn');
        const overlay = document.getElementById('overlay');
        
        hamburger.addEventListener('click', () => {
            mobileSidebar.classList.add('active');
            overlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
        
        closeBtn.addEventListener('click', () => {
            mobileSidebar.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        overlay.addEventListener('click', () => {
            mobileSidebar.classList.remove('active');
            overlay.classList.remove('active');
            document.body.style.overflow = 'auto';
        });
        
        // Mobile Dropdown Toggle
        const dropdownBtns = document.querySelectorAll('.mobile-dropdown-btn');
        
        dropdownBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const dropdown = btn.nextElementSibling;
                const icon = btn.querySelector('i');
                
                dropdown.classList.toggle('active');
                
                if (dropdown.classList.contains('active')) {
                    icon.classList.remove('fa-chevron-down');
                    icon.classList.add('fa-chevron-up');
                } else {
                    icon.classList.remove('fa-chevron-up');
                    icon.classList.add('fa-chevron-down');
                }
            });
        });
