<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title","Default Title")</title>
    @stack('Styles')
    @vite('resources/css/app.css')
</head>
<body>
    <header>
        @include("includes.nav")
    </header>
    <main>
        @yield("Content")
    </main>
    <footer>
        @include('includes.footer')
    </footer>
    @stack('scripts')
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/theme.min.js"></script>
</body>
</html>