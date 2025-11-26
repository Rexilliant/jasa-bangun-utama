@extends('admin.layout.master')
@section('title', 'Konsultasi JBU')
@section('menu-konsultasi', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Konsultasi</h2>

        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table id="tableKonsultasi" class="w-full text-sm text-left rtl:text-center text-gray-500">
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
    <!-- Modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-screen">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-5">
                <div class="flex justify-between items-center border-b pb-2 mb-3">
                    <h3 class="text-lg font-semibold">Detail Konsultasi</h3>
                    <button type="button" data-modal-hide="static-modal" class="text-gray-600 hover:text-black">✕</button>
                </div>

                <div class="space-y-2">
                    <p><strong>Nama:</strong> <span id="m_nama"></span></p>
                    <p><strong>Whatsapp:</strong> <span id="m_wa"></span></p>
                    <p><strong>Lokasi:</strong> <span id="m_lokasi"></span></p>
                    <p><strong>Kategori:</strong> <span id="m_kategori"></span></p>
                    <p><strong>Estimasi Biaya:</strong> <span id="m_estimasi"></span></p>
                    <p><strong>Kebutuhan:</strong> <span id="m_kebutuhan"></span></p>
                </div>

                <div class="mt-4 text-right">
                    <button data-modal-hide="static-modal"
                        class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                        Tutup
                    </button>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('addJs')
    <script>
        $(document).ready(function() {
            $('#tableKonsultasi').DataTable();
        });
        $(document).on('click', '.btn-lihat', function() {
            $('#m_nama').text($(this).data('nama'));
            $('#m_wa').text($(this).data('no_wa'));
            $('#m_lokasi').text($(this).data('lokasi'));
            $('#m_kategori').text($(this).data('kategori'));
            $('#m_estimasi').text($(this).data('estimasi'));
            $('#m_kebutuhan').text($(this).data('kebutuhan'));
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
