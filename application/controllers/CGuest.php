<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CGuest extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MGuest');
        $this->load->library('upload');
    }

    public function lowongan()
    {
        $data['lowongan'] = $this->MGuest->get_all('data_lowongan');
        $data['total_lowongan'] = $this->MGuest->count_all('data_lowongan');

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/navbar.php');
        $this->load->view('pages/guest/lowongan.php', $data);
        $this->load->view('components/footer_guest.php');
    }

    public function detail_lowongan($id)
    {

        $data['lowongan'] = $this->MGuest->get_by_id('data_lowongan', $id);

        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/navbar.php');
        $this->load->view('pages/guest/detail_lowongan.php', $data);
        $this->load->view('components/footer_guest.php');
    }


    public function submit_lowongan()
    {

        $config['upload_path']   = './uploads/cv';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 10000;
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('cv_file')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('store_form', $error);
        } else {
            $uploadData = $this->upload->data();
            $cv_file = $uploadData['file_name'];
        }

        $data_pelamar = [
            'nama_lengkap'          => $this->input->post('nama_lengkap'),
            'email'                 => $this->input->post('email'),
            'no_hp'                 => $this->input->post('no_hp'),
            'alamat'                => $this->input->post('alamat'),
            'pendidikan_terakhir'   => $this->input->post('pendidikan_terakhir'),
            'pengalaman_kerja'      => $this->input->post('pengalaman_kerja'),
            'cv_file'               => $cv_file,
            'created_at'            => date('Y-m-d H:i:s'),
            'updated_at'            => date('Y-m-d H:i:s')
        ];
        $id_pelamar =  $this->MGuest->store('data_pelamar', $data_pelamar);

        $data_lamaran = [
            'id_pelamar'    => $id_pelamar,
            'id_lowongan'   => $this->input->post('id_lowongan'),
            'status'        => 'dikirim'
        ];
        $this->MGuest->store('lamaran', $data_lamaran);
        $this->session->set_flashdata('success', 'Data lamaran berhasil dikirim!');
        redirect('lowongan');
    }
}
