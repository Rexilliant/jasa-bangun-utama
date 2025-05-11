@extends('layout.master')
@section('content')

{{-- Hero Section --}}
<section class="bg-no-repeat bg-cover h-[400px] bg-center w-full lg:min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('image/hero-bg.png') }}')">
    <div class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-left lg:grid lg:grid-cols-2">
        <div>
            <p class="font-extrabold text-white text-[30px] md:text-[50px]">Bangun <span class="text-[#3B82F6]">Ruang Impian</span></p>
            <p class="font-extrabold text-white text-[30px] md:text-[50px]">Anda Bersama Kami</p>
            <p class="text-white mb-5 text-[15px] md:text-[16px]">Kami adalah perusahaan design and build yang mempermudah proses Anda mulai dari sketsa awal hingga bangunan berdiri, semua dikerjakan dengan detail, efisiensi, dan integritas.</p>
            <div class="grid grid-cols-2 gap-3 lg:w-[300px]">
                <button class="px-6 py-3 rounded text-white bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Konsultasi</button>
                <button class="px-6 py-3 rounded text-[#012269] bg-[#FFFFFF] stroke-2 border-[#012269] hover:opacity-80 font-semibold cursor-pointer">Portofolio</button>
            </div>
        </div>
    </div>
</section>

{{-- Mitra --}}
<section class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-center">
    <p class="font-extrabold text-[#012269] text-[30px] md:text-[40px]">Pelanggan <span class="text-[#1E293B]">Kami</span></p>
    <p class="text-[#1E293B] mb-5 text-[15px]">
        Kami dipercaya oleh lebih dari +8000 pelanggan yang berada di seluruh Indonesia. Berikut adalah beberapa pelanggan kami:
    </p>
    
    <div class="flex flex-wrap justify-center gap-6 items-center md:text-[16px]">
        <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
        <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
        <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
        <img src="{{ asset('image/sampel-logo.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px]">
    </div>
</section>

{{-- Layanan --}}
<section class="bg-no-repeat bg-cover bg-center w-full py-20 lg:py-50 xl:py-80 items-center justify-center" style="background-image: url('{{ asset('image/bg-layanan.png') }}'); background-size: cover; background-position: center;">
    <p class="font-extrabold text-[#FAFAFA] text-[27px] md:text-[40px] text-center my-6">Layanan Ungulan Kami</p>
    <div class="w-[90%] max-w-[1200px] m-auto lg:w-full">
        <div class="">
            <div class="grid lg:grid-cols-3 items-center justify-center gap-10">
                <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                    <img src="{{ asset('image/bangun-baru.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                    <div class="text-center py-4 mx-2">
                        <p class="font-bold text-[18px]">Bangun Baru</p>
                        <p class="text-[15px]">Melayani segala kebutuhan Properti yang sesuai Budget anda. Harga bersahabat, hasil hebat. Kontraktor bangunan profesional.</p>
                    </div>
                </div>

                <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                    <img src="{{ asset('image/renovasi.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                    <div class="text-center py-4 mx-2">
                        <p class="font-bold text-[18px]">Renovasi</p>
                        <p class="text-[15px]">Sebagai spesialis renovasi rumah, kami memiliki pengalaman yang luas dalam mengelola proyek renovasi rumah dan berbagai gedung lainnya.</p>
                    </div>
                </div>

                <div class="h-full bg-white rounded-2xl py-6 mx-2 lg:mx-0">
                    <img src="{{ asset('image/desain.png') }}" alt="" class="w-1/2 sm:w-1/4 max-w-[150px] text-center m-auto">
                    <div class="text-center py-4 mx-2">
                        <p class="font-bold text-[18px]">Desain</p>
                        <p class="text-[15px]">Sebagai arsitek profesional, kami memiliki pengalaman yang luas dalam merancang dan mengelola proyek-proyek arsitektur yang indah dan fungsional.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>

{{-- Proyek --}}
<section class="w-[90%] max-w-[1200px] m-auto lg:w-full py-20 text-center">
    <h2 class="text-[30px] font-extrabold text-[#012269]">
        Proyek <span class="text-[#1E293B]">Terbaru</span> Kami
    </h2>
    <p class="text-[#1E293B] mt-2 mb-6 text-[15px] max-w-2xl mx-auto">
        Kami telah merancang dan membangun berbagai ruang tinggal, komersial, dan publik dengan pendekatan desain yang kuat dan eksekusi yang presisi. Inilah beberapa karya terbaik kami.
    </p>

    <!-- Filter Buttons -->
    <div class="flex flex-wrap justify-center gap-3 mb-10">
        <button class="px-4 py-3.5 text-white bg-[#FE6A2D] rounded-lg text-sm font-semibold">Semua</button>
        <button class="px-4 py-3.5 text-[#64748B] bg-[#E2E8F0] rounded-lg text-sm font-semibold">Bangun Baru</button>
        <button class="px-4 py-3.5 text-[#64748B] bg-[#E2E8F0] rounded-lg text-sm font-semibold">Renovasi</button>
        <button class="px-4 py-3.5 text-[#64748B] bg-[#E2E8F0] rounded-lg text-sm font-semibold">Desain</button>
    </div>

    <!-- Slider Controls -->
    <div class="relative">
        <!-- Left Arrow -->
        <button class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-[#0C3C84] text-white p-2 rounded-full hidden lg:block">
            &larr;
        </button>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 ">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>

                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img src="{{ asset('image/sampel-logo.png') }}" alt="Proyek" class="w-full h-60 object-cover">
                    <div class="absolute inset-0 bg-black bg-opacity-40 flex flex-col justify-center items-center text-white text-sm font-medium">
                        <p>Bangun Baru – Rumah Ibu Lela</p>
                        <p>Tangerang</p>
                    </div>
                </div>
        </div>

        <!-- Right Arrow -->
        <button class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-[#0C3C84] text-white p-2 rounded-full hidden lg:block">
            &rarr;
        </button>
    </div>

    <!-- Dots -->
    <div class="flex justify-center mt-6 space-x-2">
        <span class="w-3 h-3 bg-[#0C3C84] rounded-full inline-block"></span>
        <span class="w-3 h-3 bg-gray-300 rounded-full inline-block"></span>
        <span class="w-3 h-3 bg-gray-300 rounded-full inline-block"></span>
    </div>

    <!-- Lihat yang Lainnya -->
    <div class="mt-10">
        <button class="bg-[#0C3C84] text-white font-semibold px-6 py-3 rounded-md hover:bg-[#062b63] transition">
            Lihat Yang Lainnya
        </button>
    </div>
</section>


<br>
<br>
<br>
<br>
<br>

@endsection