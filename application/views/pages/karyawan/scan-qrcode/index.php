<div class="min-h-screen">
    <div class="py-6">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="mb-6">
                <h1 class="text-2xl font-bold text-gray-900">
                    <i class="fas fa-camera mr-2 text-blue-600"></i>
                    Scan QR Code Absensi
                </h1>
                <p class="text-sm text-gray-600 mt-1">Arahkan kamera ke QR Code yang ditampilkan Manager</p>
            </div>

            <!-- Alert Notifikasi -->
            <?php if ($this->session->flashdata('success')): ?>
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg mb-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <i class="fas fa-check-circle mr-2"></i>
                        <span><?= $this->session->flashdata('success') ?></span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-green-700">&times;</button>
                </div>
            <?php endif; ?>

            <?php if ($this->session->flashdata('error')): ?>
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded-lg mb-4 flex items-center justify-between">
                    <div class="flex items-center">
                        <i class="fas fa-exclamation-circle mr-2"></i>
                        <span><?= $this->session->flashdata('error') ?></span>
                    </div>
                    <button onclick="this.parentElement.remove()" class="text-red-700">&times;</button>
                </div>
            <?php endif; ?>

            <!-- Status Absen Hari Ini -->
            <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-6">
                <div class="px-6 py-4 bg-gray-50 border-b">
                    <h3 class="font-semibold text-gray-700">
                        <i class="fas fa-calendar-day mr-2 text-blue-500"></i>
                        Status Absensi Hari Ini
                    </h3>
                </div>
                <div class="p-6">
                    <?php if (!empty($kehadiran_hari_ini)): ?>
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-600">Anda sudah melakukan absen hari ini pada:</p>
                                <p class="text-xl font-bold text-gray-800"><?= date('H:i:s', strtotime($kehadiran_hari_ini->jam_masuk)) ?></p>
                            </div>
                            <div class="bg-green-100 rounded-full p-3">
                                <i class="fas fa-check-circle text-green-600 text-3xl"></i>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="text-center">
                            <i class="fas fa-clock text-gray-400 text-4xl mb-3"></i>
                            <p class="text-gray-600">Belum melakukan absen hari ini</p>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Scanner QR -->
            <?php if (empty($kehadiran_hari_ini)): ?>
                <div class="bg-white rounded-xl shadow-lg overflow-hidden">
                    <div class="px-6 py-4 bg-[#6c30a1]">
                        <h2 class="text-lg font-semibold text-white">
                            <i class="fas fa-video mr-2"></i>
                            Scanner QR Code
                        </h2>
                    </div>

                    <div class="p-6">
                        <!-- Camera Selector -->
                        <div class="mb-4">
                            <label class="block text-sm font-medium text-gray-700 mb-2">
                                <i class="fas fa-camera mr-1"></i> Pilih Kamera
                            </label>
                            <select id="cameraSelect" class="w-full md:w-auto px-4 py-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500">
                                <option value="">Memuat daftar kamera...</option>
                            </select>
                        </div>

                        <!-- Scanner Container -->
                        <div id="reader" class="w-full" style="min-height: 400px;"></div>

                        <!-- Tombol Kontrol -->
                        <div class="flex justify-center space-x-3 mt-4">
                            <button onclick="startScanner()" class="bg-white text-black px-6 py-2 rounded-lg shadow transition border-b-4 border-r-4 border-black">
                                <i class="fas fa-play mr-2"></i> Mulai Scan
                            </button>
                            <button onclick="stopScanner()" class="bg-white text-black px-6 py-2 rounded-lg shadow transition border-b-4 border-r-4 border-black">
                                <i class="fas fa-stop mr-2"></i> Stop Scan
                            </button>
                        </div>

                        <!-- Result Container -->
                        <div id="resultContainer" class="mt-6 hidden"></div>
                    </div>
                </div>
            <?php else: ?>
                <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6 text-center">
                    <i class="fas fa-check-circle text-yellow-600 text-5xl mb-3"></i>
                    <h3 class="text-lg font-semibold text-yellow-800">Anda Sudah Absen Hari Ini</h3>
                    <p class="text-yellow-700 mt-2">Terima kasih, absensi Anda sudah tercatat.</p>
                    <a href="<?= site_url('karyawan/dashboard') ?>" class="inline-block mt-4 bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        <i class="fas fa-arrow-left mr-2"></i> Kembali ke Dashboard
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>

