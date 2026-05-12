<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Data Lowongan Pekerjaan</h2>
            <a href="<?= base_url('manager/data-lowongan/create') ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md text-sm font-medium">
                <i class="fas fa-plus mr-2"></i>Tambah Lowongan
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Posisi</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Departemen</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Lokasi</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Periode</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status Kerja</th>
                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <?php foreach ($data_lowongan as $item): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-gray-900"> <?= $item->posisi ?> </div>
                                <div class="text-sm text-gray-500 mt-1 line-clamp-2">
                                    <?= $item->deskripsi ?>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->departemen ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->lokasi_penempatan ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->tanggal_dibuka ?> sd <?= $item->tanggal_ditutup ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->status_kerja ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->status ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <a href="<?= base_url('manager/data-lowongan/edit/' . $item->id) ?>" class="text-yellow-600 hover:text-yellow-900 mr-3" title="Edit">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="<?= base_url('manager/data-lowongan/delete/' . $item->id) ?>" class="text-red-600 hover:text-red-900" title="Hapus">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>