@extends('admin.layout.master')
@section('title', 'Dashboard JBU')
@section('menu-dashboard', 'active')
@section('content')
    <section class="bg-white  p-5 shadow border border-gray-300 rounded-lg mb-5">
        <form action="" class=" w-full grid grid-cols-2 gap-5">
            <div class="mb-5">
                <label for="tanggal-awal" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                    Mulai</label>
                <input type="date" id="tanggal-awal"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required />
            </div>
            <div class="mb-5">
                <label for="tanggal-akhir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal
                    Akhir</label>
                <input type="date" id="tanggal-akhir"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com" required />
            </div>
        </form>
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 justify-between items-center">
            <div class="p-5 border-l-6 rounded-lg border-red-500 bg-white text-center shadow">
                <p class="font-semibold">Konsultasi</p>
                <p class="text-4xl font-bold text-slate-500">100</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-yellow-500 bg-white text-center shadow">
                <p class="font-semibold">Testimoni</p>
                <p class="text-4xl font-bold text-slate-500">100</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-emerald-500 bg-white text-center shadow">
                <p class="font-semibold">Proyek</p>
                <p class="text-4xl font-bold text-slate-500">100</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-blue-500 bg-white text-center shadow">
                <p class="font-semibold">Pegawai</p>
                <p class="text-4xl font-bold text-slate-500">100</p>
            </div>
        </div>
    </section>
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Proyek</h2>
            <a href="" class="bg-[#012269] text-white px-6 py-3 rounded-md">Tambah</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="tableProyek" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Proyek
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Penulis
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Terakhir Diubah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Bangun Baru Gedung Graha Pena Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4">
                            Bambang Pratama Putra Hadi
                        </td>
                        <td class="px-6 py-4">
                            10 maret 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Bangun Baru Gedung Graha Pena Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4">
                            Bambang Pratama Putra Hadi
                        </td>
                        <td class="px-6 py-4">
                            10 maret 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Bangun Baru Gedung Graha Pena Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4">
                            Bambang Pratama Putra Hadi
                        </td>
                        <td class="px-6 py-4">
                            10 maret 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Bangun Baru Gedung Graha Pena Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4">
                            Bambang Pratama Putra Hadi
                        </td>
                        <td class="px-6 py-4">
                            10 maret 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Bangun Baru Gedung Graha Pena Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4">
                            Bambang Pratama Putra Hadi
                        </td>
                        <td class="px-6 py-4">
                            10 maret 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Konsultasi</h2>
            <a href="" class="bg-[#012269] text-white px-6 py-3 rounded-md">Tambah</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="tableKonsultasi" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Whatsapp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lokasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            089627654367
                        </td>
                        <td class="px-6 py-4">
                            Jl. Lele Pekanbaru Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-blue-600 hover:underline">Lihat</button> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            089627654367
                        </td>
                        <td class="px-6 py-4">
                            Jl. Lele Pekanbaru Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-blue-600 hover:underline">Lihat</button> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            089627654367
                        </td>
                        <td class="px-6 py-4">
                            Jl. Lele Pekanbaru Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-blue-600 hover:underline">Lihat</button> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            089627654367
                        </td>
                        <td class="px-6 py-4">
                            Jl. Lele Pekanbaru Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-blue-600 hover:underline">Lihat</button> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            089627654367
                        </td>
                        <td class="px-6 py-4">
                            Jl. Lele Pekanbaru Riau
                        </td>
                        <td class="px-6 py-4">
                            Bangun Baru
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <button class="font-medium text-blue-600 hover:underline">Lihat</button> <span> | </span> <a
                                href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
@endsection
@section('addJs')
    <script>
        $(document).ready(function() {
            $('#tableProyek').DataTable();
            $('#tableKonsultasi').DataTable();
        });
    </script>
@endsection
