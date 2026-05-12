<div class="container mx-auto px-4 py-8">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">
                    <i class="fas fa-briefcase mr-2 text-blue-600"></i>
                    Form Lowongan Pekerjaan
                </h1>
                <a href="data_lowongan.html" class="text-sm text-blue-600 hover:text-blue-800 flex items-center">
                    <i class="fas fa-arrow-left mr-1"></i> Kembali
                </a>
            </div>

            <form class="space-y-6" action="<?= base_url('manager/data-lowongan/store') ?>" method="post">
                <!-- Informasi Utama -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Utama</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Posisi -->
                        <div class="sm:col-span-6">
                            <label for="posisi" class="block text-sm font-medium text-gray-700">Posisi*</label>
                            <input
                                type="text"
                                id="posisi"
                                name="posisi"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Contoh: Frontend Developer">
                        </div>

                        <!-- Departemen -->
                        <div class="sm:col-span-3">
                            <label for="departemen" class="block text-sm font-medium text-gray-700">Departemen*</label>
                            <select
                                id="departemen"
                                name="departemen"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="">Pilih Departemen</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Human Resource">Human Resource</option>
                                <option value="Pemasaran">Pemasaran</option>
                                <option value="Keuangan">Keuangan</option>
                                <option value="Operasional">Operasional</option>
                            </select>
                        </div>

                        <!-- Lokasi Penempatan -->
                        <div class="sm:col-span-3">
                            <label for="lokasi_penempatan" class="block text-sm font-medium text-gray-700">Lokasi Penempatan*</label>
                            <input
                                type="text"
                                id="lokasi_penempatan"
                                name="lokasi_penempatan"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Contoh: Jakarta, Bandung, dll">
                        </div>
                    </div>
                </div>

                <!-- Periode Lowongan -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Periode Lowongan</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Tanggal Dibuka -->
                        <div class="sm:col-span-3">
                            <label for="tanggal_dibuka" class="block text-sm font-medium text-gray-700">Tanggal Dibuka*</label>
                            <input
                                type="date"
                                id="tanggal_dibuka"
                                name="tanggal_dibuka"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Tanggal Ditutup -->
                        <div class="sm:col-span-3">
                            <label for="tanggal_ditutup" class="block text-sm font-medium text-gray-700">Tanggal Ditutup*</label>
                            <input
                                type="date"
                                id="tanggal_ditutup"
                                name="tanggal_ditutup"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Status Kerja -->
                        <div class="sm:col-span-3">
                            <label for="status_kerja" class="block text-sm font-medium text-gray-700">Status_kerja*</label>
                            <select
                                id="status_kerja"
                                name="status_kerja"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option disabled selected>Pilih Status Kerja</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Freelance">Freelance</option>
                                <option value="Internship">Internship</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Deskripsi dan Kualifikasi -->
                <div class="pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Persyaratan</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Deskripsi Pekerjaan -->
                        <div class="sm:col-span-6">
                            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Pekerjaan*</label>
                            <textarea
                                id="deskripsi"
                                name="deskripsi"
                                rows="4"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Jelaskan tanggung jawab dan deskripsi pekerjaan secara detail"></textarea>
                            <p class="mt-1 text-sm text-gray-500">Gunakan bullet point untuk menjelaskan tanggung jawab</p>
                        </div>

                        <!-- Kualifikasi -->
                        <div class="sm:col-span-6">
                            <label for="kualifikasi" class="block text-sm font-medium text-gray-700">Kualifikasi*</label>
                            <textarea
                                id="kualifikasi"
                                name="kualifikasi"
                                rows="4"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                                placeholder="Sebutkan kualifikasi yang dibutuhkan"></textarea>
                            <p class="mt-1 text-sm text-gray-500">Contoh: Pendidikan minimal S1, pengalaman 2 tahun, skill tertentu</p>
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
                        <i class="fas fa-save mr-1"></i>Simpan Lowongan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    // Validasi tanggal
    document.addEventListener('DOMContentLoaded', function() {
        const tanggalDibuka = document.getElementById('tanggal_dibuka');
        const tanggalDitutup = document.getElementById('tanggal_ditutup');

        // Set tanggal minimal untuk tanggal ditutup
        tanggalDibuka.addEventListener('change', function() {
            tanggalDitutup.min = this.value;
            if (tanggalDitutup.value && tanggalDitutup.value < this.value) {
                tanggalDitutup.value = this.value;
            }
        });

        // Set tanggal maksimal untuk tanggal dibuka
        tanggalDitutup.addEventListener('change', function() {
            if (tanggalDibuka.value && this.value < tanggalDibuka.value) {
                this.value = tanggalDibuka.value;
            }
        });
    });
</script>