@extends('admin.layout.master')
@section('title', 'Tambah Testimoni')
@section('menu-testimoni', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="">
            <h2 class="text-[24px] font-semibold text-[#334155] mb-5">Tambah Testimoni</h2>
            @if ($errors->any())
                <div class="flex p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50" role="alert">
                    <svg class="shrink-0 inline w-4 h-4 me-3 mt-[2px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
                    </svg>
                    <span class="sr-only">Danger</span>
                    <div>
                        <span class="font-medium">Beberapa Kesalahan</span>
                        <ul class="mt-1.5 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif

            <form id="formTambahTestimoni" action="{{ route('admin.store-testimoni') }}" method="POST" enctype="multipart/form-data"
                class="space-y-5">
                @csrf
                @method('POST')
                {{-- Full Name --}}
                <div class="mb-4">
                    <label for="nama" class="block mb-1 text-[16px] text-[#334155]">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama"
                        class="bg-gray-50 border border-gray-300 text-[#334155] text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" required value="{{ old('full_name') }}" />
                </div>
                <div class="mb-8">
                    <label class="block mb-1 text-[16px] text-[#334155]" for="gambar">Gambar</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="gambar" name="gambar" type="file" accept="image/*">
                </div>
                {{-- Komentar --}}
                <div class="mb-4">
                    <label for="komentar" class="block mb-1 text-[16px] text-[#334155]">Komentar</label>
                    <textarea type="text" name="komentar" id="komentar" rows="8"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="" required> </textarea>
                </div>



                <button type="submit"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-1 w-full">
                    Simpan
                </button>
            </form>
        </div>
    </section>
@endsection
@section('addJs')
    <script>
        const form = document.getElementById('formTambahTestimoni');
        const loadingOverlay = document.getElementById('loading-overlay');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function() {
            // Tampilkan overlay loading
            loadingOverlay.style.display = 'flex';
            submitButton.disabled = true;
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
