<aside class="bg-[#A0D468] text-white w-full md:w-64 p-4 transition-all duration-300 ease-in-out">
  <div class="flex items-center mb-8">
      <img 
          src="https://storage.googleapis.com/a1aa/image/DIghuSu04qP-elliIsS0Jrs4ZTYTe9D7qQ-sjiN6dtM.jpg" 
          alt="MetaMeal Logo" 
          class="w-12 h-12 mr-2"
      />
      <div>
          <h1 class="text-2xl font-bold">MetaMeal</h1>
          <p class="italic">Selamat Datang</p>
      </div>
  </div>
  <nav>
      <ul>
          <li class="mb-4">
              <a href="{{ route('beranda') }}" 
                  class="flex items-center rounded-lg p-2 font-semibold text-lg transition duration-200 ease-in-out
                      {{ request()->routeIs('beranda') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                  <i class="fas fa-home mr-2"></i> Beranda
              </a>
          </li>
          <li class="mb-4">
              <a href="{{ route('resep') }}" 
                  class="flex items-center rounded-lg p-2 font-semibold text-lg transition duration-200 ease-in-out
                      {{ request()->routeIs('resep') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                  <i class="fas fa-utensils mr-2"></i> Program Makan
              </a>
          </li>
          <li class="mb-4">
              <a href="{{ route('latihan') }}" 
                  class="flex items-center rounded-lg p-2 font-semibold text-lg transition duration-200 ease-in-out
                      {{ request()->routeIs('latihan') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                  <i class="fas fa-running mr-2"></i> Program Latihan
              </a>
          </li>
          <li class="mb-4">
              <a href="{{ route('progres') }}" 
                  class="flex items-center rounded-lg p-2 font-semibold text-lg transition duration-200 ease-in-out
                      {{ request()->routeIs('progres') ? 'bg-white text-[#5F8C2D] shadow-md' : 'hover:bg-white hover:text-[#5F8C2D]' }}">
                  <i class="fas fa-chart-line mr-2"></i> Laporan Latihan
              </a>
          </li>
      </ul>
  </nav>
</aside>
