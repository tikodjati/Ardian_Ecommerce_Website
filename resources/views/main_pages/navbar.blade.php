@php
    // --- DATA PRODUK (Sama seperti sebelumnya) ---
    $products = [
    'new-arrivals' => [
        'tas' => [
            'label' => 'New In: Bags',
            'items' => [
                ['name' => 'Go-14 MM', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Go-14'],
                ['name' => 'Capucines Mini', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Capucines'],
                ['name' => 'Side Trunk', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Side+Trunk'],
                ['name' => 'Coussin BB', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Coussin'],
            ]
        ],
        'baju' => [
            'label' => 'New In: Ready to Wear',
            'items' => [
                ['name' => 'Monogram Coat', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Coat'],
                ['name' => 'Silk Dress', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Dress'],
                ['name' => 'Tweed Jacket', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Jacket'],
            ]
        ]
    ],
    'best-sellers' => [
        'tas' => [
            'label' => 'Best Sellers: Bags',
            'items' => [
                ['name' => 'Neverfull MM', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Neverfull'],
                ['name' => 'Speedy 25', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Speedy'],
            ]
        ],
        'baju' => [
            'label' => 'Best Sellers: Clothing',
            'items' => [
                ['name' => 'Classic T-Shirt', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=T-Shirt'],
            ]
        ]
    ],
    'limited-editions' => [
        'tas' => [
            'label' => 'Limited Edition: Artist Series',
            'items' => [
                ['name' => 'Artycapucines', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Artycapucines'],
                ['name' => 'Horizon 55 Silver', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Horizon+Ltd'],
            ]
        ],
        'baju' => [
            'label' => 'Limited Edition: Runway Pieces',
            'items' => [
                ['name' => 'Embroidered Gown', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Gown'],
            ]
        ]
    ],
    'sale' => [
        'tas' => [
            'label' => 'Exclusive Offers: Bags',
            'items' => [
                ['name' => 'Alma BB (Pastel)', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Alma+Sale'],
            ]
        ],
        'baju' => [
            'label' => 'Exclusive Offers: Ready to Wear',
            'items' => [
                ['name' => 'Wool Cardigan', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Cardigan+Sale'],
                ['name' => 'Cotton Shirt', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Shirt+Sale'],
            ]
        ]
    ]
];
@endphp

<nav id="main-nav" class="fixed top-0 left-0 right-0 z-40 bg-transparent transition-all duration-300 ease-in-out p-[15px]">
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex justify-between items-center h-16">
            
            <div class="flex items-center"> 
                <button id="menu-toggle-btn" class="flex items-center gap-2 nav-text transition-colors duration-300 cursor-pointer focus:outline-none">
                    <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <span class="hidden lg:inline text-sm font-medium">Menu</span>
                </button>
            </div>

            <div class="absolute left-1/2 -translate-x-1/2">
                <h1 class="text-[20px] sm:text-[24px] lg:text-[30px] font-medium uppercase tracking-[0.1em] font-[Poppins] nav-text transition-colors duration-300 select-none">
                    WEB ARDIAN
                </h1>
            </div>

            <div class="flex items-center">
                <button id="btn-search-desktop" class="hidden lg:flex items-center gap-2 nav-text transition-colors duration-300 cursor-pointer focus:outline-none">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <span class="text-sm font-medium">Search</span>
                </button>

                <button id="btn-search-mobile" class="lg:hidden nav-text transition-colors duration-300 cursor-pointer">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                </button>
            </div>
        </div>

        <div id="search-overlay" class="absolute inset-0 bg-white z-[70] flex items-center px-4 sm:px-8 transition-all duration-500 ease-[cubic-bezier(0.32,0.72,0,1)] opacity-0 invisible -translate-y-4 scale-y-95 origin-top">
            <div class="w-full flex items-center max-w-4xl mx-auto">
                <svg class="w-5 h-5 text-gray-500 mr-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                <form action="#" method="GET" class="flex-1">
                    <input type="text" id="search-input" name="q" placeholder="Cari produk..." class="w-full bg-transparent border-b-2 border-transparent focus:border-gray-900 text-gray-900 text-lg sm:text-xl placeholder-gray-400 focus:outline-none py-2 transition-colors" autocomplete="off">
                </form>
                <button id="btn-close-search" class="ml-4 p-2 text-gray-500 hover:text-gray-900 transition-colors transform hover:rotate-90 duration-300 cursor-pointer">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<div id="unified-menu" 
     class="fixed inset-0 z-[60] flex flex-col lg:flex-row transform -translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.32,0.72,0,1)] font-jost pointer-events-none"
     style="top: 0; padding-top: 0;">
    
    <div id="col-level-1" class="w-full lg:w-[20%] h-full border-r border-gray-100 bg-white z-30 flex flex-col pointer-events-auto shadow-xl">
        <div class="h-20 flex items-center justify-between px-8 border-b border-gray-100 flex-shrink-0">
            <span class="text-sm font-bold uppercase tracking-widest text-gray-900">Menu</span>
            <button id="close-menu-btn" class="p-2 hover:bg-gray-100 rounded-full transition-colors">
                <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>

        <div class="flex-1 overflow-y-auto px-8 pb-20 pt-6">
            <div class="mb-10">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Collections</h3>
                <nav class="flex flex-col gap-1">
                    <button data-id="new-arrivals" class="menu-l1-trigger w-full text-left py-3 text-[15px] text-gray-900 hover:text-gray-600 transition-colors flex justify-between items-center group">
                        <span>New Arrivals</span>
                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1 lg:opacity-0 lg:-translate-x-2 lg:group-hover:opacity-100 lg:group-hover:translate-x-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <button data-id="best-sellers" class="menu-l1-trigger w-full text-left py-3 text-[15px] text-gray-900 hover:text-gray-600 transition-colors flex justify-between items-center group">
                        <span>Best Sellers</span>
                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1 lg:opacity-0 lg:-translate-x-2 lg:group-hover:opacity-100 lg:group-hover:translate-x-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>

                    <button data-id="limited-editions" class="menu-l1-trigger w-full text-left py-3 text-[15px] text-gray-900 hover:text-gray-600 transition-colors flex justify-between items-center group">
                        <span>Limited Edition</span>
                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1 lg:opacity-0 lg:-translate-x-2 lg:group-hover:opacity-100 lg:group-hover:translate-x-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    <button data-id="sale" class="menu-l1-trigger w-full text-left py-3 text-[15px] text-gray-900 hover:text-gray-600 transition-colors flex justify-between items-center group">
                        <span>Sale</span>
                        <svg class="w-4 h-4 transform transition-transform group-hover:translate-x-1 lg:opacity-0 lg:-translate-x-2 lg:group-hover:opacity-100 lg:group-hover:translate-x-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                    {{-- <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Limited Edition</a>
                    <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Sale</a> --}}
                </nav>
            </div>
            <div class="mb-10">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">Categories</h3>
                <nav class="flex flex-col gap-1">
                    <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Men</a>
                    <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Women</a>
                </nav>
            </div>
            <div class="mb-10">
                <h3 class="text-xs font-bold text-gray-500 uppercase tracking-widest mb-4">About</h3>
                <nav class="flex flex-col gap-1">
                    <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Our Story</a>
                    <a href="#" class="block py-3 text-[15px] text-gray-900 hover:text-gray-600">Sustainability</a>
                </nav>
            </div>
        </div>
    </div>

    <div id="col-level-2" 
         class="hidden pointer-events-auto shadow-xl bg-white
                fixed inset-0 z-[70] w-full h-full 
                lg:static lg:z-auto lg:w-[25%] lg:h-full lg:border-r lg:border-gray-100 lg:shadow-none">
        <div class="lg:hidden h-20 flex items-center px-6 border-b border-gray-100 z-50 relative bg-white">
            <button id="back-to-l1" class="flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-gray-900 p-2 -ml-2 hover:bg-gray-50 rounded-lg">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                Back
            </button>
        </div>
        <div class="h-full flex flex-col px-10 pt-6 lg:pt-24 animate-fade-in overflow-y-auto">
            <h3 id="col-2-title" class="text-2xl font-saveur mb-8 text-black mt-2">Select Category</h3>
            <nav class="flex flex-col gap-0 border-t border-gray-100">
                <button data-cat="tas" class="menu-l2-trigger w-full text-left text-[15px] py-4 border-b border-gray-100 text-gray-500 hover:text-black hover:pl-2 transition-all duration-300 flex justify-between items-center group">
                    <span>Tas (Bags)</span>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
                <button data-cat="baju" class="menu-l2-trigger w-full text-left text-[15px] py-4 border-b border-gray-100 text-gray-500 hover:text-black hover:pl-2 transition-all duration-300 flex justify-between items-center group">
                    <span>Baju (Ready to Wear)</span>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100 lg:block" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </nav>
        </div>
    </div>

    <div id="col-level-3" 
     class="hidden pointer-events-auto shadow-xl bg-white
            fixed inset-0 z-[80] w-full h-full 
            lg:static lg:z-auto lg:w-[55%] lg:h-full lg:shadow-none">
    <div class="lg:hidden h-20 flex items-center px-6 border-b border-gray-100 z-50 relative bg-white">
        <button id="back-to-l2" class="flex items-center gap-2 text-sm font-bold uppercase tracking-widest text-gray-900 p-2 -ml-2 hover:bg-gray-50 rounded-lg">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
            Back
        </button>
    </div>
    <div class="h-full overflow-y-auto p-8 pt-6 lg:pt-24">
        {{-- PERBAIKAN: Menggunakan $products sesuai definisi di atas --}}
        @foreach($products as $triggerId => $categories)
            @foreach($categories as $catId => $content)
                <div id="panel-prod-{{ $triggerId }}-{{ $catId }}" class="level-3-panel hidden h-full animate-fade-in">
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100 mt-2">
                        <h4 class="text-lg font-medium text-black">{{ $content['label'] }}</h4>
                        <a href="#" class="text-xs uppercase tracking-wider underline hover:text-gray-600">View All</a>
                    </div>
                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 pb-20">
                        @foreach($content['items'] as $product)
                            <div class="group cursor-pointer">
                                <div class="aspect-[3/4] bg-[#f6f5f3] mb-3 overflow-hidden flex items-center justify-center relative">
                                    <img src="{{ $product['img'] }}" class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110" alt="{{ $product['name'] }}">
                                </div>
                                <h5 class="text-[13px] text-center text-black group-hover:underline decoration-1 underline-offset-4">
                                    {{ $product['name'] }}
                                </h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

</div>

<div id="menu-backdrop" class="fixed inset-0 bg-black bg-opacity-50 z-50 opacity-0 pointer-events-none transition-opacity duration-300"></div>

<style>
    /* Default Text Color: White */
    .nav-text { color: white; }

    #main-nav:hover, 
    #main-nav.nav-active, 
    #main-nav.search-active,
    #main-nav.scrolled {
        background-color: white !important;
        box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
    }
    
    #main-nav:hover .nav-text, 
    #main-nav.nav-active .nav-text, 
    #main-nav.search-active .nav-text,
    #main-nav.scrolled .nav-text {
        color: #111827 !important;
    }
    
    /* Animasi Search */
    .search-open {
        opacity: 1 !important;
        visibility: visible !important;
        transform: translateY(0) scaleY(1) !important;
    }
    
    /* Animasi Menu */
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(15px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-fade-in {
        animation: fadeInRight 0.4s ease-out forwards;
    }
</style>

<script src="{{ asset('js/navbar.js') }}"></script>