<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
	}

	public function dashboard()
	{
		$data = [
			'title' => 'Dashboard User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'artikel_count' => $this->db->get('articles')->num_rows(),
			'payment_count' => $this->db->get('payments')->num_rows(),
			'user_count' => $this->db->get('users')->num_rows(),
			'webinar_count' => $this->db->get('webinars')->num_rows(),
			'new_user' => $this->db->order_by('id','DESC')->get('users'),
			'new_webinars' => $this->db->order_by('id','DESC')->get('webinars')
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/dashboard', $data);
		$this->load->view('template/user/footer');
	}

	public function my_profile()
	{
		$data = [
			'title' => 'Profile Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

		];

		// Validation
		$this->form_validation->set_rules('full_name','Full Name','required',[
			'required' => 'Nama lengkap harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/user/header', $data);
			$this->load->view('pages/user/my_profile');
			$this->load->view('template/user/footer');
		}else{
			$this->_myprofile();
		}
	}

	// My Profile Update
	public function _myprofile()
	{
		$this->User_model->change_profile();
	}

	// Change Password
	public function change_password()
	{
		$data = [
			'title' => 'Profile Admin',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),
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
			$this->load->view('template/user/header', $data);
			$this->load->view('pages/user/my_profile');
			$this->load->view('template/user/footer');
		}else{
			$this->User_model->change_password();
		}
	}

	public function time_management()
	{
		$data = [
			'title' => 'Time Management User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/time_management/list');
		$this->load->view('template/user/footer');
	}

	public function time_management_list($aplikasi)
	{
		$data = [
			'title' => 'Time Management List User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'aplikasi' => $aplikasi,
			'time_managements' => $this->db->where('user_id', $this->session->userdata('id'))->get('time_management')
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/time_management/aplikasi/list', $data);
		$this->load->view('template/user/footer');
	}

	public function time_management_create()
	{
		$data = [
			'title' => 'Create Time Management User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),
		];

		// Validation
		$this->form_validation->set_rules('batas_penggunaan','Batas penggunaan','required',[
			'required' => 'Batas penggunaan harus diisi!'
		]);

		$this->form_validation->set_rules('periode','Periode','required',[
			'required' => 'Periode harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/user/header', $data);
			$this->load->view('pages/user/time_management/aplikasi/create');
			$this->load->view('template/user/footer');
		}else{
			$this->User_model->time_management_create();
		}
	}

	public function time_management_delete($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('time_management');
		$this->session->set_flashdata('time_msg', '<div class="alert alert-success" role="alert">Berhasil menghapus schedule!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		return redirect('user/time-management');
	}

	public function webinar()
	{
		$data = [
			'title' => 'Webinar User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'webinars' => $this->db->order_by('id','DESC')->get('webinars')
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/webinar/list', $data);
		$this->load->view('template/user/footer');
	}

	public function webinar_detail($url)
	{
		$data = [
			'title' => 'Webinar Detail User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'webinar' => $this->db->get_where('webinars', ['url' => $url])->row_array(),
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/webinar/detail', $data);
		$this->load->view('template/user/footer');
	}

	public function payment_view()
	{
		$data = [
			'title' => 'Payment User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/payment');
		$this->load->view('template/user/footer');
	}

	public function payment($url)
	{
		$this->User_model->pay($url);
	}

	public function artikel()
	{
		$data = [
			'title' => 'Artikel User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'articles' => $this->db->order_by('id','DESC')->get('articles')
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/artikel/list', $data);
		$this->load->view('template/user/footer');
	}

	public function artikel_detail($url)
	{
		$data = [
			'title' => 'Artikel Detail User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'artikel' => $this->db->get_where('articles', ['url' => $url])->row_array(),
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/artikel/detail', $data);
		$this->load->view('template/user/footer');
	}

	public function purchase()
	{
		$data = [
			'title' => 'Histori Pembelian Webinar User',
			'user' => $this->db->get_where('users', ['email' => $this->session->userdata('email')])->row_array(),
			'payments' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
			'payment_notif' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments')->num_rows(),

			'purchase' => $this->db->where('name_user', $this->session->userdata('full_name'))->get('payments'),
		];

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/purchase', $data);
		$this->load->view('template/user/footer');
	}
}