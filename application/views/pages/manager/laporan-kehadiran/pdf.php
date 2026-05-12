<div style="width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <img src="<?= base_url('assets/logo/logo-2.jpeg') ?>" alt="" style="height: 80px; margin-bottom: 10px;">

    <h2 style="font-family: Arial, sans-serif; margin-bottom: 20px;">
        Laporan Kehadiran <?= $bulan == null ? "Semua Bulan" : nama_bulan($bulan) . " Tahun " . $tahun ?>
    </h2>
</div>



<table border="1" cellspacing="0" cellpadding="5" width="100%" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 12px;">
    <thead style="background-color: #f2f2f2;">
        <tr>
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

<br><br><br>

<!-- Tanda Tangan -->
<div style="width: 100%; margin-top: 50px; font-family: Arial, sans-serif;">
    <div style="text-align: right;">
        <p style="margin-bottom: 60px;">Tegal, <?= tanggal_indo(date('d M Y')) ?></p>
        <p style="margin-bottom: 80px;">Owner,</p>
        <p style="text-align: right; margin: 0;">_____________________</p>
    </div>
</div>