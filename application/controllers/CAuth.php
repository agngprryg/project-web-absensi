<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CAuth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email',
            [
                'required' => 'Email wajib diisi.',
                'valid_email' => 'Format email tidak valid.'
            ]
        );

        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[6]',
            [
                'required' => 'Password wajib diisi.',
                'min_length' => 'Password harus memiliki minimal 6 karakter.'
            ]
        );

        if ($this->form_validation->run() == false) {
            $this->load->view('components/header');
            $this->load->view('pages/auth/login');
            $this->load->view('components/footer');
        } else {
            $this->_login();
        }
    }

    public function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($user) {
            if (password_verify($password, $user['password'])) {

                $karyawan = $this->db->get_where('data_karyawan', ['id_pengguna' => $user['id']])->row_array();
                $manager = $this->db->get_where('data_manager', ['id_pengguna' => $user['id']])->row_array();

                $data = [
                    'id_user'       => $user['id'],
                    'id_karyawan'   => $karyawan ? $karyawan['id'] : null,
                    'id_manager'    => $manager ? $manager['id'] : null,
                    'email'         => $user['email'],
                    'role'          => $user['role'],
                ];

                $this->session->set_userdata($data);
                if ($user['role'] == "karyawan") {
                    redirect('karyawan/dashboard');
                } elseif ($user['role'] == "manager") {
                    redirect('manager/dashboard');
                }
            } else {
                $this->session->set_flashdata('message', '<p class="text-sm text-red-500">
					password salah
		 			 </p>');
                redirect('CAuth');
            }
        } else {
            $this->session->set_flashdata('message', '<p class="text-sm text-red-500">
			email tidak terdaftar
		 	 </p>');
            redirect('CAuth');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[pengguna.email]');
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('components/header');
            $this->load->view('Pages/Auth/registrasi');
            $this->load->view('components/footer');
        } else {
            $data = [
                'email'        => $this->input->post('email'),
                'password'     => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
                'role'   => 'penduduk',
            ];
            $this->db->insert('pengguna', $data);
            $this->session->set_flashdata('message', '<p class="text-sm text-black">akun berhasil dibuat</p>');
            redirect('CAuth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('id_user');
        $this->session->unset_userdata('id_karyawan');
        $this->session->unset_userdata('id_manager');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');

        $this->session->set_flashdata('message', '<p class="text-sm text-red-500">Kamu berhasil logout</p>');
        redirect('CAuth');
    }
}