<script src="https://unpkg.com/html5-qrcode@2.3.8/html5-qrcode.min.js"></script>
<script>
    let html5QrCode;
    let isScanning = false;

    // Inisialisasi kamera
    async function initCamera() {
        try {
            const devices = await Html5Qrcode.getCameras();
            const select = document.getElementById('cameraSelect');

            if (devices && devices.length) {
                select.innerHTML = '';
                devices.forEach((device, index) => {
                    const option = document.createElement('option');
                    option.value = device.id;
                    option.text = device.label || `Kamera ${index + 1}`;
                    select.appendChild(option);
                });
            } else {
                select.innerHTML = '<option value="">Tidak ada kamera ditemukan</option>';
            }
        } catch (err) {
            console.error('Error getting cameras:', err);
            document.getElementById('cameraSelect').innerHTML = '<option value="">Gagal mengakses kamera</option>';
        }
    }

    function showResult(type, message) {
        const resultDiv = document.getElementById('resultContainer');
        const isSuccess = type === 'success';

        resultDiv.className = `mt-6 p-4 rounded-lg ${isSuccess ? 'bg-green-100 border border-green-400' : 'bg-red-100 border border-red-400'}`;
        resultDiv.innerHTML = `
        <div class="flex items-center">
            <i class="fas ${isSuccess ? 'fa-check-circle' : 'fa-exclamation-circle'} ${isSuccess ? 'text-green-600' : 'text-red-600'} text-2xl mr-3"></i>
            <div>
                <h3 class="font-semibold ${isSuccess ? 'text-green-800' : 'text-red-800'}">${isSuccess ? 'Berhasil!' : 'Gagal!'}</h3>
                <p class="${isSuccess ? 'text-green-700' : 'text-red-700'}">${message}</p>
            </div>
        </div>
        <button onclick="document.getElementById('resultContainer').classList.add('hidden')" 
                class="mt-3 text-sm ${isSuccess ? 'text-green-600' : 'text-red-600'} hover:underline">
            Tutup
        </button>
    `;
        resultDiv.classList.remove('hidden');

        // Jika sukses, reload halaman setelah 2 detik
        if (isSuccess) {
            setTimeout(() => {
                window.location.reload();
            }, 2000);
        }
    }

    function startScanner() {
        if (isScanning) {
            stopScanner();
        }

        const cameraId = document.getElementById('cameraSelect').value;
        if (!cameraId) {
            alert('Silakan pilih kamera terlebih dahulu');
            return;
        }

        const readerElement = document.getElementById('reader');
        html5QrCode = new Html5Qrcode("reader");
        const config = {
            fps: 10,
            qrbox: {
                width: 250,
                height: 250
            },
            aspectRatio: 1.0
        };

        html5QrCode.start(cameraId, config, onScanSuccess, onScanError)
            .then(() => {
                isScanning = true;
                console.log('Scanner started');
            })
            .catch(err => {
                console.error('Gagal start scanner:', err);
                alert('Gagal mengakses kamera. Pastikan izin kamera diberikan dan pakai HTTPS.');
            });
    }

    function stopScanner() {
        if (html5QrCode && isScanning) {
            html5QrCode.stop().then(() => {
                isScanning = false;
                console.log('Scanner stopped');
            }).catch(err => console.error('Error stop:', err));
        }
    }

    async function onScanSuccess(decodedText, decodedResult) {
        console.log('Scan result:', decodedText);

        // Parse URL untuk mendapatkan token
        let token = null;
        try {
            const url = new URL(decodedText);
            token = url.searchParams.get('token');
        } catch (e) {
            // Jika bukan URL, coba langsung sebagai token
            token = decodedText;
        }

        if (!token) {
            showResult('error', 'QR Code tidak valid!');
            return;
        }

        // Stop scanner sementara
        stopScanner();

        // Tampilkan loading
        showResult('info', 'Memproses absensi...');

        try {
            const response = await fetch('<?= base_url("karyawan/api_proses_absen_qr") ?>', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: 'token=' + encodeURIComponent(token)
            });

            const data = await response.json();

            console.log(data);

            if (data.success) {
                showResult('success', data.message + '\nWaktu: ' + data.waktu);
                // Refresh halaman setelah 2 detik untuk update status
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            } else {
                showResult('error', data.message);
                // Restart scanner setelah 3 detik
                setTimeout(() => {
                    if (confirm('Scan lagi? (Ya untuk lanjut, Tidak untuk berhenti)')) {
                        startScanner();
                    }
                }, 3000);
            }
        } catch (error) {
            console.error('Error:', error);
            showResult('error', 'Gagal terhubung ke server!');
            setTimeout(() => {
                startScanner();
            }, 3000);
        }
    }

    function onScanError(errorMessage) {
        // Biarkan error ini, hanya console log untuk debugging
        // console.log('Scan error:', errorMessage);
    }

    // Inisialisasi saat halaman load
    window.onload = () => {
        initCamera();
    };

    // Bersihkan scanner saat halaman ditutup
    window.onbeforeunload = () => {
        if (html5QrCode && isScanning) {
            html5QrCode.stop();
        }
    };
</script>