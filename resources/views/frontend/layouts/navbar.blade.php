<nav class="navbar">
    <a href="{{ url('/') }}" class="logo-container">
        <!-- <img src="assets/images/logo.webp.jpg" alt="CoreTech Dispatch Logo" class="logo-img"> -->
        <div class="logo-text">
            CORETECH <span>DISPATCH</span>
        </div>
    </a>

    <ul class="nav-links">
        <li>
            <a href="{{ url('info/all-services') }}">Services <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
                <li><a href="{{ url('service-detail/dispatching-services') }}">Dispatching Services</a></li>
                <li><a href="{{ url('service-detail/neogtiation-services') }}">Rate Negotiation</a></li>
                <li><a href="{{ url('service-detail/factoring-services') }}">Freight Factoring</a></li>
                <li><a href="{{ url('service-detail/document-dispatch-services') }}">Document Dispatch
                        Services</a></li>
                <li><a href="{{ url('service-detail/trucking-document-services') }}">Trucking Paperwork
                        Services</a></li>
                <li><a href="{{ url('service-detail/trucking-accounting-services') }}">Trucking Accounting</a>
                </li>
                <li><a href="{{ url('service-detail/ifta-services') }}">IFTA Reporting</a></li>
                <li><a href="{{ url('service-detail/dot-services') }}">DOT Compliance & Safety Services</a>
                </li>
                <li><a href="{{ url('service-detail/company-formation-services') }}">Company Formation
                        Services</a></li>
                <li><a href="{{ url('service-detail/document-management-services') }}">Trucking Documents &
                        Management
                        Services</a></li>
            </ul>
        </li>
        <li>
            <a href="{{ url('info/all-trucks') }}">Trucks <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
                <li><a href="{{ url('truck-detail/hot-spot') }}">Hotshot Truck Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/power-truck') }}">Power Only Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/flatbed-truck') }}">Flatbed Truck Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/reefer-truck') }}">Reefer Truck Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/stepdeck-truck') }}">Step Deck Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/dryvan-truck') }}">Dry Van Dispatching Service</a></li>
                <li><a href="{{ url('truck-detail/conestoga-truck') }}">Conestoga Trailer Dispatching Service</a>
                </li>
                <li><a href="{{ url('truck-detail/box-truck') }}">Box Truck Dispatching Service</a></li>
            </ul>
        </li>

        <li><a href="{{ url('info/faqs') }}">FAQ</a></li>
        <li>
            <a href="#">Company <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
                <li><a href="{{ url('info/about-us') }}">About Us</a></li>
                <li><a href="{{ url('info/how-to-start') }}">How to Start</a></li>
                <li><a href="{{ url('info/shipper') }}">Shippers</a></li>
                <li><a href="{{ url('info/ourdrivers') }}">Our Drivers</a></li>
            </ul>
        </li>
        <li><a href="{{ url('info/contact-us') }}">Contact Us</a></li>
    </ul>

    <a href="tel:03132410680" class="contact-number">
        <i class="fas fa-phone"></i> (313) 241-0680
    </a>

    <button class="hamburger" id="hamburger">
        <i class="fas fa-bars"></i>
    </button>
</nav>

<div class="mobile-sidebar" id="mobileSidebar">
    <button class="close-btn" id="closeBtn">
        <i class="fas fa-times"></i>
    </button>

    <div class="mobile-nav-container">
        <div class="mobile-logo-container">
            <!-- <img src="https://via.placeholder.com/36x36/e63946/ffffff?text=CT" alt="CoreTech Dispatch Logo" class="mobile-logo-img"> -->
            <div class="mobile-logo-text">
                CORETECH <span>DISPATCH</span>
            </div>
        </div>

        <ul class="mobile-nav-links">
            <li class="has-mobile-dropdown">

                <button class="mobile-dropdown-btn" aria-label="Show Services Menu" tabindex="0">
                    <a href="{{ url('info/all-services') }}" class="mobile-dropdown-link">
                        Services
                    </a>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="mobile-dropdown">
                    <li><a href="{{ url('service-detail/Dispatching-services') }}">Dispatching Services</a></li>
                    <li><a href="{{ url('service-detail/Neogtiation-services') }}">Rate Negotiation</a></li>
                    <li><a href="{{ url('service-detail/Factoring-services') }}">Freight Factoring</a></li>
                    <li><a href="{{ url('service-detail/Document-dispatch-services') }}">Document Dispatch
                            Services</a></li>
                    <li><a href="{{ url('service-detail/Trucking-document-services') }}">Trucking Paperwork
                            Services</a></li>
                    <li><a href="{{ url('service-detail/Trucking-accounting-services') }}">Trucking Accounting</a>
                    </li>
                    <li><a href="{{ url('service-detail/IFTA-services') }}">IFTA Reporting</a></li>
                    <li><a href="{{ url('service-detail/Dot-services') }}">DOT Compliance & Safety Services</a>
                    </li>
                    <li><a href="{{ url('service-detail/company-formation-services') }}">Company Formation
                            Services</a></li>
                    <li><a href="{{ url('service-detail/document-management-services') }}">Trucking Documents &
                            Management
                            Services</a></li>
                </ul>
            </li>
            <li>
                <button class="mobile-dropdown-btn" aria-label="Show Services Menu" tabindex="0">
                    <a href="{{ url('info/all-trucks') }}" class="mobile-dropdown-link">
                        Trucks
                    </a>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul class="mobile-dropdown">
                    <li><a href="{{ url('truck-detail/hot-spot') }}">Hotshot Truck Dispatching Service</a></li>
                    <li><a href="{{ url('truck-detail/power-truck') }}">Power Only Dispatching Service</a></li>
                    <li><a href="{{ url('truck-detail/flatbed-truck') }}">Flatbed Truck Dispatching Service</a>
                    </li>
                    <li><a href="{{ url('truck-detail/reefer-truck') }}">Reefer Truck Dispatching Service</a></li>
                    <li><a href="{{ url('truck-detail/stepdeck-truck') }}">Step Deck Dispatching Service</a></li>
                    <li><a href="{{ url('truck-detail/dryvan-truck') }}">Dry Van Dispatching Service</a></li>
                    <li><a href="{{ url('truck-detail/conestoga-truck') }}">Conestoga Trailer Dispatching
                            Service</a></li>
                    <li><a href="{{ url('truck-detail/box-truck') }}">Box Truck Dispatching Service</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/faqs') }}">FAQ</a></li>
            <li>
                <button class="mobile-dropdown-btn" aria-label="Show Services Menu" tabindex="0">
                    Company<i class="fas fa-chevron-down"></i>
                </button>
                <ul class="mobile-dropdown">
                    <li><a href="{{ url('info/about-us') }}">About Us</a></li>
                    <li><a href="{{ url('info/how-to-start') }}">How to Start</a></li>
                    <li><a href="{{ url('info/shipper') }}">Shippers</a></li>
                    <li><a href="{{ url('info/ourdrivers') }}">Our Drivers</a></li>
                </ul>
            </li>
            <li><a href="{{ url('info/contact-us') }}">Contact Us</a></li>
        </ul>

        <div class="mobile-contact">
            <a href="tel:+03132410680" class="mobile-contact-number">
                <i class="fas fa-phone"></i> (313) 241-0680
            </a>
        </div>
    </div>
</div>

<!-- Overlay -->
<div class="overlay" id="overlay"></div>
