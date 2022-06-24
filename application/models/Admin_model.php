<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {
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
		return redirect('admin/my-profile');
	}

	public function change_password()
	{
		$data['user'] = $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array();

		$old_password = $this->input->post('old_password');
		$new_password = $this->input->post('new_password');

		if(!password_verify($old_password, $data['user']['password']))
		{
			$this->session->set_flashdata('change_password_failed', '<div class="alert alert-danger" role="alert">Current password is wrong!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/my-profile');
		}else{
			if($old_password == $new_password)
			{
				$this->session->set_flashdata('change_password_failed', '<div class="alert alert-danger" role="alert">New Password cannot be the same as current password!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('admin/my-profile');
			}else{
				// Hash Password
				$password_hash = password_hash($new_password, PASSWORD_DEFAULT);
				
				$this->db->set('password', $password_hash);
				$this->db->where('email', $this->session->userdata('email'));
				$this->db->update('users');

				$this->session->set_flashdata('success_password', '<div class="alert alert-success" role="alert">Password has been Changed!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
				redirect('admin/my-profile');
			}
		}
	}

	public function webinar_create()
	{
		$config['upload_path'] = './assets/img/webinar/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 250;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('thumbnail')){
			$this->session->set_flashdata('error_create', 'Gagal input gambar!');
			redirect('admin/webinar/create');
		}else{
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'mentor' => $this->input->post('mentor'),
				'thumbnail' => $this->upload->data('client_name'),
				'cost' => $this->input->post('cost'),
				'video_url' => $this->input->post('video_url'),
				'url' => str_replace(' ','-', $this->input->post('title')),
				'updated_at' => date('d F Y'),
				'created_at' => date('d F Y'),
			];

			$this->db->insert('webinars', $data);
			$this->session->set_flashdata('webinar_msg', '<div class="alert alert-success" role="alert">Berhasil memperbarui webinar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/webinar');
		}
	}

	public function webinar_edit($id)
	{
		$data = [
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'mentor' => $this->input->post('mentor'),
			'cost' => $this->input->post('cost'),
			'video_url' => $this->input->post('video_url'),
			'url' => str_replace(' ','-', $this->input->post('title')),
			'updated_at' => date('d F Y'),
		];

		$this->db->where('id',$id);
		$this->db->update('webinars',$data);

		$this->session->set_flashdata('webinar_msg', '<div class="alert alert-success" role="alert">Berhasil memperbarui webinar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/webinar');
	}

	public function artikel_create()
	{
		$config['upload_path'] = './assets/img/artikel/';
		$config['allowed_types'] = 'jpg|png';
		$config['max_size'] = 250;
		$config['max_width'] = 1024;
		$config['max_height'] = 768;

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('picture')){
			$this->session->set_flashdata('error_create', 'Gagal input gambar!');
			redirect('admin/artikel/create');
		}else{
			$data = [
				'title' => $this->input->post('title'),
				'description' => $this->input->post('description'),
				'picture' => $this->upload->data('client_name'),
				'url' => str_replace(' ','-', $this->input->post('title')),
				'updated_at' => date('d F Y'),
				'created_at' => date('d F Y'),
			];

			$this->db->insert('articles', $data);
			$this->session->set_flashdata('artikel_msg', '<div class="alert alert-success" role="alert">Berhasil membuat artikel!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('admin/artikel');
		}
	}

	public function artikel_edit($id)
	{
		$data = [
			'title' => $this->input->post('title'),
			'description' => $this->input->post('description'),
			'url' => str_replace(' ','-', $this->input->post('title')),
			'updated_at' => date('d F Y'),
		];

		$this->db->where('id',$id);
		$this->db->update('articles',$data);

		$this->session->set_flashdata('artikel_msg', '<div class="alert alert-success" role="alert">Berhasil memperbarui artikel!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/artikel');
	}
}