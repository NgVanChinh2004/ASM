<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title', 'Trang chủ - ZayNews')</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('client.layouts.partials.css')

</head>

<body>

    {{-- <div class="site-wrap"> --}}
    {{-- <header class="site-navbar" role="banner"> --}}
    @include('client.layouts.partials.top-nav')

    @include('client.layouts.partials.header')
    {{-- </header> --}}

    @yield('content')

    <footer class="bg-dark" id="tempaltemo_footer">
        @include('client.layouts.partials.footer')
    </footer>
    {{-- </div> --}}

    @include('client.layouts.partials.js')

</body>

</html>
