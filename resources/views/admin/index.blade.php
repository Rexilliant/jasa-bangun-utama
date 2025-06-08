@extends('admin.layout.master')
@section('title', 'Dashboard JBU')
@section('menu-dashboard', 'active')
@section('content')
    <section class="bg-white  p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5 justify-between items-center">
            <div class="p-5 border-l-6 rounded-lg border-red-500 bg-white text-center shadow">
                <p class="font-semibold">Konsultasi</p>
                <p class="text-4xl font-bold text-slate-500">{{ $jumlahKonsultasi }}</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-yellow-500 bg-white text-center shadow">
                <p class="font-semibold">Testimoni</p>
                <p class="text-4xl font-bold text-slate-500">{{ $jumlahTestimoni }}</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-emerald-500 bg-white text-center shadow">
                <p class="font-semibold">Proyek</p>
                <p class="text-4xl font-bold text-slate-500">{{ $jumlahProyek }}</p>
            </div>
            <div class="p-5 border-l-6 rounded-lg border-blue-500 bg-white text-center shadow">
                <p class="font-semibold">Pegawai</p>
                                <p class="text-4xl font-bold text-slate-500">{{ $jumlahKaryawan }}</p>
            </div>
        </div>
    </section>

    {{-- Proyek --}}
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Proyek</h2>
            <a href="{{ route('admin.tambah-proyek') }}" class="bg-[#012269] text-white px-6 py-3 rounded-md">Tambah</a>
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
                    </tr>
                </thead>
                <tbody>
                    @foreach ($proyeks as $proyek)
                        <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                            <td class="px-6 py-4">
                                {{ $proyek->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $proyek->kategori->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $proyek->karyawan->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $proyek->updated_at->format('d F Y H:i') . ' WIB' }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

    {{-- Konsultasi --}}
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </section>

@endsection
@section('addJs')
    <script>
        $(document).ready(function () {
            $('#tableProyek').DataTable();
            $('#tableKonsultasi').DataTable();
        });
    </script>
@endsection

