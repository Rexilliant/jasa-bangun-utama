@extends('layout.master')
@section('title', 'Portofolio')
@section('menu-portofolio', 'text-blue-700')
@section('content')
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
        <div class="grid grid-cols-2 lg:grid-cols-4 justify-center gap-3 mb-10">
            <a href="{{ route('portofolio') }}"
                class="cursor-pointer @if ($menu == 'semua') bg-[#FE6A2D] text-white @else bg-gray-200 @endif  hover:bg-[#FE6A2D] hover:text-white duration-300 ease-in-out px-4 py-3.5 rounded-lg text-sm font-semibold">Semua</a>
            <a href="{{ route('portofolio-bangunbaru') }}"
                class="cursor-pointer @if ($menu == 'bangun-baru') bg-[#FE6A2D] text-white @else bg-gray-200 @endif hover:bg-[#FE6A2D] hover:text-white duration-300 ease-in-out px-4 py-3.5 rounded-lg text-sm font-semibold">Bangun
                Baru</a>
            <a href="{{ route('portofolio-renovasi') }}"
                class="cursor-pointer @if ($menu == 'renovasi') bg-[#FE6A2D] text-white @else bg-gray-200 @endif hover:bg-[#FE6A2D] hover:text-white duration-300 ease-in-out px-4 py-3.5 rounded-lg text-sm font-semibold">Renovasi</a>
            <a href="{{ route('portofolio-desain') }}"
                class="cursor-pointer @if ($menu == 'desain') bg-[#FE6A2D] text-white @else bg-gray-200 @endif hover:bg-[#FE6A2D] hover:text-white duration-300 ease-in-out px-4 py-3.5 rounded-lg text-sm font-semibold">Desain</a>

        </div>
        @if (count($proyeks) > 0)
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                @foreach ($proyeks as $proyek)
                    <a href="{{ route('portofolio-detail', $proyek->slug) }}">
                        <div class="relative overflow-hidden rounded-lg group">
                            <img class="w-full h-[250px] lg:h-[300px] object-cover duration-300 ease-in-out transform group-hover:scale-150"
                                src="{{ Storage::url($proyek->thumbnail) }}" alt="{{ $proyek->nama }}">

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
            <div class="mt-10">
                {{ $proyeks->links('pagination::tailwind') }}
            </div>
        @else
            <p class="text-center text-[#1E293B] font-semibold">Belum ada portfolio renovasi</p>
        @endif
    </section>
@endsection
