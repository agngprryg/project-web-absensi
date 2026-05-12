<div class="container mx-auto px-4 py-8">
    <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden">
        <!-- Header -->
        <div class="bg-blue-600 py-4 px-6">
            <div class="flex items-center space-x-4">
                <!-- <img src="<?= base_url('assets/logo.jpeg') ?>" alt="logo kims" class="w-[100px] h-8"> -->
                <div class="w-12 h-12 bg-gradient-to-br from-blue-600 to-blue-800 rounded-lg flex items-center justify-center">
                    <span class="text-white font-bold text-xl">HR</span>
                </div>
                <div>
                    <h1 class="text-xl font-bold text-gray-100">HRIS</h1>
                    <p class="text-sm text-gray-100">PT. Kimindo Megah Sanjaya</p>
                </div>
            </div>
        </div>

        <!-- Form Title -->
        <div class="border-b border-gray-200 py-4 px-6">
            <h2 class="text-xl font-semibold text-gray-800">Formulir Lamaran Kerja</h2>
            <p class="text-gray-600">Silakan isi formulir berikut dengan data yang valid</p>
        </div>

        <!-- Form Content -->
        <form action="<?= base_url('CGuest/submit_lowongan') ?>" method="POST" enctype="multipart/form-data" class="p-6">
            <!-- Personal Information Section -->
            <div class="mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                    <i class="fas fa-user-circle mr-2 text-blue-500"></i>Data Pribadi
                </h3>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Nama Lengkap -->
                    <div>
                        <label for="nama_lengkap" class="block text-sm font-medium text-gray-700 mb-1">Nama Lengkap <span class="text-red-500">*</span></label>
                        <input type="text" id="nama_lengkap" name="nama_lengkap" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Email -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- No HP -->
                    <div>
                        <label for="no_hp" class="block text-sm font-medium text-gray-700 mb-1">Nomor Handphone <span class="text-red-500">*</span></label>
                        <input type="tel" id="no_hp" name="no_hp" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <!-- Alamat -->
                    <div class="md:col-span-2">
                        <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat Lengkap <span class="text-red-500">*</span></label>
                        <textarea id="alamat" name="alamat" rows="3" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>
                </div>
            </div>

            <!-- Education and Experience Section -->
            <div class="mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                    <i class="fas fa-graduation-cap mr-2 text-blue-500"></i>Pendidikan & Pengalaman
                </h3>

                <div class="grid grid-cols-1 gap-6">
                    <!-- Pendidikan Terakhir -->
                    <div>
                        <label for="pendidikan_terakhir" class="block text-sm font-medium text-gray-700 mb-1">Pendidikan Terakhir <span class="text-red-500">*</span></label>
                        <select id="pendidikan_terakhir" name="pendidikan_terakhir" required
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Pilih Pendidikan --</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="D1">Diploma 1 (D1)</option>
                            <option value="D2">Diploma 2 (D2)</option>
                            <option value="D3">Diploma 3 (D3)</option>
                            <option value="D4/S1">Diploma 4/Sarjana (D4/S1)</option>
                            <option value="S2">Magister (S2)</option>
                            <option value="S3">Doktor (S3)</option>
                        </select>
                    </div>

                    <!-- Pengalaman Kerja -->
                    <div>
                        <label for="pengalaman_kerja" class="block text-sm font-medium text-gray-700 mb-1">Pengalaman Kerja</label>
                        <textarea id="pengalaman_kerja" name="pengalaman_kerja" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
                            placeholder="Jabatan, Nama Perusahaan, Periode Kerja, Tanggung Jawab"></textarea>
                    </div>
                </div>
            </div>

            <!-- File Upload Section -->
            <div class="mb-8">
                <h3 class="text-lg font-medium text-gray-900 mb-4 border-b pb-2">
                    <i class="fas fa-file-upload mr-2 text-blue-500"></i>Unggah Dokumen
                </h3>

                <div>
                    <label for="cv_file" class="block text-sm font-medium text-gray-700 mb-1">Curriculum Vitae (CV) <span class="text-red-500">*</span></label>
                    <div class="mt-1 flex items-center">
                        <label for="cv_file" class="cursor-pointer">
                            <span class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                <i class="fas fa-cloud-upload-alt mr-2"></i>Pilih File
                            </span>
                            <input id="cv_file" name="cv_file" type="file" accept=".pdf" required class="sr-only">
                        </label>
                        <span id="file-name" class="ml-3 text-sm text-gray-500">Format PDF (maks. 10MB)</span>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Hanya file PDF yang diterima (maksimal 10MB)</p>
                </div>
            </div>

            <!-- Hidden Field for Lowongan ID -->
            <input type="hidden" name="id_lowongan" value="<?= $lowongan->id ?>">

            <!-- Form Actions -->
            <div class="flex justify-end space-x-4 border-t pt-6">
                <button type="reset" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <i class="fas fa-redo mr-2"></i>Reset
                </button>
                <button type="submit" class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    <i class="fas fa-paper-plane mr-2"></i>Kirim Lamaran
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    // Display selected file name
    document.getElementById('cv_file').addEventListener('change', function(e) {
        const fileName = e.target.files[0] ? e.target.files[0].name : 'Format PDF (maks. 10MB)';
        document.getElementById('file-name').textContent = fileName;
    });
</script>