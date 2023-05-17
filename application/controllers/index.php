<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class index extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/navbar');
		$this->load->view('layout/body');
		$this->load->view('layout/footer');
	}
	public function about()
	{
		$this->load->view('About/header');
		$this->load->view('About/navbar');
		$this->load->view('About/body');
		$this->load->view('About/footer');
	}
	public function dayatarik()
	{
		$this->load->view('DayaTarik/header');
		$this->load->view('DayaTarik/navbar');
		$this->load->view('DayaTarik/body');
		$this->load->view('DayaTarik/footer');
	}

	
}

/* End of file  */
/* Location: ./application/controllers/ */