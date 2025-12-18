<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->view('templates/auth_header');
        $this->load->view('login');
        $this->load->view('templates/auth_footer');
        
	}

    public function register(){

        $this->load->view('templates/auth_header');
        $this->load->view('registration');
        $this->load->view('templates/auth_footer');
        
    }

    public function getLogin(){

        $this->form_validation->set_rules('username', 'Username', 'required', ['required' => 'Username wajib diisi']);
        $this->form_validation->set_rules('password', 'Password', 'required', ['required' => 'Password wajib diisi']);
        $this->form_validation->set_rules('level', 'Level', 'required', ['required' => 'Level wajib diisi']);

        if($this->form_validation->run() == FALSE){
            $this->load->view('login'); 
        }else{
            $level = $this->input->post('level');
            $username = $this->input->post('username', TRUE);
            $password = $this->input->post('password', TRUE);

            $pass = md5($password);

            //var_dump($username); die();
            if($level == 'admin'){
                //Admin
                $cek_user = $this->M_user->loginUser($username, $pass);
                if($cek_user){

                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('username', $username);

                    return redirect('Dashboard');
                }else{
                    $this->session->set_flashdata('pesan', '<h4>Username atau Password Salah</h4>');
                    return redirect('Auth');
                }
            }elseif($level == 'siswa'){
                //siswa
                $cek_siswa = $this->M_user->loginSiswa($username, $pass);

                if($cek_siswa){
                    //jika cocok
                    $this->session->set_userdata('level', $level);
                    $this->session->set_userdata('username', $cek_siswa->nik);
                    $this->session->set_userdata('nama_siswa', $cek_siswa->nama_siswa);
                    $this->session->set_userdata('photo', $cek_siswa->photo);

                    return redirect('GG/Dashboard');
                }else{
                    //jika gagal
                    $this->session->set_flashdata(
                        'pesan', 'NIK atau Username Salah!'
                    );
                    return redirect('Auth');
                }
            }
        }
    }

    public function logout(){

        $this->session->sess_destroy();
        redirect('Auth');
    }
}
