@extends('admin.layout.master')
@section('title', 'Konsultasi JBU')
@section('menu-konsultasi', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Konsultasi</h2>
            <a href=""
                class="bg-[#012269] text-white px-6 py-3 rounded-md hover:bg-blue-800 duration-300 ease-out">Tambah</a>
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
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="font-medium text-blue-600 hover:underline cursor-pointer">Lihat</button> <span> |
                            </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="font-medium text-blue-600 hover:underline cursor-pointer">Lihat</button> <span> |
                            </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="font-medium text-blue-600 hover:underline cursor-pointer">Lihat</button> <span> |
                            </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="font-medium text-blue-600 hover:underline cursor-pointer">Lihat</button> <span> |
                            </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
                            <button data-modal-target="static-modal" data-modal-toggle="static-modal"
                                class="font-medium text-blue-600 hover:underline cursor-pointer">Lihat</button> <span> |
                            </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </section>
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed z-[101] top-0 left-0 h-screen bg-black/80 w-full flex items-center justify-center">
        <div class="bg-white w-[90%] lg:w-[70%] rounded-md">
            <div class="flex items-center justify-between p-5">
                <span class="font-bold">Data Konsultasi</span>
                <button data-modal-hide="static-modal"
                    class="text-white bg-[#012269] hover:bg-blue-900 duration-300 ease-out p-2 rounded cursor-pointer">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <hr class="border-gray-300">
            <div class="p-5">
                <form class="">
                    {{-- 01 --}}
                    <div class="mb-5 lg:grid lg:grid-cols-2">
                        <div class="lg:pr-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Nama
                                Lengkap</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" required disabled value="Thahirudin" />
                        </div>
                        <div class="lg:pl-4 pt-5 lg:pt-0">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">No
                                WhatsApp</label>
                            <input type="tel" name="whatsapp" pattern="^\+62[0-9]{9,13}$"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" required disabled value="089627654367" />
                        </div>
                    </div>

                    {{-- 02 --}}
                    <div class="mb-5 lg:grid lg:grid-cols-2 mt-5">
                        <div class="lg:pr-4">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Lokasi
                                Proyek</label>
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" required disabled value="Jl. Lele Pekanbaru Riau" />
                        </div>
                        <div class="lg:pl-4 pt-5 lg:pt-0">
                            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Tipe
                                Proyek</label>
                            <select type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                                placeholder="" required disabled>
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
                            placeholder="" required disabled>
                            <option disabled value="">Pilih Salah Satu</option>
                            <option value="desain" selected>Kurang Dari 100 Juta</option>
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
                            rows="7" placeholder="" required disabled> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates sit dolor quis recusandae. Voluptatum magni aut sit, praesentium sapiente nostrum?</textarea>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection
@section('addJs')
    <script>
        $(document).ready(function() {
            $('#tableKonsultasi').DataTable();
        });
    </script>
@endsection
