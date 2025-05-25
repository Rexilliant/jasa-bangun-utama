@extends('admin.layout.master')
@section('title', 'Testimoni JBU')
@section('menu-testimoni', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Testimoni</h2>
            <a href=""
                class="bg-[#012269] text-white px-6 py-3 rounded-md hover:bg-blue-800 duration-300 ease-out">Tambah</a>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="tableTestimoni" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
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
                            10 Februari 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            10 Februari 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            10 Februari 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            10 Februari 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                    <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                        <td class="px-6 py-4">
                            Thahirudin
                        </td>
                        <td class="px-6 py-4">
                            10 Februari 2025
                        </td>
                        <td class="px-6 py-4 flex gap-2">
                            <a href="#" class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                            <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
            $('#tableTestimoni').DataTable();
        });
    </script>
@endsection
