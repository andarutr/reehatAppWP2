<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	// View Login Admin
	public function login_admin()
	{
		$data['title'] = 'Silahkan Login';

		// Validation
		$this->form_validation->set_rules('email','Email','required',[
			'required' => 'Email harus diisi!'
		]);
		
		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/auth/header', $data);
			$this->load->view('pages/auth/admin/login');
			$this->load->view('template/auth/footer');
		}else{
			$this->_login();
		}
	}

	public function login_user()
	{
		$data['title'] = 'Silahkan Login';

		// Validation
		$this->form_validation->set_rules('email','Email','required',[
			'required' => 'Email harus diisi!'
		]);
		
		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password harus diisi!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/auth/header', $data);
			$this->load->view('pages/auth/user/login');
			$this->load->view('template/auth/footer');
		}else{
			$this->_login();
		}
	}

	public function register_user()
	{
		$data['title'] = 'Silahkan Registrasi Terlebih Dahulu';

		// Validation
		$this->form_validation->set_rules('full_name','Nama lengkap','required',[
			'required' => 'Nama lengkap harus diisi!'
		]);

		$this->form_validation->set_rules('email','Email','required',[
			'required' => 'Email harus diisi!'
		]);

		$this->form_validation->set_rules('password','Password','required',[
			'required' => 'Password harus diisi!'
		]);

		$this->form_validation->set_rules('confirm_password','Konfirmasi password','required|matches[password]',[
			'required' => 'Konfirmasi password harus diisi!',
			'matches' => 'Konfirmasi password tidak sama!'
		]);

		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('template/auth/header', $data);
			$this->load->view('pages/auth/user/register');
			$this->load->view('template/auth/footer');
		}else{
			$this->Auth_model->register_user();
		}
	}

	// LOGIN
	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$user = $this->db->get_where('users', ['email' => $email])->row_array();

		if($user)
		{
			if(password_verify($password, $user['password']))
			{
				$data = [
					'id' => $user['id'],
					'full_name' => $user['full_name'],
					'email' => $user['email'],
					'picture' => $user['picture'],
					'role_id' => $user['role_id'],
				];

				// Save Session
				$this->session->set_userdata($data);

				if($user['role_id'] == 1)
				{
					return redirect('admin/dashboard');
				}

				elseif($user['role_id'] == 2)
				{
					return redirect('user/dashboard');
				}
			}else{
				$this->session->set_flashdata('auth_msg', '<div class="alert alert-danger" role="alert">Invalid email or password!</div>');
				return redirect()->back();
			}
		}else{
			$this->session->set_flashdata('auth_msg', '<div class="alert alert-danger" role="alert">Invalid email or password!</div>');
			return redirect()->back();
		}
	}

	// LOGOUT
	public function logout()
	{
		$this->session->unset_userdata('id');
		$this->session->unset_userdata('full_name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('picture');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('auth_msg', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
		return redirect('/');
	}
}
