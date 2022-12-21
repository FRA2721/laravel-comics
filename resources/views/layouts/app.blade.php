<!DOCTYPE html>
<html lang="en">

{{-- head section --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title --}}
    <title>Laravel Dc Comics</title>
    {{-- /title --}}

    {{-- from welcome --}}
    @vite('resources/js/app.js')

</head>
{{-- /head section --}}

{{-- body section --}}
<body>

    {{-- header section --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /header section --}}

    {{-- main section --}}
    <main>
        @yield('content')
        @include('partials.iconsBanner')
    </main>
    {{-- /main section --}}

    {{-- footer section --}}
    <footer>
        @include('partials.footer')
    </footer>
    {{-- /footer section --}}

</body>
{{-- /body section --}}

</html>