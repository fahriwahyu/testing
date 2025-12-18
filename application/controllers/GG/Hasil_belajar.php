<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil_belajar extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index()
	{
        $data['siswa'] = $this->M_siswa->getSession()->row_array();
        $data['getHasil'] = $this->M_siswa->getSession()->row_array();
        $data['siswa'] = $this->M_siswa->getSession()->row_array();

		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');   
		$this->load->view('siswa/templates/topbar');
		$this->load->view('siswa/hasil', $data);
		$this->load->view('siswa/templates/footer');  
	}


	
}