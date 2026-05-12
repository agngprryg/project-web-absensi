<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slip Gaji - HRIS PT. Kimindo Megah Sanjaya</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        @media print {
            .no-print {
                display: none !important;
            }

            body {
                margin: 0;
                padding: 0;
                background: white;
                font-size: 12pt;
            }

            .print-area {
                width: 100%;
                margin: 0;
                padding: 0;
                box-shadow: none;
            }
        }
    </style>
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <!-- Print Button -->
        <div class="no-print flex justify-end mb-4">
            <button onclick="window.print()" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                <i class="fas fa-print mr-2"></i>Cetak Slip Gaji
            </button>
        </div>

        <!-- Slip Gaji Container -->
        <div class="print-area max-w-3xl mx-auto bg-white rounded-lg shadow-md overflow-hidden border border-gray-300">
            <!-- Kop Perusahaan -->
            <div class="bg-blue-600 py-4 px-6 text-center">
                <h1 class="text-2xl font-bold text-white">PT. KIMINDO MEGAH SANJAYA</h1>
                <p class="text-blue-100">Human Resource Information System</p>
                <p class="text-blue-100 mt-2">SLIP GAJI KARYAWAN</p>
            </div>

            <!-- Info Periode & Karyawan -->
            <div class="p-6 border-b border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <table class="w-full">
                            <tr>
                                <td class="py-1 text-gray-600 w-1/3">Periode</td>
                                <td class="py-1 font-medium">: Mei 2023</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-gray-600">Tanggal Cetak</td>
                                <td class="py-1 font-medium">: <?= date('d/m/Y') ?></td>
                            </tr>
                        </table>
                    </div>
                    <div>
                        <table class="w-full">
                            <tr>
                                <td class="py-1 text-gray-600 w-1/3">NIK</td>
                                <td class="py-1 font-medium">: KMS-01234</td>
                            </tr>
                            <tr>
                                <td class="py-1 text-gray-600">Nama</td>
                                <td class="py-1 font-medium">: John Doe</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Detail Gaji -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Pendapatan -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 border-b pb-2">PENDAPATAN</h3>
                        <table class="w-full">
                            <tr>
                                <td class="py-2 text-gray-600">Gaji Pokok</td>
                                <td class="py-2 text-right">Rp 8.000.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">Tunjangan Jabatan</td>
                                <td class="py-2 text-right">Rp 1.500.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">Tunjangan Transport</td>
                                <td class="py-2 text-right">Rp 500.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">Tunjangan Makan</td>
                                <td class="py-2 text-right">Rp 750.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">Lembur</td>
                                <td class="py-2 text-right">Rp 350.000</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="py-2 font-semibold">Total Pendapatan</td>
                                <td class="py-2 text-right font-semibold">Rp 11.100.000</td>
                            </tr>
                        </table>
                    </div>

                    <!-- Potongan -->
                    <div>
                        <h3 class="text-lg font-semibold text-gray-800 mb-3 border-b pb-2">POTONGAN</h3>
                        <table class="w-full">
                            <tr>
                                <td class="py-2 text-gray-600">BPJS Kesehatan</td>
                                <td class="py-2 text-right">Rp 150.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">BPJS Ketenagakerjaan</td>
                                <td class="py-2 text-right">Rp 120.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">PPh 21</td>
                                <td class="py-2 text-right">Rp 250.000</td>
                            </tr>
                            <tr>
                                <td class="py-2 text-gray-600">Pinjaman Karyawan</td>
                                <td class="py-2 text-right">Rp 300.000</td>
                            </tr>
                            <tr class="border-t border-gray-200">
                                <td class="py-2 font-semibold">Total Potongan</td>
                                <td class="py-2 text-right font-semibold">Rp 820.000</td>
                            </tr>
                        </table>
                    </div>
                </div>

                <!-- Total Gaji Bersih -->
                <div class="mt-8 bg-blue-50 p-4 rounded-md">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-gray-800">GAJI BERSIH</h3>
                        <span class="text-2xl font-bold text-blue-600">Rp 10.280.000</span>
                    </div>
                    <p class="text-sm text-gray-500 mt-1">* Terbilang: Sepuluh Juta Dua Ratus Delapan Puluh Ribu Rupiah</p>
                </div>
            </div>

            <!-- Footer -->
            <div class="p-6 border-t border-gray-200">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="text-center">
                        <p class="text-gray-600 mb-8">Diterima oleh,</p>
                        <div class="h-16"></div>
                        <p class="font-medium border-t border-gray-300 pt-2 inline-block">(John Doe)</p>
                    </div>
                    <div class="text-center">
                        <p class="text-gray-600 mb-8">Hormat kami,</p>
                        <div class="h-16"></div>
                        <p class="font-medium border-t border-gray-300 pt-2 inline-block">(HRD PT. Kimindo Megah Sanjaya)</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>