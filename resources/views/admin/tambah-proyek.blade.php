@extends('admin.layout.master')
@section('title', 'Tambah Proyek')
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
            <h2 class="text-2xl font-semibold text-[#334155] mb-6">Tambah Proyek</h2>
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
            <form id="formTambahProyek" action="{{ route('admin.store-proyek') }}" method="POST"
                enctype="multipart/form-data" class="space-y-5">
                @csrf
                @method('POST')
                {{-- Project Name --}}
                <div>
                    <label for="nama" class="block mb-1 font-medium text-[16px] text-[#334155]">Nama Proyek</label>
                    <input type="text" name="nama" id="nama"
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
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Thumbnail Input --}}
                <div>
                    <label class="block mb-1 text-[16px] text-[#334155] font-medium" for="thumbnail">Thumbnail</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="thumbnail" name="thumbnail" type="file" accept="image/*"/>
                </div>

                {{-- Documention Input --}}
                <div>
                    <label class="block mb-1 text-[16px] text-[#334155] font-medium"
                        for="multiple_files">Dokumentasi</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                        id="multiple_files" name="dokumentasi[]" type="file" multiple accept="image/*">
                </div>

                <div>
                    <label for="vidio" class="block mb-1 font-medium text-[16px] text-[#334155]">Link Vidio</label>
                    <input type="text" name="vidio" id="vidio"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>
                {{-- Short Description --}}
                <div>
                    <label for="deskripsi" class="block mb-1 font-medium text-[16px] text-[#334155]">Deskripsi
                        Singkat</label>
                    <input type="text" name="deskripsi" id="deskripsi"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                </div>

                {{-- Detail Content --}}
                <div>
                    <label for="detail" class="block mb-1 font-medium text-[16px] text-[#334155]">Detail</label>
                    <textarea name="detail" rows="6" id="detail"
                        class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"></textarea>
                </div>

                <button type="submit"
                    class="text-[#FAFAFA] bg-[#012269] hover:bg-blue-800 focus:ring-2 focus:ring-[#012269] font-medium rounded-lg text-sm  py-3.5 me-2 mb-2 w-full">
                    Simpan
                </button>
            </form>
        </div>
    </section>
@endsection
@section('addJs')
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
        const form = document.getElementById('formTambahProyek');
        const loadingOverlay = document.getElementById('loading-overlay');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function(e) {
            // Tampilkan overlay loading
            e.preventDefault();

            loadingOverlay.style.display = 'flex';
            submitButton.disabled = true;
            form.submit();
        });
    </script>
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>
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
