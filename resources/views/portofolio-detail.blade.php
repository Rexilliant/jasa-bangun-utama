@extends('layout.master')
@section('title', $proyek->nama . '- Jasa Bangun Utama')
@section('keywords', $proyek->nama . ',' . $proyek->kategori->nama)
@section('description', $proyek->deskripsi)
@section('menu-portofolio', 'text-blue-700')
@section('addCss')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
        [data-carousel-slide-to][aria-current="true"] {
            background-color: #012269;
            /* warna aktif */
        }

        [data-carousel-slide-to][aria-current="false"] {
            background-color: #cbd5e1;
            /* warna default/tidak aktif */
        }

        .swiper {
            width: 100%;
            height: 500px;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .swiper-pagination-bullet {
            background-color: white;
        }

        .swiper-pagination-bullet-active {
            background-color: #012269;
        }
    </style>
@endsection
@section('addJs')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: '.custom-next',
                prevEl: '.custom-prev',
            },
        });
    </script>
    <script>
        // 1. Load the Iframe Player API code asynchronously.
        var tag = document.createElement('script');
        tag.src = "https://www.youtube.com/iframe_api";
        var firstScriptTag = document.getElementsByTagName('script')[0];
        firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

        var player;

        // 2. This function creates an <iframe> (and YouTube player)
        function onYouTubeIframeAPIReady() {
            player = new YT.Player('youtubeIframe', {
                events: {
                    'onReady': onPlayerReady
                }
            });
        }

        // 3. The API will call this function when the video player is ready.
        function onPlayerReady(event) {
            document.getElementById("customPlayBtn").addEventListener("click", function() {
                player.playVideo(); // Mulai video
                document.getElementById("btn-container").style.display = "none"; // Sembunyikan tombol play
            });
        }
    </script>
@endsection
@section('content')
    <section class="text-[#1E293B] mt-15 mb-5">
        <div class="max-w-[1200px] w-[90%] lg:w-full m-auto">
            <div class="relative rounded-3xl overflow-hidden mb-5 lg:w-[80%] 2xl:w-[90%] m-auto" data-aos="fade-right"
                data-aos-duration="2000">
                <!-- YouTube Player Container -->
                <iframe id="youtubeIframe" class="aspect-video w-full"
                    src="https://www.youtube.com/embed/{{ $proyek->vidio }}?enablejsapi=1" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>

                <!-- Custom Play Button -->
                <div id="btn-container"
                    class="absolute inset-0 flex items-center justify-center bg-black/50 text-white text-2xl font-bold">
                    <button id="customPlayBtn" class="cursor-pointer">
                        <img src="{{ asset('image/play.png') }}" class="w-10 lg:w-15" alt="play" loading="lazy">
                    </button>
                </div>
            </div>

            <div class="mb-5 ">
                <h1 class="text-3xl font-bold mb-3" data-aos="fade-right" data-aos-duration="2000">{{ $proyek->nama }}</h1>
                <div class="grid grid-cols-2 justify-between items-center gap-10">
                    <div class="flex gap-5 items-center" data-aos="fade-right" data-aos-duration="2000">
                        <img src="{{ asset('storage/' . $proyek->thumbnail) }}" class="w-10 h-10 rounded-full"
                            alt="Thahirudin" loading="lazy">
                        <p>{{ $proyek->karyawan->nama }}</p>
                    </div>
                    <div class="text-end" data-aos="fade-left" data-aos-duration="2000">
                        <span>{{ \Carbon\Carbon::parse($proyek->updated_at)->format('d F Y') }}</span>
                    </div>
                </div>
            </div>
            <div class="mb-5" data-aos="fade-right" data-aos-duration="2000">
                {!! $proyek->detail !!}
            </div>
            <h2 class="text-[24px] font-bold mb-5" data-aos="fade-left" data-aos-duration="2000">Dokumentasi</h2>
            <div id="default-carousel" class="relative w-full" data-carousel="static" data-aos="fade-right"
                data-aos-duration="2000">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-[500px]">
                    @foreach ($dokumentasis as $dokumentasi)
                        <div class="hidden duration-700 ease-in-out" data-carousel-item>
                            <img src="{{ Storage::url($dokumentasi->gambar) }}"
                                class="absolute block w-full object-cover -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                alt="{{ $proyek->nama }}" loading="lazy">
                        </div>
                    @endforeach
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    @foreach ($dokumentasis as $index => $dokumentasi)
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                            aria-label="Slide {{ $index + 1 }}" data-carousel-slide-to="{{ $index }}"></button>
                    @endforeach
                </div>
                <!-- Slider controls -->
                <button type="button"
                    class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-prev>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 1 1 5l4 4" />
                        </svg>
                        <span class="sr-only">Previous</span>
                    </span>
                </button>
                <button type="button"
                    class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                    data-carousel-next>
                    <span
                        class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                        <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 6 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 9 4-4-4-4" />
                        </svg>
                        <span class="sr-only">Next</span>
                    </span>
                </button>
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
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ Storage::url($proyek->thumbnail) }}" alt="{{ $proyek->nama }}"
                                        loading="lazy">

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
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ Storage::url($proyek->thumbnail) }}" alt="{{ $proyek->nama }}"
                                        loading="lazy">

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
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ Storage::url($proyek->thumbnail) }}" alt="{{ $proyek->nama }}"
                                        loading="lazy">

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
                            <a href="{{ route('portofolio-detail', $proyek->slug) }}">
                                <div class="relative overflow-hidden rounded-lg group">
                                    <img class="w-full h-[250px] lg:h-[350px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                        src="{{ Storage::url($proyek->thumbnail) }}" alt="{{ $proyek->nama }}"
                                        loading="lazy">

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
            <a href="{{ route('portofolio') }}"
                class="bg-[#0C3C84] text-white font-semibold px-6 py-3 rounded-md hover:bg-[#062b63] transition">
                Lihat Yang Lainnya
            </a>
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
            <h2 class="text-[30px] font-extrabold text-[#012269]">
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

            <form action="{{ route('konsultasi.store') }}" method="POST">
                @csrf
                {{-- 01 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 lg:mt-10 mt-8">
                    <div class="lg:pr-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama Lengkap</label>
                        <input type="text" name="nama"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">No WhatsApp</label>
                        <input type="tel" name="no_wa" pattern="^(?:\+62|0)8[0-9]{7,11}$"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                </div>

                {{-- 02 --}}
                <div class="mb-5 lg:grid lg:grid-cols-2 mt-5">
                    <div class="lg:pr-4">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Lokasi Proyek</label>
                        <input type="text" name="lokasi"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="" required />
                    </div>
                    <div class="lg:pl-4 pt-5 lg:pt-0">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe Proyek</label>
                        <select name="kategori_id"
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
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Estimasi Biaya</label>
                    <select name="estimasi_biaya"
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
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Kebutuhan Proyek</label>
                    <textarea name="kebutuhan"
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
@endsection
