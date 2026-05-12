<?php

function trim_words($text, $word_limit = 20)
{
    $text = strip_tags($text); // Remove HTML tags
    $words = explode(' ', $text);
    $trimmed = array_slice($words, 0, $word_limit);
    return implode(' ', $trimmed) . '...';
}

function nama_bulan($angka)
{
    $bulan = [
        1  => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4  => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7  => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];
    return $bulan[(int)$angka] ?? '';
}

function tanggal_indo($tanggal)
{
    $hari = [
        'Sunday'    => 'Minggu',
        'Monday'    => 'Senin',
        'Tuesday'   => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday'  => 'Kamis',
        'Friday'    => 'Jumat',
        'Saturday'  => 'Sabtu'
    ];

    $bulan = [
        1  => 'Januari',
        2  => 'Februari',
        3  => 'Maret',
        4  => 'April',
        5  => 'Mei',
        6  => 'Juni',
        7  => 'Juli',
        8  => 'Agustus',
        9  => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];

    $date = date('Y-m-d', strtotime($tanggal));
    $pecah = explode('-', $date);

    $tgl = $pecah[2];
    $bln = $bulan[(int)$pecah[1]];
    $thn = $pecah[0];

    $nama_hari = $hari[date('l', strtotime($tanggal))];

    return "$nama_hari $tgl $bln $thn";
}

function bulan_tahun_indo($tanggal)
{
    $bulan = [
        1  => 'Januari',
        2  => 'Februari',
        3  => 'Maret',
        4  => 'April',
        5  => 'Mei',
        6  => 'Juni',
        7  => 'Juli',
        8  => 'Agustus',
        9  => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    ];

    // Pecah input YYYY-MM menjadi array
    $pecah = explode('-', $tanggal);
    if (count($pecah) !== 2) {
        return 'Format tidak valid'; // validasi sederhana
    }

    $thn = $pecah[0];
    $bln = (int)$pecah[1];

    if (!isset($bulan[$bln])) {
        return 'Bulan tidak valid';
    }

    return $bulan[$bln] . ' ' . $thn;
}



if (! function_exists('format_rupiah')) {
    function format_rupiah($angka)
    {
        return 'Rp. ' . number_format($angka, 0, ',', '.');
    }
}
