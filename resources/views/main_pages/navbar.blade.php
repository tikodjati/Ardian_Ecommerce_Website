<!-- Navigation Bar -->
<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50
       bg-transparent
       transition-all duration-300 ease-in-out
       p-[15px]">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <!-- Mobile: Hamburger Menu (Left) -->
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <!-- Desktop: Menu & Search Buttons -->
            <div class="hidden lg:flex items-center space-x-6">
                <button id="desktop-menu-button" class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <span class="text-sm font-medium">Menu</span>
                </button>
                
                <button class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <span class="text-sm font-medium">Search</span>
                </button>
            </div>

            <!-- Logo - Centered on all screens -->
            <div class="absolute left-1/2 -translate-x-1/2">
                <h1 class="text-[20px] sm:text-[24px] lg:text-[30px] font-medium uppercase tracking-[0.1em]
                        font-[Poppins]
                        nav-text
                        transition-colors duration-300">
                    WEB ARDIAN
                </h1>
            </div>

            <!-- Right Menu Icons -->
            <div class="flex items-center space-x-3 sm:space-x-4 lg:space-x-6">
                <!-- Call Us - Hidden on mobile -->
                <button class="hidden md:block text-sm font-medium
                   nav-text
                   transition-colors duration-300">
                    Call Us
                </button>
                
                <!-- Search Icon - Mobile only -->
                <button class="lg:hidden nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <!-- Wishlist Icon -->
                <button class="nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </button>
                
                <!-- Profile Icon -->
                <button class="nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Dropdown (Muncul dari atas) -->
<div id="mobile-dropdown-menu" class="lg:hidden fixed left-0 right-0 bg-white z-40 shadow-lg transform -translate-y-full opacity-0 transition-all duration-00 ease-in-out"
     style="top: 90px;">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="py-6">
            <div class="flex justify-between items-center mb-5 pb-4 border-b border-gray-200">
                <h2 class="text-sm font-semibold uppercase tracking-wider text-gray-900">Menu</h2>
                <button id="menu-close-mobile" class="p-1.5 hover:bg-gray-100 rounded-full transition-colors">
                    <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <nav class="space-y-0.5 max-h-[calc(100vh-250px)] overflow-y-auto">
                <!-- Main Menu Items -->
                <a href="#" class="flex justify-between items-center text-[15px] font-medium text-gray-900 hover:bg-gray-50 transition-colors px-3 py-3.5 rounded-lg">
                    <span>Collections</span>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#" class="flex justify-between items-center text-[15px] font-medium text-gray-900 hover:bg-gray-50 transition-colors px-3 py-3.5 rounded-lg">
                    <span>New Arrivals</span>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#" class="flex justify-between items-center text-[15px] font-medium text-gray-900 hover:bg-gray-50 transition-colors px-3 py-3.5 rounded-lg">
                    <span>Categories</span>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#" class="flex justify-between items-center text-[15px] font-medium text-gray-900 hover:bg-gray-50 transition-colors px-3 py-3.5 rounded-lg">
                    <span>About</span>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="#" class="flex justify-between items-center text-[15px] font-medium text-gray-900 hover:bg-gray-50 transition-colors px-3 py-3.5 rounded-lg">
                    <span>Contact</span>
                    <svg class="w-4 h-4 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                
                <!-- Divider & Secondary Items -->
                <div class="pt-4 mt-4 border-t border-gray-200 space-y-0.5">
                    <a href="#" class="block text-[13px] text-gray-600 hover:bg-gray-50 transition-colors px-3 py-2.5 rounded-lg">
                        Store Locator
                    </a>
                    <a href="#" class="block text-[13px] text-gray-600 hover:bg-gray-50 transition-colors px-3 py-2.5 rounded-lg">
                        Customer Service
                    </a>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- Desktop Sidebar Menu (Muncul dari kiri) -->
<div id="desktop-sidebar-menu" class="hidden lg:block fixed top-0 left-0 h-full w-80 bg-white z-40 shadow-2xl transform -translate-x-full transition-transform duration-500 ease-in-out">
    <div class="flex flex-col h-full">
        <!-- Sidebar Header -->
        <div class="flex justify-between items-center p-8 border-b border-gray-200">
            <h2 class="text-lg font-semibold uppercase tracking-wider text-gray-900">Menu</h2>
            <button id="menu-close-desktop" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <!-- Sidebar Content -->
        <div class="flex-1 overflow-y-auto p-8">
            <!-- Collections Section -->
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">Collections</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">New Arrivals</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Best Sellers</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Limited Edition</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Sale</a>
                </nav>
            </div>

            <!-- Categories Section -->
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">Categories</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Men</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Women</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Accessories</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Shoes</a>
                </nav>
            </div>

            <!-- About Section -->
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">About</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Our Story</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Sustainability</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Careers</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Press</a>
                </nav>
            </div>

            <!-- Customer Care Section -->
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">Customer Care</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Contact Us</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Shipping Info</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Returns</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">FAQ</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Backdrop Overlay -->
<div id="menu-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-30 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<style>
    /* Default state - white text */
    .nav-text {
        color: white;
    }
    
    /* When navbar is hovered OR menu is active - black text and white background */
    #main-nav:hover {
        background-color: white !important;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    }
    
    #main-nav:hover .nav-text {
        color: #111827 !important;
    }
    
    /* When menu is open - keep white background and black text */
    #main-nav.nav-active {
        background-color: white !important;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    }
    
    #main-nav.nav-active .nav-text {
        color: #111827 !important;
    }
</style>

<script>
    const mainNav = document.getElementById('main-nav');
    const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
    const desktopSidebarMenu = document.getElementById('desktop-sidebar-menu');
    const menuBackdrop = document.getElementById('menu-backdrop');
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const desktopMenuButton = document.getElementById('desktop-menu-button');
    const menuCloseMobile = document.getElementById('menu-close-mobile');
    const menuCloseDesktop = document.getElementById('menu-close-desktop');
    
    let isMenuOpen = false;

    function openMobileMenu() {
        isMenuOpen = true;
        mainNav.classList.add('nav-active');
        mobileDropdownMenu.classList.remove('-translate-y-full', 'opacity-0');
        menuBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden';
    }

    function openDesktopMenu() {
        isMenuOpen = true;
        mainNav.classList.add('nav-active');
        desktopSidebarMenu.classList.remove('-translate-x-full');
        menuBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
        isMenuOpen = false;
        mainNav.classList.remove('nav-active');
        mobileDropdownMenu.classList.add('-translate-y-full', 'opacity-0');
        desktopSidebarMenu.classList.add('-translate-x-full');
        menuBackdrop.classList.add('opacity-0', 'pointer-events-none');
        document.body.style.overflow = '';
    }

    // Mobile menu button
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', () => {
            if (isMenuOpen) {
                closeMenu();
            } else {
                openMobileMenu();
            }
        });
    }

    // Desktop menu button
    if (desktopMenuButton) {
        desktopMenuButton.addEventListener('click', () => {
            if (isMenuOpen) {
                closeMenu();
            } else {
                openDesktopMenu();
            }
        });
    }

    // Close buttons
    if (menuCloseMobile) {
        menuCloseMobile.addEventListener('click', closeMenu);
    }

    if (menuCloseDesktop) {
        menuCloseDesktop.addEventListener('click', closeMenu);
    }

    menuBackdrop.addEventListener('click', closeMenu);

    // Close menu on ESC key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && isMenuOpen) {
            closeMenu();
        }
    });
</script>
