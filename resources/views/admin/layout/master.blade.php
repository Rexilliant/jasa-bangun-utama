<!DOCTYPE html>
<html lang="en">
@include('admin.layout.head')
<body class="text-slate-700 font-plus-jakarta-sans md:flex bg-[#F8FAFC]">
    @include('admin.layout.aside')
    <section class="w-full ">
        @include('admin.layout.nav')
        <main class="p-5">
            @yield('content')
        </main>
    </section>
    <script src="{{ asset('assets/js/flowbite.min.js') }}"></script>
    @yield('addJs')
</body>

</html>
