@extends('admin.layout.master')
@section('title', 'Tambah Proyek')
@section('menu-konsultasi', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="">
            <h2 class="text-2xl font-semibold text-[#334155] mb-6">Tambah Proyek</h2>

            <form action="#" method="POST" enctype="multipart/form-data" class="space-y-5">
                {{-- Project Name --}}
                <div>
                    <label class="block mb-1 font-medium text-[16px] text-[#334155]">Nama Proyek</label>
                    <input type="text" name="nama_proyek"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- Kategori --}}
                <div>
                    <label class="block mb-1 font-medium text-[16px] text-[#334155]">Kategori</label>
                    <select type="text"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="" required>
                        <option disabled selected value="">Pilih Salah Satu</option>
                        <option value="desain">Desain</option>
                        <option value="bangun-baru">Bangun Baru</option>
                        <option value="renovasi">Renovasi</option>
                    </select>
                </div>

                {{-- Thumbnail Input --}}
                <div>
                    <label class="block mb-1 text-[16px] text-[#334155] font-medium" for="multiple_files">Thumbnail</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="multiple_files" type="file" multiple>
                </div>

                {{-- Documention Input --}}
                <div>
                    <label class="block mb-1 text-[16px] text-[#334155] font-medium" for="multiple_files">Dokumentasi</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="multiple_files" type="file" multiple>
                </div>

                {{-- Short Description --}}
                <div>
                    <label class="block mb-1 font-medium text-[16px] text-[#334155]">Deskripsi Singkat</label>
                    <input type="text" name="deskripsi"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- Detail Content --}}
                <div>
                    <label class="block mb-1 font-medium text-[16px] text-[#334155]">Detail</label>
                    <textarea name="detail" rows="6"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                </div>

                <button type="button"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-2 w-full">
                    Simpan
                </button>
            </form>
        </div>
    </section>
@endsection
