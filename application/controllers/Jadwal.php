<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jadwal extends CI_Controller {

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
		$this->load->view('admin/jadwal/index', $data);
		$this->load->view('admin/templates/footer');  
	}

	public function index_jad($id_kelas){


        $where = ['id_kelas' => $id_kelas];
		$data['detil'] = $this->M_kelas->getDetil('kelas', $where)->row_array();
		$data['mapel'] = $this->M_jadwal->getData($id_kelas)->result();
		$data['klsMapel'] = $this->M_jadwal->getKlsMapel($id_kelas)->result();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/jadwal/v_jadwal', $data);
		$this->load->view('admin/templates/footer'); 
	
	}

    public function add($id_kelas){

        $data = array(
            'id_kelas' => $id_kelas,
			'id_mapel'=> $this->input->post('mapel'),
			'id_guru'=> $this->input->post('guru'),
			'hari'=> $this->input->post('hari'),
			'jam'=> $this->input->post('jam'),
			'created_at' => date('Y-m-d')
		);

        $this->M_jadwal->insertData('jadwal', $data);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Jadwal berhasil ditambahkan.
		</div>');
		return redirect('Jadwal');
    }
    
    public function softDelete($id_jadwal){

		$id = ['id_jadwal' => $id_jadwal];
		$data = ['soft_delete' => 0];


		$this->db->update('jadwal',$data, $id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Jadwal berhasil dihapus.
		</div>');
		redirect('Jadwal');
	}

}