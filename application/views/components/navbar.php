<header class="bg-white shadow-lg sticky top-0 z-50">
    <div class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo Section -->
            <div class="flex items-center space-x-4">
                <div>
                    <img src="<?= base_url('assets/logo.jpeg') ?>" alt="logo kims" class="w-[100px] h-8">
                    <p class="text-xs text-gray-600">PT. Kimindo Megah Sanjaya</p>
                </div>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex space-x-8">
                <a href="<?= base_url('beranda') ?>" class="<?= is_active_navbar($this->uri->segment('1'), 'beranda') ?>">Beranda</a>
                <a href="<?= base_url('lowongan') ?>" class="<?= is_active_navbar($this->uri->segment('1'), 'lowongan') ?>">Lowongan</a>
                <a href="<?= base_url('beranda/#fitur') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#fitur') ?>">Fitur</a>
                <a href="<?= base_url('beranda/#tentang') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#tentang') ?>">Tentang</a>
                <a href="<?= base_url('beranda/#kontak') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#kontak') ?>">Kontak</a>
            </nav>

            <!-- Mobile Menu Button -->
            <div class="md:hidden flex items-center space-x-4">
                <a href="<?= base_url('login') ?>" class="bg-blue-600 text-white px-4 py-1.5 text-sm rounded-lg hover:bg-blue-700 transition-colors">
                    Login
                </a>
                <button id="mobile-menu-button" class="text-gray-600 focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>

            <!-- Desktop Login Button -->
            <a href="<?= base_url('login') ?>" class="hidden md:block bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                Login
            </a>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="md:hidden hidden absolute top-full left-0 right-0 bg-white shadow-lg py-2 px-4">
            <div class="flex flex-col space-y-3">
                <a href="<?= base_url('beranda') ?>" class="<?= is_active_navbar($this->uri->segment('1'), 'beranda') ?> py-2 px-3 hover:bg-gray-100 rounded">Beranda</a>
                <a href="<?= base_url('lowongan') ?>" class="<?= is_active_navbar($this->uri->segment('1'), 'lowongan') ?> py-2 px-3 hover:bg-gray-100 rounded">Lowongan</a>
                <a href="<?= base_url('beranda/#fitur') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#fitur') ?> py-2 px-3 hover:bg-gray-100 rounded">Fitur</a>
                <a href="<?= base_url('beranda/#tentang') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#tentang') ?> py-2 px-3 hover:bg-gray-100 rounded">Tentang</a>
                <a href="<?= base_url('beranda/#kontak') ?>" class="<?= is_active_navbar($this->uri->segment('2'), 'beranda/#kontak') ?> py-2 px-3 hover:bg-gray-100 rounded">Kontak</a>
            </div>
        </div>
    </div>
</header>

<script>
    // Mobile menu toggle functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    mobileMenuButton.addEventListener('click', function() {
        // Toggle mobile menu visibility
        mobileMenu.classList.toggle('hidden');

        // Change icon between hamburger and X
        const icon = mobileMenuButton.querySelector('svg');
        if (mobileMenu.classList.contains('hidden')) {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        } else {
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>';
        }
    });

    // Close mobile menu when clicking outside or on a link
    document.addEventListener('click', function(event) {
        const isClickInsideMenu = mobileMenu.contains(event.target);
        const isClickOnButton = mobileMenuButton.contains(event.target);
        const isClickOnLink = event.target.tagName === 'A';

        if (!isClickInsideMenu && !isClickOnButton) {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuButton.querySelector('svg');
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        }

        if (isClickOnLink) {
            mobileMenu.classList.add('hidden');
            const icon = mobileMenuButton.querySelector('svg');
            icon.innerHTML = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>';
        }
    });
</script>