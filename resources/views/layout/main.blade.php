<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ isset($title) ? 'E-Mart | ' . $title : 'E-Mart' }}</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <link href="{{ asset('/css/small-business.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/modern-business.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('/assets/icon.png') }}">

    @stack('append')
</head>

<body>
    @if (session()->has('success'))
        <div class="alert alert-success text-center mx-auto w-25" role="alert">
            {{ session('success') }}
        </div>
    @endif

    @if (session()->has('error'))
        <div class="alert alert-danger text-center mx-auto w-25" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @include('layout.navbar')
    @yield('container')
    @include('layout.footer')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>

    <script>
        $(document).ready(function() {
            $('.alert').fadeTo(3000, 1).slideUp(700);
        })
    </script>
</body>

</html>
