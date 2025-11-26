@extends('layout.master')
@section('title', 'Beranda')
@section('menu-beranda', 'text-blue-700')
@section('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    {{-- Hero Section --}}
    <section class="bg-no-repeat bg-cover h-[400px] bg-center w-full lg:min-h-screen flex items-center justify-center"
        style="background-image: url('{{ asset('image/hero-bg.webp') }}')">
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-left lg:grid lg:grid-cols-2">
            <div data-aos="fade-right" data-aos-duration="2000">
                <p class="font-extrabold text-white text-[30px] md:text-[50px]">Bangun <span class="text-[#3B82F6]">Ruang
                        Impian</span></p>
                <p class="font-extrabold text-white text-[30px] md:text-[50px]">Anda Bersama Kami</p>
                <p class="text-white mb-5 text-[15px] md:text-[16px]">Kami adalah perusahaan design and build yang
                    mempermudah proses Anda mulai dari sketsa awal hingga bangunan berdiri, semua dikerjakan dengan detail,
                    efisiensi, dan integritas.</p>
                <div class="grid grid-cols-2 gap-3 lg:w-[300px]">
                    <a href="{{ route('konsultasi') }}"
                        class="px-6 py-3 rounded text-white text-center bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Konsultasi</a>
                    <a href="{{ route('portofolio') }}"
                        class="px-6 py-3 rounded text-center text-[#012269] bg-[#FFFFFF] stroke-2 border-[#012269] hover:opacity-80 font-semibold cursor-pointer">Portofolio</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Mitra --}}
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full py-40 text-center">
        <p class="font-extrabold text-[#012269] text-[30px] md:text-[40px]" data-aos="fade-right" data-aos-duration="2000">Pelanggan <span
                class="text-[#1E293B]">Kami</span></p>
        <p class="text-[#1E293B] mb-5 text-[15px]" data-aos="fade-right" data-aos-duration="2000">
            Kami dipercaya oleh lebih dari +8000 pelanggan yang berada di seluruh Indonesia. Berikut adalah beberapa
            pelanggan kami:
        </p>

        <div class="relative overflow-hidden" data-aos="fade-right" data-aos-duration="2000">
            <div class="slider-container2 flex flex-wrap justify-center gap-6 items-center md:text-[16px]">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
                <img src="{{ asset('image/sampel-logo.png') }}" alt="logo" class="w-1/2 sm:w-1/4 max-w-[150px]"
                    loading="lazy">
            </div>
        </div>
    </section>

    {{-- Layanan --}}
    <section class="bg-no-repeat bg-cover bg-center w-full py-20 lg:py-50 xl:py-80 items-center justify-center"
        id="layanan"
        style="background-image: url('{{ asset('image/bg-layanan.webp') }}'); background-size: cover; background-position: center;">
        <p data-aos="fade-right" data-aos-duration="2000" class="font-extrabold text-[#FAFAFA] text-[27px] md:text-[40px] text-center my-6">Layanan Ungulan Kami</p>
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full">
            <div class="">
                <div class="grid lg:grid-cols-3 items-center justify-center gap-10">
                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0" data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ asset('image/bangun-baru.png') }}" alt="bangun baru"
                            class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto" loading="lazy">
                        <div class="text-center py-4 mx-2">
                            <p class="font-bold text-[18px]">Bangun Baru</p>
                            <p class="text-[15px]">Melayani segala kebutuhan Properti yang sesuai Budget anda. Harga
                                bersahabat, hasil hebat. Kontraktor bangunan profesional.</p>
                        </div>
                    </div>

                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0" data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ asset('image/renovasi.png') }}" alt="renovasi" loading="lazy"
                            class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                        <div class="text-center py-4 mx-2">
                            <p class="font-bold text-[18px]">Renovasi</p>
                            <p class="text-[15px]">Sebagai spesialis renovasi rumah, kami memiliki pengalaman yang luas
                                dalam mengelola proyek renovasi rumah dan berbagai gedung lainnya.</p>
                        </div>
                    </div>

                    <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0" data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ asset('image/desain.png') }}" alt="desain" loading="lazy"
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
        <h2 class="text-[30px] font-extrabold text-[#012269]" data-aos="fade-right" data-aos-duration="2000">
            Proyek <span class="text-[#1E293B]">Terbaru</span> Kami
        </h2>
        <p class="text-[#1E293B] mt-2 mb-6 text-[15px] max-w-2xl mx-auto" data-aos="fade-right" data-aos-duration="2000">
            Kami telah merancang dan membangun berbagai ruang tinggal, komersial, dan publik dengan pendekatan desain yang
            kuat dan eksekusi yang presisi.
        </p>

        <!-- Filter Buttons -->
        <div class="grid grid-cols-2 lg:grid-cols-4 justify-center gap-3 mb-10" id="default-styled-tab" data-aos="fade-right" data-aos-duration="2000"
            data-tabs-active-classes="text-white bg-[#FE6A2D]" data-tabs-inactive-classes="text-[#64748B] bg-[#E2E8F0]"
            data-tabs-toggle="#default-styled-tab-content">
            <button class="cursor-pointer px-4 py-3.5  rounded-lg text-sm font-semibold" id="semua-styled-tab"
                data-tabs-target="#styled-semua" type="button" role="tab" aria-controls="semua"
                aria-selected="">Semua</button>
            <button class="cursor-pointer px-4 py-3.5 rounded-lg text-sm font-semibold" id="bangun-styled-tab"
                data-tabs-target="#styled-bangun" type="button" role="tab" aria-controls="bangun"
                aria-selected="">Bangun Baru</button>

            <button class="cursor-pointer px-4 py-3.5 rounded-lg text-sm font-semibold" id="renovasi-styled-tab"
                data-tabs-target="#styled-renovasi" type="button" role="tab" aria-controls="renovasi"
                aria-selected="">Renovasi</button>
            <button class="cursor-pointer px-4 py-3.5 rounded-lg text-sm font-semibold" id="desain-styled-tab"
                data-tabs-target="#styled-desain" type="button" role="tab" aria-controls="desain"
                aria-selected="">Desain</button>

        </div>
        <div id="default-styled-tab-content">
            <div class="hidden" id="styled-semua" role="tabpanel" aria-labelledby="semua-tab">
                @if (count($proyeks) > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($proyeks as $proyek)
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}" data-aos="fade-right" data-aos-duration="2000">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ asset($proyek->thumbnail) }}" alt="{{ $proyek->nama }}" loading="lazy">

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-slate-900/80 h-full text-white flex justify-center items-center">
                                        <h2 class=" lg:text-[20px] font-bold text-center">
                                            {{ $proyek->nama }}
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-[#1E293B] font-semibold">Belum ada portfolio</p>
                @endif
            </div>
            <div class="hidden" id="styled-bangun" role="tabpanel" aria-labelledby="bangun-tab">
                @if (count($bangunbarus) > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($bangunbarus as $proyek)
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}" data-aos="fade-right" data-aos-duration="2000">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ asset($proyek->thumbnail) }}" alt="{{ $proyek->nama }}" loading="lazy">

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-slate-900/80 h-full text-white flex justify-center items-center">
                                        <h2 class="lg:text-[20px] font-bold text-center">
                                            {{ $proyek->nama }}
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-[#1E293B] font-semibold">Belum ada portfolio bangun baru</p>
                @endif
            </div>
            <div class="hidden" id="styled-renovasi" role="tabpanel" aria-labelledby="renovasi-tab">
                @if (count($renovasis) > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($renovasis as $proyek)
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}" data-aos="fade-right" data-aos-duration="2000">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ asset($proyek->thumbnail) }}" alt="{{ $proyek->nama }}" loading="lazy">

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-slate-900/80 h-full text-white flex justify-center items-center">
                                        <h2 class="lg:text-[20px] font-bold text-center">
                                            {{ $proyek->nama }}
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-[#1E293B] font-semibold">Belum ada portfolio renovasi</p>
                @endif

            </div>
            <div class="hidden" id="styled-desain" role="tabpanel" aria-labelledby="desain-tab">
                @if (count($desains) > 0)
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                        @foreach ($desains as $proyek)
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}" data-aos="fade-right" data-aos-duration="2000">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ asset($proyek->thumbnail) }}" alt="{{ $proyek->nama }}" loading="lazy">

                                    <div
                                        class="absolute bottom-0 left-0 right-0 p-4 bg-slate-900/80 h-full text-white flex justify-center items-center">
                                        <h2 class="lg:text-[20px] font-bold text-center">
                                            {{ $proyek->nama }}
                                        </h2>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @else
                    <p class="text-center text-[#1E293B] font-semibold">Belum ada portfolio desain</p>
                @endif
            </div>

        </div>
        <div class="mt-10">
            <a href="{{ route('portofolio') }}" data-aos="fade-right" data-aos-duration="2000"
                class="bg-[#0C3C84] text-white font-semibold px-6 py-3 rounded-md hover:bg-[#062b63] transition">
                Lihat Yang Lainnya
            </a>
        </div>
    </section>

    {{-- Bangunan Impian --}}
    <section class="bg-[#F7F7F7] pt-20">
        <div class="w-[90%] max-w-[1200px] m-auto lg:w-full text-center">
            <h2 class="text-[24px] md:text-[40px] font-extrabold mb-2 sm:mb-3 text-[#012269]" data-aos="fade-right" data-aos-duration="2000">
                Sulit Wujudkan <span class="text-[#1E293B]"> Bangunan Impian? </span>
            </h2>
            <p data-aos="fade-right" data-aos-duration="2000" class="text-[#1E293B] mt-2 mb-6 text-[15px] max-w-2xl mx-auto">
                Banyak orang bingung mulai dari mana saat ingin membangun atau merenovasi.
                Lihat solusi yang bisa kami bantu di sini!
            </p>
            <div class="flex justify-center" data-aos="fade-up" data-aos-duration="2000">
                <img src="{{ asset('image/Confused.png') }}" alt="" class="w-[90%] lg:w-[60%] h-auto"
                    loading="lazy">
            </div>
        </div>
    </section>

    <section
        class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:my-40  bg-no-repeat bg-cover bg-center lg:bg-auto  relative text-left md:text-left rounded-xl lg:rounded-none"
        style="background-image: url('{{ asset('image/bg-star.png') }}')">
        <div class="py-10 lg:py-35">
            <div class="text-start mb-10 mx-6">
                <h2 class="text-[35px] lg:text-[40px] font-extrabold text-[#FFFFFF] leading-10 mb-4" data-aos="fade-right" data-aos-duration="2000" data-aos="fade-right" data-aos-duration="2000">
                    3 Langkah <br class="lg:hidden"> Super Simple</span>
                </h2>
                <p data-aos="fade-right" data-aos-duration="2000" class="font-normal text-[15px] text-[#FFFFFF]" data-aos="fade-right" data-aos-duration="2000">Tidak ada yang lebih simple! Di Jasa Bangun Utama kamu
                    bisa raih bangunan impian step by step semudah itu.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6 justify-center mx-6">
                <!-- Langkah 1: Konsultasi -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md" data-aos="fade-right" data-aos-duration="2000">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/konsultasi-icon.png') }}" alt="Konsultasi Icon" class="w-[20%]"
                            loading="lazy" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Line Icon" class="w-[80%]" loading="lazy/">
                    </div>
                    <div>
                        <h3 class="font-bold
                            text-[#012269] text-lg">Konsultasi</h3>
                        <p class="text-sm text-[#1E293B]">
                            Ceritakan kebutuhan dan impianmu, kami akan bantu arahkan dengan solusi terbaik.
                        </p>
                    </div>
                </div>

                <!-- Langkah 2: Desain & Perencanaan -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md" data-aos="fade-right" data-aos-duration="2000">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/design-icon.png') }}" alt="Desain dan Perencanaan Icon"
                            class="w-[20%]" loading="lazy" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Line Icon" class="w-[80%]"
                            loading="lazy" />
                    </div>
                    <div>
                        <h3 class="font-bold
                            text-[#012269] text-lg">Desain & Perencanaan</h3>
                        <p class="text-sm text-[#1E293B]">
                            Tim kami akan membuat desain visual lengkap, disesuaikan dengan selera dan anggaranmu.
                        </p>
                    </div>
                </div>

                <!-- Langkah 3: Bangun & Selesaikan -->
                <div class="w-full bg-white border border-[#E0E0E0] rounded-xl p-6 shadow-md" data-aos="fade-right" data-aos-duration="2000">
                    <div class="flex items-center gap-3 mb-2">
                        <img src="{{ asset('image/build-icon.png') }}" alt="Bangun dan Selesaikan Icon" class="w-[20%]"
                            loading="lazy" />
                        <img src="{{ asset('image/line-index.png') }}" alt="Line Icon" class="w-[80%]"
                            loading="lazy" />
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


    <section class="text-[#1E293B] bg-[#F7F7F7]">
        <div
            class="py-20 max-w-[1200px] w-[90%] lg:w-full m-auto flex flex-col lg:flex-row justify-between items-center gap-10">
            <div class="w-70% order-2 lg:order-1 lg:block">
                <p class="mb-5 font-semibold" data-aos="fade-right" data-aos-duration="2000">Masih Bingung?</p>
                <h3 class="mb-5 text-[30px] font-bold" data-aos="fade-right" data-aos-duration="2000">Konsultasi Gratis
                    Langsung dengan Admin Jasa Bangun Utama</h3>
                <a href="{{ route('konsultasi') }}" data-aos="fade-right" data-aos-duration="2000"
                    class="bg-[#012269] hover:bg-blue-700 ease-in-out duration-300 transition-all py-4 px-8 inline-block text-white rounded-xl">Konsultasi
                    Gratis</a>
            </div>
            <div class="w-30% order-1 lg:order-2 lg:block">
                <img src="{{ asset('image/konsultasi.png') }}" alt="konsultasi" class=" md:w-80% lg:w-full"
                    data-aos="fade-left" data-aos-duration="2000" loading="lazy">
            </div>
        </div>
    </section>

    {{-- Konsultasi --}}
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:mt-30 lg:mb-20">
        <div class="text-center">
            <h2 class="text-[30px] font-extrabold text-[#012269]" data-aos="fade-right" data-aos-duration="2000">
                <span class="text-[#1E293B]"> Form Konsultasi </span> Jasa Bangun Utama
            </h2>
        </div>
        <div>

            {{-- Alert Success --}}
            @if (session('success'))
                <div class="mb-4 p-3 text-green-700 bg-green-100 rounded">
                    {{ session('success') }}
                </div>
            @endif

            {{-- Alert Errors --}}
            @if ($errors->any())
                <div class="mb-4 p-3 text-red-700 bg-red-100 rounded">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('konsultasi.store') }}" method="POST" data-aos="fade-right" data-aos-duration="2000">
                @csrf
                {{-- 01 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 lg:mt-10 mt-8">
                    <div class="lg:pr-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Lengkap</label>
                        <input type="text" name="nama" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0">
                        <label for="no_wa" class="block mb-2 text-sm font-medium text-gray-900 ">No WhatsApp</label>
                        <input type="number" name="no_wa" pattern="^(?:\+62|0)8[0-9]{7,11}$" id="no_wa"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                </div>

                {{-- 02 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 mt-5">
                    <div class="lg:pr-4">
                        <label for="lokasi" class="block mb-2 text-sm font-medium text-gray-900 ">Lokasi Proyek</label>
                        <input type="text" name="lokasi" id="lokasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0">
                        <label for="kategori_id" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe Proyek</label>
                        <select name="kategori_id" id="kategori_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            required>
                            <option disabled selected value="">Pilih Salah Satu</option>
                            <option value="1">Bangun Baru</option>
                            <option value="2">Renovasi</option>
                            <option value="3">Desain</option>
                        </select>
                    </div>
                </div>

                <div class="">
                    <label for="estimasi_biaya" class="block mb-2 text-sm font-medium text-gray-900 ">Estimasi
                        Biaya</label>
                    <select name="estimasi_biaya" id="estimasi_biaya"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        required>
                        <option disabled selected value="">Pilih Salah Satu</option>
                        <option value="Kurang Dari 100 Juta">Kurang Dari 100 Juta</option>
                        <option value="100 - 300 Juta">100 - 300 Juta</option>
                        <option value="300 - 500 Juta">300 - 500 Juta</option>
                        <option value="Lebih Dari 500 Juta">Lebih Dari 500 Juta</option>
                    </select>
                </div>

                <div class="my-5">
                    <label for="kebutuhan" class="block mb-2 text-sm font-medium text-gray-900 ">Kebutuhan Proyek</label>
                    <textarea name="kebutuhan" id="kebutuhan"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        rows="7" placeholder="" required></textarea>
                </div>

                <div class="flex items-start mb-5">
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="1" name="agree"
                            class="w-4 h-4 border border-gray-300 rounded-sm bg-gray-50 focus:ring-3 focus:ring-blue-300"
                            required />
                    </div>
                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900">Saya Bersedia Dihubungi Secara
                        Pribadi</label>
                </div>

                <button type="submit"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-2 w-full">
                    Kirim
                </button>
            </form>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:my-40">
        <div class="text-center mb-10" data-aos="fade-right" data-aos-duration="2000">
            <h2 class="text-[30px] font-extrabold text-[#012269]">
                <span class="text-[#1E293B]">Apa Kata Mereka Mengenai </span>Jasa Bangun Utama
            </h2>
            <p class="font-normal text-[15px]">Kami bangga menjadi bagian dari perjalanan setiap klien. Inilah cerita dan
                pengalaman mereka setelah bekerja sama dengan tim kami.</p>
        </div>
        <div class="relative overflow-hidden">
            <div class="slider-container grid grid-flow-col gap-4 px-6 py-4">
                <!-- Item asli (3x loop untuk memastikan kelancaran) -->
                @if (count($testimonis) > 3)
                    @for ($i = 0; $i < 3; $i++)
                        @foreach ($testimonis as $testimoni)
                            <div data-aos="fade-right" data-aos-duration="2000"
                                class="border border-blue-700 rounded-xl p-4 shadow-sm border-r-[5px] h-full flex-shrink-0 w-[300px]">
                                <div class="flex items-center gap-3 mb-2">
                                    <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="Foto"
                                        class="w-10 h-10 rounded-full object-cover" loading="lazy" />
                                    <h3 class="font-semibold">{{ $testimoni->nama }}</h3>
                                </div>
                                <p class="text-sm text-gray-700">
                                    <span class="short-text">
                                        {{ Str::limit($testimoni->komentar, 100) }}
                                    </span>
                                    <span class="full-text" style="display: none;">
                                        {{ $testimoni->komentar }}
                                    </span>
                                    <button class="text-[#012269] btn-toggle">Selengkapnya</button>
                                </p>
                            </div>
                        @endforeach
                    @endfor
                @else
                    @foreach ($testimonis as $testimoni)
                        <div
                            class="border border-blue-700 rounded-xl p-4 shadow-sm border-r-[5px] h-full flex-shrink-0 w-[300px]">
                            <div class="flex items-center gap-3 mb-2">
                                <img src="{{ asset($testimoni->gambar) }}" alt="{{ $testimoni->nama }}"
                                    class="w-10 h-10 rounded-full object-cover" loading="lazy" />
                                <h3 class="font-semibold">{{ $testimoni->nama }}</h3>
                            </div>
                            <p class="text-sm text-gray-700">
                                <span class="short-text">
                                    {{ Str::limit($testimoni->komentar, 100) }}
                                </span>
                                <span class="full-text" style="display: none;">
                                    {{ $testimoni->komentar }}
                                </span>
                                <button class="text-[#012269] btn-toggle">Selengkapnya</button>
                            </p>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        @if (count($testimonis) > 3)
            <style>
                .slider-container {
                    animation: slide {{ count($testimonis) * 7 }}s linear infinite;
                    width: max-content;
                }

                @keyframes slide {
                    0% {
                        transform: translateX(0);
                    }

                    100% {
                        transform: translateX(calc(-100% / 3));
                        /* Dibagi 3 karena kita loop 3x */
                    }
                }
            </style>
        @endif
        <style>
            .slider-container2 {
                animation: slide2 6s linear infinite;
                width: max-content;
            }



            @keyframes slide2 {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(calc(-100% / 3));
                    /* Dibagi 3 karena kita loop 3x */
                }
            }
        </style>

        <script>
            // Fungsi untuk toggle teks (tetap sama)
            document.querySelectorAll('.btn-toggle').forEach(button => {
                button.addEventListener('click', () => {
                    const p = button.parentElement;
                    const shortText = p.querySelector('.short-text');
                    const fullText = p.querySelector('.full-text');

                    if (fullText.style.display === 'none') {
                        fullText.style.display = 'inline';
                        shortText.style.display = 'none';
                        button.textContent = 'Lebih Sedikit';
                    } else {
                        fullText.style.display = 'none';
                        shortText.style.display = 'inline';
                        button.textContent = 'Selengkapnya';
                    }
                });
            });
        </script>

    </section>


    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

@endsection
