<div class="container mx-auto px-4 py-8">
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="px-6 py-4 border-b border-gray-200 flex justify-between items-center">
            <h2 class="text-xl font-semibold text-gray-800">Slip gaji</h2>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bulan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gaji Pokok</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tunjangan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Potongan</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Total Gaji</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <!-- Contoh data 1 -->
                    <?php foreach ($data_gaji as $index => $item): ?>
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900"> <?= $index + 1 ?> </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= bulan_tahun_indo($item->bulan) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= format_rupiah($item->gaji_pokok) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= format_rupiah($item->tunjangan) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= format_rupiah($item->potongan) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= format_rupiah($item->total_gaji) ?></td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500"><?= $item->status ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>