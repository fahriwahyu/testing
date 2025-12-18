<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guru extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}

	public function index()
    {
		$data['guru'] = $this->M_guru->getData()->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/guru/index', $data);
		$this->load->view('admin/templates/footer');  
	}

	public function add(){

		$data = array(
			'nik'=> $this->input->post('nik'),
			'nama_guru'=> $this->input->post('nama_guru'),
			'jk'=> $this->input->post('jk'),
			'tempat_lahir'=> $this->input->post('tempat_lahir'),
			'tgl_lahir'=> $this->input->post('tgl_lahir'),
			'alamat'=> $this->input->post('alamat'),
			'hp'=> $this->input->post('hp'),
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
		$this->M_guru->insertData($data, $photo);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Guru berhasil ditambahkan.
		</div>');
		return redirect('Guru');
	}

	public function detil($id_guru){

		$id = ['id_guru' => $id_guru];

		$data['guru'] = $this->M_guru->getDetil($id)->row_array();
		//var_dump($data);die();

		$data['guru'] = $this->db->get_where('guru',$id)->row_array();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/guru/detil',$data);
		$this->load->view('admin/templates/footer'); 
	}

	public function delete($id_guru){

		$id = ['id_guru' => $id_guru];

		$this->db->delete('guru',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Guru berhasil dihapus.
		</div>');
		redirect('Guru');
	}

	public function update($id_guru)
	{

		$id = ['id_guru' => $id_guru];

		$data =  [
			'nik'=> $this->input->post('nik'),
			'nama_guru'=> $this->input->post('nama_guru'),
			'jk'=> $this->input->post('jk'),
			'tempat_lahir'=> $this->input->post('tempat_lahir'),
			'tgl_lahir'=> $this->input->post('tgl_lahir'),
			'alamat'=> $this->input->post('alamat'),
			'hp'=> $this->input->post('hp'),
			'update_at' => date('Y-m-d')
		];

		$this->M_guru->updateData( $data, $id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-succes alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Guru berhasil diupdate.
		</div>');
		return redirect('Guru');

	}

	public function updatePhoto($id_guru){


		$id = ['id_guru' => $id_guru];

		$photo = $_FILES['photo']['name'];
				if($photo){
					$config['upload_path'] = './assets/img/uploads';
					$config['allowed_types'] = 'jpeg|jpg|png';

					$this->load->library('upload', $config);

					if($this->upload->do_upload('photo')){
						$photo = $this->upload->data('file_name');
						$this->db->set('photo', $photo);
					}else{
						echo "Photo gagal diupdate";
					}
				}
		$data = array(
			'photo' => $photo,
			'update_at' => date('Y-m-d')
		);

		$item = $this->db->get_where('guru', $id_guru)->row();

		if($item->photo != NULL){
			$target_file = './assets/img/uploads/'.$item->photo;
			unlink($target_file);
		}

		$this->db->update('guru', $data, $id_guru);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-succes alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Photo Guru berhasil diupdate.
		</div>');
		return redirect($_SERVER['HTTP_REFERER']);
	}

}