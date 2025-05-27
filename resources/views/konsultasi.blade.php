@extends('layout.master')
@section('content')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    
    <section class="text-[#1E293B] bg-[#F7F7F7]">
        <div
            class="py-20 max-w-[1200px] w-[90%] lg:w-full m-auto flex flex-col lg:flex-row justify-between items-center gap-10">
            <div class="w-70% order-2 lg:order-1 lg:block">
                <p class="mb-5 font-semibold" data-aos="fade-right" data-aos-duration="2000">Masih Bingung?</p>
                <h3 class="mb-5 text-[30px] font-bold" data-aos="fade-right" data-aos-duration="2000">Konsultasi Gratis
                    Langsung dengan Admin Jasa Bangun Utama</h3>
                <a href="#" data-aos="fade-right" data-aos-duration="2000"
                    class="bg-[#012269] hover:bg-blue-700 ease-in-out duration-300 transition-all py-4 px-8 inline-block text-white rounded-xl">Konsultasi
                    Gratis</a>
            </div>
            <div class="w-30% order-1 lg:order-2 lg:block">
                <img src="{{ asset('image/konsultasi.png') }}" alt="konsultasi" class=" md:w-80% lg:w-full"
                    data-aos="fade-left" data-aos-duration="2000">
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
                    <div class="lg:pl-4 pt-5 lg:pt-0">
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
                            placeholder="" required>
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
                        placeholder="" required>
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
                        placeholder="" required> </textarea>
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
            <p class="font-normal text-[15px]">Kami bangga menjadi bagian dari perjalanan setiap klien. Inilah cerita dan
                pengalaman mereka setelah bekerja sama dengan tim kami.</p>
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
                                                <img src="{{ asset('image/asset-konsultasi.png') }}" alt="Foto"
                                                    class="w-10 h-10 rounded-full" />
                                                <h3 class="font-semibold">Thahirudin {{ $item }}</h3>
                                            </div>
                                            <p class="text-sm text-gray-700">Kami sangat puas dengan hasil akhir rumah
                                                kami.
                                                Tim desain benar-benar menangkap visi kami dan mewujudkannya dengan detail
                                                yang luar biasa.</p>
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
                                        <img src="{{ asset('image/asset-konsultasi.png') }}" alt="Foto"
                                            class="w-10 h-10 rounded-full" />
                                        <h3 class="font-semibold">Thahirudin</h3>
                                    </div>
                                    <p class="text-sm text-gray-700">Kami sangat puas dengan hasil akhir rumah kami. Tim
                                        desain benar-benar menangkap visi kami dan mewujudkannya dengan detail yang luar
                                        biasa.</p>
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
        new Swiper('.mySwiper', {
            loop: true,
            slidesPerView: 1,
            spaceBetween: 20,
            slidesPerGroup: 1,
            loopFillGroupWithBlank: true,
            breakpoints: {
                768: {
                    slidesPerView: 1
                },
                1024: {
                    slidesPerView: 1
                }
            },
            navigation: {
                prevEl: '.swiper-button-prev',
                nextEl: '.swiper-button-next',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
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
