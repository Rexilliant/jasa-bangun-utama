@extends('layout.master')
@section('content')
    {{-- Hero Section --}}
    <section class="bg-no-repeat bg-cover h-[400px] bg-center w-full lg:min-h-screen flex items-center justify-center"
        style="background-image: url('{{ asset('image/hero-bg.png') }}')">
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-left lg:grid lg:grid-cols-2">
            <div>
                <p class="font-extrabold text-white text-[30px] md:text-[50px]">Bangun <span class="text-[#3B82F6]">Ruang
                        Impian</span></p>
                <p class="font-extrabold text-white text-[30px] md:text-[50px]">Anda Bersama Kami</p>
                <p class="text-white mb-5 text-[15px] md:text-[16px]">Kami adalah perusahaan design and build yang
                    mempermudah proses Anda mulai dari sketsa awal hingga bangunan berdiri, semua dikerjakan dengan detail,
                    efisiensi, dan integritas.</p>
                <div class="grid grid-cols-2 gap-3 lg:w-[300px]">
                    <button
                        class="px-6 py-3 rounded text-white bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Konsultasi</button>
                    <button
                        class="px-6 py-3 rounded text-[#012269] bg-[#FFFFFF] stroke-2 border-[#012269] hover:opacity-80 font-semibold cursor-pointer">Portofolio</button>
                </div>
            </div>
        </div>
    </section>

    {{-- Mitra --}}
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full py-40 text-center">
        <p class="font-extrabold text-[#012269] text-[30px] md:text-[40px]">Pelanggan <span
                class="text-[#1E293B]">Kami</span></p>
        <p class="text-[#1E293B] mb-5 text-[15px]">
            Kami dipercaya oleh lebih dari +8000 pelanggan yang berada di seluruh Indonesia. Berikut adalah beberapa
            pelanggan kami:
        </p>

        <div class="flex flex-wrap justify-center gap-6 items-center md:text-[16px]">
            <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
            <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
            <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
            <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
        </div>
    </section>

    {{-- Layanan --}}
    <section class="bg-no-repeat bg-cover bg-center w-full py-20 lg:py-50 xl:py-80 items-center justify-center"
        style="background-image: url('{{ asset('image/bg-layanan.png') }}'); background-size: cover; background-position: center;">
        <p class="font-extrabold text-[#FAFAFA] text-[27px] md:text-[40px] text-center my-6">Layanan Ungulan Kami</p>
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full">
            <div class="">
                <div class="grid lg:grid-cols-3 items-center justify-center gap-10">
                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                        <img src="{{ asset('image/bangun-baru.png') }}" alt=""
                            class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                        <div class="text-center py-4 mx-2">
                            <p class="font-bold text-[18px]">Bangun Baru</p>
                            <p class="text-[15px]">Melayani segala kebutuhan Properti yang sesuai Budget anda. Harga
                                bersahabat, hasil hebat. Kontraktor bangunan profesional.</p>
                        </div>
                    </div>

                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                        <img src="{{ asset('image/renovasi.png') }}" alt=""
                            class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                        <div class="text-center py-4 mx-2">
                            <p class="font-bold text-[18px]">Renovasi</p>
                            <p class="text-[15px]">Sebagai spesialis renovasi rumah, kami memiliki pengalaman yang luas
                                dalam mengelola proyek renovasi rumah dan berbagai gedung lainnya.</p>
                        </div>
                    </div>

                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                        <img src="{{ asset('image/desain.png') }}" alt=""
                            class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                        <div class="text-center py-4 mx-2">
                            <p class="font-bold text-[18px]">Desain</p>
                            <p class="text-[15px]">Sebagai arsitek profesional, kami memiliki pengalaman yang luas dalam
                                merancang dan mengelola proyek-proyek arsitektur yang indah dan fungsional.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Proyek -->
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-center">
        <h2 class="text-[30px] font-extrabold text-[#012269]">
            Proyek <span class="text-[#1E293B]">Terbaru</span> Kami
        </h2>
        <p class="text-[#1E293B] mt-2 mb-6 text-[15px] max-w-2xl mx-auto">
            Kami telah merancang dan membangun berbagai ruang tinggal, komersial, dan publik dengan pendekatan desain yang
            kuat dan eksekusi yang presisi.
        </p>

        <!-- Filter Buttons -->
        <div class="grid grid-cols-2 lg:grid-cols-4 justify-center gap-3 mb-10" id="default-styled-tab"
            data-tabs-active-classes="text-white bg-[#FE6A2D]" data-tabs-inactive-classes="text-[#64748B] bg-[#E2E8F0]"
            data-tabs-toggle="#default-styled-tab-content">
            <button class="px-4 py-3.5  rounded-lg text-sm font-semibold" id="semua-styled-tab"
                data-tabs-target="#styled-semua" type="button" role="tab" aria-controls="semua"
                aria-selected="">Semua</button>
            <button class="px-4 py-3.5 rounded-lg text-sm font-semibold" id="bangun-styled-tab"
                data-tabs-target="#styled-bangun" type="button" role="tab" aria-controls="bangun"
                aria-selected="">Bangun Baru</button>

            <button class="px-4 py-3.5 rounded-lg text-sm font-semibold" id="renovasi-styled-tab"
                data-tabs-target="#styled-renovasi" type="button" role="tab" aria-controls="renovasi"
                aria-selected="">Renovasi</button>
            <button class="px-4 py-3.5 rounded-lg text-sm font-semibold" id="desain-styled-tab"
                data-tabs-target="#styled-desain" type="button" role="tab" aria-controls="desain"
                aria-selected="">Desain</button>
            
        </div>

        {{-- Desktop Swiper --}}
        <div id="default-styled-tab-content " class="hidden lg:block">
            <div class="hidden" id="styled-semua" role="tabpanel" aria-labelledby="semua-tab">
                <div class="swiper mySwiper px-4">
                    <div class="swiper-wrapper">
                        @foreach (collect(range(1, 12))->chunk(6) as $chunk)
                            <div class="swiper-slide">
                                <div class="mx-20 mb-10">
                                    <div class="grid grid-cols-3 gap-6 mb-6">
                                        @foreach ($chunk->slice(0, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        @foreach ($chunk->slice(3, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Navigasi hanya di desktop -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <div class="swiper-pagination mt-4"></div>
                </div>
            </div>
            <div class="hidden" id="styled-bangun" role="tabpanel" aria-labelledby="bangun-tab">
                <div class="swiper mySwiper px-4">
                    <div class="swiper-wrapper">
                        @foreach (collect(range(1, 12))->chunk(6) as $chunk)
                            <div class="swiper-slide">
                                <div class="mx-20 mb-10">
                                    <div class="grid grid-cols-3 gap-6 mb-6">
                                        @foreach ($chunk->slice(0, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Maria</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        @foreach ($chunk->slice(3, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-4"></div>

                    <!-- Navigasi hanya di desktop -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

            <div class="hidden" id="styled-renovasi" role="tabpanel" aria-labelledby="renovasi-tab">
                <div class="swiper mySwiper px-4">
                    <div class="swiper-wrapper">
                        @foreach (collect(range(1, 12))->chunk(6) as $chunk)
                            <div class="swiper-slide">
                                <div class="mx-20 mb-10">
                                    <div class="grid grid-cols-3 gap-6 mb-6">
                                        @foreach ($chunk->slice(0, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Siti</p>
                                                    <p>Tangeranggg</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        @foreach ($chunk->slice(3, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-4"></div>
                    
                    <!-- Navigasi hanya di desktop -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            
            <div class="hidden" id="styled-desain" role="tabpanel" aria-labelledby="desain-tab">
                <div class="swiper mySwiper px-4">
                    <div class="swiper-wrapper">
                        @foreach (collect(range(1, 12))->chunk(6) as $chunk)
                            <div class="swiper-slide">
                                <div class="mx-20 mb-10">
                                    <div class="grid grid-cols-3 gap-6 mb-6">
                                        @foreach ($chunk->slice(0, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Hawa</p>
                                                    <p>Tangeranggg</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <div class="grid grid-cols-3 gap-6">
                                        @foreach ($chunk->slice(3, 3) as $item)
                                            <div class="relative overflow-hidden rounded-lg shadow-lg">
                                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                                    class="w-full h-60 object-cover">
                                                <div
                                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                                    <p>Tangerang</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination mt-4"></div>

                    <!-- Navigasi hanya di desktop -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
            
            
        </div>

        {{-- Mobile Swiper --}}
        <div class="block lg:hidden">
            <div class="swiper myMobileSwiper px-4">
                <div class="swiper-wrapper mb-4">
                    @foreach (range(1, 6) as $i)
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden rounded-lg shadow-lg mb-6">
                                <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek"
                                    class="w-full h-60 object-cover">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                                    <p>Bangun Baru – Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>

        <div class="mt-10">
            <button class="bg-[#0C3C84] text-white font-semibold px-6 py-3 rounded-md hover:bg-[#062b63] transition">
                Lihat Yang Lainnya
            </button>
        </div>
    </section>

    {{-- Bangunan Impian --}}
    <section class="bg-[#F7F7F7] pt-20">
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full text-center">
            <h2 class="text-[24px] md:text-[40px] font-extrabold mb-2 sm:mb-3 text-[#012269]">
                Sulit Wujudkan <span class="text-[#1E293B]"> Bangunan Impian? </span> 
            </h2>
            <p class="text-[#1E293B] mt-2 mb-6 text-[15px] max-w-2xl mx-auto">
                Banyak orang bingung mulai dari mana saat ingin membangun atau merenovasi.
                Lihat solusi yang bisa kami bantu di sini!
            </p>
            <div class="flex justify-center">
                <img src="{{ asset('image/Confused.png') }}" alt="" class="w-[90%] lg:w-[60%] h-auto">
            </div>
        </div>       
    </section>

    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:my-40  bg-no-repeat bg-cover bg-center lg:bg-auto  relative text-left md:text-left rounded-xl lg:rounded-none" style="background-image: url('{{ asset('image/bg-star.png') }}')">
        <div class="py-10 lg:py-35">
            <div class="text-start mb-10 mx-6">
                <h2 class="text-[35px] lg:text-[40px] font-extrabold text-[#FFFFFF] leading-10 mb-4">
                3 Langkah <br class="lg:hidden"> Super Simple</span>
                </h2>
                <p class="font-normal text-[15px] text-[#FFFFFF]">Tidak ada yang lebih simple! Di Jasa Bangun Utama kamu bisa raih bangunan impian step by step semudah itu.</p>
            </div>

            <div class="grid lg:grid-cols-3 gap-6 justify-center mx-6">
                <!-- Langkah 1: Konsultasi -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/konsultasi-icon.png') }}" alt="Konsultasi Icon" class="w-11" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Konsultasi Icon" class="w-full h-1 rounded-4xl" />
                    </div>
                    <div>
                        <h3 class="font-bold text-[#012269] text-lg">Konsultasi</h3>
                        <p class="text-sm text-[#1E293B]">
                        Ceritakan kebutuhan dan impianmu, kami akan bantu arahkan dengan solusi terbaik.
                        </p>
                    </div>
                </div>

                <!-- Langkah 2: Desain & Perencanaan -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/design-icon.png') }}" alt="Konsultasi Icon" class="w-11" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Konsultasi Icon" class="w-full h-1 rounded-4xl" />
                    </div>
                    <div>
                        <h3 class="font-bold text-[#012269] text-lg">Desain & Perencanaan</h3>
                        <p class="text-sm text-[#1E293B]">
                            Tim kami akan membuat desain visual lengkap, disesuaikan dengan selera dan anggaranmu.
                        </p>
                    </div>
                </div>

                <!-- Langkah 3: Bangun & Selesaikan -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/build-icon.png') }}" alt="Konsultasi Icon" class="w-11" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Konsultasi Icon" class="w-full h-1 rounded-4xl" />
                    </div>
                    <div>
                        <h3 class="font-bold text-[#012269] text-lg">Bangun & Selesaikan</h3>
                        <p class="text-sm text-[#1E293B]">
                            Proyek langsung kami tangani hingga selesai—tepat waktu, rapi, dan sesuai yang dijanjikan.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        
    </section>

    <section class="bg-[#F7F7F7]">
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full ">
            <div class="lg:py-20 py-8 md:grid grid-cols-2 gap-5 items-center justify-between">
                <div class="py-20 md:py-0">
                    <p class="font-semibold text-[15px]">Masih Bingung?</p>
                    <h1 class="text-[30px] lg:text-[32px] font-extrabold text-[#222222] leading-8.5 lg:leading-10 mb-5 mt-3">
                        Konsultasi
                        Gratis Langsung dengan <br> Admin Jasa Bangun Utama</h1>
                    <button type="button"
                        class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm px-5 py-3.5 me-2 mb-2">Konsultasi
                        Gratis</button>
                </div>
                <div class="md:flex justify-end items-center md:pt-20 lg:p-7 hidden"">
                    <img src="{{ asset('image/asset-konsultasi.png') }}" alt="" class="w-[90%] lg:w-[70%] h-auto">
                </div>

            </div>
        </div>
    </section>

    {{-- Konsultasi --}}
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:mt-30 lg:mb-20">
        <div class="text-center">
            <h2 class="text-[30px] font-extrabold text-[#012269]">
                <span class="text-[#1E293B]"> Form Konsultasi </span> Jasa Bangun Utama
            </h2>
        </div>
        <div>
            <form class="">
                {{-- 01 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 lg:mt-10 mt-8">
                    <div class="lg:pr-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                            Lengkap</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0"">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">No WhatsApp</label>
                        <input type="tel" name="whatsapp" pattern="^\+62[0-9]{9,13}$"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                </div>

                {{-- 02 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 mt-5">
                    <div class="lg:pr-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Lokasi
                            Proyek</label>
                        <input type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe
                            Proyek</label>
                        <select type="text"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                        <option disabled selected value="">Pilih Salah Satu</option>
                        <option value="desain">Bangun Baru</option>
                        <option value="bangun_baru">Renovasi</option>
                        <option value="renovasi">Desain</option>
                        </select>
                    </div>
                </div>

                <div class="">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Estimasi Biaya</label>
                    <select type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="" required />
                    <option disabled selected value="">Pilih Salah Satu</option>
                    <option value="desain">Kurang Dari 100 Juta</option>
                    <option value="bangun_baru">100 - 300 Juta</option>
                    <option value="renovasi">300 - 500 Juta</option>
                    <option value="renovasi">Lebih Dari 500 Juta</option>
                    </select>
                </div>

                <div class="my-5">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Kebutuhan
                        Proyek</label>
                    <textarea type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="" required /> </textarea>
                </div>

                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value=""
                            class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300 "
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Saya Bersedia Dihibungi Secara
                        Pribadi
                    </label>
                </div>

                <button type="button"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-2 w-full">
                    Kirim
                </button>
            </form>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:my-40">
        <div class="text-center mb-10">
            <h2 class="text-[30px] font-extrabold text-[#012269]">
                <span class="text-[#1E293B]">Apa Kata Mereka Mengenai </span>Jasa Bangun Utama
            </h2>
            <p class="font-normal text-[15px]">Kami bangga menjadi bagian dari perjalanan setiap klien. Inilah cerita dan pengalaman mereka setelah bekerja sama dengan tim kami.</p>
        </div>

        <!-- Testimoni Desktop-->
        <div class="hidden lg:block">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    @foreach (collect(range(1, 12))->chunk(3) as $chunk)
                        <div class="swiper-slide">
                            <div class="mx-10 mb-10">
                                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-6">
                                    @foreach ($chunk as $item)
                                        <div class="border border-blue-700 rounded-xl p-4 shadow-sm border-r-[5px]">
                                            <div class="flex items-center gap-3 mb-2">
                                                <img src="{{ asset('image/asset-konsultasi.png') }}" alt="Foto" class="w-10 h-10 rounded-full" />
                                                <h3 class="font-semibold">Thahirudin {{ $item }}</h3>
                                            </div>
                                            <p class="text-sm text-gray-700">Kami sangat puas dengan hasil akhir rumah kami. Tim desain benar-benar menangkap visi kami dan mewujudkannya dengan detail yang luar biasa.</p>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    
                <!-- Navigation & Pagination -->
                <div class="swiper-pagination mt-4"></div>
                <div class="swiper-button-next bottom-0 -translate-y-5"></div>
                <div class="swiper-button-prev bottom-0 -translate-y-5"></div>
            </div>
        </div>

        {{-- Mobile Swiper --}}
        <div class="block lg:hidden">
            <div class="swiper myMobileSwiper px-4">
                <div class="swiper-wrapper mb-4">
                    @foreach (range(1, 6) as $i)
                        <div class="swiper-slide">
                            <div class="relative overflow-hidden rounded-lg shadow-lg mb-6">
                                <div class="border border-blue-700 rounded-xl p-4 shadow-sm border-r-[5px]">
                                    <div class="flex items-center gap-3 mb-2">
                                        <img src="{{ asset('image/asset-konsultasi.png') }}" alt="Foto" class="w-10 h-10 rounded-full" />
                                        <h3 class="font-semibold">Thahirudin</h3>
                                    </div>
                                    <p class="text-sm text-gray-700">Kami sangat puas dengan hasil akhir rumah kami. Tim desain benar-benar menangkap visi kami dan mewujudkannya dengan detail yang luar biasa.</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination mt-4"></div>
            </div>
        </div>
    </section>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        // Desktop Swiper
        new Swiper('.mySwiper', {
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },
        });

        // Mobile Swiper
        new Swiper('.myMobileSwiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
            },
        });
    </script>
@endsection
