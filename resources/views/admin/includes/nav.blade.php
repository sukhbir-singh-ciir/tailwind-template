<nav class="bg-gray-800 p-4">
    <div class="flex items-center justify-between">

        <!-- Left side - Hamburger menu -->
        <div class="flex items-center">
            <button id="hamburgerBtnOpen" class="text-white focus:outline-none" onClick="collapseSidebar(true)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <button id="hamburgerBtnclose" class="text-white focus:outline-none" onClick="collapseSidebar(false)">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
            <span class="text-white ml-2 text-lg font-semibold">@yield('pageTitle')</span>
        </div>

        <!-- Right side - Profile image -->
        <div class="flex items-center">
            <img src="profile.jpg" alt="Profile" class="w-8 h-8 rounded-full">
            <span class="text-white ml-2">John Doe</span>
        </div>

    </div>
</nav>