<div class="w-full h-[100px] p-3 flex items-center justify-between bg-white rounded-xl drop-shadow-md">
    <div>
        <h1 class="text-lg font-semibold text-[#2a2a4a]">Laporan Data Kehadiran</h1>
        <?= generate_breadcrumb_admin(); ?>
    </div>

    <div class="flex flex-wrap items-center gap-3 sm:gap-4">
        <div class="flex flex-wrap items-center gap-3 sm:gap-4">
            <form method="get" action="<?= base_url('manager/laporan-kehadiran') ?>" class="space-x-2">
                <select name="bulan" id="bulan" class="px-3 py-1.5 text-xs border-2 border-gray-200 rounded-md">
                    <option value="">-- Semua Bulan --</option>
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                        <option value="<?= $i ?>" <?= ($bulan_aktif == $i) ? 'selected' : '' ?>>
                            <?= nama_bulan($i) ?>
                        </option>
                    <?php endfor; ?>
                </select>

                <select name="tahun" class="px-3 py-1.5 text-xs border-2 border-gray-200 rounded-md">
                    <option value="">-- Semua Tahun --</option>
                    <?php for ($year = 2018; $year <= 2030; $year++): ?>
                        <option value="<?= $year ?>" <?= ($tahun_aktif == $year) ? 'selected' : '' ?>><?= $year ?></option>
                    <?php endfor; ?>
                </select>

                <button type="submit" class="px-4 py-2 text-xs text-white bg-[#4b5bf6] rounded-md">Cari</button>
            </form>
        </div>
        <div>
            <a href="<?= base_url("CLaporanKehadiran/generate_pdf?&bulan=$bulan_aktif&tahun=$tahun_aktif") ?>" class="px-3 py-2 flex items-center gap-2 text-xs text-white bg-[#4b5bf6] rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 8.25H7.5a2.25 2.25 0 0 0-2.25 2.25v9a2.25 2.25 0 0 0 2.25 2.25h9a2.25 2.25 0 0 0 2.25-2.25v-9a2.25 2.25 0 0 0-2.25-2.25H15m0-3-3-3m0 0-3 3m3-3V15" />
                </svg>
                Export PDF
            </a>
        </div>
    </div>
</div>

<div class="w-full h-[600px] mt-5 p-4 overflow-y-auto bg-white rounded-xl drop-shadow-md">
    <div class="min-h-full py-2 flex flex-col justify-between bg-white rounded-2xl space-y-6 shadow-sm">

        <!-- Table -->
        <div class="overflow-x-auto ">
            <table class="w-full text-left text-gray-600 text-sm border-separate border-spacing-y-3">
                <thead>
                    <tr class="border-b border-gray-200">

                        <th class="py-3 pl-6 font-semibold text-left">
                            #
                        </th>
                        <th class="py-3 pr-6 font-semibold text-left">
                            Tanggal
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($kehadiran as $index => $item): ?>
                        <tr class="bg-white rounded-xl shadow-sm">
                            <td class="py-4 pl-6 align-top text-gray-900">
                                <?= $index + 1 ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= tanggal_indo($item->tanggal) ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->nama ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->jam_masuk ?>
                            </td>
                            <td class="py-4 pr-6 align-top text-gray-900">
                                <?= $item->jam_keluar ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>