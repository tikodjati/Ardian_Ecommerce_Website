<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Collection - WEB ARDIAN</title>
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'saveur': ['saveurSans', 'serif'],
                        'jost': ['jost', 'sans-serif'],
                        'jost-light': ['jost_light', 'sans-serif'],
                    }
                }
            }
        }
    </script>
    <style>
        @font-face { font-family: saveurSans; src: url(fonts/Saveur_sans.otf); }
        @font-face { font-family: jost; src: url(fonts/Jost.ttf); }
        @font-face { font-family: jost_light; src: url(fonts/Jost_light.ttf); }
        
        /* Smooth transitions */
        .filter-item {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        
        .product-card {
            opacity: 1;
            transform: scale(1);
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
        
        .product-card.hidden {
            opacity: 0;
            transform: scale(0.95);
            height: 0;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        #main-nav {
            background-color: white !important;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
        }
        
        #main-nav .nav-text {
            color: #111827 !important;
        }
    </style>
</head>
<body class="bg-white text-black font-jost antialiased">

    @include('main_pages.navbar')

    <main class="pt-24 lg:pt-32 pb-16">
        
        <!-- Breadcrumb -->
        <div class="px-6 lg:px-12 mb-8 text-xs text-gray-500 uppercase tracking-widest">
            <a href="/" class="hover:text-black">Home</a>
            <span class="mx-2">/</span>
            <span class="text-black border-b border-black" id="breadcrumb-category">All Products</span>
        </div>

        <!-- Page Header -->
        <div class="px-6 lg:px-12 mb-12 text-center">
            <h1 class="text-4xl lg:text-5xl font-saveur text-black mb-4">Our Collection</h1>
            <p class="text-gray-600 font-jost-light max-w-2xl mx-auto">
                Discover our curated selection of premium leather goods, crafted with meticulous attention to detail
            </p>
        </div>

        <div class="max-w-[1440px] mx-auto px-6 lg:px-12">
            
            <!-- Filter Bar -->
            <div class="mb-10 pb-6 border-b border-gray-200">
                <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between gap-6">
                    
                    <!-- Category Filters -->
                    <div class="flex flex-wrap gap-3">
                        <button class="filter-btn filter-item px-5 py-2.5 text-xs uppercase tracking-widest border border-black bg-black text-white hover:bg-gray-800 transition-colors" data-category="all">
                            All Products
                        </button>
                        <button class="filter-btn filter-item px-5 py-2.5 text-xs uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors" data-category="women">
                            Women
                        </button>
                        <button class="filter-btn filter-item px-5 py-2.5 text-xs uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors" data-category="men">
                            Men
                        </button>
                        <button class="filter-btn filter-item px-5 py-2.5 text-xs uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors" data-category="bags">
                            Bags
                        </button>
                        <button class="filter-btn filter-item px-5 py-2.5 text-xs uppercase tracking-widest border border-gray-300 text-gray-700 hover:border-black hover:text-black transition-colors" data-category="accessories">
                            Accessories
                        </button>
                    </div>

                    <!-- Sort & Results Count -->
                    <div class="flex items-center gap-6">
                        <span class="text-sm text-gray-500 font-jost-light">
                            <span id="product-count">24</span> Products
                        </span>
                        
                        <div class="relative">
                            <select id="sort-select" class="appearance-none bg-white border border-gray-300 text-sm text-gray-700 py-2.5 pl-4 pr-10 focus:outline-none focus:border-black cursor-pointer font-jost-light">
                                <option value="featured">Featured</option>
                                <option value="price-low">Price: Low to High</option>
                                <option value="price-high">Price: High to Low</option>
                                <option value="newest">Newest</option>
                                <option value="name">Name: A-Z</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-3 text-gray-500">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                                </svg>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Products Grid -->
            <div id="products-grid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 lg:gap-8">
                
                <!-- Product Card 1 -->
                <div class="product-card group cursor-pointer" data-category="women bags" data-price="300000" data-name="Tas Raimu Ancok">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar1.jpeg') }}" 
                                 alt="Tas Raimu Ancok" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Tas Raimu Ancok
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 300.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 2 -->
                <div class="product-card group cursor-pointer" data-category="women bags" data-price="350000" data-name="Tas Kulit Premium">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar2.jpeg') }}" 
                                 alt="Tas Kulit" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Tas Kulit Premium
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 350.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 3 -->
                <div class="product-card group cursor-pointer" data-category="women bags" data-price="280000" data-name="Tas Sapi Elegant">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar3.jpeg') }}" 
                                 alt="Tas Sapi" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Tas Sapi Elegant
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 280.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 4 -->
                <div class="product-card group cursor-pointer" data-category="men bags" data-price="400000" data-name="Tas Jambuss Executive">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar4.jpeg') }}" 
                                 alt="Tas Jambuss" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Tas Jambuss Executive
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 400.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 5 -->
                <div class="product-card group cursor-pointer" data-category="men accessories" data-price="150000" data-name="Leather Wallet Classic">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar1.jpeg') }}" 
                                 alt="Wallet" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Leather Wallet Classic
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 150.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 6 -->
                <div class="product-card group cursor-pointer" data-category="women accessories" data-price="200000" data-name="Designer Belt">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar2.jpeg') }}" 
                                 alt="Belt" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Designer Belt
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 200.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 7 -->
                <div class="product-card group cursor-pointer" data-category="women bags" data-price="320000" data-name="Evening Clutch">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar3.jpeg') }}" 
                                 alt="Clutch" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Evening Clutch
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 320.000</p>
                        </div>
                    </a>
                </div>

                <!-- Product Card 8 -->
                <div class="product-card group cursor-pointer" data-category="men bags" data-price="450000" data-name="Business Briefcase">
                    <a href="{{ url('/product/detail') }}">
                        <div class="relative overflow-hidden bg-[#f6f5f3] mb-4 aspect-[3/4] flex items-center justify-center">
                            <img src="{{ asset('images/Gambar4.jpeg') }}" 
                                 alt="Briefcase" 
                                 class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                            <div class="absolute inset-0 bg-black opacity-0 group-hover:opacity-5 transition-opacity duration-300"></div>
                        </div>
                        <div class="text-center">
                            <h3 class="text-sm font-medium text-gray-900 mb-1 tracking-wide group-hover:underline underline-offset-4 decoration-1">
                                Business Briefcase
                            </h3>
                            <p class="text-xs text-gray-500 font-jost-light">IDR 450.000</p>
                        </div>
                    </a>
                </div>

            </div>

            <!-- Load More Button -->
            <div class="text-center mt-16">
                <button class="inline-block border-2 border-black px-12 py-3.5 text-sm uppercase tracking-widest hover:bg-black hover:text-white transition-all duration-300">
                    Load More Products
                </button>
            </div>

        </div>

    </main>

    @include('main_pages.footer')

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const productCards = document.querySelectorAll('.product-card');
        const productCount = document.getElementById('product-count');
        const breadcrumbCategory = document.getElementById('breadcrumb-category');
        const sortSelect = document.getElementById('sort-select');

        let currentCategory = 'all';

        // Category Filter
        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                filterButtons.forEach(btn => {
                    btn.classList.remove('bg-black', 'text-white', 'border-black');
                    btn.classList.add('border-gray-300', 'text-gray-700');
                });
                this.classList.add('bg-black', 'text-white', 'border-black');
                this.classList.remove('border-gray-300', 'text-gray-700');

                // Get selected category
                currentCategory = this.dataset.category;
                
                // Update breadcrumb
                breadcrumbCategory.textContent = this.textContent.trim();

                // Filter products
                filterProducts();
            });
        });

        // Sort functionality
        sortSelect.addEventListener('change', function() {
            sortProducts(this.value);
        });

        function filterProducts() {
            let visibleCount = 0;

            productCards.forEach(card => {
                const categories = card.dataset.category.split(' ');
                
                if (currentCategory === 'all' || categories.includes(currentCategory)) {
                    card.classList.remove('hidden');
                    visibleCount++;
                } else {
                    card.classList.add('hidden');
                }
            });

            productCount.textContent = visibleCount;
        }

        function sortProducts(sortType) {
            const grid = document.getElementById('products-grid');
            const cardsArray = Array.from(productCards);

            cardsArray.sort((a, b) => {
                switch(sortType) {
                    case 'price-low':
                        return parseInt(a.dataset.price) - parseInt(b.dataset.price);
                    case 'price-high':
                        return parseInt(b.dataset.price) - parseInt(a.dataset.price);
                    case 'name':
                        return a.dataset.name.localeCompare(b.dataset.name);
                    case 'newest':
                        // Reverse order for newest
                        return cardsArray.indexOf(b) - cardsArray.indexOf(a);
                    default:
                        // Featured - original order
                        return 0;
                }
            });

            // Re-append sorted cards
            cardsArray.forEach(card => grid.appendChild(card));
        }

        // URL parameter handling for deep linking from navbar
        window.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            const category = urlParams.get('category');
            
            if (category) {
                const targetButton = document.querySelector(`[data-category="${category}"]`);
                if (targetButton) {
                    targetButton.click();
                }
            }
        });
    </script>

</body>
</html>