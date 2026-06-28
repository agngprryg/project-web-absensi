<div class="py-6">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-bold text-gray-900">
                <i class="fas fa-qrcode mr-2 text-blue-600"></i>
                Dynamic QR Code Absensi
            </h1>
            <p class="text-sm text-gray-600 mt-1">QR Code berubah otomatis setiap 1 menit</p>
        </div>

        <!-- Kolom Kiri: QR Display -->
        <div class="lg:col-span-2">
            <div class="bg-white rounded-xl  overflow-hidden">
                <div class="px-6 py-4 bg-gradient-to-r from-blue-500 to-blue-600">
                    <h2 class="text-lg font-semibold text-white">
                        <i class="fas fa-qrcode mr-2"></i>
                        QR Code Aktif
                    </h2>
                </div>

                <div class="p-6 text-center">
                    <!-- QR Image -->
                    <div class="bg-gray-50 p-6 rounded-lg inline-block mx-auto">
                        <img id="qrImage" src="<?= base_url('assets/qrcode/' . $qr_data->qr_image) ?>"
                            alt="QR Code" class="w-64 h-64 mx-auto">
                    </div>

                    <!-- Countdown Timer -->
                    <div class="mt-6">
                        <p class="text-sm text-gray-600 mb-2">Berlaku hingga:</p>
                        <div class="text-5xl font-mono font-bold" id="countdown">
                            <span id="minutes">01</span>:<span id="seconds">00</span>
                        </div>
                        <p class="text-xs text-gray-500 mt-2">QR akan expired setelah countdown habis</p>
                    </div>

                    <!-- Status Badge -->
                    <div class="mt-4">
                        <span id="qrStatus" class="px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800">
                            <i class="fas fa-check-circle mr-1"></i> Aktif
                        </span>
                    </div>

                    <!-- Button Generate Manual -->
                    <div class="mt-6">
                        <button onclick="generateNewQR()" id="btnGenerate"
                            class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-2 rounded-lg shadow-md transition duration-200">
                            <i class="fas fa-sync-alt mr-2"></i>
                            Generate QR Baru
                        </button>
                        <div id="loadingIndicator" class="hidden mt-3 text-gray-500">
                            <i class="fas fa-spinner fa-spin mr-2"></i>
                            Memperbarui QR Code...
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


<script>
    let expiredTime = <?= $expired_time ?>;
    let countdownInterval;
    let autoRefreshInterval;

    function updateCountdown() {
        const now = new Date().getTime();
        const distance = expiredTime - now;

        if (distance <= 0) {
            document.getElementById('minutes').innerHTML = '00';
            document.getElementById('seconds').innerHTML = '00';
            document.getElementById('qrStatus').innerHTML = '<i class="fas fa-times-circle mr-1"></i> Expired';
            document.getElementById('qrStatus').className = 'px-3 py-1 rounded-full text-sm font-semibold bg-red-100 text-red-800';
            clearInterval(countdownInterval);
            return;
        }

        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((distance % (1000 * 60)) / 1000);

        document.getElementById('minutes').innerHTML = String(minutes).padStart(2, '0');
        document.getElementById('seconds').innerHTML = String(seconds).padStart(2, '0');
    }

    function generateNewQR() {
        const btn = document.getElementById('btnGenerate');
        const loading = document.getElementById('loadingIndicator');

        btn.disabled = true;
        loading.classList.remove('hidden');

        fetch('<?= base_url("manager/api_generate_qr") ?>', {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update QR Image dengan cache buster
                    document.getElementById('qrImage').src = data.qr_image + '?t=' + new Date().getTime();
                    expiredTime = data.expired_timestamp;

                    // Reset countdown
                    if (countdownInterval) clearInterval(countdownInterval);
                    countdownInterval = setInterval(updateCountdown, 1000);
                    updateCountdown();

                    // Update status
                    document.getElementById('qrStatus').innerHTML = '<i class="fas fa-check-circle mr-1"></i> Aktif';
                    document.getElementById('qrStatus').className = 'px-3 py-1 rounded-full text-sm font-semibold bg-green-100 text-green-800';

                    // Notifikasi sukses
                    showToast('QR Code berhasil digenerate', 'success');
                } else {
                    showToast('Gagal generate QR: ' + data.message, 'error');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                showToast('Terjadi kesalahan pada server', 'error');
            })
            .finally(() => {
                btn.disabled = false;
                loading.classList.add('hidden');
            });
    }

    function showToast(message, type) {
        const toast = document.createElement('div');
        toast.className = `fixed bottom-4 right-4 px-4 py-2 rounded-lg shadow-lg text-white z-50 ${
        type === 'success' ? 'bg-green-500' : 'bg-red-500'
    }`;
        toast.innerHTML = message;
        document.body.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }

    // Start countdown
    countdownInterval = setInterval(updateCountdown, 1000);
    updateCountdown();

    // Auto refresh setiap 60 detik
    // setInterval(() => {
    //     generateNewQR();
    // }, 60000);
</script>