 <style>
     footer {
         background-image: url('{{ asset('image/footer-mobile.webp') }}');
         background-size: cover;
         background-position: center;
     }

     /* Media query untuk layar desktop dan lebih besar */
     @media (min-width: 768px) {
         footer {
             background-image: url('{{ asset('image/Footer.webp') }}');
         }
     }
 </style>
 <footer class="text-white bg-cover bg-left md:bg-center relative text-left md:text-left rounded-t-4xl md:rounded-none">


     {{-- 
    style="background-image: url('{{ asset('image/footer.png') }}'); --}}
     <div class="max-w-screen-xl mx-auto px-6 py-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8 ">

         <!-- Kolom 1: Brand -->
         <div>
             <h2 class="text-xl font-bold">Jasa Bangun Utama</h2>
             <p class="mt-2">Amanah - Kompetitif - Berkualitas</p>

             <div class="mt-4">
                 <p class="font-semibold mb-2">Sosial Media</p>
                 <div class="flex space-x-4 text-white">
                     <a href="https://www.instagram.com/jasa_bangun_utama_?igsh=MXdmNGF2bmV0bnpyMw==" target="_blank"
                         rel="noopener noreferrer" class="hover:text-gray-300 cursor-pointer"><img
                             src="/image/instagram.svg" alt="instagram"></a>
                     <a href="https://www.tiktok.com/@userjbu2025?_r=1&_t=ZS-91ZTSwbBx3f" target="_blank"
                         rel="noopener noreferrer" class="hover:text-gray-300 cursor-pointer"><img
                             src="/image/tiktok.svg" alt="tiktok"></a>
                     <a href="https://youtube.com/@jasabangunutama6815?si=08YnebkakuusHE94" target="_blank"
                         rel="noopener noreferrer" class="hover:text-gray-300 cursor-pointer"><img
                             src="/image/youtube.svg" alt="youtube"></a>
                 </div>
             </div>
         </div>

         <!-- Kolom 2: Informasi -->
         <div>
             <h2 class="text-xl font-bold mb-2">Informasi</h2>
             <ul class="space-y-2">
                 <li><a href="{{ route('beranda') }}" class="hover:underline cursor-pointer">Beranda</a></li>
                 <li><a href="{{ route('portofolio') }}" class="hover:underline cursor-pointer">Portfolio</a></li>
                 <li><a href="{{ route('tentang-kami') }}" class="hover:underline cursor-pointer">Tentang Kami</a></li>
                 <li><a href="{{ route('konsultasi') }}" class="hover:underline cursor-pointer">Konsultasi</a></li>
             </ul>
         </div>

         <!-- Kolom 3: Kantor -->
         <div>
             <h2 class="text-xl font-bold mb-2">Kantor</h2>
             <p class="text-sm leading-relaxed">
                 PT Jasa Bangun Utama, Jln. Karyawan GG. Karya Haji, Sidomulyo Barat, Kec Tuahmadani, Pekanbaru - RIAU
             </p>
         </div>
     </div>

     <div class="text-center py-4 text-sm bg-opacity-30 mt-4">
         Copyright ©2025 - Jasa Bangun Utama
     </div>

 </footer>


 <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
 @yield('addJs')
 </body>

 </html>
