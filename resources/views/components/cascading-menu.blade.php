@php
    // --- DATA PRODUK UNTUK KOLOM KANAN ---
    // Struktur: [ID_TRIGGER_KIRI][ID_KATEGORI_TENGAH]
    $productsData = [
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
                    ['name' => 'Denim Pants', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Denim'],
                ]
            ]
        ],
        'best-sellers' => [
            'tas' => [
                'label' => 'Best Sellers: Bags',
                'items' => [
                    ['name' => 'Neverfull MM', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Neverfull'],
                    ['name' => 'Speedy 25', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Speedy'],
                    ['name' => 'Alma BB', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Alma'],
                ]
            ],
            'baju' => [
                'label' => 'Best Sellers: Clothing',
                'items' => [
                    ['name' => 'Classic T-Shirt', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=T-Shirt'],
                    ['name' => 'Run 55 Sneaker', 'img' => 'https://placehold.co/300x400/f6f5f3/333?text=Sneaker'],
                ]
            ]
        ]
    ];
@endphp

<div id="cascading-menu" 
     class="fixed inset-0 bg-white z-[100] transform translate-x-full transition-transform duration-500 ease-[cubic-bezier(0.32,0.72,0,1)] flex flex-col md:flex-row font-jost">
    
    <button id="close-menu-btn" class="absolute top-6 right-6 md:left-6 z-50 flex items-center gap-2 text-sm text-gray-500 hover:text-black transition-colors">
        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/></svg>
        <span class="hidden md:inline">Close</span>
    </button>

    <div class="w-full md:w-[25%] lg:w-[20%] h-full border-r border-gray-100 pt-20 px-8 overflow-y-auto bg-white z-30">
        
        <div class="mb-10">
            <h3 class="text-xs font-bold text-gray-900 uppercase tracking-widest mb-6">Collections</h3>
            <nav class="flex flex-col gap-4">
                <button data-id="new-arrivals" class="level-1-trigger text-left text-[15px] text-gray-500 hover:text-black transition-all flex justify-between items-center group w-full">
                    <span>New Arrivals</span>
                    <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>

                <button data-id="best-sellers" class="level-1-trigger text-left text-[15px] text-gray-500 hover:text-black transition-all flex justify-between items-center group w-full">
                    <span>Best Sellers</span>
                    <svg class="w-4 h-4 opacity-0 -translate-x-2 group-hover:opacity-100 group-hover:translate-x-0 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>

                <a href="#" class="text-[15px] text-gray-500 hover:text-black block">Limited Edition</a>
                <a href="#" class="text-[15px] text-gray-500 hover:text-black block">Sale</a>
            </nav>
        </div>

        <div>
            <h3 class="text-xs font-bold text-gray-900 uppercase tracking-widest mb-6">About</h3>
            <nav class="flex flex-col gap-4">
                <a href="#" class="text-[15px] text-gray-500 hover:text-black block">Our Story</a>
                <a href="#" class="text-[15px] text-gray-500 hover:text-black block">Sustainability</a>
            </nav>
        </div>
    </div>

    <div id="col-level-2" class="w-full md:w-[30%] lg:w-[25%] h-full border-r border-gray-100 bg-white z-20 overflow-y-auto hidden">
        
        <div id="categories-container" class="h-full flex flex-col pt-20 px-10 animate-fade-in hidden">
            <h3 id="col-2-title" class="text-2xl font-saveur mb-8 text-black">Select Category</h3>
            
            <nav class="flex flex-col gap-0 border-t border-gray-100">
                <button 
                    data-cat="tas" 
                    class="level-2-trigger w-full text-left text-[15px] py-4 border-b border-gray-100 text-gray-500 hover:text-black hover:pl-2 transition-all duration-300 flex justify-between items-center group">
                    <span>Tas (Bags)</span>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>

                <button 
                    data-cat="baju" 
                    class="level-2-trigger w-full text-left text-[15px] py-4 border-b border-gray-100 text-gray-500 hover:text-black hover:pl-2 transition-all duration-300 flex justify-between items-center group">
                    <span>Baju (Ready to Wear)</span>
                    <svg class="w-3 h-3 opacity-0 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                </button>
            </nav>
        </div>
    </div>

    <div id="col-level-3" class="w-full md:w-[45%] lg:w-[55%] h-full bg-white z-10 overflow-y-auto p-8 pt-20 hidden">
        
        @foreach($productsData as $triggerId => $categories)
            @foreach($categories as $catId => $content)
                <div id="panel-prod-{{ $triggerId }}-{{ $catId }}" class="level-3-panel hidden h-full animate-fade-in">
                    
                    <div class="flex items-center justify-between mb-6 pb-4 border-b border-gray-100">
                        <h4 class="text-lg font-medium text-black">{{ $content['label'] }}</h4>
                        <a href="#" class="text-xs uppercase tracking-wider underline hover:text-gray-600">View All</a>
                    </div>

                    <div class="grid grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6">
                        @foreach($content['items'] as $product)
                            <div class="group cursor-pointer">
                                <div class="aspect-[3/4] bg-[#f6f5f3] mb-3 overflow-hidden flex items-center justify-center relative">
                                    <img src="{{ $product['img'] }}" class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
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

        <div id="prod-placeholder" class="hidden h-full flex items-center justify-center text-gray-400 text-sm">
            Select a category to view products.
        </div>
    </div>
</div>

<style>
    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(15px); }
        to { opacity: 1; transform: translateX(0); }
    }
    .animate-fade-in {
        animation: fadeInRight 0.4s ease-out forwards;
    }
</style>