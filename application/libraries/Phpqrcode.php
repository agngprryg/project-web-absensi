<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Phpqrcode
{

    private $qrlib_path;

    public function __construct()
    {
        $this->qrlib_path = APPPATH . 'third_party/phpqrcode/qrlib.php';

        if (!file_exists($this->qrlib_path)) {
            show_error("QR Code library not found at: " . $this->qrlib_path);
        }

        require_once($this->qrlib_path);
    }

    /**
     * Generate QR Code PNG
     * @param string $text Text/URL to encode
     * @param string $outfile Output file path
     * @param string $level Error correction level (L, M, Q, H)
     * @param int $size Pixel size
     * @param int $margin Margin size
     */
    public function png($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 10, $margin = 2)
    {
        QRcode::png($text, $outfile, $level, $size, $margin);
    }

    /**
     * Generate QR Code as text
     */
    public function text($text, $outfile = false, $level = QR_ECLEVEL_L, $size = 10, $margin = 2)
    {
        return QRcode::text($text, $outfile, $level, $size, $margin);
    }
}
