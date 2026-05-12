<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataGaji extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data_gaji']  = $this->MManager->get_data_gaji_with_karyawan();

        // header('Content-Type:application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-gaji/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function create()
    {
        $data['data_karyawan'] = $this->MManager->get_all('data_karyawan');

        // header('Content-Type:application/json');
        // echo json_encode($data_karyawan);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-gaji/create.php', $data);
        $this->load->view('components/footer.php');
    }

    public function store()
    {
        $data_gaji = [
            'id_karyawan'   => $this->input->post('id_karyawan'),
            'bulan'         => $this->input->post('bulan'),
            'gaji_pokok'    => $this->input->post('gaji_pokok'),
            'tunjangan'     => $this->input->post('tunjangan'),
            'potongan'      => $this->input->post('potongan'),
            'total_gaji'    => $this->input->post('total_gaji'),
            'status'        => 'dibayar',
        ];
        $this->MManager->store('data_gaji', $data_gaji);
        redirect('manager/data-gaji');
    }

    public function edit($id)
    {
        $data['gaji']  = $this->MManager->get_by_id('data_gaji', $id);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-gaji/edit.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update($id)
    {
        $data_gaji = [
            'id_karyawan'   => $this->input->post('id_karyawan'),
            'bulan'         => $this->input->post('bulan'),
            'gaji_pokok'    => $this->input->post('gaji_pokok'),
            'tunjangan'     => $this->input->post('tunjangan'),
            'potongan'      => $this->input->post('potongan'),
            'total_gaji'    => $this->input->post('total_gaji'),
            'status'        => 'dibayar',
        ];

        $this->MManager->update('data_gaji', $data_gaji, $id);
        redirect('manager/data-gaji');
    }


    public function delete($id)
    {
        $this->MManager->delete('data_gaji', $id);
        redirect('manager/data-gaji');
    }
}
