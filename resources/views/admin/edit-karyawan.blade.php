@extends('admin.layout.master')
@section('title', 'Dashboard JBU')
@section('menu-karyawan', 'active')
@section('content')
    <section class="bg-white p-5 shadow border border-gray-300 rounded-lg mb-5">
        <form action="{{ route('admin.update-karyawan', $karyawan->id) }}" method="post" enctype="multipart/form-data" id="formTambahKaryawan">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="nama" class="block mb-1 font-medium text-[16px] text-[#334155]">Nama</label>
                <input type="text" name="nama" id="nama"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required value={{ $karyawan->nama }}>
                @error('nama')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block mb-1 font-medium text-[16px] text-[#334155]">Email</label>
                <input type="email" name="email" id="email"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required value={{ $karyawan->email }}>
                @error('email')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block mb-1 font-medium text-[16px] text-[#334155]">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200">
                @error('password')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="jabatan" class="block mb-1 font-medium text-[16px] text-[#334155]">Jabatan</label>
                <input type="text" name="jabatan" id="jabatan"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    required value="{{ $karyawan->jabatan }}">
                @error('jabatan')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="instagram" class="block mb-1 font-medium text-[16px] text-[#334155]">Instagram</label>
                <input type="text" name="instagram" id="instagram"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    value="{{ $karyawan->instagram }}">
                @error('instagram')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="linkedin" class="block mb-1 font-medium text-[16px] text-[#334155]">LinkedIn</label>
                <input type="text" name="linkedin" id="linkedin"
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-blue-200"
                    value="{{ $karyawan->linkedin }}">
                @error('linkedin')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="profil" class="block mb-1 font-medium text-[16px] text-[#334155]">Profil</label>
                <input type="file" name="profil" id="profil" accept="image/*"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none"
                    required>
                @error('profil')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <img src="{{ asset('storage/' . $karyawan->profil) }}" class="w-32 h-32 object-cover mt-2" alt="profil" id="preview">
                <script>
                    document.getElementById('profil').addEventListener('change', function() {
                        const file = this.files[0];
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            document.getElementById('preview').src = e.target.result;
                        }
                        reader.readAsDataURL(file);
                    });
                </script>
            </div>
            <button type="submit"
                class="p-3 rounded-lg bg-[#012269] text-white hover:bg-[#012269]/80 ease-in-out duration-300 w-full">Kirim</button>
        </form>
    </section>
@endsection
@section('addJs')
    <script>
        const form = document.getElementById('formTambahKaryawan');
        const loadingOverlay = document.getElementById('loading-overlay');
        const submitButton = form.querySelector('button[type="submit"]');

        form.addEventListener('submit', function(e) {
            // Tampilkan overlay loading
            e.preventDefault();

            loadingOverlay.style.display = 'flex';
            submitButton.disabled = true;
            form.submit();
        });
        document.getElementById('formTambahKaryawan').addEventListener('submit', function(e) {
            const instagram = document.getElementById('instagram').value;
            const linkedin = document.getElementById('linkedin').value;

            if (instagram && !instagram.startsWith('http://') && !instagram.startsWith('https://')) {
                document.getElementById('instagram').value = 'https://' + instagram;
            }

            if (linkedin && !linkedin.startsWith('http://') && !linkedin.startsWith('https://')) {
                document.getElementById('linkedin').value = 'https://' + linkedin;
            }
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
