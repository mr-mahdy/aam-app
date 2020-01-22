<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('email1', 'Email', 'required|trim|valid_email', [
			'required' => 'field email harus diisi',
			'valid_email' => 'email tidak valid'
		]);
		$this->form_validation->set_rules('password1', 'Password', 'required|trim', [
			'required' => 'field password harus diisi'
		]);

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Login gagal</div>');
			$this->session->set_flashdata('email1', form_error('email1', ' <small class="text-danger pl-3">', '    </small>'));
			$this->session->set_flashdata('password1', form_error('password1', ' <small class="text-danger pl-3">', '    </small>'));
			$this->session->set_flashdata('login', 'Login');
			redirect('home');
		} else {
			//validasi sukses
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email1');
		$password = $this->input->post('password1');

		$user = $this->db->get_where('user', ['email' => $email])->row_array();

		//user ada
		if ($user) {
			//jika usernya aktif
			if ($user['is_active'] == 1) {
				//cek password 
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email'],
						'role_id' => $user['role_id']
					];
					$this->session->set_userdata($data);
					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('login', 'Login');
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah</div>');
					redirect('home');
				}
			} else {
				$this->session->set_flashdata('login', 'Login');
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum aktif</div>');
				redirect('home');
			}
		} else {
			$this->session->set_flashdata('login', 'Login');
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar</div>');
			redirect('home');
		}
	}

	public function registration()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim', [
			'required' => 'field nama harus diisi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
			'is_unique' => 'email sudah terdaftar!',
			'required' => 'field email harus diisi',
			'valid_email' => 'email tidak valid'
		]);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[3]|matches[password2]', [
			'matches' => 'password tidak sama!',
			'min_length' => 'password terlalu pendek',
			'required' => 'field password harus diisi'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', [
			'matches' => 'password tidak sama!',
			'required' => 'field konfirmasi password harus diisi'
		]);

		if ($this->form_validation->run() == false) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun gagal dibuat</div>');
			$this->session->set_flashdata('nama', form_error('nama', ' <small class="text-danger pl-3">', '    </small>'));
			$this->session->set_flashdata('email', form_error('email', ' <small class="text-danger pl-3">', '    </small>'));
			$this->session->set_flashdata('password', form_error('password', ' <small class="text-danger pl-3">', '    </small>'));
			$this->session->set_flashdata('password2', form_error('password2', ' <small class="text-danger pl-3">', '    </small>'));
			redirect('home');
		} else {
			$data = [
				'name' => htmlspecialchars($this->input->post('nama', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'image' => 'default.jpg',
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => 1,
				'is_active' => 1,
				'date_created' => time()
			];

			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun anda sudah dibuat. silahkan login</div>');
			redirect('home');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('role_id');

		redirect('home');
	}

	public function blocked()
	{
		$this->load->view('auth/blocked');
	}
}
