<!DOCTYPE html>
<html lang="en" class="h-full bg-[#2B2B2B]">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('/favicon.ico') }}">

    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Roboto&display=swap"
        rel="stylesheet">

    {{-- Font Awesome --}}
    <script src="https://kit.fontawesome.com/06d64fda6d.js" crossorigin="anonymous"></script>

    {{-- Aos Animation --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


    {{-- Tailwind CSS --}}
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>VR Lab - SMK | {{ $title }} </title>
</head>

<body class="h-full overflow-x-hidden font-montserrat">

    @yield('container')


    {{-- JavaScript --}}
    <script src="{{ asset('/js/script.js') }}"></script>

    {{-- Aos Animation --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
