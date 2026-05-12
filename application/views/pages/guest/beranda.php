<!-- Hero Section -->
<section id="beranda" class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white py-20">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-4xl mx-auto">
            <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight">
                Sistem Informasi
                <span class="text-blue-200">Human Resource</span>
                Terpadu
            </h1>
            <p class="text-xl md:text-2xl mb-8 text-blue-100">
                Kelola seluruh data karyawan, absensi, penggajian, dan administrasi HR dalam satu platform yang terintegrasi
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?= base_url('login') ?>" class="bg-white text-blue-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-100 transition-colors shadow-lg">
                    Mulai Sekarang
                </a>
                <a href="<?= base_url('lowongan') ?>" class="border-2 border-white text-white px-8 py-4 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                    Lihat Lowongan
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section id="fitur" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
                Fitur Unggulan HRIS
            </h2>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                Solusi lengkap untuk mengelola sumber daya manusia perusahaan Anda dengan efisien dan efektif
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Feature 1 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Manajemen Karyawan</h3>
                <p class="text-gray-600">Kelola data lengkap karyawan, struktur organisasi, dan riwayat karir dalam satu sistem terintegrasi.</p>
            </div>

            <!-- Feature 2 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-green-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Sistem Absensi</h3>
                <p class="text-gray-600">Monitoring kehadiran karyawan dengan sistem digital yang akurat dan real-time.</p>
            </div>

            <!-- Feature 3 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-purple-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Penggajian</h3>
                <p class="text-gray-600">Proses penggajian otomatis dengan perhitungan yang akurat dan laporan yang detail.</p>
            </div>

            <!-- Feature 4 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-orange-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Laporan & Analitik</h3>
                <p class="text-gray-600">Generate laporan komprehensif dan analisis data HR untuk pengambilan keputusan yang tepat.</p>
            </div>

            <!-- Feature 5 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-red-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Manajemen Cuti</h3>
                <p class="text-gray-600">Kelola pengajuan cuti, izin, dan jadwal kerja karyawan dengan sistem approval yang fleksibel.</p>
            </div>

            <!-- Feature 6 -->
            <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition-shadow">
                <div class="w-16 h-16 bg-indigo-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold mb-3 text-gray-800">Training & Development</h3>
                <p class="text-gray-600">Kelola program pelatihan dan pengembangan karyawan untuk meningkatkan kompetensi tim.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="tentang" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 mb-8">
                Tentang PT. Kimindo Megah Sanjaya
            </h2>
            <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                PT. Kimindo Megah Sanjaya adalah perusahaan yang berkomitmen untuk memberikan solusi terbaik dalam pengelolaan sumber daya manusia. Dengan pengalaman bertahun-tahun, kami mengembangkan sistem HRIS yang dapat membantu perusahaan mengelola HR dengan lebih efisien.
            </p>
            <div class="grid md:grid-cols-3 gap-8 mt-12">
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">500+</div>
                    <p class="text-gray-600">Karyawan Terdaftar</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">99.9%</div>
                    <p class="text-gray-600">Uptime System</p>
                </div>
                <div class="text-center">
                    <div class="text-4xl font-bold text-blue-600 mb-2">24/7</div>
                    <p class="text-gray-600">Support</p>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Add scroll effect to header
    window.addEventListener('scroll', function() {
        const header = document.querySelector('header');
        if (window.scrollY > 100) {
            header.classList.add('backdrop-blur-sm', 'bg-white/95');
        } else {
            header.classList.remove('backdrop-blur-sm', 'bg-white/95');
        }
    });
</script>