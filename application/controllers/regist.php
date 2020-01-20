<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class regist extends CI_Controller {

	public function index(){

		$this->load->view('theme/header');
		$this->load->view('theme/regist');
		$this->load->view('theme/footer');
	}

	public function proseslogin(){
		$this->load->view('login');
	}
}
?>