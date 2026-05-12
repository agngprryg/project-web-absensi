<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataKinerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data_kinerja']  = $this->MManager->get_data_kinerja_with_karyawan();

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-kinerja/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function create()
    {
        $data['data_karyawan'] = $this->MManager->get_all('data_karyawan');
        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-kinerja/create.php', $data);
        $this->load->view('components/footer.php');
    }

    public function store()
    {
        $data = [
            'id_karyawan'       => $this->input->post('id_karyawan'),
            'periode'           => $this->input->post('periode'),
            'nilai_kinerja'     => $this->input->post('nilai_kinerja'),
            'catatan'           => $this->input->post('catatan'),
        ];
        $this->MManager->store('data_kinerja', $data);
        redirect('manager/data-kinerja');
    }

    public function edit($id)
    {
        $data['data_kinerja']  = $this->MManager->get_data_kinerja_with_karyawan_by_id($id);
        $data['data_karyawan'] = $this->MManager->get_all('data_karyawan');

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-kinerja/edit.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update($id)
    {
        $data = [
            'id_karyawan'       => $this->input->post('id_karyawan'),
            'periode'           => $this->input->post('periode'),
            'nilai_kinerja'     => $this->input->post('nilai_kinerja'),
            'catatan'           => $this->input->post('catatan'),
        ];
        $this->MManager->update('data_kinerja', $data, $id);
        redirect('manager/data-kinerja');
    }

    public function delete($id)
    {
        $this->MManager->delete('data_kinerja', $id);
        redirect('manager/data-kinerja');
    }
}
