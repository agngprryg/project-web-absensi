<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataCuti extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
    }

    public function index()
    {
        $data['data_cuti']  = $this->MManager->get_data_cuti_with_karyawan();

        // header('Content-Type:application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-cuti/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function create()
    {
        $data['data_karyawan'] = $this->MManager->get_all('data_karyawan');

        // header('Content-Type:application/json');
        // echo json_encode($data_karyawan);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-cuti/create.php', $data);
        $this->load->view('components/footer.php');
    }

    public function store()
    {
        $data_cuti = [
            'id_karyawan'       => $this->input->post('id_karyawan'),
            'tanggal_mulai'     => $this->input->post('tanggal_mulai'),
            'tanggal_selesai'   => $this->input->post('tanggal_selesai'),
            'alasan'            => $this->input->post('alasan'),
            'status'            => $this->input->post('status'),
        ];
        $this->MManager->store('data_cuti', $data_cuti);
        redirect('manager/data-cuti');
    }

    public function edit($id)
    {
        $data['data_cuti']  = $this->MManager->get_data_cuti_with_karyawan_by_id($id);
        $data['data_karyawan'] = $this->MManager->get_all('data_karyawan');

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-cuti/edit.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update($id)
    {
        $data_cuti = [
            'id_karyawan'       => $this->input->post('id_karyawan'),
            'tanggal_mulai'     => $this->input->post('tanggal_mulai'),
            'tanggal_selesai'   => $this->input->post('tanggal_selesai'),
            'alasan'            => $this->input->post('alasan'),
            'status'            => $this->input->post('status'),
        ];

        $this->MManager->update('data_cuti', $data_cuti, $id);
        redirect('manager/data-cuti');
    }


    public function delete($id)
    {
        $this->MManager->delete('data_cuti', $id);
        redirect('manager/data-cuti');
    }
}
