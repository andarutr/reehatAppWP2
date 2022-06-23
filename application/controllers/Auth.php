<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function login_admin()
	{
		$data['title'] = 'Silahkan Login';

		$this->load->view('template/auth/header', $data);
		$this->load->view('pages/auth/admin/login');
		$this->load->view('template/auth/footer');
	}

	public function login_user()
	{
		$data['title'] = 'Silahkan Login';

		$this->load->view('template/auth/header', $data);
		$this->load->view('pages/auth/user/login');
		$this->load->view('template/auth/footer');
	}

	public function register_user()
	{
		$data['title'] = 'Silahkan Registrasi Terlebih Dahulu';

		$this->load->view('template/auth/header', $data);
		$this->load->view('pages/auth/user/register');
		$this->load->view('template/auth/footer');
	}
}
