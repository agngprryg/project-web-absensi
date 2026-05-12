<div class="flex min-h-screen">

    <!-- Mobile menu button -->
    <div class="lg:hidden fixed top-4 left-4 z-50">
        <button id="mobile-menu-button" class="text-gray-500 hover:text-gray-600 focus:outline-none">
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>

    <!-- Sidebar -->
    <aside id="sidebar" class="w-72 bg-white border-r border-gray-200 flex-col fixed lg:relative inset-y-0 left-0 transform -translate-x-full lg:translate-x-0 z-40 transition duration-200 ease-in-out">
        <div class="flex items-center gap-2 px-6 py-5 border-b border-gray-200">
            <div class="w-10 h-10 rounded-md bg-[#4B5CF6] flex items-center justify-center">
                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <rect height="18" rx="2" ry="2" width="18" x="3" y="3">
                    </rect>
                    <path d="M9 9h6v6H9z">
                    </path>
                </svg>
            </div>
            <h1 class="font-semibold text-gray-900 text-lg select-none">
                PT KIMINDO
                <span class="text-xs font-normal">
                    ™
                </span>
            </h1>
        </div>

        <nav class="mt-8 px-6 flex flex-col gap-6 text-sm font-medium select-none">
            <a href="<?= base_url('karyawan/dashboard') ?>" class="flex items-center gap-3 rounded-md px-4 py-2 w-full <?= is_active($this->uri->segment(2), 'dashboard') ?> ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6A2.25 2.25 0 0 1 6 3.75h2.25A2.25 2.25 0 0 1 10.5 6v2.25a2.25 2.25 0 0 1-2.25 2.25H6a2.25 2.25 0 0 1-2.25-2.25V6ZM3.75 15.75A2.25 2.25 0 0 1 6 13.5h2.25a2.25 2.25 0 0 1 2.25 2.25V18a2.25 2.25 0 0 1-2.25 2.25H6A2.25 2.25 0 0 1 3.75 18v-2.25ZM13.5 6a2.25 2.25 0 0 1 2.25-2.25H18A2.25 2.25 0 0 1 20.25 6v2.25A2.25 2.25 0 0 1 18 10.5h-2.25a2.25 2.25 0 0 1-2.25-2.25V6ZM13.5 15.75a2.25 2.25 0 0 1 2.25-2.25H18a2.25 2.25 0 0 1 2.25 2.25V18A2.25 2.25 0 0 1 18 20.25h-2.25A2.25 2.25 0 0 1 13.5 18v-2.25Z" />
                </svg>
                Dashboard
            </a>

            <a href="<?= base_url('karyawan/ajukan-cuti') ?>" class="flex items-center gap-3 rounded-md px-4 py-2 w-full <?= is_active($this->uri->segment(2), 'ajukan-cuti') ?> ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 2.994v2.25m10.5-2.25v2.25m-14.252 13.5V7.491a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v11.251m-18 0a2.25 2.25 0 0 0 2.25 2.25h13.5a2.25 2.25 0 0 0 2.25-2.25m-18 0v-7.5a2.25 2.25 0 0 1 2.25-2.25h13.5a2.25 2.25 0 0 1 2.25 2.25v7.5m-6.75-6h2.25m-9 2.25h4.5m.002-2.25h.005v.006H12v-.006Zm-.001 4.5h.006v.006h-.006v-.005Zm-2.25.001h.005v.006H9.75v-.006Zm-2.25 0h.005v.005h-.006v-.005Zm6.75-2.247h.005v.005h-.005v-.005Zm0 2.247h.006v.006h-.006v-.006Zm2.25-2.248h.006V15H16.5v-.005Z" />
                </svg>
                Ajukan Cuti
            </a>

            <a href="<?= base_url('karyawan/slip-gaji') ?>" class="flex items-center gap-3 rounded-md px-4 py-2 w-full <?= is_active($this->uri->segment(2), 'slip-gaji') ?> ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0 1 15.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 0 1 3 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 0 0-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 0 1-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 0 0 3 15h-.75M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm3 0h.008v.008H18V10.5Zm-12 0h.008v.008H6V10.5Z" />
                </svg>
                Slip Gaji
            </a>

            <a href="<?= base_url('logout') ?>" class="flex items-center gap-3 rounded-md px-4 py-2 w-full <?= is_active($this->uri->segment(2), 'slip-gaji') ?> ">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                </svg>
                Logout
            </a>

        </nav>

    </aside>

    <!-- Overlay for mobile -->
    <div id="sidebar-overlay" class="hidden fixed inset-0 bg-black bg-opacity-50 z-30 lg:hidden">
        test
    </div>

    <main class="flex-1 p-6 overflow-auto">
        <div class="flex flex-col gap-6 max-w-full">

            <script>
                // Mobile menu toggle functionality
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const sidebar = document.getElementById('sidebar');
                const sidebarOverlay = document.getElementById('sidebar-overlay');

                mobileMenuButton.addEventListener('click', () => {
                    sidebar.classList.toggle('-translate-x-full');
                    sidebarOverlay.classList.toggle('hidden');
                });

                sidebarOverlay.addEventListener('click', () => {
                    sidebar.classList.add('-translate-x-full');
                    sidebarOverlay.classList.add('hidden');
                });

                // Close sidebar when clicking on a link (optional)
                const sidebarLinks = document.querySelectorAll('#sidebar a');
                sidebarLinks.forEach(link => {
                    link.addEventListener('click', () => {
                        if (window.innerWidth < 1024) { // lg breakpoint
                            sidebar.classList.add('-translate-x-full');
                            sidebarOverlay.classList.add('hidden');
                        }
                    });
                });

                // Adjust for window resize
                window.addEventListener('resize', () => {
                    if (window.innerWidth >= 1024) { // lg breakpoint
                        sidebar.classList.remove('-translate-x-full');
                        sidebarOverlay.classList.add('hidden');
                    } else {
                        sidebar.classList.add('-translate-x-full');
                    }
                });
            </script>