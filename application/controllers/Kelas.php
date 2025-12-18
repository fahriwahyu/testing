<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}

	public function index()
	{

        $data['kelas'] = $this->M_kelas->getData()->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/kelas/index', $data);
		$this->load->view('admin/templates/footer');  
	}

    public function add(){

        $data = array(
			'id_kelas'=> $this->input->post('id_kelas'),
			'kls'=> $this->input->post('kls'),
			'tahun_ajaran'=> $this->input->post('tahun_ajaran'),
			'created_at' => date('Y-m-d')
		);

        $this->M_kelas->insertData('kelas', $data);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Kelas berhasil ditambahkan.
		</div>');
		return redirect('Kelas');
    }

	public function update($id_kelas){

		$id = ['id_kelas' => $id_kelas];

		$data['kelas'] = $this->M_kelas->getUpdate('kelas', $id)->row_array();
		//var_dump($data);die();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/kelas/update',$data);
		$this->load->view('admin/templates/footer'); 

		
	}

	public function delete($id_kelas){

		$id = ['id_kelas' => $id_kelas];

		$this->db->delete('kelas',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Kelas berhasil dihapus.
		</div>');
		redirect('Kelas');
	}

	public function updateAksi($id_kelas){
		
		$id = ['id_kelas' => $id_kelas];
		$data = array(
			'id_kelas'=> $this->input->post('id_kelas'),
			'kls'=> $this->input->post('kls'),
			'tahun_ajaran'=> $this->input->post('tahun_ajaran'),
			'created_at' => date('Y-m-d')
		);

        $this->M_kelas->updateData('kelas', $data, $id);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Kelas berhasil diupdate.
		</div>');
		return redirect('Kelas');

	}
	
}