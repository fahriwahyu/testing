<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
	

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index(){

		
		$data['siswa'] = $this->M_siswa->getData()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/siswa/index',$data);
		$this->load->view('admin/templates/footer');  
	}

	public function add(){

		$data = array(
			'nik'=> $this->input->post('nik'),
			'nama_siswa'=> $this->input->post('nama'),
			'nama_kepanjangan'=> $this->input->post('nama_kepanjangan'),
			'jk'=> $this->input->post('jk'),
			'tempat_lahir'=> $this->input->post('tempat_lahir'),
			'tgl_lahir'=> $this->input->post('tgl_lahir'),
			'alamat'=> $this->input->post('alamat'),
			'email'=> $this->input->post('email'),
			'hp'=> $this->input->post('hp'),
			'nama_ayah'=> $this->input->post('nama_ayah'),
			'nama_ibu'=> $this->input->post('nama_ibu'),
			'hp_ortu'=> $this->input->post('hp_ortu'),
			'id_kelas'=> $this->input->post('kls'),
			'password'=> md5($this->input->post('password')),
			'created_at' => date('Y-m-d')
		);

		$photo = $_FILES['photo']['name'];
				if($photo){
					$config['upload_path'] = './assets/img/uploads';
					$config['allowed_types'] = 'jpeg|jpg|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('photo')){
						$photo = $this->upload->data('file_name');
						$this->db->set('photo', $photo);
					}else{
						echo 'Photo Gagal diupload';
					}
				}

		$this->M_siswa->insertData('siswa', $data, $photo);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Siswa berhasil ditambahkan.
		</div>');
		return redirect('Siswa');
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

	public function delete($id_siswa){

		$id = ['id_siswa' => $id_siswa];

		$this->db->delete('siswa',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Siswa berhasil dihapus.
		</div>');
		redirect('Siswa');
	}
}