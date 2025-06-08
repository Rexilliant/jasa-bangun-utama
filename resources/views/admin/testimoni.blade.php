@extends('admin.layout.master')
@section('title', 'Testimoni JBU')
@section('menu-testimoni', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="mb-5 flex justify-between items-center">
            <h2 class="textl-xl font-bold">Testimoni</h2>
            <a href="{{ route('admin.tambah-testimoni') }}"
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
                    @foreach ($testimonis as $testimoni)
                        <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                            <td class="px-6 py-4">
                                {{ $testimoni->nama }}
                            </td>
                            <td class="px-6 py-4">
                                {{ \Carbon\Carbon::parse($testimoni->created_at)->format('d F Y') }}
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <a href="{{ route('admin.edit-testimoni', $testimoni->id) }}"
                                    class="font-medium text-blue-600 hover:underline">Edit</a><span>|</span>
                                <form id="delete-form-{{ $testimoni->id }}"
                                    action="{{ route('admin.destroy-testimoni', $testimoni->id) }}" method="POST"
                                    style="display:none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                                <button class="cursor-pointer font-medium text-red-600 hover:underline btn-delete"
                                    data-id="{{ $testimoni->id }}">Hapus</button>
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
            var table = $('#tableTestimoni').DataTable();

            // Event delegation pada wrapper table
            $('#tableTestimoni_wrapper').on('click', '.btn-delete', function(e) {
                e.preventDefault();
                let id = $(this).data('id');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data testimoni akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $('#delete-form-' + id).submit();
                    }
                });
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
