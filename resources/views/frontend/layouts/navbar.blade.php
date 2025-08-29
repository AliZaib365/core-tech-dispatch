    <nav class="navbar">
        <a href="{{ url('/') }}" class="logo-container">
            <!-- <img src="assets/images/logo.webp.jpg" alt="CoreTech Dispatch Logo" class="logo-img"> -->
            <div class="logo-text">
                CORETECH <span>DISPATCH</span>
            </div>
        </a>

        <ul class="nav-links">
            <li>
                <a href="services.html">Services <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="Dispatching-services.html">Dispatching Services</a></li>
                    <li><a href="Neogtiation-services.html">Rate Negotiation</a></li>
                    <li><a href="Factoring-services.html">Freight Factoring</a></li>
                    <li><a href="Document-dispatch-services.html">Document Dispatch Services</a></li>
                    <li><a href="Trucking-document-services.html">Trucking Paperwork Services</a></li>
                    <li><a href="Trucking-accounting-services.html">Trucking Accounting</a></li>
                    <li><a href="IFTA-services.html">IFTA Reporting</a></li>
                    <li><a href="Dot-services.html">DOT Compliance & Safety Services</a></li>
                    <li><a href="company-formation-services.html">Company Formation Services</a></li>
                    <li><a href="document-management-services.html">Trucking Documents & Management Services </a></li>
                </ul>
            </li>
            <li>
                <a href="truck.html">Trucks <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="Hotshot-truck.html">Hotshot Truck Dispatching Service</a></li>
                    <li><a href="power-truck.html">Power Only Dispatching Service</a></li>
                    <li><a href="flatbed-truck.html">Flatbed Truck Dispatching Service</a></li>
                    <li><a href="reefer-truck.html">Reefer Truck Dispatching Service</a></li>
                    <li><a href="stepdeck-truck.html">Step Deck Dispatching Service</a></li>
                    <li><a href="dryvan-truck.html">Dry Van Dispatching Service</a></li>
                    <li><a href="conestoga-truck.html">Conestoga Trailer Dispatching Service</a></li>
                    <li><a href="box-truck.html">Box Truck Dispatching Service</a></li>
                </ul>
            </li>

            <li><a href="{{ url('/faqs') }}">FAQ</a></li>
            <li>
                <a href="#">Company <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown">
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('how-to-start') }}">How to Start</a></li>
                    <li><a href="{{ url('shipper') }}">Shippers</a></li>
                    <li><a href="{{ url('ourdrivers') }}">Our Drivers</a></li>
                </ul>
            </li>
            <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
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
                        <a href="/services.html" class="mobile-dropdown-link">
                            Services
                        </a>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <ul class="mobile-dropdown">
                        <li><a href="Dispatching-services.html">Dispatching Services</a></li>
                        <li><a href="Neogtiation-services.html">Rate Negotiation</a></li>
                        <li><a href="Factoring-services.html">Freight Factoring</a></li>
                        <li><a href="Document-dispatch-services.html">Document Dispatch Services</a></li>
                        <li><a href="Trucking-document-services.html">Trucking Paperwork Services</a></li>
                        <li><a href="Trucking-accounting-services.html">Trucking Accounting</a></li>
                        <li><a href="IFTA-services.html">IFTA Reporting</a></li>
                        <li><a href="Dot-services.html">DOT Compliance & Safety Services</a></li>
                        <li><a href="company-formation-services.html">Company Formation Services</a></li>
                        <li><a href="document-management-services.html">Trucking Documents & Management Services </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <button class="mobile-dropdown-btn" aria-label="Show Services Menu" tabindex="0">
                        <a href="/truck.html" class="mobile-dropdown-link">
                            Trucks
                        </a>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <ul class="mobile-dropdown">
                        <li><a href="Hotshot-truck.html">Hotshot Truck Dispatching Service</a></li>
                        <li><a href="power-truck.html">Power Only Dispatching Service</a></li>
                        <li><a href="flatbed-truck.html">Flatbed Truck Dispatching Service</a></li>
                        <li><a href="reefer-truck.html">Reefer Truck Dispatching Service</a></li>
                        <li><a href="stepdeck-truck.html">Step Deck Dispatching Service</a></li>
                        <li><a href="dryvan-truck.html">Dry Van Dispatching Service</a></li>
                        <li><a href="conestoga-truck.html">Conestoga Trailer Dispatching Service</a></li>
                        <li><a href="box-truck.html">Box Truck Dispatching Service</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('/faqs') }}">FAQ</a></li>
                <li>
                    <button class="mobile-dropdown-btn" aria-label="Show Services Menu" tabindex="0">
                        Company<i class="fas fa-chevron-down"></i>
                    </button>
                    <ul class="mobile-dropdown">
                        <li><a href="{{ url('about-us') }}">About Us</a></li>
                        <li><a href="{{ url('how-to-start') }}">How to Start</a></li>
                        <li><a href="{{ url('shipper') }}">Shippers</a></li>
                        <li><a href="{{ url('ourdrivers') }}">Our Drivers</a></li>
                    </ul>
                </li>
                <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
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
