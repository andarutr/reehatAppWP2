<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function dashboard()
	{
		$data['title'] = 'Dashboard Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/dashboard');
		$this->load->view('template/admin/footer');
	}

	public function my_profile()
	{
		$data['title'] = 'Profile Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/my_profile');
		$this->load->view('template/admin/footer');
	}

	public function webinar()
	{
		$data['title'] = 'List Webinar Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/webinar/list');
		$this->load->view('template/admin/footer');
	}

	public function webinar_create()
	{
		$data['title'] = 'Membuat Webinar Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/webinar/create');
		$this->load->view('template/admin/footer');
	}

	public function webinar_edit()
	{
		$data['title'] = 'Memperbarui Webinar Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/webinar/edit');
		$this->load->view('template/admin/footer');
	}

	public function artikel()
	{
		$data['title'] = 'List Artikel Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/artikel/list');
		$this->load->view('template/admin/footer');
	}

	public function artikel_create()
	{
		$data['title'] = 'Membuat Artikel Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/artikel/create');
		$this->load->view('template/admin/footer');
	}

	public function artikel_edit()
	{
		$data['title'] = 'Memperbarui Artikel Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/artikel/edit');
		$this->load->view('template/admin/footer');
	}

	public function pembayaran()
	{
		$data['title'] = 'List pembayaran Admin';

		$this->load->view('template/admin/header', $data);
		$this->load->view('pages/admin/pembayaran');
		$this->load->view('template/admin/footer');
	}
}
