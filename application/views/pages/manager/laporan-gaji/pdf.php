<div style="width: 100%; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center;">
    <img src="<?= base_url('assets/logo/logo-1.png') ?>" alt="" style="height: 80px; margin-bottom: 10px;">

    <h2 style="font-family: Arial, sans-serif; margin-bottom: 20px;">
        Laporan Gaji <?= $bulan == null ? "Semua Bulan" : nama_bulan($bulan) . " Tahun " . $tahun ?>
    </h2>
</div>



<table border="1" cellspacing="0" cellpadding="5" width="100%" style="border-collapse: collapse; font-family: Arial, sans-serif; font-size: 12px;">
    <thead style="background-color: #f2f2f2;">
        <tr class="border-b border-gray-200">

            <th class="py-3 pl-6 font-semibold text-left">
                #
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Periode
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Nama Karyawan
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Gaji Pokok
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Tunjangan
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Potongan
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Total Gaji
            </th>
            <th class="py-3 pr-6 font-semibold text-left">
                Status
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($gaji as $index => $item): ?>
            <tr class="bg-white rounded-xl shadow-sm">
                <td class="py-4 pl-6 align-top text-gray-900">
                    <?= $index + 1 ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= bulan_tahun_indo($item->bulan) ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= $item->nama ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= format_rupiah($item->gaji_pokok) ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= format_rupiah($item->tunjangan) ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= format_rupiah($item->potongan) ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= format_rupiah($item->total_gaji) ?>
                </td>
                <td class="py-4 pr-6 align-top text-gray-900">
                    <?= $item->status ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<br><br><br>

<!-- Tanda Tangan -->
<div style="width: 100%; margin-top: 50px; font-family: Arial, sans-serif;">
    <div style="text-align: right;">
        <p style="margin-bottom: 60px;">Bandung, <?= tanggal_indo(date('d M Y')) ?></p>
        <p style="margin-bottom: 80px;">Owner,</p>
        <p style="text-align: right; margin: 0;">_____________________</p>
    </div>
</div>