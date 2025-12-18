<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index()
	{
		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');   
		$this->load->view('siswa/templates/topbar');
		$this->load->view('siswa/dashboard');
		$this->load->view('siswa/templates/footer');  

	}
	
}