<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->M_security->getSecurity();
	}
	public function index()
	{

        //$data['siswa'] = $this->db->get('siswa')->row_array();
        $data['siswa'] = $this->M_siswa->getSession()->row_array();


		$this->load->view('siswa/templates/header');
		$this->load->view('siswa/templates/sidebar');   
		$this->load->view('siswa/templates/topbar');
		$this->load->view('siswa/profile', $data);
		$this->load->view('siswa/templates/footer');  

	}
    
    public function updateAksi(){
        $id = $this->input->post('id_siswa');

        $data = [
            'nama_siswa' => htmlspecialchars($this->input->post('nama_siswa')),
            'nama_kepanjangan' => htmlspecialchars($this->input->post('nama_kepanjangan')),
            'jk' => htmlspecialchars($this->input->post('jk')),
            'tempat_lahir' => htmlspecialchars($this->input->post('tempat_lahir')),
            'tgl_lahir' => htmlspecialchars($this->input->post('tgl_lahir')),
            'alamat' => htmlspecialchars($this->input->post('alamat')),
            'email' => htmlspecialchars($this->input->post('email')),
            'hp' => htmlspecialchars($this->input->post('hp')),
            'nama_ayah' => htmlspecialchars($this->input->post('nama_ayah')),
            'nama_ibu' => htmlspecialchars($this->input->post('nama_ibu')),
            'hp_ortu' => htmlspecialchars($this->input->post('hp_ortu')),
            'update_at' => date('Y-m-d')
        ];

        $where = ['id_siswa' =>$id];

        $this->db->update('siswa', $data, $where);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-success alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Data Anda berhasil diperbaharui.
		</div>');
		return redirect($_SERVER['HTTP_REFERER']);
    }

    public function updatePass(){
        $id = $this->input->post('id_siswa');

        $data = [
            'password' => md5($this->input->post('password')),
            'update_at' => date('Y-m-d')
        ];

        $where = ['id_siswa' => $id];

        $this->db->update('siswa', $data, $where);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-warning alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Password berhasil diperbaharui.
		</div>');
		return redirect($_SERVER['HTTP_REFERER']);
    }

    public function updatePhoto(){
        $id = $this->input->post('id_siswa');

        $photo = $_FILES['photo']['name'];
            if($photo){
                $config ['upload_path'] = './assets/img/uploads';
                $config ['allowed_types'] = 'jpg|jpeg|png';

                $this->load->library('upload', $config);

                if($this->upload->do_upload('photo')){
                    $photo = $this->upload->data('file_name');
                    $this->db->set('photo', $photo);
                }else{
                    echo "gagal Upload";
                }

            }
        $data = [
            'photo' => $photo,
            'update_at' => date('Y-m-d')
        ];

        $where = ['id_siswa' => $id];

        //timpah foto
        $item = $this->db->get_where('siswa', $where)->row();

        if($item->photo != NULL){
            $target_file = './assets/img/uploads/'.$item->photo;
            unlink($target_file);
        }
        $this->db->update('siswa', $data, $where);
        $this->session->set_flashdata('pesan', '
		<div class="alert alert-succes alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h4><i class="icon fa fa-check">
				</i> Selaamatt!</h4>Photo berhasil diperbaharui.
		</div>');
		return redirect($_SERVER['HTTP_REFERER']);
    }
}