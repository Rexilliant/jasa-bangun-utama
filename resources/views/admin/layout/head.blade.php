<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
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
