<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link href="{{ url('https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css') }}" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">

    <title> MD Golam Rabbani</title>
</head>

<body>

    @include('Layouts.navbar')

    <main class="main">

        @yield('content')

    </main>

    @include('Layouts.footer')

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
     </a>
     <!--=============== SCROLLREVEAL ===============-->
     <script src="{{ asset('assets/js/scrollreveal.min.js') }}"></script>

     <!--=============== EMAIL JS ===============-->
     <script src="{{ url('https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js') }}"></script>
     <!--=============== MAIN JS ===============-->
     <script src="{{ asset('assets/js/main.js') }}"></script>

</body>
</html>
