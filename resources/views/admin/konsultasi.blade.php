@extends('admin.layout.master')
@section('title', 'Konsultasi JBU')
@section('menu-konsultasi', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Konsultasi</h2>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-center text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Nama Lengkap
                        </th>
                        <th scope="col" class="px-6 py-3 text-left">
                            Whatsapp
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Lokasi
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tipe
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
                    @foreach ($konsultasis as $konsultasi)
                        <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                            <td class="px-6 py-4">
                                {{ $konsultasi->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konsultasi->no_wa }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konsultasi->lokasi }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konsultasi->kategori->nama ?? '-' }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $konsultasi->created_at->format('d F Y') }}
                            </td>
                            <td class="px-6 py-4">
                                <div class="flex gap-2">
                                    <button class="font-medium text-blue-600 hover:underline cursor-pointer btn-lihat"
                                        data-nama="{{ $konsultasi->nama }}" data-no_wa="{{ $konsultasi->no_wa }}"
                                        data-lokasi="{{ $konsultasi->lokasi }}"
                                        data-kategori="{{ $konsultasi->kategori->nama ?? '-' }}"
                                        data-estimasi="{{ $konsultasi->estimasi_biaya ?? '-' }}"
                                        data-kebutuhan="{{ $konsultasi->kebutuhan }}" data-modal-target="static-modal"
                                        data-modal-toggle="static-modal">
                                        Lihat
                                    </button>

                                    <span> | </span>

                                    <form action="{{ route('admin.konsultasi.hapus', $konsultasi->id) }}" method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="font-medium text-red-600 hover:underline">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="mt-10">
            {{ $konsultasis->links('pagination::tailwind') }}
        </div>
    </section>

    <section>
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
                    <form>
                        {{-- 01 --}}
                        <div class="mb-5 lg:grid lg:grid-cols-2">
                            <div class="lg:pr-4">
                                <label for="modal-nama" class="block mb-2 text-sm font-medium text-gray-900">Nama
                                    Lengkap</label>
                                <input type="text" id="modal-nama"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="" required disabled value="" />
                            </div>
                            <div class="lg:pl-4 pt-5 lg:pt-0">
                                <label for="modal-no_wa" class="block mb-2 text-sm font-medium text-gray-900">No
                                    WhatsApp</label>
                                <input type="tel" id="modal-no_wa" name="whatsapp" pattern="^\+62[0-9]{9,13}$"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="" required disabled value="" />
                            </div>
                        </div>

                        {{-- 02 --}}
                        <div class="mb-5 lg:grid lg:grid-cols-2 mt-5">
                            <div class="lg:pr-4">
                                <label for="modal-lokasi" class="block mb-2 text-sm font-medium text-gray-900">Lokasi
                                    Proyek</label>
                                <input type="text" id="modal-lokasi"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                    placeholder="" required disabled value="" />
                            </div>
                            <div class="lg:pl-4 pt-5 lg:pt-0">
                                <label class="block mb-2 text-sm font-medium text-gray-900">Tipe Proyek</label>
                                <p id="modal-kategori"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                    -
                                </p>
                            </div>
                        </div>

                        {{-- Estimasi Biaya --}}
                        <div class="mb-5">
                            <label class="block mb-2 text-sm font-medium text-gray-900">Estimasi Biaya</label>
                            <p id="modal-estimasi"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                -
                            </p>
                        </div>

                        {{-- Kebutuhan Proyek --}}
                        <div class="my-5">
                            <label for="modal-kebutuhan" class="block mb-2 text-sm font-medium text-gray-900">Kebutuhan
                                Proyek</label>
                            <textarea id="modal-kebutuhan"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                                rows="7" placeholder="" required disabled></textarea>
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </section>

@endsection
@section('addJs')
    <script>
        $(document).ready(function() {
            $('#tableKonsultasi').DataTable();

            $('.btn-lihat').click(function() {
                const nama = $(this).data('nama');
                const no_wa = $(this).data('no_wa');
                const lokasi = $(this).data('lokasi');
                const kategori = $(this).data('kategori');
                const estimasi = $(this).data('estimasi');
                const kebutuhan = $(this).data('kebutuhan');

                // Isi input modal
                $('#modal-nama').val(nama);
                $('#modal-no_wa').val(no_wa);
                $('#modal-lokasi').val(lokasi);
                $('#modal-kategori').text(kategori);
                $('#modal-estimasi').text(estimasi);
                $('#modal-kebutuhan').val(kebutuhan);

                // Tampilkan modal (jika kamu pakai plugin modal, panggil fungsi modal show)
                $('#static-modal').removeClass('hidden');
            });

            // Tombol close modal
            $('[data-modal-hide="static-modal"]').click(function() {
                $('#static-modal').addClass('hidden');
            });
        });
    </script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Berhasil",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @elseif (session('error'))
        <script>
            Swal.fire({
                title: "Gagal",
                text: "{{ session('error') }}",
                icon: "error"
            });
        </script>
    @endif
@endsection
