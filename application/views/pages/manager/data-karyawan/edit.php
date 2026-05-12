<div class="px-4 py-8 ">
    <div class="bg-white rounded-xl  overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h1 class="text-2xl font-bold text-gray-800">Edit Data Karyawan</h1>
                    <p class="text-sm text-gray-500 mt-1">ID Karyawan: <?= $data_karyawan->id_pengguna ?></p>
                </div>
                <a href="<?= base_url('manager/data-karyawan') ?>" class="flex items-center text-sm text-blue-600 hover:text-blue-800">
                    <i class="fas fa-arrow-left mr-2"></i> Kembali
                </a>
            </div>

            <form class="space-y-8" action="<?= base_url('manager/data-karyawan/update/' . $data_karyawan->id) ?>" method="post" enctype="multipart/form-data">
                <!-- Informasi Dasar -->
                <div class="border-b border-gray-200 pb-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-lg font-semibold text-gray-900">
                            <i class="fas fa-user-circle text-blue-500 mr-2"></i> Informasi Dasar
                        </h2>
                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                            Wajib diisi
                        </span>
                    </div>

                    <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-6">
                        <!-- foto Upload -->
                        <div class="sm:col-span-1">
                            <div class="flex flex-col items-center">
                                <div class="relative w-24 h-24 rounded-full bg-gray-100 mb-3 overflow-hidden border-2 border-gray-300">
                                    <img id="preview-foto" src="<?= base_url('uploads/karyawan/' . $data_karyawan->foto) ?>" alt="Employee foto" class="w-full h-full object-cover">
                                    <div class="absolute inset-0 bg-black bg-opacity-30 flex items-center justify-center opacity-0 hover:opacity-100 transition-opacity">
                                        <label for="foto" class="cursor-pointer text-white">
                                            <i class="fas fa-camera text-xl"></i>
                                        </label>
                                    </div>
                                </div>
                                <input type="file" id="foto" name="foto" accept="image/*" class="hidden" onchange="previewImage(this)">
                                <button type="button" onclick="document.getElementById('foto').click()" class="text-xs text-blue-600 hover:text-blue-800">
                                    Ganti Foto
                                </button>
                            </div>
                        </div>

                        <!-- Form Fields -->
                        <div class="sm:col-span-5 grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-6">
                            <!-- Nama -->
                            <div class="sm:col-span-3">
                                <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap <span class="text-red-500">*</span></label>
                                <input
                                    type="text"
                                    id="nama"
                                    name="nama"
                                    value="<?= $data_karyawan->nama ?>"
                                    required
                                    class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="border-b border-gray-200 pb-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">
                        <i class="fas fa-address-book text-blue-500 mr-2"></i> Informasi Kontak
                    </h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-6">
                        <!-- No Telepon -->
                        <div class="sm:col-span-3">
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon <span class="text-red-500">*</span></label>
                            <input
                                type="tel"
                                id="no_telepon"
                                name="no_telepon"
                                value="<?= $data_karyawan->no_telepon ?>"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>



                        <!-- Alamat -->
                        <div class="sm:col-span-6">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat <span class="text-red-500">*</span></label>
                            <textarea
                                id="alamat"
                                name="alamat"
                                rows="3"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"><?= $data_karyawan->alamat ?></textarea>
                        </div>
                    </div>
                </div>

                <!-- Pekerjaan -->
                <div class="border-b border-gray-200 pb-8">
                    <h2 class="text-lg font-semibold text-gray-900 mb-6">
                        <i class="fas fa-briefcase text-blue-500 mr-2"></i> Informasi Pekerjaan
                    </h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-8 sm:grid-cols-6">
                        <!-- Jabatan -->
                        <div class="sm:col-span-3">
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700">Jabatan <span class="text-red-500">*</span></label>
                            <input
                                type="text"
                                id="jabatan"
                                name="jabatan"
                                value="<?= $data_karyawan->jabatan ?>"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>


                        <!-- Status Kerja -->
                        <div class="sm:col-span-2">
                            <label for="status_kerja" class="block text-sm font-medium text-gray-700">Status Kerja <span class="text-red-500">*</span></label>
                            <select
                                id="status_kerja"
                                name="status_kerja"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="aktif" selected>Aktif</option>
                                <option value="resign">Resign</option>
                                <option value="phk">PHK</option>
                                <option value="kontrak">Kontrak</option>
                            </select>
                        </div>

                    </div>
                </div>
        </div>



        <!-- Tombol Aksi -->
        <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
            <button
                type="button"
                onclick="window.location.href='<?= base_url('manager/data-karyawan') ?>'"
                class="bg-white py-2 px-6 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Batal
            </button>
            <button
                type="submit"
                class="ml-3 inline-flex justify-center py-2 px-6 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                <i class="fas fa-save mr-2"></i> Simpan Perubahan
            </button>
        </div>
        </form>
    </div>
</div>
</div>

<script>
    function previewImage(input) {
        if (input.files && input.files[0]) {
            const reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('preview-foto').src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>