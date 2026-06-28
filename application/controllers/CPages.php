<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CPages extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MKaryawan');
        $this->load->model('MManager');
    }

    public function guest()
    {
        $this->load->view('components/header.php');
        $this->load->view('components/navbar.php');
        $this->load->view('pages/guest/beranda.php');
        // $this->load->view('components/footer_guest.php');
    }

    public function manager()
    {
        $data['total_karyawan'] = $this->MManager->count_all('data_karyawan');
        $data['total_cuti'] = $this->MManager->count_all('data_cuti');
        $data['total_kehadiran'] = $this->MManager->count_all('data_kehadiran');
        $data['total_gaji'] = $this->MManager->get_total_gaji_dibayar();
        $data['data_kinerja']  = $this->MManager->get_data_kinerja_with_karyawan();

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/dashboard/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function karyawan()
    {
        $id_karyawan = $this->session->userdata('id_karyawan');
        $data['karyawan'] = $this->MKaryawan->get_by_id('data_karyawan', $id_karyawan);
        $data['kehadiran_hari_ini'] = $this->MKaryawan->sudah_check_in($id_karyawan);
        $data['riwayat'] = $this->MKaryawan->get_riwayat($id_karyawan);
        $data['kinerja'] = $this->MKaryawan->get_kinerja($id_karyawan);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_karyawan.php');
        $this->load->view('pages/karyawan/dashboard/index.php', $data);
        $this->load->view('components/footer.php');
    }
}
