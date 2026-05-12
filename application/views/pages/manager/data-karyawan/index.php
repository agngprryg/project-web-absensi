<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Data Karyawan</h2>
            <a href="<?= base_url('manager/data-karyawan/create') ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                <i class="fas fa-plus mr-2"></i>Tambah Karyawan
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No. Telepon</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Jabatan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Masuk</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Contoh data 1 -->
                    <?php foreach ($data_karyawan as $index => $item): ?>
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
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->no_telepon ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->jabatan ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"> <?= $item->tanggal_masuk ?> </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs"> <?= $item->status_kerja ?> </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="<?= base_url('manager/data-karyawan/edit/' . $item->id) ?>" class="text-blue-600 hover:text-blue-900 mr-3"><i class="fas fa-edit"></i>Edit</a>
                                <a href="<?= base_url('manager/data-karyawan/delete/' . $item->id) ?>" class="text-red-600 hover:text-red-900"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>