<nav class="flex items-center space-x-8 px-6 py-3 border-b border-[#E4E7EC] bg-white text-[#475467] text-sm font-normal select-none">
    <button onclick="showTab('harian')" class="flex items-center gap-2 hover:text-[#0F172A] tab-button active" data-tab="harian">
        <i class="fas fa-calendar-day"></i>
        Harian
    </button>
    <button onclick="showTab('mingguan')" class="flex items-center gap-2 hover:text-[#0F172A] tab-button" data-tab="mingguan">
        <i class="fas fa-calendar-week"></i>
        Mingguan
    </button>
    <button onclick="showTab('bulanan')" class="flex items-center gap-2 hover:text-[#0F172A] tab-button" data-tab="bulanan">
        <i class="fas fa-calendar-alt"></i>
        Bulanan
    </button>
</nav>

<main class="px-6 py-6">
    <!-- Harian Tab Content -->
    <div id="harian" class="tab-content active">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
            <h2 class="text-[#0F172A] font-bold text-xl leading-7 mb-4 md:mb-0">
                Rekap Kehadiran Harian
            </h2>
        </div>

        <div class="overflow-x-auto ">
            <table class="w-full text-left text-gray-600 text-sm border-separate border-spacing-y-3 ">
                <thead>
                    <tr class="border-b border-gray-200">

                        <th class="py-3 pl-6 font-semibold text-left">
                            #
                        </th>

                        <th class="py-3 pr-6 font-semibold text-left">
                            Nama Karyawan
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Jam Masuk
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Jam Keluar
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Status
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($harian as $index => $item): ?>
                        <tr class="bg-white rounded-xl shadow-sm">
                            <td class="py-4 pl-6 align-top text-gray-900">
                                <?= $index + 1 ?>
                            </td>
                            <td class="py-4 pr-6 whitespace-nowrap">
                                <div class="flex gap-4">
                                    <img src="<?= base_url('uploads/karyawan/') . $item->foto ?>" alt="" class="size-10 rounded-full">
                                    <div>
                                        <h1 class="text-sm text-gray-900"> <?= $item->nama ?> </h1>
                                        <h1 class="text-sm text-gray-900"> <?= $item->jabatan ?> </h1>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->jam_masuk ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->jam_keluar ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->status ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Mingguan Tab Content -->
    <div id="mingguan" class="tab-content hidden">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
            <h2 class="text-[#0F172A] font-bold text-xl leading-7 mb-4 md:mb-0">
                Rekap Kehadiran Mingguan
            </h2>
        </div>

        <div class="overflow-x-auto ">
            <table class="w-full text-left text-gray-600 text-sm border-separate border-spacing-y-3 ">
                <thead>
                    <tr class="border-b border-gray-200">

                        <th class="py-3 pl-6 font-semibold text-left">
                            #
                        </th>

                        <th class="py-3 pr-6 font-semibold text-left">
                            Nama Karyawan
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Senin
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Selasa
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Rabu
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Kamis
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Jumat
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Sabtu
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Minggu
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($mingguan as $index => $item): ?>
                        <tr class="bg-white rounded-xl shadow-sm">
                            <td class="py-4 pl-6 align-top text-gray-900">
                                <?= $index + 1 ?>
                            </td>

                            <td class="py-4 pr-6 whitespace-nowrap">
                                <div class="flex gap-4">
                                    <img src="<?= base_url('uploads/karyawan/') . $item->foto ?>" alt="<?= $item->nama ?>" class="size-10 rounded-full object-cover">
                                    <div>
                                        <h1 class="text-sm text-gray-900"><?= $item->nama ?></h1>
                                        <h1 class="text-sm text-gray-600"><?= $item->jabatan ?></h1>
                                    </div>
                                </div>
                            </td>

                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->senin ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->selasa ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->rabu ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->kamis ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->jumat ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->sabtu ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->minggu ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bulanan Tab Content -->
    <div id="bulanan" class="tab-content hidden">
        <div class="flex flex-col md:flex-row md:justify-between md:items-center mb-6">
            <h2 class="text-[#0F172A] font-bold text-xl leading-7 mb-4 md:mb-0">
                Rekap Kehadiran Bulanan
            </h2>
        </div>

        <div class="overflow-x-auto ">
            <table class="w-full text-left text-gray-600 text-sm border-separate border-spacing-y-3 ">
                <thead>
                    <tr class="border-b border-gray-200">

                        <th class="py-3 pl-6 font-semibold text-left">
                            #
                        </th>

                        <th class="py-3 pr-6 font-semibold text-left">
                            Nama Karyawan
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Hadir
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Izin
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Sakit
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Cuti
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Alpha
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Libur
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($bulanan as $index => $item): ?>
                        <tr class="bg-white rounded-xl shadow-sm">
                            <td class="py-4 pl-6 align-top text-gray-900">
                                <?= $index + 1 ?>
                            </td>

                            <td class="py-4 pr-6 whitespace-nowrap">
                                <div class="flex gap-4">
                                    <img src="<?= base_url('uploads/karyawan/') . $item->foto ?>" alt="<?= $item->nama ?>" class="size-10 rounded-full object-cover">
                                    <div>
                                        <h1 class="text-sm text-gray-900"><?= $item->nama ?></h1>
                                        <h1 class="text-sm text-gray-600"><?= $item->jabatan ?></h1>
                                    </div>
                                </div>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->hadir ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->izin ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->sakit ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->cuti ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->alpha ?></td>
                            <td class="py-4 pr-6 align-top text-gray-900"><?= $item->libur ?></td>

                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<script>
    function showTab(tabId) {
        // Hide all tab contents
        document.querySelectorAll('.tab-content').forEach(tab => {
            tab.classList.add('hidden');
            tab.classList.remove('active');
        });

        // Remove active class from all tab buttons
        document.querySelectorAll('.tab-button').forEach(button => {
            button.classList.remove('active');
            button.classList.remove('text-[#3B5BDB]', 'font-semibold', 'border-b-2', 'border-[#3B5BDB]');
            button.classList.add('text-[#475467]', 'font-normal');
        });

        // Show selected tab content
        document.getElementById(tabId).classList.remove('hidden');
        document.getElementById(tabId).classList.add('active');

        // Add active class to clicked tab button
        const activeButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
        activeButton.classList.add('active', 'text-[#3B5BDB]', 'font-semibold', 'border-b-2', 'border-[#3B5BDB]');
        activeButton.classList.remove('text-[#475467]', 'font-normal');
    }

    // Initialize first tab as active
    document.addEventListener('DOMContentLoaded', function() {
        showTab('harian');
    });
</script>