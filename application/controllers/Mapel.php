<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mapel extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}

	public function index()
	{

		$data['mapel'] = $this->M_mapel->getData()->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/mapel/index',$data);
		$this->load->view('admin/templates/footer');  
	}

	public function add(){

		$smt = $this->input->post('semester');
		if($smt == 1){
			$s = "Ganjil";
		}else{
			$s = "Genap";
		} 

		$semester = $s;

		$data = [
			'id_mapel'=> $this->input->post('id_mapel'),
			'matapel'=> $this->input->post('matapel'),
			'tahun_ajaran'=> $this->input->post('tahun_ajaran'),
			'semester'=> $smt,
			'smt'=> $semester,
			'id_kelas'=> $this->input->post('kls'),
			'created_at'=> date ('Y-m-d')
		];

		$this->M_mapel->insertData('mapel', $data);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Mata Pelajaran berhasil ditambahkan.
		</div>');
		return redirect('Mapel');
	}

	public function update($id_mapel){

		$where = ['id_mapel' => $id_mapel];

		$data['mapel'] = $this->M_mapel->getUpdate('mapel', $where)->row_array();
		//var_dump($data);die();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/mapel/update',$data);
		$this->load->view('admin/templates/footer'); 

		
	}

	public function updateAksi($id_mapel){

		$where = ['id_mapel' => $id_mapel];
		
		$smt = $this->input->post('semester');
		if($smt == 1){
			$s = "Ganjil";
		}else{
			$s = "Genap";
		} 

		$semester = $s;

		$data = [
			'matapel'=> $this->input->post('matapel'),
			'tahun_ajaran'=> $this->input->post('tahun_ajaran'),
			'semester'=> $smt,
			'smt'=> $semester,
			'id_kelas'=> $this->input->post('kls'),
			'update_at'=> date ('Y-m-d')
		];


        $this->M_mapel->updateData('mapel', $data, $where);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Mapel berhasil diupdate.
		</div>');
		return redirect('Mapel');

	}
	
	public function delete($id_mapel){

		$id = ['id_mapel' => $id_mapel];

		$this->db->delete('mapel',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Mata Pelajaran berhasil dihapus.
		</div>');
		redirect('Mapel');
	}
	
}