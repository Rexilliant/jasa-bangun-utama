@extends('layout.master')
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
            <div class="relative rounded-3xl overflow-hidden mb-5 lg:w-[80%] 2xl:w-[90%] m-auto" data-aos="fade-right" data-aos-duration="2000">
                <!-- YouTube Player Container -->
                <iframe id="youtubeIframe" class="aspect-video w-full"
                    src="https://www.youtube.com/embed/fCrOtPVrSvM?enablejsapi=1" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen>
                </iframe>

                <!-- Custom Play Button -->
                <div id="btn-container"
                    class="absolute inset-0 flex items-center justify-center bg-black/50 text-white text-2xl font-bold">
                    <button id="customPlayBtn" class="cursor-pointer">
                        <img src="{{ asset('image/play.png') }}" class="w-10 lg:w-15" alt="play">
                    </button>
                </div>
            </div>

            <div class="mb-5 ">
                <h1 class="text-3xl font-bold mb-3" data-aos="fade-right" data-aos-duration="2000">Bangun Baru - Rumah Ibu Lela</h1>
                <div class="grid grid-cols-2 justify-between items-center gap-10">
                    <div class="flex gap-5 items-center" data-aos="fade-right" data-aos-duration="2000">
                        <img src="https://d168wuuhrgvlrj.cloudfront.net/public/user/24396/24396.png"
                            class="w-[36px] rounded-full" alt="Thahirudin">
                        <p>Thahirudin</p>
                    </div>
                    <div class="text-end" data-aos="fade-left" data-aos-duration="2000">
                        <span>10 Februari 2025</span>
                    </div>
                </div>
            </div>
            <div class="mb-5" data-aos="fade-right" data-aos-duration="2000">
                <p>Projek ini merupakan sebuah rancangan desain 3D fasad yang dibuat khusus untuk rumah tinggal milik Ibu
                    Ayu. Desain ini mencerminkan perpaduan antara estetika modern dan sentuhan tradisional, menciptakan
                    tampilan yang elegan dan hangat. Fasad ini dibangun dengan menggunakan bahan berkualitas seperti batu
                    alam, kayu, dan kaca. Elemen batu alam memberikan kesan kokoh dan alami, sedangkan penggunaan kayu
                    menambah kehangatan pada tampilan eksterior. Kaca digunakan untuk memastikan pencahayaan yang cukup di
                    dalam rumah, sekaligus menjaga privasi.
                    Pada bagian depan, terdapat teras yang luas dengan pagar minimalis yang terbuat dari kombinasi kayu dan
                    logam. Pintu utama dirancang besar dengan aksen kayu dan kaca, memberikan kesan mewah dan welcoming.
                    Untuk atap, dipilih desain atap miring dengan genteng warna gelap yang memberikan kontras menarik dengan
                    warna dinding yang lebih terang.
                    Taman kecil di depan rumah menjadi pelengkap fasad, dimana terdapat berbagai tanaman hias dan semak yang
                    dirancang untuk mempercantik tampilan rumah sekaligus memberikan kesan asri. Pencahayaan eksterior
                    dipilih dengan saksama untuk menonjolkan detail arsitektur pada malam hari, memberikan tampilan yang
                    dramatis dan menawan.
                    Secara keseluruhan, desain 3D fasad untuk rumah Ibu Ayu ini berhasil menciptakan harmoni antara
                    keindahan, fungsionalitas, dan kenyamanan, serta menonjolkan karakteristik pribadi pemilik rumah.
                    Apakah Anda juga ingin membuat desain 3D fasad? Segera hubungi kami untuk konsultasi gratis dan jadikan
                    impian desain 3D fasad Anda menjadi kenyataan!</p>
            </div>
            <h2 class="text-[24px] font-bold mb-5" data-aos="fade-left" data-aos-duration="2000">Dokumentasi</h2>
            <div id="default-carousel" class="relative w-full" data-carousel="static" data-aos="fade-right" data-aos-duration="2000">
                <!-- Carousel wrapper -->
                <div class="relative h-56 overflow-hidden rounded-lg md:h-[500px]">
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://eduwork.id/images/home-new/thumbnail-new-education-real-work.webp"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://eduwork.id/images/home-new/thumbnail-new-education-real-work.webp"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <img src="https://eduwork.id/images/home-new/thumbnail-new-education-real-work.webp"
                            class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                            alt="...">
                    </div>
                </div>
                <!-- Slider indicators -->
                <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="0"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                        data-carousel-slide-to="1"></button>
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                        data-carousel-slide-to="2"></button>
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
    <section class="text-[#1E293B]">
        <div class="max-w-[1200px] w-[90%] lg:w-full py-20 m-auto">
            <h2 class="text-[40px] font-bold text-center" data-aos="fade-right" data-aos-duration="2000"><span class="text-[#012269] mb-5" >Proyek Terbaru</span> Kami</h2>
            <p class="text-center mb-5 lg:w-[60%] m-auto" data-aos="fade-left" data-aos-duration="2000">
                Kami telah merancang dan membangun berbagai ruang tinggal, komersial, dan publik dengan pendekatan desain
                yang kuat dan eksekusi yang presisi. Inilah beberapa karya terbaik kami.
            </p>
            <div class="grid grid-cols-2 lg:flex gap-5 w-full justify-center mb-5" id="proyek-tab"
                data-tabs-toggle="#proyek-tab-content"
                data-tabs-active-classes="bg-orange-500 hover:bg-orange-500/80 duration-300 text-white"
                data-tabs-inactive-classes="bg-slate-200 hover:bg-slate-300 text-slate-500" role="tablist">
                <button class="px-[2rem] py-[1rem] duration-300 ease-in-out cursor-pointer rounded-[1rem]"
                    id="semua-styled-tab" data-tabs-target="#styled-semua" type="button" role="tab"
                    aria-controls="semua" aria-selected="true" data-aos="fade-right" data-aos-duration="2000">Semua</button>
                <button class="px-[2rem] py-[1rem] duration-300 ease-in-out cursor-pointer rounded-[1rem]"
                    id="bangun-styled-tab" data-tabs-target="#styled-bangun" type="button" role="tab"
                    aria-controls="bangun" aria-selected="false" data-aos="fade-right" data-aos-duration="2000">Bangun Baru</button>
                <button class="px-[2rem] py-[1rem] duration-300 ease-in-out cursor-pointer rounded-[1rem]"
                    id="renovasi-styled-tab" data-tabs-target="#styled-renovasi" type="button" role="tab"
                    aria-controls="renovasi" aria-selected="false" data-aos="fade-right" data-aos-duration="2000">Renovasi</button>
                <button class="px-[2rem] py-[1rem] duration-300 ease-in-out cursor-pointer rounded-[1rem]"
                    id="desain-styled-tab" data-tabs-target="#styled-desain" type="button" role="tab"
                    aria-controls="desain" aria-selected="false" data-aos="fade-right" data-aos-duration="2000">Desain</button>
            </div>
            <div id="proyek-tab-content">
                <div class="hidden" id="styled-semua" role="tabpanel" aria-labelledby="semua-tab">
                    <div class="hidden md:grid md:grid-cols-2 lg:grid-cols-3 justify-between items-center gap-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full w-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="custom-prev absolute top-0 start-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4"></path>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="custom-next absolute top-0 end-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4"></path>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="styled-bangun" role="tabpanel" aria-labelledby="bangun-tab">
                    <div class="hidden lg:grid grid-cols-3 justify-between items-center gap-5" data-aos="fade-up" data-aos-duration="2000"
                        aria-labelledby="bangun-tab">
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div class="p-5">
                                    <p>Bangun Baru - Rumah Ibu Leela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="custom-prev absolute top-0 start-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4"></path>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="custom-next absolute top-0 end-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4"></path>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="styled-renovasi" role="tabpanel" aria-labelledby="renovasi-tab">
                    <div class="hidden lg:grid grid-cols-3 justify-between items-center gap-5" data-aos="fade-up" data-aos-duration="2000">
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div class="p-5">
                                    <p>Bangun Baru - Rumah Ibu Leela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="custom-prev absolute top-0 start-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4"></path>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="custom-next absolute top-0 end-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4"></path>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
                <div class="hidden" id="styled-desain" role="tabpanel" aria-labelledby="desain-tab">
                    <div class="hidden lg:grid grid-cols-3 justify-between items-center gap-5" data-aos="fade-up" data-aos-duration="2000"
                        aria-labelledby="desain-tab">
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div class="p-5">
                                    <p>Bangun Baru - Rumah Ibu Leela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                        <div class="h-full relative">
                            <img class="w-full h-80 object-cover object-center"
                                src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="bangun">
                            <div
                                class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                <div>
                                    <p>Bangun Baru - Rumah Ibu Lela</p>
                                    <p>Tangerang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="md:hidden">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide h-full">
                                    <div class="h-full w-full relative">
                                        <img class="w-full h-80 object-cover object-center"
                                            src="https://images.unsplash.com/photo-1745827214444-87a9894fc6b7?q=80&w=1528&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                            alt="bangun">
                                        <div
                                            class="absolute w-full h-full left-0 top-0 flex items-center justify-center bg-slate-900/60 text-white text-center font-semibold">
                                            <div>
                                                <p>Bangun Baru - Rumah Ibu Lela</p>
                                                <p>Tangerang</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="button"
                                class="custom-prev absolute top-0 start-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="M5 1 1 5l4 4"></path>
                                    </svg>
                                    <span class="sr-only">Previous</span>
                                </span>
                            </button>
                            <button type="button"
                                class="custom-next absolute top-0 end-0 z-30 flex items-center justify-center h-full cursor-pointer group focus:outline-none">
                                <span
                                    class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-[#012269]/80 group-hover:bg-[#012269] group-focus:ring-4 group-focus:ring-[#012269] group-focus:outline-none">
                                    <svg class="w-4 h-4 text-white rtl:rotate-180" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 9 4-4-4-4"></path>
                                    </svg>
                                    <span class="sr-only">Next</span>
                                </span>
                            </button>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
