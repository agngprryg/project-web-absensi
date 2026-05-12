<div class="px-4 py-8">
    <div class=" bg-white rounded-xl shadow-md overflow-hidden">
        <div class="p-8">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Form Data Karyawan</h1>
                <a href="<?= base_url('manager/data-karyawan') ?>" class="text-sm text-blue-600 hover:text-blue-800">Kembali ke Daftar Karyawan</a>
            </div>

            <form class="space-y-6" action="<?= base_url('manager/data-karyawan/store') ?>" method="post" enctype="multipart/form-data">
                <!-- Informasi Dasar -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Dasar</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">

                        <!-- Nama -->
                        <div class="sm:col-span-6">
                            <label for="nama" class="block text-sm font-medium text-gray-700">Nama Lengkap</label>
                            <input
                                type="text"
                                id="nama"
                                name="nama"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="sm:col-span-6">
                            <label for="foto" class="block text-sm font-medium text-gray-700">foto Profile</label>
                            <input
                                type="file"
                                id="foto"
                                name="foto"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="sm:col-span-6">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <div class="sm:col-span-6">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input
                                type="text"
                                id="password"
                                name="password"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>
                    </div>
                </div>

                <!-- Kontak -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Kontak</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- No Telepon -->
                        <div class="sm:col-span-3">
                            <label for="no_telepon" class="block text-sm font-medium text-gray-700">Nomor Telepon</label>
                            <input
                                type="tel"
                                id="no_telepon"
                                name="no_telepon"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Alamat -->
                        <div class="sm:col-span-6">
                            <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                            <textarea
                                id="alamat"
                                name="alamat"
                                rows="3"
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                        </div>
                    </div>
                </div>

                <!-- Pekerjaan -->
                <div class="border-b border-gray-200 pb-6">
                    <h2 class="text-lg font-medium text-gray-900 mb-4">Informasi Pekerjaan</h2>
                    <div class="grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
                        <!-- Jabatan -->
                        <div class="sm:col-span-3">
                            <label for="jabatan" class="block text-sm font-medium text-gray-700">Jabatan</label>
                            <input
                                type="text"
                                id="jabatan"
                                name="jabatan"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Tanggal Masuk -->
                        <div class="sm:col-span-3">
                            <label for="tanggal_masuk" class="block text-sm font-medium text-gray-700">Tanggal Masuk</label>
                            <input
                                type="date"
                                id="tanggal_masuk"
                                name="tanggal_masuk"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                        </div>

                        <!-- Status Kerja -->
                        <div class="sm:col-span-3">
                            <label for="status_kerja" class="block text-sm font-medium text-gray-700">Status Kerja</label>
                            <select
                                id="status_kerja"
                                name="status_kerja"
                                required
                                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                <option value="">Pilih Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="resign">Resign</option>
                                <option value="phk">PHK</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Tombol Aksi -->
                <div class="flex justify-end space-x-3">
                    <button
                        type="button"
                        class="bg-white py-2 px-4 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Batal
                    </button>
                    <button
                        type="submit"
                        class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Simpan Data
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>