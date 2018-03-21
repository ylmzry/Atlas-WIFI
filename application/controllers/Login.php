<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
		$this->load->helper('url'); // For Base URLs 1
  }

  function index()
  {
		$this->output->set_template('login');
		$this->load->view('main/login');
  }

}
?>
