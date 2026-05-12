<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CDataKaryawan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('MManager');
        $this->load->library('upload');
    }

    public function index()
    {
        $data['data_karyawan']  = $this->MManager->get_all('data_karyawan');

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-karyawan/index.php', $data);
        $this->load->view('components/footer.php');
    }

    public function create()
    {
        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-karyawan/create.php');
        $this->load->view('components/footer.php');
    }

    public function store()
    {
        $data_pengguna = [
            'email'         => $this->input->post('email'),
            'password'      => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'role'          => 'karyawan',
        ];
        $id_pengguna =  $this->MManager->store('pengguna', $data_pengguna);

        $config['upload_path']   = './uploads/karyawan';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048;
        $config['encrypt_name']  = TRUE;

        $this->upload->initialize($config);

        if (!$this->upload->do_upload('foto')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('store_form', $error);
        } else {
            $uploadData = $this->upload->data();
            $foto = $uploadData['file_name'];
        }

        $data_karyawan = [
            'id_pengguna'       => $id_pengguna,
            'nama'              => $this->input->post('nama'),
            'no_telepon'        => $this->input->post('no_telepon'),
            'alamat'            => $this->input->post('alamat'),
            'jabatan'           => $this->input->post('jabatan'),
            'tanggal_masuk'     => $this->input->post('tanggal_masuk'),
            'status_kerja'      => $this->input->post('status_kerja'),
            'status_kerja'      => $this->input->post('status_kerja'),
            'foto'              => $foto,
        ];
        $this->MManager->store('data_karyawan', $data_karyawan);

        redirect('manager/data-karyawan');
    }

    public function edit($id)
    {
        $data['data_karyawan']  = $this->MManager->get_by_id('data_karyawan', $id);


        // header('Content-Type: application/json');
        // echo json_encode($data);

        $this->load->view('components/header.php');
        $this->load->view('components/sidebar_manager.php');
        $this->load->view('pages/manager/data-karyawan/edit.php', $data);
        $this->load->view('components/footer.php');
    }

    public function update($id)
    {
        // Ambil data lama dari tabel yang benar
        $data_karyawan = $this->MManager->get_by_id('data_karyawan', $id);
        $foto_lama = $data_karyawan->foto;

        // Konfigurasi upload
        $config['upload_path']   = './uploads/karyawan';
        $config['allowed_types'] = 'jpg|jpeg|png|gif';
        $config['max_size']      = 2048; // 2MB
        $config['encrypt_name']  = TRUE;

        $this->load->library('upload'); // pastikan upload library dimuat
        $this->upload->initialize($config);

        // Cek apakah ada file baru yang diupload
        if (!empty($_FILES['foto']['name'])) {
            if ($this->upload->do_upload('foto')) {
                $uploadData = $this->upload->data();
                $foto_baru = $uploadData['file_name'];

                // Hapus foto lama jika ada dan filenya benar-benar ada
                if (!empty($foto_lama) && file_exists('./uploads/karyawan/' . $foto_lama)) {
                    unlink('./uploads/karyawan/' . $foto_lama);
                }
            } else {
                // Upload gagal, kembali ke form dengan error
                $data['error'] = $this->upload->display_errors();
                $data['data_karyawan'] = $data_karyawan; // untuk tetap tampilkan data lama
                $this->load->view('manager/form_edit_karyawan', $data); // sesuaikan nama view
                return;
            }
        } else {
            $foto_baru = $foto_lama;
        }

        // Ambil data dari input
        $data_karyawan_update = [
            'nama'         => $this->input->post('nama'),
            'no_telepon'   => $this->input->post('no_telepon'),
            'alamat'       => $this->input->post('alamat'),
            'jabatan'      => $this->input->post('jabatan'),
            'status_kerja' => $this->input->post('status_kerja'),
            'foto'         => $foto_baru,
        ];

        // Update ke database
        $this->MManager->update('data_karyawan', $data_karyawan_update, $id);

        // Redirect ke halaman list
        redirect('manager/data-karyawan');
    }

    public function delete($id)
    {
        $this->MManager->delete('data_karyawan', $id);
        redirect('manager/data-karyawan');
    }
}
