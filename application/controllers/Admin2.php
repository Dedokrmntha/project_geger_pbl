<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Admin2
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Admin2 extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
  }

  public function login()
  {
    $this->load->view('layout/header');
    $this->load->view('layout/navbar');
		// $this->load->view('admin/login');
		$this->load->view('layout/footer');
		
  }
}


/* End of file Admin2.php */
/* Location: ./application/controllers/Admin2.php */