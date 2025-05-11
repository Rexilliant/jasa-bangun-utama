@extends('layout.master')
@section('content')
    <section class="bg-cover bg-center h-[500px] lg:h-[700px] w-full text-[#1E293B]"
        style="background-image: url({{ asset('image/hero-tentang-kami.png') }})">
        <div class="max-w-[1200px] w-[90%] h-full lg:w-full m-auto text-white grid lg:grid-cols-2 items-center">
            <div>
                <h1 class="text-4xl lg:text-[50px] font-bold">Jasa <span class="text-[#3B82F6]">Bangun Utama</span></h1>
                <p>Kami percaya, rumah bukan sekadar bangunan, tetapi tempat tumbuh dan berproses. Karena itu, kami tidak
                    hanya
                    membangun struktur kami membantu menciptakan ruang hidup yang layak dan membanggakan.</p>
            </div>
        </div>
    </section>
    <section>
        <div
            class="w-[90%] lg:w-full max-w-[1200px] m-auto grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-30 justify-between items-center text-[#1E293B] lg:py-30 py-20">
            <div class="order-2 md:order-1">
                <h2 class="text-4xl font-bold mb-5"><span class="text-[#012269] ">Tentang</span> Kami</h2>
                <p class="text-justify">
                    PT Jasa Bangun Utama adalah perusahaan yang bergerak di bidang renovasi dan pembangunan rumah,
                    berkomitmen
                    untuk memberikan solusi konstruksi yang amanah, kompetitif, dan berkualitas. Kami hadir untuk mewujudkan
                    impian Anda memiliki hunian yang nyaman, fungsional, dan estetik sesuai kebutuhan serta anggaran.
                </p>
                <br>
                <p class="text-justify">Dengan pengalaman dan tim profesional di bidang konstruksi, kami melayani berbagai
                    proyek mulai dari renovasi rumah tinggal, pembangunan rumah baru, hingga perbaikan struktural maupun
                    estetika bangunan. Setiap proyek yang kami tangani dikerjakan dengan standar tinggi, ketepatan waktu,
                    serta transparansi biaya.</p>
            </div>
            <div class="order-1 md:order-2">
                <img src="{{ asset('image/tentang-kami.png') }}" class="w-full " alt="Tentang Kami">
            </div>
        </div>
    </section>
    <section class="bg-cover bg-no-repeat bg-right-top lg:bg-center lg:py-40 py-20 h-full lg:w-full text-[#1E293B]"
        style="background-image: url({{ asset('image/bg-layanan.png') }})">
        <div class="max-w-[1200px] w-[90%] h-full lg:w-full m-auto">
            <h2 class="text-3xl font-bold text-white text-center mb-20">Kenapa Memilih Kami?</h2>
            <div class="grid lg:grid-cols-3 gap-10 justify-between items-center">
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full">
                    <img src="{{ asset('image/amanah.png') }}" alt="Amanah" class="w-40 m-auto mb-3">
                    <h3 class="text-3xl font-bold mb-3">Amanah</h3>
                    <p>Kepercayaan Anda adalah tanggung jawab besar bagi kami. Setiap pekerjaan dilakukan dengan integritas dan keterbukaan.</p>
                </div>
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full">
                    <img src="{{ asset('image/integritas.png') }}" alt="Integritas" class="w-40 m-auto mb-3">
                    <h3 class="text-3xl font-bold mb-3">Integritas</h3>
                    <p>Harga terbaik dengan hasil optimal. Kami selalu berusaha memberikan penawaran yang efisien tanpa mengorbankan kualitas.</p>
                </div>
                <div class="bg-white px-8 py-15 text-center rounded-3xl h-full">
                    <img src="{{ asset('image/loyalitas.png') }}" alt="Loyalitas" class="w-40 m-auto mb-3">
                    <h3 class="text-3xl font-bold mb-3">Loyalitas</h3>
                    <p>Material pilihan, pengerjaan presisi, dan pengawasan ketat menjadi bagian dari komitmen mutu kami.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="max-w-[1200px] w-[90%] lg:w-full m-auto grid lg:grid-cols-2 justify-between gap-10 py-20">
            <div>
                <img src="{{ asset('image/visi.png') }}" alt="visi" class="w-full mb-5">
                <p>Menjadi perusahaan konstruksi terpercaya di Indonesia yang mengedepankan kejujuran, efisiensi, dan kualitas dalam setiap proyek pembangunan dan renovasi rumah.</p>
            </div>
            <div>
                <img src="{{ asset('image/misi.png') }}" alt="misi" class="w-full mb-5">
                <ol class="list-decimal">
                    <li>Memberikan layanan konstruksi yang amanah, transparan, dan dapat diandalkan oleh setiap pelanggan.</li>
                    <li>Menawarkan solusi pembangunan dan renovasi dengan harga yang kompetitif tanpa mengurangi mutu hasil kerja.</li>
                    <li>Menjaga standar kualitas tinggi dalam penggunaan material, desain, dan pengerjaan setiap proyek.</li>
                    <li>Membangun hubungan jangka panjang dengan pelanggan melalui pelayanan yang profesional dan hasil kerja yang memuaskan.</li>
                    <li>Mendorong inovasi dan pengembangan sumber daya manusia untuk menghadirkan solusi konstruksi yang efisien dan berkelanjutan.</li>
                </ol>
            </div>
        </div>
    </section>
@endsection

