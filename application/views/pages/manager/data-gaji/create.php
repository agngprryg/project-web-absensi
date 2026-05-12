<div class="container mx-auto px-4 py-8">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Form Data Gaji Karyawan</h1>
                <a href="<?= base_url('manager/data-gaji') ?>" class="text-sm text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali ke Daftar Gaji
                </a>
            </div>

            <form class="space-y-6" action="<?= base_url('manager/data-gaji/store') ?>" method="post">
                <!-- Informasi Utama -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Utama</h2>
                    <div class="space-y-5 ">
                        <!-- ID Karyawan -->
                        <div class=" sm:col-span-4">
                            <label for="id_karyawan" class="block text-sm font-medium text-gray-700">Karyawan</label>
                            <select
                                id="id_karyawan"
                                name="id_karyawan"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="">Pilih Karyawan</option>
                                <?php foreach ($data_karyawan as $item): ?>
                                    <option value="<?= $item->id ?>"> <?= $item->nama ?> </option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <!-- Bulan -->
                        <div class="sm:col-span-3">
                            <label for="bulan" class="block text-sm font-medium text-gray-700">Periode (Bulan-Tahun)</label>
                            <input
                                type="month"
                                id="bulan"
                                name="bulan"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                    </div>
                </div>

                <!-- Komponen Gaji -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Komponen Gaji</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Gaji Pokok -->
                        <div class="sm:col-span-3">
                            <label for="gaji_pokok" class="block text-sm font-medium text-gray-700">Gaji Pokok</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input
                                    type="number"
                                    id="gaji_pokok"
                                    name="gaji_pokok"
                                    step="0.01"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 pr-12 sm:text-sm border-gray-300 rounded-md py-2 px-3"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <!-- Tunjangan -->
                        <div class="sm:col-span-3">
                            <label for="tunjangan" class="block text-sm font-medium text-gray-700">Tunjangan</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input
                                    type="number"
                                    id="tunjangan"
                                    name="tunjangan"
                                    step="0.01"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 pr-12 sm:text-sm border-gray-300 rounded-md py-2 px-3"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <!-- Potongan -->
                        <div class="sm:col-span-3">
                            <label for="potongan" class="block text-sm font-medium text-gray-700">Potongan</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input
                                    type="number"
                                    id="potongan"
                                    name="potongan"
                                    step="0.01"
                                    class="focus:ring-blue-500 focus:border-blue-500 block w-full pl-12 pr-12 sm:text-sm border-gray-300 rounded-md py-2 px-3"
                                    placeholder="0.00">
                            </div>
                        </div>

                        <!-- Total Gaji (auto-calculated) -->
                        <div class="sm:col-span-3">
                            <label for="total_gaji" class="block text-sm font-medium text-gray-700">Total Gaji</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <span class="text-gray-500 sm:text-sm">Rp</span>
                                </div>
                                <input
                                    type="text"
                                    id="total_gaji"
                                    name="total_gaji"
                                    readonly
                                    value="0.00"
                                    class="bg-gray-100 block w-full pl-12 pr-12 sm:text-sm border-gray-300 rounded-md py-2 px-3">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3">
                    <button
                        type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Reset
                    </button>
                    <button
                        type="button"
                        class="bg-yellow-500 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                        Hitung Total
                    </button>
                    <button
                        type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Simpan Data Gaji
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Script sederhana untuk menghitung total gaji
    document.addEventListener('DOMContentLoaded', function() {
        const gajiPokok = document.getElementById('gaji_pokok');
        const tunjangan = document.getElementById('tunjangan');
        const potongan = document.getElementById('potongan');
        const totalGaji = document.getElementById('total_gaji');

        function calculateTotal() {
            const gp = parseFloat(gajiPokok.value) || 0;
            const tj = parseFloat(tunjangan.value) || 0;
            const pt = parseFloat(potongan.value) || 0;
            const total = (gp + tj) - pt;
            totalGaji.value = total.toFixed(2);
        }

        // Hitung saat nilai berubah
        [gajiPokok, tunjangan, potongan].forEach(input => {
            input.addEventListener('input', calculateTotal);
        });

        // Tombol hitung total
        document.querySelector('button[type="button"].bg-yellow-500').addEventListener('click', calculateTotal);
    });
</script>