@extends('admin.layout.master')
@section('title', 'Proyek JBU')
@section('menu-proyek', 'active')
@section('content')
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
                        <th scope="col" class="px-6 py-3">
                            Aksi
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
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.edit-proyek', $proyek->id) }}" class="font-medium text-blue-600 hover:underline">Edit</a> <span> |
                                </span> <a href="#" class="font-medium text-red-600 hover:underline">Hapus</a>
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
        $(document).ready(function() {
            $('#tableProyek').DataTable();
        });
    </script>
@endsection
