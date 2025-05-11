<footer class="text-white bg-cover bg-left md:bg-center relative text-left md:text-left"
        style="background-image: url('{{ asset('image/Footer.png') }}');">


    {{-- 
    style="background-image: url('{{ asset('image/footer.png') }}');--}}
    <div class="max-w-screen-xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 ">
        
        <!-- Kolom 1: Brand -->
        <div>
            <h2 class="text-xl font-bold">Jasa Bangun Utama</h2>
            <p class="mt-2">Amanah - Kompetitif - Berkualitas</p>

            <div class="mt-4">
                <p class="font-semibold mb-2">Sosial Media</p>
                <div class="flex space-x-4 text-white">
                    <a href="#" class="hover:text-gray-300 cursor-pointer"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="hover:text-gray-300 cursor-pointer"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-gray-300 cursor-pointer"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="hover:text-gray-300 cursor-pointer"><i class="fas fa-envelope"></i></a>
                </div>
            </div>
        </div>

        <!-- Kolom 2: Informasi -->
        <div>
            <h2 class="text-xl font-bold mb-2">Informasi</h2>
            <ul class="space-y-2">
                <li><a href="#" class="hover:underline cursor-pointer">Beranda</a></li>
                <li><a href="#" class="hover:underline cursor-pointer">Portfolio</a></li>
                <li><a href="#" class="hover:underline cursor-pointer">Layanan</a></li>
                <li><a href="#" class="hover:underline cursor-pointer">Tentang Kami</a></li>
                <li><a href="#" class="hover:underline cursor-pointer">Konsultasi</a></li>
            </ul>
        </div>

        <!-- Kolom 3: Kantor -->
        <div>
            <h2 class="text-xl font-bold mb-2">Kantor</h2>
            <p class="text-sm leading-relaxed">
                PT Jasa Bangun Utama, Jl. Jogokaryan No. 28C,<br>
                Mantrijeron, Kec. Mantrijeron,<br>
                Kota Yogyakarta,<br>
                Daerah Istimewa Yogyakarta 55143
            </p>
        </div>
    </div>

    <div class="text-center py-4 text-sm bg-opacity-30 mt-4">
        Copyright ©2025 - Jasa Bangun Utama
    </div>

</footer>


<script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
</body>

</html>
