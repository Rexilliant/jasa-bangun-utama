@extends('admin.layout.master')
@section('title', 'Tambah Testimoni')
@section('menu-tambah-testimoni', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="">
            <h2 class="text-[24px] font-semibold text-[#334155] mb-6">Tambah Testimoni</h2>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                {{-- Full Name --}}
                <div class="mb-4">
                    <label for="full_name" class="block mb-1 text-[16px] text-[#334155]">Nama Lengkap</label>
                    <input type="text" id="full_name" class="bg-gray-50 border border-gray-300 text-[#334155] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="" required />
                </div>

                {{-- Komentar --}}
                <div class="mb-4">
                    <label for="large-input" class="block mb-1 text-[16px] text-[#334155]">Komentar</label>
                    <input type="text" id="large-input" class="block w-full p-4 text-[#334155] border border-gray-300 rounded-lg bg-gray-50 text-base focus:ring-blue-500 focus:border-blue-500">
                </div>

                {{-- Documention Input --}}
                <div class="mb-8">
                    <label class="block mb-1 text-[16px] text-[#334155]" for="multiple_files">Gambar</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="multiple_files" type="file" multiple>
                </div>

                <button type="button"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-1 w-full">
                    Simpan
                </button>
            </form>
        </div>
    </section>
@endsection
