<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-600 via-blue-700 to-blue-800 text-white py-16">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-6">
                Bergabunglah dengan
                <span class="text-blue-200">Tim Terbaik</span>
            </h1>
            <p class="text-xl mb-8 text-blue-100">
                Temukan peluang karir yang mengembangkan potensi Anda bersama PT. Kimindo Megah Sanjaya
            </p>

        </div>
    </div>
</section>

<!-- Job Listings Section -->
<section id="lowongan" class="py-12">
    <div class="container mx-auto px-4">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-center mb-8">
                <h2 class="text-2xl font-bold text-gray-800">Lowongan Tersedia</h2>
                <span id="jobCount" class="text-gray-600"><?= $total_lowongan ?> posisi tersedia</span>
            </div>

            <div id="jobListings" class="space-y-6">
                <?php foreach ($lowongan as $item): ?>
                    <div class="job-card bg-white rounded-lg shadow-md hover:shadow-lg transition-shadow p-6 border-l-4 border-blue-500" data-department="IT" data-type="Full-time" data-location="Jakarta">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="flex-1">
                                <div class="flex items-center space-x-3 mb-3">
                                    <h3 class="text-xl font-semibold text-gray-800"><?= $item->posisi ?></h3>
                                    <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-medium"><?= $item->status_kerja ?></span>
                                </div>
                                <div class="flex items-center space-x-4 text-gray-600 mb-3">
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                        </svg>
                                        <?= $item->departemen ?>
                                    </span>
                                    <span class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                        <?= $item->lokasi_penempatan ?>
                                    </span>
                                </div>
                                <p class="text-gray-600 mb-4"> <?= $item->deskripsi ?> </p>
                            </div>
                            <div class="mt-4 md:mt-0 md:ml-6">
                                <div class="flex flex-col space-y-2">
                                    <a href="<?= base_url('lowongan/detail/' . $item->id) ?>" class="text-center bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                                        Lihat Detail
                                    </a>
                                    <a href="<?= base_url('lowongan/detail/' . $item->id) ?>" class="border border-blue-600 text-blue-600 px-6 py-2 rounded-lg hover:bg-blue-50 transition-colors">
                                        Lamar Sekarang
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>
<script>
    // Fungsi untuk menampilkan alert dari flashdata
    function showFlashAlert() {
        const successMessage = '<?= $this->session->flashdata("success") ?>';
        const errorMessage = '<?= $this->session->flashdata("error") ?>';

        if (successMessage) {
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: successMessage,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'OK'
            });
        }

        if (errorMessage) {
            Swal.fire({
                icon: 'error',
                title: 'Gagal!',
                text: errorMessage,
                confirmButtonColor: '#d33',
                confirmButtonText: 'OK'
            });
        }
    }

    // Panggil fungsi saat halaman selesai dimuat
    document.addEventListener('DOMContentLoaded', function() {
        showFlashAlert();
    });
</script>