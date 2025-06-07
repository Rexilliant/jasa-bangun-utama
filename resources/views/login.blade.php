<!doctype html>
<html class="overflow-x-hidden max-w-screen">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Jasa Bangun Utama</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <meta name="description" content="Halaman login untuk mengakses akun Jasa Bangun Utama">
    <meta name="keywords" content="login, jasa bangun utama, jbu, bangun baru, desain, bangunan, rumah, renovasi">
    <meta name="author" content="Thahirudin, Bambang Pratama Putra Hadi, Clover Cyber">
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta property="og:title" content="Login - Jasa Bangun Utama" />
    <meta property="og:description" content="Halaman login untuk mengakses akun Jasa Bangun Utama">
    <meta property="og:image" content="{{ asset('image/logo.png') }}">
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta name="twitter:title" content="Login - Jasa Bangun Utama" />
    <meta name="twitter:description" content="Halaman login untuk mengakses akun Jasa Bangun Utama">
    <meta name="twitter:image" content="{{ asset('image/logo.png') }}">
    <meta name="twitter:card" content="summary_large_image" />
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>


<body>
    <main class="max-w-[1200px] w-[90%] lg:w-full m-auto flex justify-center items-center h-screen text-slate-800">
        <section
            class="grid grid-cols-1 lg:grid-cols-2 gap-10 justify-between items-center bg-white shadow-[5px_5px_5px_rgba(0,0,0,0.25)] rounded-xl w-full border border-gray-300 p-5">
            <div data-aos="fade-right" data-aos-duration="2000">
                <div class="mb-5">
                    <img src="{{ asset('image/logo.png') }}" alt="logo" class="w-20 m-auto lg:w-30" loading="lazy">

                    <h1 class="text-[36px] font-bold text-center">Welcome Back</h1>
                    <p class="text-center text-slate-500">Masukkan email dan password akun untuk akses akun kamu</p>
                </div>
                <form action="{{ route('login.post') }}" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-5">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-800">Email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            placeholder="name@flowbite.com" name="email" required />
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 ">Password</label>
                        <input type="password" id="password" name="password"
                            class="bg-gray-50 border border-gray-300 text-gray-800 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                            required />
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                        <a href="#" class="text-[#012269]">Lupa Password?</a>
                    </div>
                    <button type="submit"
                        class="block w-full p-3 rounded-lg bg-[#012269] text-white hover:bg-[#012269]/80 ease-in-out duration-300 cursor-pointer">Login</button>
                    <a href="/" class="text-[#012269]">Kembali ke halaman utama</a>

                </form>
            </div>
            <div class="hidden lg:block" data-aos="fade-left" data-aos-duration="2000">
                <img src="{{ asset('image/login.png') }}" alt="login" class="w-full" loading="lazy">
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
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
</body>

</html>
