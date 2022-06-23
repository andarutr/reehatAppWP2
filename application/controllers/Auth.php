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
}
