<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MQrToken extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Generate token unik yang aman
     */
    private function generate_token()
    {
        return bin2hex(random_bytes(32));
    }

    /**
     * Generate QR Code baru
     * @return object|false
     */
    public function generate_qr()
    {
        // Expired semua token yang aktif
        $this->expired_all_tokens();

        // Generate token baru
        $token = $this->generate_token();
        $expires_at = date('Y-m-d H:i:s', strtotime('+5 minute'));
        $qr_filename = 'qr_' . time() . '_' . substr($token, 0, 10) . '.png';

        // Simpan ke database
        $data = array(
            'token' => $token,
            'qr_image' => $qr_filename,
            'expired_at' => $expires_at,
            'status' => 'active'
        );

        $this->db->insert('qr_tokens', $data);
        $insert_id = $this->db->insert_id();

        // Generate gambar QR
        $this->generate_qr_image($token, $qr_filename);

        return (object) array(
            'id' => $insert_id,
            'token' => $token,
            'qr_image' => $qr_filename,
            'expired_at' => $expires_at
        );
    }

    /**
     * Generate gambar QR menggunakan library PHP QR Code
     */
    private function generate_qr_image($token, $filename)
    {
        // Load library QR Code
        $this->load->library('phpqrcode');

        // URL yang akan di-scan (berisi token)
        $qr_content = base_url('karyawan/validasi_scan_qr?token=' . urlencode($token));

        // Path penyimpanan
        $path = FCPATH . 'assets/qrcode/' . $filename;

        // Buat folder jika belum ada
        if (!is_dir(FCPATH . 'assets/qrcode')) {
            mkdir(FCPATH . 'assets/qrcode', 0777, true);
        }

        // Generate QR Code
        QRcode::png($qr_content, $path, QR_ECLEVEL_L, 10, 2);
    }

    /**
     * Expired semua token yang aktif
     */
    public function expired_all_tokens()
    {
        $this->db->set('status', 'expired');
        $this->db->where('status', 'active');
        $this->db->update('qr_tokens');
    }

    /**
     * Get QR aktif terbaru
     */
    public function get_active_qr()
    {
        $this->db->where('status', 'active');
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get('qr_tokens')->row();
    }

    /**
     * Validasi token QR
     * @param string $token
     * @return object|false
     */
    public function validasi_token($token)
    {
        $now = date('Y-m-d H:i:s');

        $this->db->where('token', $token);
        $this->db->where('status', 'active');
        $this->db->where('expired_at >', $now);
        return $this->db->get('qr_tokens')->row();
    }

    /**
     * Hapus QR lama (cleanup)
     */
    public function cleanup_old_qr($days = 7)
    {
        $date_limit = date('Y-m-d H:i:s', strtotime("-$days days"));
        $this->db->where('created_at <', $date_limit);
        $this->db->where('status', 'expired');
        $qrs = $this->db->get('qr_tokens')->result();

        foreach ($qrs as $qr) {
            // Hapus file gambar
            $file_path = FCPATH . 'assets/qrcode/' . $qr->qr_image;
            if (file_exists($file_path)) {
                unlink($file_path);
            }
        }

        $this->db->where('created_at <', $date_limit);
        $this->db->where('status', 'expired');
        return $this->db->delete('qr_tokens');
    }
}
