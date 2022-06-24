<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}

	public function dashboard()
	{
		$data= [
			'title' => 'Dashboard Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),

			'artikel_count' => $this->db->get('articles')->num_rows(),
			'payment_count' => $this->db->get('payments')->num_rows(),
			'user_count' => $this->db->get('users')->num_rows(),
			'webinar_count' => $this->db->get('webinars')->num_rows(),
			'new_user' => $this->db->order_by('id','DESC')->get('users'),
			'new_webinars' => $this->db->order_by('id','DESC')->get('webinars')
		];

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/dashboard', $data);
		$this->load->view('template/admin/footer');
	}

	public function my_profile()
	{
		$data = [
			'title' => 'Profile Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
		];

		// Validation
		$this->form_validation->set_rules('full_name','Full Name','required',[
			'required' => 'Nama lengkap harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/my_profile');
			$this->load->view('template/admin/footer');
		}else{
			$this->_myprofile();
		}
	}

	// My Profile Update
	public function _myprofile()
	{
		$this->Admin_model->change_profile();
	}

	// Change Password
	public function change_password()
	{
		$data = [
			'title' => 'Profile Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
		];

		// Validation
		$this->form_validation->set_rules('old_password','Password Lama','required',[
			'required' => 'Password lama harus diisi!'
		]);

		$this->form_validation->set_rules('new_password','Password baru','required',[
			'required' => 'Password baru harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/my_profile');
			$this->load->view('template/admin/footer');
		}else{
			$this->Admin_model->change_password();
		}
	}

	public function webinar()
	{
		$data = [
			'title' => 'List Webinar Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'webinars' => $this->db->order_by('id','DESC')->get('webinars')
		];

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/webinar/list', $data);
		$this->load->view('template/admin/footer');
	}

	public function webinar_create()
	{
		$data = [
			'title' => 'Membuat Webinar Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
		];

		// Validation
		$this->form_validation->set_rules('title','Judul','required',[
			'required' => 'Judul harus diisi!'
		]);

		$this->form_validation->set_rules('mentor','Mentor','required',[
			'required' => 'Mentor harus diisi!'
		]);

		$this->form_validation->set_rules('cost','Harga','required',[
			'required' => 'Harga harus diisi!'
		]);
		
		$this->form_validation->set_rules('video_url','Video Url','required',[
			'required' => 'Video Url harus diisi!'
		]);

		$this->form_validation->set_rules('description','Deskripsi','required',[
			'required' => 'Deskripsi harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/webinar/create');
			$this->load->view('template/admin/footer');
		}else{
			$this->Admin_model->webinar_create();
		}
	}

	public function webinar_edit($id)
	{
		$data = [
			'title' => 'Memperbarui Webinar Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'webinar' => $this->db->get_where('webinars', ['id' => $id])->row_array()
		];

		// Validation
		$this->form_validation->set_rules('title','Judul','required',[
			'required' => 'Judul harus diisi!'
		]);

		$this->form_validation->set_rules('mentor','Mentor','required',[
			'required' => 'Mentor harus diisi!'
		]);

		$this->form_validation->set_rules('cost','Harga','required',[
			'required' => 'Harga harus diisi!'
		]);
		
		$this->form_validation->set_rules('video_url','Video Url','required',[
			'required' => 'Video Url harus diisi!'
		]);

		$this->form_validation->set_rules('description','Deskripsi','required',[
			'required' => 'Deskripsi harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/webinar/edit', $data);
			$this->load->view('template/admin/footer');
		}else{
			$this->Admin_model->webinar_edit($id);
		}
	}

	public function webinar_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('webinars');

		$this->session->set_flashdata('webinar_msg', '<div class="alert alert-success" role="alert">Berhasil menghapus webinar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/webinar');
	}

	public function artikel()
	{
		$data = [
			'title' => 'List Artikel Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'articles' => $this->db->order_by('id','DESC')->get('articles')
		];

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/artikel/list', $data);
		$this->load->view('template/admin/footer');
	}

	public function artikel_create()
	{
		$data = [
			'title' => 'Membuat Artikel Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
		];

		// Validation
		$this->form_validation->set_rules('title','Judul','required',[
			'required' => 'Judul harus diisi!'
		]);

		$this->form_validation->set_rules('description','Deskripsi','required',[
			'required' => 'Deskripsi harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/artikel/create');
			$this->load->view('template/admin/footer');
		}else{
			$this->Admin_model->artikel_create();
		}
	}

	public function artikel_edit($id)
	{
		$data = [
			'title' => 'Memperbarui Artikel Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'artikel' => $this->db->get_where('articles', ['id' => $id])->row_array()
		];

		// Validation
		$this->form_validation->set_rules('title','Judul','required',[
			'required' => 'Judul harus diisi!'
		]);

		$this->form_validation->set_rules('description','Deskripsi','required',[
			'required' => 'Deskripsi harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/admin/header', $data);
			$this->load->view('pages/admin/artikel/edit', $data);
			$this->load->view('template/admin/footer');
		}else{
			$this->Admin_model->artikel_edit($id);
		}
	}

	public function artikel_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('articles');

		$this->session->set_flashdata('artikel_msg', '<div class="alert alert-success" role="alert">Berhasil menghapus artikel!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/artikel');
	}

	public function pembayaran()
	{
		$data = [
			'title' => 'List pembayaran Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->order_by('id','DESC')->get('payments')
		];

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/pembayaran', $data);
		$this->load->view('template/admin/footer');
	}

	public function payment_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('payments');

		$this->session->set_flashdata('payment_msg', '<div class="alert alert-success" role="alert">Berhasil menghapus pembayaran!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/pembayaran');
	}
}
