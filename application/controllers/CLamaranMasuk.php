<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CLamaranMasuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['lamaran_masuk']  = $this->MManager->get_lamaran_masuk();

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/lamaran-masuk/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function detail($id)
    {
        $lamaran = $this->MManager->get_lamaran_detail($id);
        $id_pelamar = $lamaran->id_pelamar;
        $id_lowongan = $lamaran->id_lowongan;
        $data['lamaran'] = $this->MManager->get_lamaran_detail($id);
        $data['pelamar'] = $this->MManager->get_by_id('data_pelamar', $id_pelamar);
        $data['lowongan'] = $this->MManager->get_by_id('data_lowongan', $id_lowongan);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/lamaran-masuk/detail.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update_status($id)
    {

        $data = [
            'status'               => $this->input->post('status'),
            'catatan'              => $this->input->post('catatan'),
            'tanggal_update'       => date('Y-m-d H:i:s'),
        ];

        $this->MManager->update('lamaran', $data, $id);

        redirect('manager/lamaran-masuk');
    }
}
