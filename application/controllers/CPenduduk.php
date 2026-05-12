<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CPenduduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MPenduduk');
        $this->load->model('MAdmin');
        $this->load->library('upload');
    }

    public function overview()
    {
        if (!$this->session->userdata('role')) {
            $this->session->set_flashdata('message', 'Kamu harus login dulu');
            redirect('CAuth');
        }

        $data['total_pengaduan'] = $this->MAdmin->count_all('data_pengaduan');
        $data['total_pengajuan_surat'] = $this->MAdmin->count_all('data_surat');
        $data['total_umkm_terdaftar'] = $this->MAdmin->count_all('data_umkm');
        $data['total_bantuan'] = $this->MAdmin->count_all('data_bantuan');
        $data['total_pengaduan_per_bulan'] = $this->MAdmin->get_pengaduan_per_bulan();
        $data['data_pengaduan_terbaru'] = $this->MAdmin->get_pengaduan_terbaru();

        $this->load->view('components/header.php');
        $this->load->view('components/dashboard_header_penduduk.php');
        $this->load->view('components/dashboard_sidebar_penduduk.php');
        $this->load->view('pages/penduduk/dashboard/overview.php', $data);
        $this->load->view('components/dashboard_footer_penduduk.php');
        $this->load->view('components/footer.php');
    }

    public function pengajuan_surat()
    {
        if (!$this->session->userdata('role')) {
            $this->session->set_flashdata('message', 'Kamu harus login dulu');
            redirect('CAuth');
        }

        $this->load->view('components/header.php');
        $this->load->view('components/dashboard_header_penduduk.php');
        $this->load->view('components/dashboard_sidebar_penduduk.php');
        $this->load->view('pages/penduduk/dashboard/pengajuan_surat.php');
        $this->load->view('components/dashboard_footer_penduduk.php');
        $this->load->view('components/footer.php');
    }

    public function pengajuan_surat_store()
    {
        $config['upload_path']   = './uploads/surat';
        $config['allowed_types'] = 'pdf';
        $config['max_size']      = 5000;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('file_surat')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('store_form', $error);
        } else {
            $uploadData = $this->upload->data();
            $file_surat = $uploadData['file_name'];
        }

        $data = [
            'id_data_penduduk'           => $this->input->post('id_data_penduduk'),
            'jenis_surat'           => $this->input->post('jenis_surat'),
            'tanggal_pengajuan'     => date('Y-m-d'),
            'keterangan'            => $this->input->post('keterangan'),
            'file_surat'            => $file_surat,
            'status'                => 'Menunggu',
        ];
        $this->MPenduduk->store('data_surat', $data);
        redirect('dashboard/pengajuan-surat');
    }

    public function pengaduan()
    {
        if (!$this->session->userdata('role')) {
            $this->session->set_flashdata('message', 'Kamu harus login dulu');
            redirect('CAuth');
        }

        $this->load->view('components/header.php');
        $this->load->view('components/dashboard_header_penduduk.php');
        $this->load->view('components/dashboard_sidebar_penduduk.php');
        $this->load->view('pages/penduduk/dashboard/pengaduan.php');
        $this->load->view('components/dashboard_footer_penduduk.php');
        $this->load->view('components/footer.php');
    }

    public function pengaduan_store()
    {
        $config['upload_path']   = './uploads/pengaduan';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 5000;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('bukti_pendukung')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('store_form', $error);
        } else {
            $uploadData = $this->upload->data();
            $bukti_pendukung = $uploadData['file_name'];
        }

        $data = [
            'id_data_penduduk'      => $this->input->post('id_data_penduduk'),
            'judul'                 => $this->input->post('judul'),
            'keluhan'               => $this->input->post('keluhan'),
            'tanggal_pengaduan'     => date('Y-m-d'),
            'bukti_pendukung'       => $bukti_pendukung,
            'status'                => 'Menunggu'
        ];
        $this->MPenduduk->store('data_pengaduan', $data);
        redirect('dashboard/pengajuan-surat');
    }

    public function daftar_umkm()
    {
        if (!$this->session->userdata('role')) {
            $this->session->set_flashdata('message', 'Kamu harus login dulu');
            redirect('CAuth');
        }

        $this->load->view('components/header.php');
        $this->load->view('components/dashboard_header_penduduk.php');
        $this->load->view('components/dashboard_sidebar_penduduk.php');
        $this->load->view('pages/penduduk/dashboard/daftar_umkm.php');
        $this->load->view('components/dashboard_footer_penduduk.php');
        $this->load->view('components/footer.php');
    }

    public function daftar_umkm_store()
    {
        $config['upload_path']   = './uploads/umkm';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size']      = 5000;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto_usaha')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('store_form', $error);
        } else {
            $uploadData = $this->upload->data();
            $foto_usaha = $uploadData['file_name'];
        }

        $data = [
            'id_data_penduduk'  => $this->input->post('id_data_penduduk'),
            'nama_umkm'         => $this->input->post('nama_umkm'),
            'jenis_usaha'       => $this->input->post('jenis_usaha'),
            'alamat_usaha'      => $this->input->post('alamat_usaha'),
            'tahun_berdiri'     => $this->input->post('tahun_berdiri'),
            'deskripsi'         => $this->input->post('deskripsi'),
            'kontak'            => $this->input->post('kontak'),
            'foto_usaha'        => $foto_usaha,
            'status'            => $this->input->post('kontak'),
        ];
        $this->MPenduduk->store('data_umkm', $data);
        redirect('dashboard/daftar-umkm');
    }
}
