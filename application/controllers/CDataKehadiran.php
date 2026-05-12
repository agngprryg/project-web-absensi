<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataKehadiran extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['harian']   = $this->MManager->get_kehadiran_harian();
        $data['mingguan'] = $this->MManager->get_kehadiran_mingguan();
        $data['bulanan']  = $this->MManager->get_kehadiran_bulanan();

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-kehadiran/index.php', $data);
        $this->load->view('components/footer.php');
    }
}
