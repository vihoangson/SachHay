<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_page extends CI_Controller {

	public function index()
	{
		$data=[];
		$this->load->view('_includes/header');
		$this->load->view('admin/input', $data);
		$this->load->view('_includes/footer');
	}

}

/* End of file Admin_page.php */
/* Location: ./application/controllers/Admin_page.php */