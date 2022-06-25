<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public function change_profile()
	{
		$data = [
			'full_name' => $this->input->post('full_name'), 
			'updated_at' => date('d F Y')
		];
		
		$user = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$this->db->where('email', $user['email']);
		$this->db->update('users', $data);

		$this->session->set_flashdata('success_msg', '<div class="alert alert-success" role="alert">Success Updated!</div>');
		return redirect('user/my-profile');
	}

	public function change_password()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$old_password = $this->input->post('old_password');
		$new_password = $this->input->post('new_password');

		if(!password_verify($old_password, $data['user']['password']))
		{
			$this->session->set_flashdata('change_password_failed', '<div class="alert alert-danger" role="alert">Current password is wrong!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('user/my-profile');
		}else{
			if($old_password == $new_password)
			{
				$this->session->set_flashdata('change_password_failed', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('user/my-profile');
			}else{
				// Hash Password
				$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
				
				$this->db->set('password', $password_hash);
				$this->db->where('email', $this->session->userdata('email'));
				$this->db->update('users');

				$this->session->set_flashdata('success_password', '<div class="alert alert-success" role="alert">Password has been Changed!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('user/my-profile');
			}
		}
	}

	public function time_management_create()
	{
		$data = [
			'user_id' => $this->session->userdata('id'),
			'aplikasi' => $this->input->post('aplikasi'),
			'batas_penggunaan' => $this->input->post('batas_penggunaan'),
			'periode' => $this->input->post('periode'),
			'updated_at' => date('d F Y'),
			'created_at' => date('d F Y'),
		];

		$this->db->insert('time_management', $data);
		$this->session->set_flashdata('time_msg', '<div class="alert alert-success" role="alert">Berhasil menambahkan schedule!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		return redirect('user/time-management');
	}

	public function pay($url)
	{
		$webinar = $this->db->get_where('webinars', ['url' => $url])->row_array();

		$data = [
			'user_id' => $this->session->userdata('id'),
			'webinar' => $webinar['title'],
			'cost' => $webinar['cost'],
			'name_user' => $this->session->userdata('full_name'),
			'picture_user' => $this->session->userdata('picture'),
			'status' => 'Belum Bayar',
			'url' => $webinar['url'],
			'updated_at' => date('d F Y'),
			'created_at' => date('d F Y'),
		];
		$this->db->insert('payments', $data);
		$this->session->set_flashdata('pay_msg', '<div class="alert alert-success" role="alert">Berhasil melakukan checkout webinar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		return redirect('user/pembayaran');
	}
}