<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Home extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
    $this->load->model('Auth');
		$this->Auth->cek_login();
  }

  public function index()
  {
    $this->load->view('vw_home');
  }
}
   


/* End of file Home.php.php */
/* Location: ./application/controllers/Home.php.php */