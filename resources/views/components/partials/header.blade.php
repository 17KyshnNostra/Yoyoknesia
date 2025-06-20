{{-- Header Navbar--}}
<nav class="relative z-50 bg-white border-gray-200 dark:bg-gray-900 dark:border-gray-700">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
        <img src="{{ asset('img/yoyonesia.png') }}" class="h-8" alt="Yoyoknesia Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Yoyoknesia</span>
    </a>

    <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>

    <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
      <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">

        <li>
          <a href="{{ route('home') }}" class="block py-2 px-3 rounded-sm md:p-0 {{ navClass('home') }}">Home</a>
        </li>

        <li class="relative">
          <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
            class="flex items-center justify-between w-full py-2 px-3 rounded-sm md:w-auto md:p-0 {{ navClass('services') }}">
            Services
            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
            </svg>
          </button>

          <!-- Dropdown menu -->
          <div id="dropdownNavbar" class="z-10 hidden absolute mt-2 font-normal bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-400">
              <li>
                <a href="{{ route('dokumentasi') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Video Dokumentasi</a>
              </li>
              <li>
                <a href="{{ route('company') }}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Video Company Profile</a>
              </li>
            </ul>
          </div>
        </li>

        <li>
          <a href="{{ route('about-us') }}" class="block py-2 px-3 rounded-sm md:p-0 {{ navClass('about-us') }}">About us</a>
        </li>

        <li>
          <a href="{{ route('porto') }}" class="block py-2 px-3 rounded-sm md:p-0 {{ navClass('porto') }}">Portofolio</a>
        </li>

        <li>
          <a href="{{ route('tracking.form') }}" class="block py-2 px-3 rounded-sm md:p-0 {{ navClass('track') }}">Tracking</a>
        </li>

        <li>
          <a href="https://wa.me/6282255749407" target="_blank" class="block py-2 px-3 rounded-sm md:p-0 {{ navClass('contact') }}">Contact</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
