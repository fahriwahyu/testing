<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Krs extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index()
	{
        $siswa = $this->M_siswa->getSession()->row_array();

        $data['siswa'] = $this->M_siswa->getSession()->row_array();

        $data['getKrs'] = $this->M_Krs->getDataKRS($siswa['id_kelas'])->result();

		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');   
		$this->load->view('siswa/templates/topbar');
		$this->load->view('siswa/krs', $data);
		$this->load->view('siswa/templates/footer');  
	}


	
}