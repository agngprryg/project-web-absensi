<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CKaryawan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKaryawan');

        // if (!$this->session->userdata('id_karyawan')) {
        //     $this->session->set_flashdata('message', 'Kamu harus login dulu');
        //     redirect('CAuth');
        // }
    }

    public function check_in()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');

        // Cek apakah sudah check-in hari ini
        if ($this->MKaryawan->sudah_check_in($id_karyawan)) {
            $this->session->set_flashdata('error', 'Anda sudah melakukan check-in hari ini');
            redirect('kehadiran');
        }

        $data = array(
            'id_karyawan' => $id_karyawan,
            'tanggal' => date('Y-m-d'),
            'jam_masuk' => date('H:i:s'),
            'status' => 'hadir'
        );

        if ($this->MKaryawan->check_in($data)) {
            $this->session->set_flashdata('success', 'Check-in berhasil dicatat');
        } else {
            $this->session->set_flashdata('error', 'Gagal melakukan check-in');
        }

        redirect('karyawan/dashboard');
    }

    public function check_out()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $kehadiran = $this->MKaryawan->sudah_check_in($id_karyawan);

        // Cek apakah sudah check-in
        if (!$kehadiran) {
            $this->session->set_flashdata('error', 'Anda belum melakukan check-in hari ini');
            redirect('karyawan/dashboard');
        }

        // Cek apakah sudah check-out
        if (!empty($kehadiran->jam_keluar)) {
            $this->session->set_flashdata('error', 'Anda sudah melakukan check-out hari ini');
            redirect('karyawan/dashboard');
        }

        $data = array(
            'jam_keluar' => date('H:i:s')
        );

        if ($this->MKaryawan->check_out($id_karyawan, $data)) {
            $this->session->set_flashdata('success', 'Check-out berhasil dicatat');
        } else {
            $this->session->set_flashdata('error', 'Gagal melakukan check-out');
        }

        redirect('karyawan/dashboard');
    }

    public function ajukan_cuti()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $data['data_cuti'] = $this->MKaryawan->get_data_cuti_by_id($id_karyawan);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/ajukan-cuti/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function ajukan_cuti_create()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/ajukan-cuti/create.php');
        $this->load->view('components/footer.php');
    }

    public function ajukan_cuti_store()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');

        $data_cuti = [
            'id_karyawan'       => $id_karyawan,
            'tanggal_mulai'     => $this->input->post('tanggal_mulai'),
            'tanggal_selesai'   => $this->input->post('tanggal_selesai'),
            'alasan'            => $this->input->post('alasan'),
            'status'            => 'diajukan',
        ];

        $this->MKaryawan->store('data_cuti', $data_cuti);
        redirect('karyawan/ajukan-cuti');
    }

    public function slip_gaji()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $data['data_gaji'] = $this->MKaryawan->get_data_gaji_by_id($id_karyawan);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/slip-gaji/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function detail_slip_gaji()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $data['data_gaji'] = $this->MKaryawan->get_data_gaji_by_id($id_karyawan);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/slip-gaji/detail.php', $data);
        $this->load->view('components/footer.php');
    }

    public function scan_qrcode()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $karyawan = $this->db->get_where('data_karyawan', ['id' => $id_karyawan])->row();
        $kehadiran_hari_ini = $this->MKaryawan->sudah_check_in($id_karyawan);

        $data = array(
            'karyawan' => $karyawan,
            'kehadiran_hari_ini' => $kehadiran_hari_ini
        );

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/scan-qrcode/index.php', $data);
        $this->load->view('components/footer.php');
    }

    /**
     * API: Proses absensi via QR scan
     */
    public function api_proses_absen_qr()
    {
        $this->output->set_content_type('application/json');

        $token = $this->input->post('token');
        $id_karyawan = $this->session->userdata('id_karyawan');

        if (empty($token)) {
            echo json_encode(['success' => false, 'message' => 'Token tidak ditemukan!']);
            return;
        }

        $result = $this->MKaryawan->proses_absen_qr($token, $id_karyawan);
        echo json_encode($result);
    }

    /**
     * Validasi scan manual (fallback)
     */
    public function validasi_scan_qr()
    {
        $token = $this->input->get('token');

        if (empty($token)) {
            show_error('Token tidak valid', 400);
        }

        $id_karyawan = $this->session->userdata('id_karyawan');
        $result = $this->MKaryawan->proses_absen_qr($token, $id_karyawan);

        var_dump($result);
        die;

        if ($result['success']) {
            $this->session->set_flashdata('success', $result['message']);
        } else {
            $this->session->set_flashdata('error', $result['message']);
        }

        redirect('karyawan/scan-qrcode');
    }
}
