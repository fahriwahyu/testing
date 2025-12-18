<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_akademik extends CI_Controller {
	

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index(){

		$data['siswa'] = $this->M_siswa->getData()->result();
        $data['ta'] = $this->M_ta->getData('ta')->result();
		
        $this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/ta/index',$data);
		$this->load->view('admin/templates/footer');  
	}

	public function add(){

		$data = array(
			'ta'=> $this->input->post('ta'),
			'smt'=> $this->input->post('smt'),
			'created_at' => date('Y-m-d')
		);

		$this->db->insert('ta', $data);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Tahun Akademik berhasil ditambahkan.
		</div>');
		return redirect('Tahun_akademik');
	}

	public function detil($id_siswa){

		$id = ['id_siswa' => $id_siswa];

		$data = $this->M_siswa->getDetil('siswa',$id)->row_array();
		//var_dump($data);die();

		$data['siswa'] = $this->db->get_where('siswa',$id)->row_array();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/siswa/detil',$data);
		$this->load->view('admin/templates/footer'); 
	}

	public function delete($id_ta){

		$id = ['id_ta' => $id_ta];

		$this->db->delete('ta',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Tahun Akademik berhasil dihapus.
		</div>');
		redirect('Tahun_akademik');
	}
}