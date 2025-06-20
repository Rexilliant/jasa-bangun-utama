<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <meta name="description" content="@yield('description', 'Halaman admin untuk mengelola konten Jasa Bangun Utama')">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('assets/js/sweetalert.js') }}"></script>

    <style>
        .loader {
            width: 40px;
            height: 20px;
            --c: no-repeat radial-gradient(farthest-side, #012269 93%, #012269);
            background:
                var(--c) 0 0,
                var(--c) 50% 0;
            background-size: 8px 8px;
            position: relative;
            clip-path: inset(-200% -100% 0 0);
            animation: l6-0 1.5s linear infinite;
        }

        .loader:before {
            content: "";
            position: absolute;
            width: 8px;
            height: 12px;
            background: #012269;
            left: -16px;
            top: 0;
            animation:
                l6-1 1.5s linear infinite,
                l6-2 0.5s cubic-bezier(0, 200, .8, 200) infinite;
        }

        .loader:after {
            content: "";
            position: absolute;
            inset: 0 0 auto auto;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #012269;
            animation: l6-3 1.5s linear infinite;
        }

        @keyframes l6-0 {

            0%,
            30% {
                background-position: 0 0, 50% 0
            }

            33% {
                background-position: 0 100%, 50% 0
            }

            41%,
            63% {
                background-position: 0 0, 50% 0
            }

            66% {
                background-position: 0 0, 50% 100%
            }

            74%,
            100% {
                background-position: 0 0, 50% 0
            }
        }

        @keyframes l6-1 {
            90% {
                transform: translateY(0)
            }

            95% {
                transform: translateY(15px)
            }

            100% {
                transform: translateY(15px);
                left: calc(100% - 8px)
            }
        }

        @keyframes l6-2 {
            100% {
                top: -0.1px
            }
        }

        @keyframes l6-3 {

            0%,
            80%,
            100% {
                transform: translate(0)
            }

            90% {
                transform: translate(26px)
            }
        }

        .menu {

            a:hover,
            button:hover {
                color: #012269;
                background-color: #BFDBFE;

                svg {
                    fill: #012269;
                }

                span {
                    color: #012269;
                }
            }
        }

        .active {
            color: #012269;
            background-color: #BFDBFE;

            svg {
                fill: #012269;
            }
        }
    </style>
    @yield('addCss')
</head>
