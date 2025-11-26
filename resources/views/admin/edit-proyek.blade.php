@extends('admin.layout.master')
@section('title', 'Edit Proyek')
@section('menu-proyek', 'active')
@section('addCss')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .ck-content {
            height: 500px !important;
        }

        .ck-content ul {
            list-style-type: disc !important;
            margin-left: 20px !important;
        }

        .ck-content ol {
            list-style-type: decimal !important;
            margin-left: 20px !important;
        }

        .ck-content h1 {
            font-size: 2rem !important;
            margin-bottom: 1rem !important;
        }

        .ck-content h2 {
            font-size: 1.75rem !important;
            margin-bottom: 0.75rem !important;
        }

        .ck-content h3 {
            font-size: 1.5rem !important;
            margin-bottom: 0.5rem !important;
        }
    </style>
    <script src="https://cdn.ckeditor.com/ckeditor5/23.0.0/classic/ckeditor.js"></script>
@endsection
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <div class="">
            <h2 class="text-2xl font-semibold text-[#334155] mb-6">Edit Proyek</h2>
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
            <form id="formUpdateProyek" action="{{ route('admin.update-proyek', $proyek->id) }}" method="POST"
                enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('PUT')
                {{-- Project Name --}}
                <div>
                    <label for="nama" class="block mb-1 font-medium text-[16px] text-[#334155]">Nama Proyek</label>
                    <input type="text" name="nama" id="nama" value="{{ $proyek->nama }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- Kategori --}}
                <div>
                    <label for="kategori_id" class="block mb-1 font-medium text-[16px] text-[#334155]">Kategori</label>
                    <select type="text" name="kategori_id" id="kategori_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="" required>
                        <option disabled selected value="">Pilih Salah Satu</option>
                        @foreach ($kategoris as $kategori)
                            <option value="{{ $kategori->id }}"
                                {{ $proyek->kategori_id == $kategori->id ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Thumbnail Input --}}
                <div>
                    <label class="block mb-1 text-[16px] text-[#334155] font-medium" for="thumbnail">Ganti Thumbnail</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="thumbnail" name="thumbnail" type="file" accept="image/*" />
                    <img id="preview-thumbnail" src="{{ asset($proyek->thumbnail) }}" alt="Thumbnail"
                        class="mt-2 w-1/3 rounded-2xl">
                    <script>
                        document.getElementById('thumbnail').addEventListener('change', function(event) {
                            const file = event.target.files[0];
                            const preview = document.getElementById('preview-thumbnail');
                            if (file) {
                                const reader = new FileReader();
                                reader.onload = function(e) {
                                    preview.src = e.target.result;
                                }
                                reader.readAsDataURL(file);
                            } else {
                                preview.src = "{{ asset($proyek->thumbnail) }}";
                            }
                        });
                    </script>
                </div>
                <div>
                    <label for="vidio" class="block mb-1 font-medium text-[16px] text-[#334155]">Link Vidio</label>
                    <input type="text" name="vidio" id="vidio" value="{{ $proyek->vidio }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                {{-- Short Description --}}
                <div>
                    <label for="deskripsi" class="block mb-1 font-medium text-[16px] text-[#334155]">Deskripsi
                        Singkat</label>
                    <input type="text" name="deskripsi" id="deskripsi" value="{{ $proyek->deskripsi }}"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- Detail Content --}}
                <div>
                    <label for="detail" class="block mb-1 font-medium text-[16px] text-[#334155]">Detail</label>
                    <textarea name="detail" rows="6" id="detail"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"> {{ $proyek->detail }}</textarea>
                </div>

                <button type="submit" id="submitUpdateProyek"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-2 w-full">
                    Simpan
                </button>
            </form>
        </div>

    </section>
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <h2 class="text-2xl font-semibold text-[#334155] mb-6">Dokumentasi Proyek</h2>
        <form id="formDokumentasi" action="{{ route('admin.store-dokumentasi', $proyek->id) }}" method="post"
            class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('POST')
            {{-- Documention Input --}}
            <div>
                <label class="block mb-1 text-[16px] text-[#334155] font-medium" for="multiple_files">Tambah
                    Dokumentasi</label>
                <div class="flex gap-5">
                    <input
                        class="block w-[70%] text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="multiple_files" name="dokumentasi[]" type="file" multiple accept="image/*">
                    <button type="submit" id="submitDokumentasi"
                        class="w-[30%] text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm ">
                        Simpan
                    </button>
                </div>
            </div>
        </form>
        <div class="relative">
            <table id="tableTestimoni" class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Gambar
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dokumentasis as $dokumentasi)
                        <tr class="odd:bg-white even:bg-gray-50 border-gray-200">
                            <td class="px-6 py-4">
                                <img src="{{ asset($dokumentasi->gambar) }}"
                                    class="w-52 h-52 object-cover m-auto rounded-lg" alt="{{ $dokumentasi->id }}">
                            </td>
                            <td class="px-6 py-4 flex gap-2">
                                <form action="{{ route('admin.destroy-dokumentasi', $dokumentasi->id) }}"
                                    class="formDeleteDokumentasi" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
@section('addJs')
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.formDeleteDokumentasi').forEach(function(form) {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Dokumentasi akan dihapus secara permanen!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            const overlay = document.getElementById('loading-overlay');
                            if (overlay) {
                                overlay.style.display = 'flex';
                            }
                            form.submit();
                        }
                    });
                });
            });
        });
    </script>

    <script>
        class MyUploadAdapter {
            constructor(loader) {
                this.loader = loader;
            }

            upload() {
                return this.loader.file.then(file => new Promise((resolve, reject) => {
                    const formData = new FormData();
                    formData.append('upload', file);
                    formData.append('_token', document.querySelector('meta[name="csrf-token"]')
                        .getAttribute('content'));

                    fetch('/upload-image', {
                            method: 'POST',
                            body: formData
                        })
                        .then(response => response.json())
                        .then(result => {
                            if (result.url) {
                                resolve({
                                    default: result.url
                                });
                            } else {
                                reject(result.error || 'Upload failed');
                            }
                        })
                        .catch(error => reject(error));
                }));
            }

            abort() {
                // Called if the upload is aborted.
            }
        }

        function CustomUploadAdapterPlugin(editor) {
            editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
                return new MyUploadAdapter(loader);
            };
        }

        ClassicEditor
            .create(document.querySelector('#detail'), {
                extraPlugins: [CustomUploadAdapterPlugin] // Tambahkan adapter custom
            })
            .catch(error => console.error(error));
    </script>
    <script>
        console.log('Success:', "{{ session('success') }}");
        console.log('Error:', "{{ session('error') }}");
        const form = document.getElementById('formUpdateProyek');
        const form2 = document.getElementById('formDokumentasi');
        const loadingOverlay = document.getElementById('loading-overlay');
        const submitButton = document.getElementById('submitUpdateProyek');
        const submitButton2 = document.getElementById('submitDokumentasi');

        form.addEventListener('submit', function(e) {
            // Tampilkan overlay loading
            e.preventDefault();

            loadingOverlay.style.display = 'flex';
            submitButton.disabled = true;
            form.submit();
        });

        form2.addEventListener('submit', function(e) {
            // Tampilkan overlay loading
            e.preventDefault();

            loadingOverlay.style.display = 'flex';
            submitButton2.disabled = true;
            form2.submit();
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
