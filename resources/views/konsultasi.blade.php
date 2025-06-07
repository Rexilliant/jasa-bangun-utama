@extends('layout.master')
@section('title', 'Konsultasi')
@section('menu-konsultasi', 'text-blue-700')
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


    <section class="w-[90%] max-w-[1200px] m-auto lg:w-full my-20 lg:my-40">
        <div class="text-center mb-10">
            <h2 class="text-[30px] font-extrabold text-[#012269]">
                <span class="text-[#1E293B]">Apa Kata Mereka Mengenai </span>Jasa Bangun Utama
            </h2>
            <p class="font-normal text-[15px]">Kami bangga menjadi bagian dari perjalanan setiap klien. Inilah cerita dan
                pengalaman mereka setelah bekerja sama dengan tim kami.</p>
        </div>
        <div class="relative overflow-hidden">
            <div class="slider-container grid grid-flow-col gap-4 px-6 py-4">
                <!-- Item asli (3x loop untuk memastikan kelancaran) -->
                @for ($i = 0; $i < 3; $i++)
                    @foreach ($testimonis as $testimoni)
                        <div
                            class="border border-blue-700 rounded-xl p-4 shadow-sm border-r-[5px] h-full flex-shrink-0 w-[300px]">
                            <div class="flex items-center gap-3 mb-2">
                                <img src="{{ asset('storage/' . $testimoni->gambar) }}" alt="Foto"
                                    class="w-10 h-10 rounded-full object-cover" />
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
            </div>
        </div>

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
@endsection
