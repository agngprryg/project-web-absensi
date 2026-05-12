<div class="w-full ">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Form Pengajuan Cuti</h1>
                <a href="<?= base_url('karyawan/ajukan-cuti') ?>" class="text-sm text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>

            <form class="space-y-6" action="<?= base_url('karyawan/ajukan-cuti/store') ?>" method="post">
                <!-- Periode Cuti -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Periode Cuti</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Tanggal Mulai -->
                        <div class="sm:col-span-3">
                            <label for="tanggal_mulai" class="block text-sm font-medium text-gray-700">Tanggal Mulai</label>
                            <input
                                type="date"
                                id="tanggal_mulai"
                                name="tanggal_mulai"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Tanggal Selesai -->
                        <div class="sm:col-span-3">
                            <label for="tanggal_selesai" class="block text-sm font-medium text-gray-700">Tanggal Selesai</label>
                            <input
                                type="date"
                                id="tanggal_selesai"
                                name="tanggal_selesai"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Lama Cuti (auto-calculated) -->
                        <div class="sm:col-span-6">
                            <label class="block text-sm font-medium text-gray-700">Lama Cuti</label>
                            <div class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm py-2 px-3 sm:text-sm">
                                <span id="lama_cuti">0 hari</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Alasan Cuti -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Alasan Cuti</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="alasan" class="block text-sm font-medium text-gray-700">Alasan</label>
                            <textarea
                                id="alasan"
                                name="alasan"
                                rows="4"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Masukkan alasan pengajuan cuti"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3">
                    <button
                        type="reset"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Reset
                    </button>
                    <button
                        type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-paper-plane mr-2"></i>Ajukan Cuti
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Script untuk menghitung lama cuti
    document.addEventListener('DOMContentLoaded', function() {
        const tanggalMulai = document.getElementById('tanggal_mulai');
        const tanggalSelesai = document.getElementById('tanggal_selesai');
        const lamaCuti = document.getElementById('lama_cuti');

        function hitungLamaCuti() {
            if (tanggalMulai.value && tanggalSelesai.value) {
                const startDate = new Date(tanggalMulai.value);
                const endDate = new Date(tanggalSelesai.value);

                // Hitung selisih hari (termasuk hari terakhir)
                const diffTime = endDate - startDate;
                const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24)) + 1;

                lamaCuti.textContent = diffDays + " hari";
            } else {
                lamaCuti.textContent = "0 hari";
            }
        }

        // Hitung saat tanggal berubah
        tanggalMulai.addEventListener('change', hitungLamaCuti);
        tanggalSelesai.addEventListener('change', hitungLamaCuti);
    });
</script>