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
    <div class="w-full h-screen">
            <div class="flex flex-no-wrap">
                 @include("admin.includes.sidebar")
                <main class="w-full">
                    <header>
                        @include("admin.includes.nav")
                    </header>
                    <div class="container mx-auto py-10 h-64 px-6">
                        <div class="w-full h-full rounded border-dashed border-2 border-gray-300">
                            @yield("content")
                        </div>
                    </div>
                </main>
            </div>
            <script>
                var sideBar = document.getElementById("mobile-nav");
                var DesktopsideBar = document.getElementById("Desktop_sidebar");
                var openSidebar = document.getElementById("openSideBar");
                var closeSidebar = document.getElementById("closeSideBar");
                var hamburgerBtn1 = document.getElementById("hamburgerBtnOpen");
                var hamburgerBtn2 = document.getElementById("hamburgerBtnclose");
                sideBar.style.transform = "translateX(-260px)";
                hamburgerBtn2.classList.add("hidden")
                function sidebarHandler(flag) {
                    if (flag) {
                        sideBar.style.transform = "translateX(0px)";
                        openSidebar.classList.add("hidden");
                        closeSidebar.classList.remove("hidden");
                    } else {
                        sideBar.style.transform = "translateX(-260px)";
                        closeSidebar.classList.add("hidden");
                        openSidebar.classList.remove("hidden");
                    }
                }
                function collapseSidebar(flag){
                    if (flag) {
                        DesktopsideBar.classList.remove("sm:flex")
                        hamburgerBtn1.classList.add("hidden")
                        hamburgerBtn2.classList.remove("hidden")
                    } else {
                        DesktopsideBar.classList.add("sm:flex")
                        hamburgerBtn1.classList.remove("hidden")
                        hamburgerBtn2.classList.add("hidden")
                    }
                }
            </script>
      </div>

    <!-- Scripts -->
    @stack('scripts')
    <script src="/resources/js/jquery.min.js"></script>
    <script src="/resources/js/theme.min.js"></script>
</body>
</html>
