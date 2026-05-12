<div class="min-h-screen">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="max-w-7xl mx-auto px-4 py-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-900">
                <i class="fas fa-user-tie mr-2 text-blue-600"></i>
                Dashboard Karyawan
            </h1>
            <div class="flex items-center space-x-4">
                <span class="text-sm font-medium text-gray-500">Hai, <?= $karyawan->nama ?></span>
                <img class="w-12 h-7 md:size-8 rounded-full" src="<?= base_url('uploads/karyawan/' . $karyawan->foto) ?>" alt="Profil">
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 py-6 sm:px-6 lg:px-8">
        <!-- Notifikasi -->
        <?php if ($this->session->flashdata('success')): ?>
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?= $this->session->flashdata('success') ?></span>
            </div>
        <?php endif; ?>

        <?php if ($this->session->flashdata('error')): ?>
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                <span class="block sm:inline"><?= $this->session->flashdata('error') ?></span>
            </div>
        <?php endif; ?>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-3">
            <!-- Kolom Kiri - Info Karyawan -->
            <div class="lg:col-span-1 space-y-6">
                <!-- Card Profil -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <div class="flex items-center">
                            <img class="h-16 w-16 rounded-full mr-4" src="<?= base_url('uploads/karyawan/' . $karyawan->foto) ?>" alt="Profil">
                            <div>
                                <h3 class="text-lg leading-6 font-medium text-gray-900"><?= $karyawan->nama ?></h3>
                                <p class="mt-1 text-sm text-gray-500"><?= $karyawan->jabatan ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Presensi Hari Ini -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                            <i class="fas fa-calendar-day mr-2 text-blue-600"></i>
                            Presensi Hari Ini
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm font-medium text-gray-500">Tanggal</p>
                                <p class="text-sm text-gray-900"><?= tanggal_indo(date('l, d F Y')) ?></p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Jam Masuk</p>
                                <p class="text-sm text-gray-900">
                                    <?= (!empty($kehadiran_hari_ini->jam_masuk)) ? $kehadiran_hari_ini->jam_masuk : '-' ?>
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Jam Keluar</p>
                                <p class="text-sm text-gray-900">
                                    <?= (!empty($kehadiran_hari_ini->jam_keluar)) ? $kehadiran_hari_ini->jam_keluar : '-' ?>
                                </p>
                            </div>
                            <div>
                                <p class="text-sm font-medium text-gray-500">Status</p>
                                <p class="text-sm text-gray-900">
                                    <?php if (!empty($kehadiran_hari_ini)): ?>
                                        <?php if (empty($kehadiran_hari_ini->jam_keluar)): ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                Sedang Bekerja
                                            </span>
                                        <?php else: ?>
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Lengkap
                                            </span>
                                        <?php endif; ?>
                                    <?php else: ?>
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                                            Belum Check-in
                                        </span>
                                    <?php endif; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Kolom Kanan - Fitur Absensi -->
            <div class="lg:col-span-2 space-y-6">
                <!-- Card Absensi -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                            <i class="fas fa-fingerprint mr-2 text-blue-600"></i>
                            Absensi
                        </h3>
                        <div class="flex flex-col items-center">
                            <!-- Jam Digital -->
                            <div class="text-4xl font-bold text-gray-900 mb-6" id="digital-clock"><?= date('H:i:s') ?></div>

                            <!-- Tombol Absensi -->
                            <div class="w-full max-w-md space-y-4">
                                <?php if (empty($kehadiran_hari_ini)): ?>
                                    <a href="<?= site_url('karyawan/check-in') ?>" class="w-full bg-green-600 hover:bg-green-700 text-white py-3 px-4 rounded-lg shadow-md flex items-center justify-center space-x-2">
                                        <i class="fas fa-sign-in-alt"></i>
                                        <span>Check In</span>
                                    </a>
                                <?php elseif (empty($kehadiran_hari_ini->jam_keluar)): ?>
                                    <a href="<?= site_url('karyawan/check-out') ?>" class="w-full bg-red-600 hover:bg-red-700 text-white py-3 px-4 rounded-lg shadow-md flex items-center justify-center space-x-2">
                                        <i class="fas fa-sign-out-alt"></i>
                                        <span>Check Out</span>
                                    </a>
                                <?php else: ?>
                                    <button class="w-full bg-gray-400 text-white py-3 px-4 rounded-lg shadow-md flex items-center justify-center space-x-2 cursor-not-allowed">
                                        <i class="fas fa-check-circle"></i>
                                        <span>Presensi Hari Ini Selesai</span>
                                    </button>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card Riwayat Presensi -->
                <div class="bg-white overflow-hidden shadow rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900 mb-4">
                            <i class="fas fa-history mr-2 text-blue-600"></i>
                            Riwayat Presensi 7 Hari Terakhir
                        </h3>
                        <div class="overflow-x-auto">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Masuk</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Keluar</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <?php foreach ($riwayat as $row): ?>
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                <?= tanggal_indo($row->tanggal) ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <?= (!empty($row->jam_masuk)) ? $row->jam_masuk : '-' ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                <?= (!empty($row->jam_keluar)) ? $row->jam_keluar : '-' ?>
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <?php if (!empty($row->jam_masuk) && !empty($row->jam_keluar)): ?>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        Lengkap
                                                    </span>
                                                <?php elseif (!empty($row->jam_masuk)): ?>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                        Belum Check-out
                                                    </span>
                                                <?php else: ?>
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                        Tidak Hadir
                                                    </span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<script>
    // Fungsi untuk update jam digital
    function updateClock() {
        const now = new Date();
        const hours = String(now.getHours()).padStart(2, '0');
        const minutes = String(now.getMinutes()).padStart(2, '0');
        const seconds = String(now.getSeconds()).padStart(2, '0');
        document.getElementById('digital-clock').textContent = `${hours}:${minutes}:${seconds}`;
    }

    // Update jam setiap detik
    setInterval(updateClock, 1000);
</script>