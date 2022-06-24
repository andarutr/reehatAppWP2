<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
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

	// Backend Login
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
				$this->session->set_flashdata('login_msg', '<div class="alert alert-danger" role="alert">Invalid email or password!</div>');
				return redirect()->back();
			}
		}else{
			$this->session->set_flashdata('login_msg', '<div class="alert alert-danger" role="alert">Invalid email or password!</div>');
			return redirect()->back();
		}
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

	// LOGOUT
	public function logout()
	{
		$this->session->unset_userdata('full_name');
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('picture');
		$this->session->unset_userdata('role_id');

		$this->session->set_flashdata('logout_msg', '<div class="alert alert-success" role="alert">You have been Logout!</div>');
		return redirect('/');
	}
}
