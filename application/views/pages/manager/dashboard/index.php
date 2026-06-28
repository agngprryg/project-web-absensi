<!-- Main Content -->
<div class="flex flex-col flex-1 overflow-hidden">

    <!-- Main Content Area -->
    <main class="flex-1 overflow-auto p-6 bg-gray-100">
        <!-- Stats Cards -->
        <div class="grid grid-cols-1 gap-6 mb-6 md:grid-cols-2 lg:grid-cols-4">
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Karyawan</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900"> <?= $total_karyawan ?> </p>
                    </div>
                    <div class="p-3 rounded-full bg-blue-100 text-blue-600">
                        <i class="fas fa-users text-xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <span class="inline-flex items-center text-sm font-medium text-green-600">
                        <i class="fas fa-arrow-up mr-1"></i>
                        <?= $total_karyawan ?> karyawan
                    </span>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Karyawan Cuti</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900"> <?= $total_cuti ?> </p>
                    </div>
                    <div class="p-3 rounded-full bg-yellow-100 text-yellow-600">
                        <i class="fas fa-calendar-minus text-xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <?php if ($total_cuti == 0): ?>
                        <span class="inline-flex items-center text-sm font-medium text-green-600">
                            <i class="fas fa-circle-check mr-1"></i>
                            Karyawan Terlihat Betah Bekerja
                        </span>
                    <?php else: ?>
                        <span class="inline-flex items-center text-sm font-medium text-red-600">
                            <i class="fas fa-exclamation-circle mr-1"></i>
                            <?= $total_cuti ?> perlu persetujuan
                        </span>
                    <?php endif; ?>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Kehadiran</p>
                        <p class="mt-1 text-3xl font-semibold text-gray-900"> <?= $total_kehadiran ?> </p>
                    </div>
                    <div class="p-3 rounded-full bg-purple-100 text-purple-600">
                        <i class="fas fa-user text-xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <a href="<?= base_url('manager/data-kehadiran') ?>" class="inline-flex items-center text-sm font-medium text-blue-600">
                        <i class="fas fa-eye mr-1"></i>
                        Lihat Kehadiran
                    </a>
                </div>
            </div>

            <!-- Card Informasi Gaji -->
            <div class="bg-white rounded-lg shadow p-6">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-gray-500">Total Penggajian Bulan Ini</p>
                        <p class="mt-1 text-sm font-semibold text-gray-900"> <?= format_rupiah($total_gaji) ?> </p>
                    </div>
                    <div class="p-3 rounded-full bg-green-100 text-green-600">
                        <i class="fas fa-money-bill-wave text-xl"></i>
                    </div>
                </div>
                <div class="mt-4">
                    <div class="mt-2">
                        <a href="<?= base_url('manager/laporan-gaji') ?>" class="inline-flex items-center text-sm font-medium text-blue-600">
                            <i class="fas fa-file-invoice-dollar mr-1"></i>
                            Laporan gaji
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Team Performance -->
        <div class="mt-6 bg-white rounded-lg shadow">
            <div class="p-6">
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Karyawan</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Periode</th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Nilai Kinerja</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Catatan</th>
                                <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($data_kinerja as $index => $item): ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> <?= $index + 1 ?> </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex gap-4">
                                            <img src="<?= base_url('uploads/karyawan/') . $item->foto ?>" alt="" class="size-9 rounded-full">
                                            <div>
                                                <h1 class="text-sm text-gray-900"> <?= $item->nama ?> </h1>
                                                <h1 class="text-sm text-gray-500"><?= $item->jabatan ?></h1>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center"> <?= $item->periode ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-center">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            <?= $item->nilai_kinerja ?>
                                        </span>
                                    </td>
                                    <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"> <?= $item->catatan ?></td>
                                    <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                        <a href="<?= base_url('manager/data-kinerja/edit/' . $item->id_kinerja) ?>" class="text-blue-600 hover:text-blue-900 mr-3" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a href="<?= base_url('manager/data-kinerja/delete/' . $item->id_kinerja) ?>" class="text-red-600 hover:text-red-900" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
</div>