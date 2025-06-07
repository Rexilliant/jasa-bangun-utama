<!doctype html>
<html class="overflow-x-hidden max-w-screen">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Jasa bangun Utama')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta name="description" content="@yield('description', 'Jasa Bangun Utama adalah perusahaan yang bergerak di bidang renovasi dan pembangunan rumah, berkomitmen untuk memberikan solusi konstruksi yang amanah, kompetitif, dan berkualitas. Kami hadir untuk mewujudkan impian Anda memiliki hunian yang nyaman, fungsional, dan estetik sesuai kebutuhan serta anggaran.')">
    <meta name="keywords" content="@yield('keywords') , Jasa Bangun Utama, JBU, Bangun Baru, Desain, Bangunan, Rumah, Renovasi">
    <meta name="author" content="Thahirudin, Bambang Pratama Putra Hadi, Clover Cyber">

    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <link rel="shortcut icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <meta property="og:title" content="@yield('title', config('app.name'))" />
    <meta property="og:description" content="@yield('description', 'Jasa Bangun Utama adalah perusahaan yang bergerak di bidang renovasi dan pembangunan rumah, berkomitmen untuk memberikan solusi konstruksi yang amanah, kompetitif, dan berkualitas. Kami hadir untuk mewujudkan impian Anda memiliki hunian yang nyaman, fungsional, dan estetik sesuai kebutuhan serta anggaran.')">
    <meta property="og:image" content="@yield('image', asset('image/logo.png'))" />
    <meta property="og:url" content="{{ request()->url() }}" />
    <meta name="twitter:title" content="@yield('title', config('Jasa Bangun Utama'))" />
    <meta name="twitter:description" content="@yield('description', 'Jasa Bangun Utama adalah perusahaan yang bergerak di bidang renovasi dan pembangunan rumah, berkomitmen untuk memberikan solusi konstruksi yang amanah, kompetitif, dan berkualitas. Kami hadir untuk mewujudkan impian Anda memiliki hunian yang nyaman, fungsional, dan estetik sesuai kebutuhan serta anggaran.')">
    <meta name="twitter:image" content="@yield('image', asset('image/logo.png'))" />
    <meta name="twitter:card" content="summary_large_image" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @yield('addCss')

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
