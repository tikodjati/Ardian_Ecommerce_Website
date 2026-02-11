<nav id="main-nav" class="fixed top-0 left-0 right-0 z-50
       bg-transparent
       transition-all duration-300 ease-in-out
       p-[15px]">
    
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex justify-between items-center h-16">
            
            <div class="lg:hidden">
                <button id="mobile-menu-button" class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>
            </div>

            <div class="hidden lg:flex items-center space-x-6">
                <button id="desktop-menu-button" class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <span class="text-sm font-medium">Menu</span>
                </button>
                
                <button id="btn-search-desktop" class="flex items-center space-x-2
                   nav-text
                   transition-colors duration-300">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <span class="text-sm font-medium">Search</span>
                </button>
            </div>

            <div class="absolute left-1/2 -translate-x-1/2">
                <h1 class="text-[20px] sm:text-[24px] lg:text-[30px] font-medium uppercase tracking-[0.1em]
                        font-[Poppins]
                        nav-text
                        transition-colors duration-300">
                    WEB ARDIAN
                </h1>
            </div>

            <div class="flex items-center space-x-3 sm:space-x-4 lg:space-x-6">
                <button class="hidden md:block text-sm font-medium
                   nav-text
                   transition-colors duration-300">
                    Call Us
                </button>
                
                <button id="btn-search-mobile" class="lg:hidden nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>

                <button class="nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                    </svg>
                </button>
                
                <button class="nav-text transition-colors duration-300">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                    </svg>
                </button>
            </div>
        </div>

        <div id="search-overlay" 
             class="absolute inset-0 bg-white z-[60] flex items-center px-4 sm:px-8 
                    transition-all duration-500 ease-[cubic-bezier(0.32,0.72,0,1)]
                    opacity-0 invisible -translate-y-4 scale-y-95 origin-top">
            
            <div class="w-full flex items-center max-w-4xl mx-auto">
                <svg class="w-5 h-5 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                </svg>
                
                <form action="#" method="GET" class="flex-1">
                    <input type="text" 
                           id="search-input"
                           name="q"
                           placeholder="Cari produk..." 
                           class="w-full bg-transparent border-b-2 border-transparent focus:border-gray-900 text-gray-900 text-lg sm:text-xl placeholder-gray-400 focus:outline-none py-2 transition-colors"
                           autocomplete="off">
                </form>

                <button id="btn-close-search" class="ml-4 p-2 text-gray-500 hover:text-gray-900 transition-colors transform hover:rotate-90 duration-300">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
        </div>
</nav>

<div id="mobile-dropdown-menu" class="lg:hidden fixed left-0 right-0 bg-white z-40 shadow-lg transform -translate-y-full opacity-0 transition-all duration-300 ease-in-out"
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

<div id="desktop-sidebar-menu" class="hidden lg:block fixed top-0 left-0 h-full w-80 bg-white z-40 shadow-2xl transform -translate-x-full transition-transform duration-500 ease-in-out">
    <div class="flex flex-col h-full">
        <div class="flex justify-between items-center p-8 border-b border-gray-200">
            <h2 class="text-lg font-semibold uppercase tracking-wider text-gray-900">Menu</h2>
            <button id="menu-close-desktop" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto p-8">
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">Collections</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">New Arrivals</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Best Sellers</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Limited Edition</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Sale</a>
                </nav>
            </div>
            
            <div class="mb-8">
                <h3 class="text-xs font-semibold uppercase tracking-wider mb-4 text-dark-500">About</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Our Story</a>
                    <a href="#" class="block text-gray-700 hover:text-gray-900 hover:translate-x-1 transition-all">Sustainability</a>
                </nav>
            </div>
        </div>
    </div>
</div>

<div id="menu-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-30 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<style>
    /* Default state - white text */
    .nav-text {
        color: white;
    }
    
    /* When navbar is hovered OR menu/search is active - black text and white background */
    #main-nav:hover, #main-nav.nav-active, #main-nav.search-active {
        background-color: white !important;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    }
    
    #main-nav:hover .nav-text, #main-nav.nav-active .nav-text, #main-nav.search-active .nav-text {
        color: #111827 !important;
    }
    
    /* Animation Utility Class (Toggled by JS) */
    .search-open {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) scaleY(1) !important;
    }
</style>

<script src="{{ asset('js/navbar.js') }}"></script>