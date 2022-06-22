<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reehat extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Selamat Datang di Aplikasi Reehat';
		$this->load->view('first_page', $data);
	}
}
