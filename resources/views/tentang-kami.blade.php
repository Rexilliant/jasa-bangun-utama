@extends('layout.master')
@section('title', 'Tentang Kami')
@section('menu-tentang-kami', 'text-blue-700')
@section('addCss')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endsection
@section('addJs')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endsection
@section('content')
    <section class="bg-cover bg-center h-[500px] lg:h-[600px] w-full text-[#1E293B]"
        style="background-image: url({{ asset('image/hero-tentang-kami.png') }})">
        <div class="max-w-[1200px] w-[90%] h-full xl:w-full m-auto text-white grid lg:grid-cols-2 items-center">
            <div>
                <h1 class="text-4xl lg:text-[50px] font-bold" data-aos="fade-right" data-aos-duration="2000">Jasa <span
                        class="text-[#3B82F6]">Bangun Utama</span></h1>
                <p data-aos="fade-right" data-aos-duration="2000" data-aos-delay="500">Kami percaya, rumah bukan sekadar
                    bangunan, tetapi tempat tumbuh dan berproses. Karena itu, kami tidak
                    hanya
                    membangun struktur kami membantu menciptakan ruang hidup yang layak dan membanggakan.</p>
            </div>
        </div>
    </section>
    <section>
        <div
            class="w-[90%] xl:w-full max-w-[1200px] m-auto grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-30 justify-between items-center text-[#1E293B] lg:py-30 py-20">
            <div class="order-2 md:order-1">
                <h2 class="text-4xl font-bold mb-5" data-aos="fade-right" data-aos-duration="2000"><span
                        class="text-[#012269] ">Tentang</span> Kami</h2>
                <p class="text-justify" data-aos="fade-right" data-aos-duration="2000">
                    PT Jasa Bangun Utama adalah perusahaan yang bergerak di bidang renovasi dan pembangunan rumah,
                    berkomitmen
                    untuk memberikan solusi konstruksi yang amanah, kompetitif, dan berkualitas. Kami hadir untuk mewujudkan
                    impian Anda memiliki hunian yang nyaman, fungsional, dan estetik sesuai kebutuhan serta anggaran.
                </p>
                <br>
                <p class="text-justify" data-aos="fade-right" data-aos-duration="2000">Dengan pengalaman dan tim profesional
                    di bidang konstruksi, kami melayani berbagai
                    proyek mulai dari renovasi rumah tinggal, pembangunan rumah baru, hingga perbaikan struktural maupun
                    estetika bangunan. Setiap proyek yang kami tangani dikerjakan dengan standar tinggi, ketepatan waktu,
                    serta transparansi biaya.</p>
            </div>
            <div class="order-1 md:order-2" data-aos="fade-left" data-aos-duration="2000">
                <img src="{{ asset('image/tentang-kami.png') }}" class="w-full " alt="Tentang Kami" loading="lazy">
            </div>
        </div>
    </section>
    <section class="bg-cover bg-no-repeat bg-right-top lg:bg-center lg:py-40 py-20 h-full lg:w-full text-[#1E293B]"
        style="background-image: url({{ asset('image/bg-layanan.png') }})">
        <div class="max-w-[1200px] w-[90%] h-full xl:w-full m-auto">
            <h2 class="text-3xl font-bold text-white text-center mb-20" data-aos="fade-right" data-aos-duration="2000">
                Kenapa Memilih Kami?</h2>
            <div class="grid lg:grid-cols-3 gap-10 justify-between items-center">
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full" data-aos="fade-right"
                    data-aos-duration="2000">
                    <img src="{{ asset('image/amanah.png') }}" alt="Amanah" class="w-40 m-auto mb-3" loading="lazy">
                    <h3 class="text-3xl font-bold mb-3">Amanah</h3>
                    <p>Kepercayaan Anda adalah tanggung jawab besar bagi kami. Setiap pekerjaan dilakukan dengan integritas
                        dan keterbukaan.</p>
                </div>
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full" data-aos="fade-right"
                    data-aos-duration="2000">
                    <img src="{{ asset('image/integritas.png') }}" alt="Integritas" class="w-40 m-auto mb-3" loading="lazy">
                    <h3 class="text-3xl font-bold mb-3">Integritas</h3>
                    <p>Harga terbaik dengan hasil optimal. Kami selalu berusaha memberikan penawaran yang efisien tanpa
                        mengorbankan kualitas.</p>
                </div>
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full" data-aos="fade-right"
                    data-aos-duration="2000">
                    <img src="{{ asset('image/loyalitas.png') }}" alt="Loyalitas" class="w-40 m-auto mb-3" loading="lazy">
                    <h3 class="text-3xl font-bold mb-3">Loyalitas</h3>
                    <p>Material pilihan, pengerjaan presisi, dan pengawasan ketat menjadi bagian dari komitmen mutu kami.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="text-[#1E293B]">
        <div class="max-w-[1200px] w-[90%] xl:w-full m-auto grid lg:grid-cols-2 justify-between gap-10 py-30">
            <div data-aos="fade-right" data-aos-duration="2000">
                <img src="{{ asset('image/visi.png') }}" alt="visi" class="w-full mb-5" loading="lazy">
                <p>Menjadi perusahaan konstruksi terpercaya di Indonesia yang mengedepankan kejujuran, efisiensi, dan
                    kualitas dalam setiap proyek pembangunan dan renovasi rumah.</p>
            </div>
            <div data-aos="fade-left" data-aos-duration="2000">
                <img src="{{ asset('image/misi.png') }}" alt="misi" class="w-full mb-5" loading="lazy">
                <ol class="list-decimal pl-4">
                    <li>Memberikan layanan konstruksi yang amanah, transparan, dan dapat diandalkan oleh setiap pelanggan.
                    </li>
                    <li>Menawarkan solusi pembangunan dan renovasi dengan harga yang kompetitif tanpa mengurangi mutu hasil
                        kerja.</li>
                    <li>Menjaga standar kualitas tinggi dalam penggunaan material, desain, dan pengerjaan setiap proyek.
                    </li>
                    <li>Membangun hubungan jangka panjang dengan pelanggan melalui pelayanan yang profesional dan hasil
                        kerja yang memuaskan.</li>
                    <li>Mendorong inovasi dan pengembangan sumber daya manusia untuk menghadirkan solusi konstruksi yang
                        efisien dan berkelanjutan.</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="bg-[#F7F7F7] py-30">
        <div class="max-w-[1200px] w-[90%] xl:w-full m-auto text-[#1E293B]">
            <h2 class="text-3xl font-bold text-center mb-10" data-aos="fade-left" data-aos-duration="2000">Tim Kami</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
                @foreach ($karyawans as $karyawan)
                    <div class="bg-white rounded-xl border border-gray-300 h-full" data-aos="fade-right"
                        data-aos-duration="2000">
                        <div class="h-[400px] rounded-t-xl overflow-hidden ">
                            <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Thahirudin" class="w-full h-full object-cover object-[center_top]" loading="lazy">
                        </div>
                        <div class="p-5">
                            <div class="mb-5">
                                <h3 class="font-bold text-center text-lg">{{ $karyawan->nama }}</h3>
                                <p class="text-center font-semibold">{{ $karyawan->jabatan }}</p>
                            </div>
                            <div class="flex gap-2 justify-center items-center">
                                @if ($karyawan->instagram)
                                    <a href="{{ $karyawan->instagram }}" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="w-5 fill-gray-700 hover:fill-[#012269] duration-300 ease-in-out cursor-pointer">
                                            <path
                                                d="M194.4 211.7a53.3 53.3 0 1 0 59.3 88.7 53.3 53.3 0 1 0 -59.3-88.7zm142.3-68.4c-5.2-5.2-11.5-9.3-18.4-12c-18.1-7.1-57.6-6.8-83.1-6.5c-4.1 0-7.9 .1-11.2 .1c-3.3 0-7.2 0-11.4-.1c-25.5-.3-64.8-.7-82.9 6.5c-6.9 2.7-13.1 6.8-18.4 12s-9.3 11.5-12 18.4c-7.1 18.1-6.7 57.7-6.5 83.2c0 4.1 .1 7.9 .1 11.1s0 7-.1 11.1c-.2 25.5-.6 65.1 6.5 83.2c2.7 6.9 6.8 13.1 12 18.4s11.5 9.3 18.4 12c18.1 7.1 57.6 6.8 83.1 6.5c4.1 0 7.9-.1 11.2-.1c3.3 0 7.2 0 11.4 .1c25.5 .3 64.8 .7 82.9-6.5c6.9-2.7 13.1-6.8 18.4-12s9.3-11.5 12-18.4c7.2-18 6.8-57.4 6.5-83c0-4.2-.1-8.1-.1-11.4s0-7.1 .1-11.4c.3-25.5 .7-64.9-6.5-83l0 0c-2.7-6.9-6.8-13.1-12-18.4zm-67.1 44.5A82 82 0 1 1 178.4 324.2a82 82 0 1 1 91.1-136.4zm29.2-1.3c-3.1-2.1-5.6-5.1-7.1-8.6s-1.8-7.3-1.1-11.1s2.6-7.1 5.2-9.8s6.1-4.5 9.8-5.2s7.6-.4 11.1 1.1s6.5 3.9 8.6 7s3.2 6.8 3.2 10.6c0 2.5-.5 5-1.4 7.3s-2.4 4.4-4.1 6.2s-3.9 3.2-6.2 4.2s-4.8 1.5-7.3 1.5l0 0c-3.8 0-7.5-1.1-10.6-3.2zM448 96c0-35.3-28.7-64-64-64H64C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H384c35.3 0 64-28.7 64-64V96zM357 389c-18.7 18.7-41.4 24.6-67 25.9c-26.4 1.5-105.6 1.5-132 0c-25.6-1.3-48.3-7.2-67-25.9s-24.6-41.4-25.8-67c-1.5-26.4-1.5-105.6 0-132c1.3-25.6 7.1-48.3 25.8-67s41.5-24.6 67-25.8c26.4-1.5 105.6-1.5 132 0c25.6 1.3 48.3 7.1 67 25.8s24.6 41.4 25.8 67c1.5 26.3 1.5 105.4 0 131.9c-1.3 25.6-7.1 48.3-25.8 67z" />
                                        </svg>
                                    </a>
                                @endif
                                @if ($karyawan->linkedin)
                                    <a href="{{ $karyawan->linkedin }}" target="_blank" rel="noopener noreferrer">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                            class="w-5 fill-gray-700 hover:fill-[#012269] duration-300 ease-in-out cursor-pointer">
                                            <path
                                                d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z" />
                                        </svg>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section>
        <div class="w-[90%] xl:w-full max-w-[1200px] m-auto text-[#012269] py-20">
            <h2 class="text-3xl mb-10 text-center font-bold" data-aos="fade-right" data-aos-duration="2000">Ingin
                Berkunjung</h2>
            <div data-aos="fade-left" data-aos-duration="2000">
                <iframe class="w-full h-[450px] rounded-xl"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6584917038317!2d101.43483607338246!3d0.5128493636976995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d5aead9af954b9%3A0x5cbd18b673591d0d!2sUniversitas%20Muhammadiyah%20Riau%20Kampus%201!5e0!3m2!1sen!2sid!4v1746964664473!5m2!1sen!2sid"
                    allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
@endsection
