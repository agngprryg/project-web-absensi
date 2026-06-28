<div class="px-4 py-8">
    <div class="w-full bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Catatan Kinerja Karyawan</h2>
            <a href="<?= base_url('manager/data-kinerja/create') ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md text-sm font-medium flex items-center">
                <i class="fas fa-plus mr-2"></i>Tambah Catatan
            </a>
        </div>

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
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <?= $index + 1 ?>
                            </td>
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
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>