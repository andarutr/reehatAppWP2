<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function dashboard()
	{
		$data['title'] = 'Dashboard User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/dashboard');
		$this->load->view('template/user/footer');
	}

	public function my_profile()
	{
		$data['title'] = 'Profile User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/my_profile');
		$this->load->view('template/user/footer');
	}

	public function time_management()
	{
		$data['title'] = 'Time Management User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/time_management/list');
		$this->load->view('template/user/footer');
	}

	public function time_management_list()
	{
		$data['title'] = 'Time Management Instagram User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/time_management/aplikasi/list');
		$this->load->view('template/user/footer');
	}

	public function time_management_create()
	{
		$data['title'] = 'Create Time Management User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/time_management/aplikasi/create');
		$this->load->view('template/user/footer');
	}

	public function webinar()
	{
		$data['title'] = 'Webinar User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/webinar/list');
		$this->load->view('template/user/footer');
	}

	public function webinar_detail()
	{
		$data['title'] = 'Webinar Detail User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/webinar/detail');
		$this->load->view('template/user/footer');
	}

	public function payment()
	{
		$data['title'] = 'Pembayaran User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/payment');
		$this->load->view('template/user/footer');
	}

	public function artikel()
	{
		$data['title'] = 'Artikel User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/artikel/list');
		$this->load->view('template/user/footer');
	}

	public function artikel_detail()
	{
		$data['title'] = 'Artikel Detail User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/artikel/detail');
		$this->load->view('template/user/footer');
	}

	public function purchase()
	{
		$data['title'] = 'Histori Pembelian Webinar User';

		$this->load->view('template/user/header', $data);
		$this->load->view('pages/user/purchase');
		$this->load->view('template/user/footer');
	}
}