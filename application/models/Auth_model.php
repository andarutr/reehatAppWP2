<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {
	public function register_user()
	{
		$data = [
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'picture' => 'default.png',
			'role_id' => 2,
			'updated_at' => date('d F Y'),
			'created_at' => date('d F Y'),
		];

		$this->db->insert('users', $data);
		$this->session->set_flashdata('auth_msg', '<div class="alert alert-success" role="alert">Berhasil registrasi akun!</div>');
		redirect('auth/login/pengguna');
	}
}