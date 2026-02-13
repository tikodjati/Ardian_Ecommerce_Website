<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tas Raimu Ancok - WEB ARDIAN</title>
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
        
        /* Hide scrollbar */
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        .fade-enter { opacity: 0; }
        .fade-enter-active { opacity: 1; transition: opacity 300ms ease-in; }

        #main-nav {
            background-color: white !important;
            box-shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1);
        }
        
        #main-nav .nav-text {
            color: #111827 !important; /* Tailwind Gray-900 */
        }
    </style>
</head>
<body class="bg-white text-black font-jost antialiased">

    @include('main_pages.navbar')

    <main class="pt-24 pb-16 lg:pt-32" id="product-page">
        
        <div class="px-6 lg:px-12 mb-8 text-xs text-gray-500 uppercase tracking-widest">
            <a href="/" class="hover:text-black">Home</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-black">Women</a>
            <span class="mx-2">/</span>
            <a href="#" class="hover:text-black">Handbags</a>
            <span class="mx-2">/</span>
            <span class="text-black border-b border-black">Tas Raimu Ancok</span>
        </div>

        <div class="max-w-[1440px] mx-auto grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 px-0 lg:px-12">
            
            <div class="flex flex-col-reverse lg:flex-row gap-4 px-4 lg:px-0">
                <div class="flex lg:flex-col gap-4 overflow-x-auto lg:overflow-visible no-scrollbar w-full lg:w-24 flex-shrink-0">
                    @foreach([1, 2, 3, 4] as $index)
                    <button class="gallery-thumb w-20 h-20 lg:w-24 lg:h-32 border border-transparent hover:border-black transition-all flex-shrink-0"
                            data-src="{{ asset('images/Gambar'.$index.'.jpeg') }}"> <img src="{{ asset('images/Gambar'.$index.'.jpeg') }}" class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all">
                    </button>
                    @endforeach
                </div>

                <div class="relative w-full aspect-[3/4] bg-[#f6f5f3] overflow-hidden group">
                    <img id="main-image" 
                         src="{{ asset('images/Gambar1.jpeg') }}" 
                         alt="Tas Raimu Ancok" 
                         class="w-full h-full object-cover mix-blend-multiply transition-transform duration-700 ease-out cursor-zoom-in">
                    
                    <div id="zoom-lens" class="hidden lg:block absolute w-48 h-48 border border-gray-400 bg-white/10 pointer-events-none opacity-0"></div>
                </div>
            </div>

            <div class="px-6 lg:pr-12 lg:pl-4 flex flex-col h-full">
                
                <div class="mb-8">
                    <h2 class="text-sm font-bold text-gray-500 tracking-widest mb-2">NEW ARRIVAL</h2>
                    <h1 class="text-3xl lg:text-5xl font-saveur text-black mb-4 leading-tight">
                        Tas Raimu Ancok
                    </h1>
                    <p class="text-xl text-gray-900 font-medium">IDR 300.000</p>
                </div>

                <div class="mb-8 text-gray-600 text-[15px] leading-relaxed font-jost-light">
                    <p>
                        Tas Raimu Ancok menghadirkan perpaduan sempurna antara keanggunan klasik dan fungsi modern. 
                        Dibuat dari kulit premium dengan detail jahitan tangan yang presisi. Cocok untuk menemani 
                        aktivitas harian maupun acara formal Anda.
                    </p>
                </div>

                <div class="mb-8">
                    <span class="text-sm font-bold uppercase tracking-widest block mb-3">Material</span>
                    <div class="flex gap-3">
                        <button class="variant-btn px-6 py-2 border border-black text-black hover:bg-black hover:text-white transition-colors uppercase text-xs tracking-widest active-variant">
                            Leather
                        </button>
                        <button class="variant-btn px-6 py-2 border border-gray-300 text-gray-500 hover:border-black hover:text-black transition-colors uppercase text-xs tracking-widest">
                            Canvas
                        </button>
                    </div>
                </div>

                <div class="mt-auto border-t border-gray-100 pt-8">
                    <div class="flex flex-col gap-4">
                        <button id="add-to-cart-btn" class="w-full bg-black text-white py-4 text-sm uppercase tracking-[0.2em] hover:bg-gray-800 transition-all flex justify-center items-center gap-3">
                            <span>Place in Cart</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/></svg>
                        </button>
                        
                        <div class="flex gap-4 justify-center text-xs text-gray-500 uppercase tracking-wider">
                            <button class="flex items-center gap-2 hover:text-black"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/></svg> Add to Wishlist</button>
                            <button class="flex items-center gap-2 hover:text-black"><svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/></svg> Share</button>
                        </div>
                    </div>
                </div>

                <div class="mt-10 border-t border-gray-200">
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full py-4 flex justify-between items-center text-sm uppercase tracking-widest hover:text-gray-600">
                            Product Details
                            <span class="icon text-lg">+</span>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                            <ul class="pb-6 pl-4 list-disc text-sm text-gray-600 font-jost-light space-y-2">
                                <li>35 x 27 x 14 cm (Length x Height x Width)</li>
                                <li>Black / Brown</li>
                                <li>Cowhide-leather trim</li>
                                <li>Gold-color hardware</li>
                                <li>Inside flat pocket with zipper</li>
                            </ul>
                        </div>
                    </div>
                    <div class="accordion-item border-b border-gray-200">
                        <button class="accordion-header w-full py-4 flex justify-between items-center text-sm uppercase tracking-widest hover:text-gray-600">
                            Delivery & Returns
                            <span class="icon text-lg">+</span>
                        </button>
                        <div class="accordion-content max-h-0 overflow-hidden transition-all duration-300">
                            <p class="pb-6 text-sm text-gray-600 font-jost-light">
                                Complimentary delivery. Returns and exchanges are accepted within 30 days.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <section class="mt-24 px-6 lg:px-12 max-w-[1440px] mx-auto">
            <h3 class="text-center text-2xl font-saveur mb-12">You May Also Like</h3>
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach([2, 3, 4, 1] as $img)
                <div class="group cursor-pointer text-center">
                    <div class="aspect-[3/4] bg-[#f6f5f3] mb-4 overflow-hidden flex items-center justify-center relative">
                        <img src="{{ asset('images/Gambar'.$img.'.jpeg') }}" class="w-[85%] h-auto mix-blend-multiply transition-transform duration-700 group-hover:scale-110">
                    </div>
                    <h4 class="text-sm font-medium tracking-wide group-hover:underline underline-offset-4 decoration-1">Product Name {{ $img }}</h4>
                    <p class="text-xs text-gray-500 mt-1">IDR 300.000</p>
                </div>
                @endforeach
            </div>
        </section>

    </main>

    @include('main_pages.footer')

    <script src="{{ asset('js/ProductDetail.js') }}"></script>
    
    <style>
        /* Utility class untuk tombol varian aktif */
        .active-variant {
            background-color: black;
            color: white;
            border-color: black;
        }
    </style>
</body>
</html>