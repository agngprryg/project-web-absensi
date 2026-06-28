<div class="w-full mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Ajukan Cuti </h2>
            <a href="<?= base_url('karyawan/ajukan-cuti/create') ?>" class="bg-blue-500 hover:bg-blue-600 text-white px-2 md:px-4 py-2 md:py-2 rounded-md text-xs md:text-sm font-medium">
                <i class="fas fa-plus mr-2"></i>Ajukan Cuti
            </a>
        </div>

        <div class="overflow-x-auto">
            <?php if ($data_cuti == null): ?>
                <div class="w-full h-[80vh] flex items-center justify-center ">
                    <p>data cuti masih kosong</p>
                </div>
            <?php else: ?>
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Periode Cuti</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Alasan</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">

                        <?php foreach ($data_cuti as $index => $item): ?>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> <?= $index + 1 ?> </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900"><?= $item->tanggal_mulai ?> </div>
                                    <div class="text-sm text-gray-500">s/d <?= $item->tanggal_selesai ?> </div>
                                </td>
                                <td class="px-6 py-4 text-sm text-gray-500 max-w-xs truncate"><?= $item->alasan ?></td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->status ?> </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>