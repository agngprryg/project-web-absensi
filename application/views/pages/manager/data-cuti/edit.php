<div class="container mx-auto px-4 py-8">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-calendar-edit mr-2 text-blue-600"></i>
                    Edit Data Cuti
                </h1>
                <a href="<?= base_url('manager/data-cuti') ?>" class="text-sm text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali ke Daftar
                </a>
            </div>

            <form class="space-y-6" action="<?= base_url('manager/data-cuti/update/' . $data_cuti->id_cuti) ?>" method="post">
                <!-- Informasi Pengajuan -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Pengajuan</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- ID (readonly) -->
                        <div class="sm:col-span-2">
                            <label for="id" class="block text-sm font-medium text-gray-700">ID Cuti</label>
                            <input
                                type="text"
                                id="id"
                                name="id"
                                readonly
                                value="<?= $data_cuti->id_cuti ?>"
                                class="mt-1 block w-full bg-gray-100 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Karyawan (readonly) -->
                        <div class="sm:col-span-4">
                            <label class="block text-sm font-medium text-gray-700">Karyawan</label>
                            <div class="mt-1 flex items-center">
                                <img src="<?= base_url('uploads/karyawan/' . $data_cuti->foto) ?>" alt="Foto Karyawan" class="h-8 w-8 rounded-full mr-3">
                                <span class="text-gray-900"><?= $data_cuti->nama ?></span>
                                <input type="hidden" id="id_karyawan" name="id_karyawan" value="<?= $data_cuti->id_karyawan ?>">
                            </div>
                        </div>
                    </div>
                </div>

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
                                value="<?= $data_cuti->tanggal_mulai ?>"
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
                                value="<?= $data_cuti->tanggal_selesai ?>"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Alasan Cuti -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Alasan Cuti</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-6">
                            <label for="alasan" class="block text-sm font-medium text-gray-700">Alasan Cuti</label>
                            <textarea
                                id="alasan"
                                name="alasan"
                                rows="4"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            <?= $data_cuti->alasan ?>
                            </textarea>
                        </div>
                    </div>
                </div>

                <!-- Status -->
                <div class="pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Status Persetujuan</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                            <select
                                id="status"
                                name="status"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="diajukan" <?= $data_cuti->status == "diajukan" ? "selected" : "" ?>>Diajukan</option>
                                <option value="disetujui"> <?= $data_cuti->status == "disetujui" ? "selected" : "" ?> Disetujui</option>
                                <option value="ditolak" <?= $data_cuti->status == "ditolak" ? "selected" : "" ?>>Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3">
                    <button
                        type="button"
                        class="bg-red-500 text-white py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <i class="fas fa-trash-alt mr-1"></i>Hapus Cuti
                    </button>
                    <button
                        type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-save mr-1"></i>Simpan Perubahan
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