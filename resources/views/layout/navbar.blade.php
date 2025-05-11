<body class="font-sans">
    <nav class="bg-white border-gray-200 dark:bg-gray-900 shadow-md z-[100] sticky top-0">
        <div class="max-w-screen-xl bg-white flex flex-wrap items-center justify-between mx-auto p-4">
            {{-- Logo --}}
            <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="{{ asset('image/LOGO_IYES(1).png') }}" class="h-11" alt="logo_jasa-bangun-utama" />
            </a>

            <button data-collapse-toggle="navbar-default" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
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
                    class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="/"
                            class="block py-2 px-3 text-white bg-blue-700 rounded-sm md:bg-transparent md:text-blue-700 md:p-0 dark:text-white md:dark:text-blue-500"
                            aria-current="page">Beranda</a>
                    </li>
                    <li>
                        <a href="/about-us"
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Tentang Kami</a>
                    </li>
                    <li>
                        <a href=""
                            class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Layanan</a>
                    </li>
                    <li>
                        <a href=""
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portofolio</a>

                    </li>
                    <li>
                        <a href=""
                        class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Konsultasi</a>

                    </li>
                </ul>
            </div>
            {{-- Admin Login --}}
            <div class="hidden w-full md:block md:w-auto">
                <ul>
                    <button class="px-6 py-1.5 rounded text-white bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Masuk</button>
                    {{-- px-6 py-1.5 rounded text-white bg-gradient-to-r from-[#012269] to-[#3C82F5] hover:opacity-80 font-semibold --}}
                </ul>
            </div>
        </div>
    </nav>
