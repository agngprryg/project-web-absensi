<div class="container mx-auto px-4 py-8">
    <div class="max-w-6xl mx-auto">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">
                <i class="fas fa-file-alt text-blue-500 mr-2"></i>Detail Lamaran Masuk
            </h1>
            <a href="<?= base_url('manager/lamaran-masuk') ?>" class="px-4 py-2 bg-gray-200 text-gray-700 rounded-md hover:bg-gray-300 transition">
                <i class="fas fa-arrow-left mr-2"></i>Kembali
            </a>
        </div>

        <!-- Main Card -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden mb-6">
            <!-- Card Header -->
            <div class="bg-blue-600 px-6 py-4">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-semibold text-white">Lamaran untuk: <?= $lamaran->posisi ?></h2>
                        <p class="text-blue-100">Departemen: <?= $lamaran->departemen ?></p>
                    </div>
                    <span class="px-3 py-1 rounded-full text-xs font-semibold 
                            <?= $lamaran->status == 'dikirim' ? 'bg-yellow-100 text-yellow-800' : '' ?>
                            <?= $lamaran->status == 'diproses' ? 'bg-blue-100 text-blue-800' : '' ?>
                            <?= $lamaran->status == 'wawancara' ? 'bg-purple-100 text-purple-800' : '' ?>
                            <?= $lamaran->status == 'diterima' ? 'bg-green-100 text-green-800' : '' ?>
                            <?= $lamaran->status == 'ditolak' ? 'bg-red-100 text-red-800' : '' ?>">
                        <?= ucfirst($lamaran->status) ?>
                    </span>
                </div>
            </div>

            <!-- Card Body -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Data Pelamar -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                            <i class="fas fa-user-circle mr-2 text-blue-500"></i>Data Pelamar
                        </h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Nama Lengkap</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $pelamar->nama_lengkap ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Email</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $pelamar->email ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">No. Handphone</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $pelamar->no_hp ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Alamat</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $pelamar->alamat ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Pendidikan Terakhir</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $pelamar->pendidikan_terakhir ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Pengalaman Kerja</label>
                                <div class="mt-1 text-sm text-gray-900 whitespace-pre-line"><?= $pelamar->pengalaman_kerja ?></div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">CV</label>
                                <div class="mt-2">
                                    <a href="<?= base_url('uploads/cv/' . $pelamar->cv_file) ?>" target="_blank" class="inline-flex items-center px-3 py-1 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                        <i class="fas fa-file-pdf mr-2 text-red-500"></i>Lihat CV
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Data Lowongan & Status -->
                    <div>
                        <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                            <i class="fas fa-briefcase mr-2 text-blue-500"></i>Data Lowongan
                        </h3>

                        <div class="space-y-4">
                            <div>
                                <label class="block text-sm font-medium text-gray-500">Posisi</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $lowongan->posisi ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Departemen</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $lowongan->departemen ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Lokasi Penempatan</label>
                                <p class="mt-1 text-sm text-gray-900"><?= $lowongan->lokasi_penempatan ?></p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Status Lowongan</label>
                                <p class="mt-1 text-sm text-gray-900">
                                    <span class="px-2 py-1 rounded-full text-xs font-semibold 
                                            <?= $lowongan->status == 'dibuka' ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' ?>">
                                        <?= ucfirst($lowongan->status) ?>
                                    </span>
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Periode Lowongan</label>
                                <p class="mt-1 text-sm text-gray-900">
                                    <?= date('d M Y', strtotime($lowongan->tanggal_dibuka)) ?> - <?= date('d M Y', strtotime($lowongan->tanggal_ditutup)) ?>
                                </p>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Deskripsi Pekerjaan</label>
                                <div class="mt-1 text-sm text-gray-900 whitespace-pre-line"><?= $lowongan->deskripsi ?></div>
                            </div>

                            <div>
                                <label class="block text-sm font-medium text-gray-500">Kualifikasi</label>
                                <div class="mt-1 text-sm text-gray-900 whitespace-pre-line"><?= $lowongan->kualifikasi ?></div>
                            </div>
                        </div>

                        <!-- Status Lamaran -->
                        <div class="mt-8">
                            <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                                <i class="fas fa-clipboard-check mr-2 text-blue-500"></i>Status Lamaran
                            </h3>

                            <div class="space-y-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Status</label>
                                    <p class="mt-1 text-sm text-gray-900">
                                        <span class="px-2 py-1 rounded-full text-xs font-semibold 
                                                <?= $lamaran->status == 'dikirim' ? 'bg-yellow-100 text-yellow-800' : '' ?>
                                                <?= $lamaran->status == 'diproses' ? 'bg-blue-100 text-blue-800' : '' ?>
                                                <?= $lamaran->status == 'wawancara' ? 'bg-purple-100 text-purple-800' : '' ?>
                                                <?= $lamaran->status == 'diterima' ? 'bg-green-100 text-green-800' : '' ?>
                                                <?= $lamaran->status == 'ditolak' ? 'bg-red-100 text-red-800' : '' ?>">
                                            <?= ucfirst($lamaran->status) ?>
                                        </span>
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Tanggal Update</label>
                                    <p class="mt-1 text-sm text-gray-900">
                                        <?= date('d M Y H:i', strtotime($lamaran->tanggal_update)) ?>
                                    </p>
                                </div>

                                <div>
                                    <label class="block text-sm font-medium text-gray-500">Catatan</label>
                                    <div class="mt-1 text-sm text-gray-900 whitespace-pre-line">
                                        <?= !empty($lamaran->catatan) ? $lamaran->catatan : '-' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Form Update Status -->
                        <div class="mt-8 border-t pt-6">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">
                                <i class="fas fa-edit mr-2 text-blue-500"></i>Update Status Lamaran
                            </h3>

                            <form action="<?= base_url('CLamaranMasuk/update_status/' . $lamaran->id) ?>" method="POST" class="space-y-4">
                                <div>
                                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status <span class="text-red-500">*</span></label>
                                    <select id="status" name="status" required
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                                        <option value="dikirim" <?= $lamaran->status == 'dikirim' ? 'selected' : '' ?>>Dikirim</option>
                                        <option value="diproses" <?= $lamaran->status == 'diproses' ? 'selected' : '' ?>>Diproses</option>
                                        <option value="wawancara" <?= $lamaran->status == 'wawancara' ? 'selected' : '' ?>>Wawancara</option>
                                        <option value="diterima" <?= $lamaran->status == 'diterima' ? 'selected' : '' ?>>Diterima</option>
                                        <option value="ditolak" <?= $lamaran->status == 'ditolak' ? 'selected' : '' ?>>Ditolak</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="catatan" class="block text-sm font-medium text-gray-700 mb-1">Catatan</label>
                                    <textarea id="catatan" name="catatan" rows="3"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                                        placeholder="Tambahkan catatan jika perlu"><?= $lamaran->catatan ?></textarea>
                                </div>

                                <div class="flex justify-end space-x-3 pt-2">
                                    <button type="submit"
                                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                        <i class="fas fa-save mr-2"></i>Simpan Perubahan
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Card Footer -->
        <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
            <div class="flex justify-between items-center">
                <div class="text-sm text-gray-500">
                    <i class="far fa-clock mr-1"></i>
                    Lamaran dikirim pada <?= date('d M Y H:i', strtotime($pelamar->created_at)) ?>
                </div>
            </div>
        </div>
    </div>
</div>