<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <title>@yield("title","Admin title")</title>
=======
    <title>@yield("title","Default Admin")</title>
>>>>>>> 0e277b55cf4370b5e37d81bd31efa718f460f702
    @stack('Styles')
    @vite('resources/css/app.css')
</head>
<body>
<<<<<<< HEAD
    <header>
        @include("admin.includes.nav")
    </header>
    <aside>
        @include("admin.includes.sidebar")
    </aside>
    <main>
        @yield("Content")
    </main>
    <footer>
        @include('admin.includes.footer')
    </footer>
=======
    <div class="flex h-screen overflow-hidden">
        @include("admin.includes.sidebar")
        <!-- ===== Content Area Start ===== -->
                @include("admin.includes.nav")
            <main>
                @yield("Content")
            </main>
    </div>
>>>>>>> 0e277b55cf4370b5e37d81bd31efa718f460f702
    @stack('scripts')
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/theme.min.js"></script>
</body>
</html>