@extends('layout.master')
@section('content')

<section class="bg-no-repeat bg-cover h-[400px] bg-center w-full md:min-h-screen flex items-center justify-center" style="background-image: url('{{ asset('image/hero-bg.png') }}')">
    <div class="max-w-screen-xl mx-auto px-4 py-20 text-left">
        <p class="font-extrabold text-white text-[30px]">Bangun <span class="text-[#3B82F6]">Ruang Impian</span></p>
        <p class="font-extrabold text-white text-[30px]">Anda Bersama Kami</p>
        <p class="text-white mb-5 text-[15px]">Kami adalah perusahaan design and build yang mempermudah proses Anda mulai dari sketsa awal hingga bangunan berdiri, semua dikerjakan dengan detail, efisiensi, dan integritas.</p>
        
        <div class="grid grid-cols-2 gap-3">
            <button class="px-6 py-3 rounded text-white bg-[#012269] hover:opacity-80 font-semibold cursor-pointer">Konsultasi</button>
            <button class="px-6 py-3 rounded text-[#012269] bg-[#FFFFFF] stroke-2 border-[#012269] hover:opacity-80 font-semibold cursor-pointer">Portofolio</button>
        </div>
    </div>
</section>

<br>
<br>
<br>
<br>
<br>

@endsection