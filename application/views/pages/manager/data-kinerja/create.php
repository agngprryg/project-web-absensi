<div class="container mx-auto px-4 py-8">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-clipboard-check mr-2 text-blue-600"></i>
                    Form Catatan Kinerja
                </h1>
                <a href="#" class="text-sm text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>

            <form class="space-y-6" action="<?= base_url('manager/data-kinerja/store') ?>" method="post">
                <!-- Informasi Dasar -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Dasar</h2>
                    <!-- Karyawan -->
                    <div class="sm:col-span-4">
                        <label for="id_karyawan" class="block text-sm font-medium text-gray-700">Karyawan</label>
                        <select
                            id="id_karyawan"
                            name="id_karyawan"
                            required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <option value="">Pilih Karyawan</option>
                            <?php foreach ($data_karyawan as $item): ?>
                                <option value="<?= $item->id ?>"> <?= $item->nama ?> </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>

                <!-- Periode dan Nilai -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Penilaian Kinerja</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Periode -->
                        <div class="sm:col-span-3">
                            <label for="periode" class="block text-sm font-medium text-gray-700">Periode Penilaian</label>
                            <input
                                type="month"
                                id="periode"
                                name="periode"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Nilai Kinerja -->
                        <div class="sm:col-span-3">
                            <label for="nilai_kinerja" class="block text-sm font-medium text-gray-700">Nilai Kinerja (0-100)</label>
                            <div class="mt-1 flex items-center">
                                <input
                                    type="range"
                                    id="nilai_kinerja"
                                    name="nilai_kinerja"
                                    min="0"
                                    max="100"
                                    value="75"
                                    class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer"
                                    oninput="updateNilaiDisplay(this.value)">
                                <span id="nilaiDisplay" class="ml-4 w-12 text-center font-medium">75</span>
                            </div>
                            <div class="flex justify-between text-xs text-gray-500 mt-1">
                                <span>Buruk</span>
                                <span>Cukup</span>
                                <span>Baik</span>
                                <span>Sangat Baik</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Catatan -->
                <div class="pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Catatan Kinerja</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="catatan" class="block text-sm font-medium text-gray-700">Uraian Kinerja</label>
                            <textarea
                                id="catatan"
                                name="catatan"
                                rows="5"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Berikan penjelasan detail tentang kinerja karyawan selama periode ini..."></textarea>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3">
                    <button
                        type="reset"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-undo mr-1"></i>Reset
                    </button>
                    <button
                        type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-save mr-1"></i>Simpan Catatan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan nilai dari slider
    function updateNilaiDisplay(value) {
        document.getElementById('nilaiDisplay').textContent = value;

        // Ubah warna teks berdasarkan nilai
        const nilaiDisplay = document.getElementById('nilaiDisplay');
        if (value >= 80) {
            nilaiDisplay.className = 'ml-4 w-12 text-center font-medium text-green-600';
        } else if (value >= 60) {
            nilaiDisplay.className = 'ml-4 w-12 text-center font-medium text-yellow-600';
        } else {
            nilaiDisplay.className = 'ml-4 w-12 text-center font-medium text-red-600';
        }
    }
</script>