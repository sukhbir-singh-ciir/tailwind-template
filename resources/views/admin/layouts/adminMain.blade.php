<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <!-- Include your additional stylesheets if any -->
</head>
<body class="font-sans bg-gray-100">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        @include("admin.includes.sidebar")

        <!-- Content Area -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Navbar -->
            @include("admin.includes.nav")

            <!-- Main Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
                <!-- Page Title -->
                <div class="bg-white py-4">
                    <div class="container mx-auto">
                        <h1 class="text-2xl font-semibold text-gray-800">@yield("pageTitle")</h1>
                    </div>
                </div>

                <!-- Page Content -->
                <div class="container mx-auto my-8">
                    @yield("content")
                </div>
            </main>
        </div>
    </div>

    <!-- Scripts -->
    @stack('scripts')
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/theme.min.js"></script>
</body>
</html>
