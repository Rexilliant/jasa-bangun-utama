<body class="font-plus-jakarta-sans max-w-screen text-slate-800">
    <nav class="bg-white border-gray-200 shadow-md z-[100] sticky top-0">
        <div class="w-[90%] max-w-[1200px] m-auto bg-white flex flex-wrap items-center justify-between py-4">
            {{-- Logo --}}
            <a href="{{ route('beranda') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/logo.png') }}" class="h-11" alt="logo_jasa-bangun-utama" />
                <span class="font-bold text-lg md:hidden lg:inline">Jasa Bangun Utama</span>
            </a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            
            {{-- Menu tambahan di tegah --}}
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ route('beranda') }}"
                            class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 @yield('menu-beranda')"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="{{ route('tentang-kami') }}"
                            class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 @yield('menu-tentang-kami') ">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="{{ route('beranda') }}/#layanan"
                            class=" block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Layanan</a>
                    </li>
                    <li>
                        <a href="{{ route('portofolio') }}"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 @yield('menu-portofolio')">Portofolio</a>

                    </li>
                    <li>
                        <a href="{{ route('konsultasi') }}"
                        class="block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 @yield('menu-konsultasi')">Konsultasi</a>

                    </li>
                    <li>
                        <a href="{{ route('login') }}"
                        class="md:hidden block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0">Masuk</a>

                    </li>
                </ul>
            </div>
            {{-- Admin Login --}}
            <div class="hidden w-full md:block md:w-auto">
                <ul>
                    <a href="{{ route('login') }}" class="px-6 py-1.5 rounded text-white bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Masuk</a>
                    {{-- px-6 py-1.5 rounded text-white bg-gradient-to-r from-[#012269] to-[#3C82F5] hover:opacity-80 font-semibold --}}
                </ul>
            </div>
        </div>
    </nav>
