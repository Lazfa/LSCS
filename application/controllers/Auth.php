<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->form_validation->set_rules('no_identitas','Identitas','required|trim');
		$this->form_validation->set_rules('password','Password','required|trim');

		if($this->form_validation->run() == false){
			$data['title'] = 'Login Page';
			$this->load->view('v_login',$data);
		}else{
			//validasinya sukses ini privat method
			$this->_login();
		}
	}

	private function _login()
	{
		$identitas = $this->input->post('no_identitas');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_akun',['nomor_identitas' => $identitas])->row_array();
		
		if($user){
			if(password_verify($password, $user['password'])){
				$data = [
					'nomor_identitas' => $user['nomor_identitas'],
					'role' => $user['role'],
					'id_akun' => $user['id_akun']
				];
				$this->session->set_userdata($data);

				//mengarahkan ke view dan kontroller user
				if($user['role'] == 1){
					redirect('user');
				}else
				{
					redirect('user/login_siswa');
				}				
			}else{
				$this->session->set_flashdata('message','<div class="alert-danger" role="alert">Password salah!</div>');
				redirect('auth');
			}
		}else{
			$this->session->set_flashdata('message','<div class="alert-danger" role="alert"> Akun belum terfdaftar!</div>');
			redirect('auth');
		}
	}

	//melakukan registrasi akun
	public function registration()
	{
		$this->form_validation->set_rules('no_id','Identitas','required|trim');
		$this->form_validation->set_rules('name','Nama','required|trim');
		$this->form_validation->set_rules('sekolah','Sekolah','required|trim');
		$this->form_validation->set_rules('role','Role','required|trim');
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[6]|matches[password2]',[
			'matches' => 'Password dont match!',
			'min_length' => 'Password too short!'	
		]);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');


		if ($this->form_validation->run() == false){
			$data['title']='Registration';
			$this->load->view('v_register',$data);
		}else{
			$password 			= password_hash($this->input->post('password1'),PASSWORD_DEFAULT);
			$nomor_identitas	= $this->input->post('no_id',true);
			$nama 				= $this->input->post('name',true);
			$role 				= $this->input->post('role',true);
			$sekolah 			= $this->input->post('sekolah',true);
			$foto 				= $_FILES['foto'];

			$config['upload_path']		= './assets/img/fotoProfile';
			$config['allowed_types']	= 'jpg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto')){
				$foto = 'default.png';
			}else{
				$foto = $this->upload->data('file_name');
			}		


			$data = array(
				'password' 			=> $password,
				'nomor_identitas' 	=> $nomor_identitas,
				'nama' 				=> $nama,
				'role' 				=> $role,
				'sekolah' 			=> $sekolah,
				'foto' 				=> $foto
			);

			$this->load->model('m_user');
        	$this->m_user->tambahDataUser('tb_akun',$data);
			$this->session->set_flashdata('message','<div class="alert-success" role="alert"> Selamat, akun anda telah terdaftar!</div>');
			redirect('auth');
		}
	}

	//untuk logout
	public function logout(){
		$this->session->unset_userdata('nomor_identitas');
		$this->session->unset_userdata('role');

		$this->session->set_flashdata('message','<div class="alert-success" role="alert">Kamu berhasil Logout!</div>');
		redirect('auth');
	}

}
