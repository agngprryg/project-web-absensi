<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataLowongan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data_lowongan']  = $this->MManager->get_all('data_lowongan');

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-lowongan/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function create()
    {
        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-lowongan/create.php');
        $this->load->view('components/footer.php');
    }

    public function store()
    {
        $data_lowongan = [
            'posisi'             => $this->input->post('posisi'),
            'departemen'         => $this->input->post('departemen'),
            'deskripsi'          => $this->input->post('deskripsi'),
            'kualifikasi'        => $this->input->post('kualifikasi'),
            'lokasi_penempatan'  => $this->input->post('lokasi_penempatan'),
            'tanggal_dibuka'     => $this->input->post('tanggal_dibuka'),
            'tanggal_ditutup'    => $this->input->post('tanggal_ditutup'),
            'status_kerja'       => $this->input->post('status_kerja'),
            'status'             => 'dibuka',
        ];
        $this->MManager->store('data_lowongan', $data_lowongan);

        redirect('manager/data-lowongan');
    }

    public function edit($id)
    {
        $data['data_lowongan']  = $this->MManager->get_by_id('data_lowongan', $id);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-lowongan/edit.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update($id)
    {
        $data_lowongan = [
            'posisi'             => $this->input->post('posisi'),
            'departemen'         => $this->input->post('departemen'),
            'deskripsi'          => $this->input->post('deskripsi'),
            'kualifikasi'        => $this->input->post('kualifikasi'),
            'lokasi_penempatan'  => $this->input->post('lokasi_penempatan'),
            'tanggal_dibuka'     => $this->input->post('tanggal_dibuka'),
            'tanggal_ditutup'    => $this->input->post('tanggal_ditutup'),
            'status_kerja'       => $this->input->post('status_kerja'),
            'status'             => $this->input->post('status'),
        ];

        $this->MManager->update('data_lowongan', $data_lowongan, $id);
        redirect('manager/data-lowongan');
    }

    public function delete($id)
    {
        $this->MManager->delete('data_lowongan', $id);
        redirect('manager/data-lowongan');
    }
}
