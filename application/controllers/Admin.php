<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}

	public function index()
    {
		$data['admin'] = $this->db->get('admin')->result();
		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/admin/index', $data);
		$this->load->view('admin/templates/footer');  
	}

	public function add(){
		$data = [
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password')),
			'level' => 'admin',
			'photo' => '',
			'created_at' => date('Y-m-d')
		];

		$this->db->insert('admin', $data);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Admin berhasil ditambahkan.
		</div>');
		return redirect('Admin');

    }

	public function detil($id_admin){

		$where = ['id_admin' => $id_admin];

		$data['admin'] = $this->db->get_where('admin')->row_array();

		$this->load->view('admin/templates/header');
		$this->load->view('admin/templates/sidebar');   
		$this->load->view('admin/templates/topbar');
		$this->load->view('admin/admin/detil', $data);
		$this->load->view('admin/templates/footer');  
	}

	public function update($id_admin){
		$where = ['id_admin' => $id_admin];

		$data = [
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'updated_at' => date('Y-m-d')
		];

		$this->db->update('admin', $data, $where);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Admin berhasil diupdate.
		</div>');
		return redirect('Admin');
	}

	public function delete($id_admin){

		$id = ['id_admin' => $id_admin];

		$this->db->delete('admin',$id);
		$this->session->set_flashdata('pesan', '
		<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Suksess!</h4>Data Admin berhasil dihapus.
		</div>');
		redirect('Admin');
	}

}