<div class="bg-white">
  <div class="mx-auto max-w-full px-4 py-12 sm:px-6 sm:py-16 lg:max-w-7xl lg:px-8 lg:py-20">
    <!-- Header Section -->
    <div class="text-center mb-8 sm:mb-12 lg:mb-16">
      <h2 class="text-2xl sm:text-3xl lg:text-4xl font-light tracking-wider text-gray-900 mb-2">
        Eksplor Produk Terbaik Kami
      </h2>
      <div class="w-16 h-0.5 bg-gray-900 mx-auto mt-4"></div>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-2 gap-4 sm:gap-6 lg:grid-cols-3 lg:gap-8">
      <!-- Product 1 -->
      <div class="group cursor-pointer">
        <div class="relative overflow-hidden bg-gray-100 rounded-sm mb-3 sm:mb-4">
          <img 
            src="{{ asset('images/Gambar1.jpeg') }}" 
            alt="Tas Raimu Ancok" 
            class="w-full h-48 sm:h-64 lg:h-80 object-cover transition-transform duration-500 ease-out group-hover:scale-105"
          />
          <!-- Quick View Overlay (Desktop) -->
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300 hidden sm:block"></div>
        </div>
        <div class="text-center sm:text-left">
          <h3 class="text-xs sm:text-sm font-medium text-gray-900 mb-1 sm:mb-2 tracking-wide uppercase">
            <a href="#" class="hover:text-gray-600 transition-colors">
              Tas Raimu Ancok
            </a>
          </h3>
          <p class="text-xs sm:text-sm text-gray-600 font-light">IDR 300.000</p>
        </div>
      </div>

      <!-- Product 2 -->
      <div class="group cursor-pointer">
        <div class="relative overflow-hidden bg-gray-100 rounded-sm mb-3 sm:mb-4">
          <img 
            src="{{ asset('images/Gambar2.jpeg') }}" 
            alt="Tas Kulit" 
            class="w-full h-48 sm:h-64 lg:h-80 object-cover transition-transform duration-500 ease-out group-hover:scale-105"
          />
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300 hidden sm:block"></div>
        </div>
        <div class="text-center sm:text-left">
          <h3 class="text-xs sm:text-sm font-medium text-gray-900 mb-1 sm:mb-2 tracking-wide uppercase">
            <a href="#" class="hover:text-gray-600 transition-colors">
              Tas Kulit
            </a>
          </h3>
          <p class="text-xs sm:text-sm text-gray-600 font-light">IDR 300.000</p>
        </div>
      </div>

      <!-- Product 3 -->
      <div class="group cursor-pointer">
        <div class="relative overflow-hidden bg-gray-100 rounded-sm mb-3 sm:mb-4">
          <img 
            src="{{ asset('images/Gambar3.jpeg') }}" 
            alt="Tas Sapi" 
            class="w-full h-48 sm:h-64 lg:h-80 object-cover transition-transform duration-500 ease-out group-hover:scale-105"
          />
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300 hidden sm:block"></div>
        </div>
        <div class="text-center sm:text-left">
          <h3 class="text-xs sm:text-sm font-medium text-gray-900 mb-1 sm:mb-2 tracking-wide uppercase">
            <a href="#" class="hover:text-gray-600 transition-colors">
              Tas Sapi
            </a>
          </h3>
          <p class="text-xs sm:text-sm text-gray-600 font-light">IDR 300.000</p>
        </div>
      </div>

      <!-- Product 4 -->
      <div class="group cursor-pointer">
        <div class="relative overflow-hidden bg-gray-100 rounded-sm mb-3 sm:mb-4">
          <img 
            src="{{ asset('images/Gambar4.jpeg') }}" 
            alt="Tas Jambuss" 
            class="w-full h-48 sm:h-64 lg:h-80 object-cover transition-transform duration-500 ease-out group-hover:scale-105"
          />
          <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-10 transition-all duration-300 hidden sm:block"></div>
        </div>
        <div class="text-center sm:text-left">
          <h3 class="text-xs sm:text-sm font-medium text-gray-900 mb-1 sm:mb-2 tracking-wide uppercase">
            <a href="#" class="hover:text-gray-600 transition-colors">
              Tas Jambuss
            </a>
          </h3>
          <p class="text-xs sm:text-sm text-gray-600 font-light">IDR 300.000</p>
        </div>
      </div>
    </div>
  </div>
</div>