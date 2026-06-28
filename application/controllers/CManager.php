<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CManager extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->model('MQrToken');

        // Cek login dan role manager
        if (!$this->session->userdata('id_user') || $this->session->userdata('role') != 'manager') {
            $this->session->set_flashdata('message', 'Kamu harus login sebagai manager');
            redirect('CAuth');
        }
    }

    /**
     * Dashboard Manager (redirect ke QR)
     */
    public function dashboard()
    {
        redirect('manager/qrcode');
    }

    /**
     * Halaman QR Code Manager
     */
    public function qrcode()
    {
        // Generate QR baru setiap load halaman jika tidak ada QR aktif
        $qr_aktif = $this->MManager->get_active_qr();

        if (!$qr_aktif) {
            $qr_aktif = $this->MManager->generate_qr_absensi();
        }

        $data = array(
            'qr_data' => $qr_aktif,
            'expired_time' => strtotime($qr_aktif->expired_at) * 1000, // Convert ke millisecond untuk JS
            'riwayat_qr' => $this->MManager->get_all_qr_tokens(10)
        );

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/qrcode/index.php', $data);
        $this->load->view('components/footer.php');
    }

    /**
     * API: Generate QR baru via AJAX
     */
    public function api_generate_qr()
    {
        $qr_baru = $this->MManager->generate_qr_absensi();

        if ($qr_baru) {
            $response = array(
                'success' => true,
                'qr_image' => base_url('assets/qrcode/' . $qr_baru->qr_image),
                'expired_at' => $qr_baru->expired_at,
                'expired_timestamp' => strtotime($qr_baru->expired_at) * 1000
            );
        } else {
            $response = array('success' => false, 'message' => 'Gagal generate QR');
        }

        echo json_encode($response);
    }

    /**
     * API: Get QR aktif
     */
    public function api_get_active_qr()
    {
        $qr_aktif = $this->MManager->get_active_qr();

        if ($qr_aktif) {
            $response = array(
                'success' => true,
                'qr_image' => base_url('assets/qrcode/' . $qr_aktif->qr_image),
                'expired_at' => $qr_aktif->expired_at,
                'expired_timestamp' => strtotime($qr_aktif->expired_at) * 1000
            );
        } else {
            $response = array('success' => false, 'message' => 'Tidak ada QR aktif');
        }

        echo json_encode($response);
    }

    /**
     * Cleanup QR lama
     */
    public function cleanup_qr()
    {
        $deleted = $this->MQrToken->cleanup_old_qr(7);
        $this->session->set_flashdata('success', "Berhasil membersihkan $deleted QR lama");
        redirect('manager/qrcode');
    }
}
