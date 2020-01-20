<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class home extends CI_Controller {

	public function index(){

		$this->load->view('theme/header');
		$this->load->view('dashboard');
        $this->load->view('theme/footer');
	
    	}

	public function login1(){
        $this->load->view('theme/header');
		$this->load->view('login');
      
	}

	public function regist(){
		$this->load->view('theme/header');
		$this->load->view('theme/daftar');
        $this->load->model('M_registrasi');
        $this->model = $this->M_registrasi;
    }
		


	public function daftar() {
        if (isset($_POST['btnSubmit'])) {
            $this->model->nik = $_POST['nik'];
            $this->model->nik = $_POST['nama'];
            $this->model->nik = $_POST['username'];
            $this->model->nik = $_POST['password'];
            $this->model->nik = $_POST['email'];
            $this->model->nik = $_POST['jk'];
            $this->model->nik = $_POST['tempat'];
            $this->model->nik = $_POST['tanggal'];
            $this->model->nik = $_POST['alamat'];
            $this->model->nik = $_POST['agama'];

            //memanggil metode insert()
            $this->model->insert();

            $this->load->view('regist',['model'=>$this->model]);
        } else {
            $this->load->view('form_addview',['model'=>$this->model]);
        }
        }
    }
      function submit(){
        $this->load->view('theme/header');
        $data['nik'] = $this->input->post('nik');
        $data['nama'] = $this->input->post('nama');
        $data['username'] = $this->input->post('username');
        $data['password'] = $this->input->post('password');
        $data['email'] = $this->input->post('email');
        $data['jk'] = $this->input->post('jk');
        $data['tempat'] = $this->input->post('tempat');
        $data['tanggal'] = $this->input->post('tanggal');
        $data['alamat'] = $this->input->post('alamat');
        $data['agama'] = $this->input->post('agama');
        $this->load->view('theme/form',$data);
     }

    function melapor(){
		$this->load->view('theme/header');
		$this->load->view('v_laporan');
        $this->load->view('theme/footer');
		
}

        function editadmin($nik){
            $where = array('nik' => $nik);
            $datadaftar['datadaftar'] = $this->M_registrasi->editdata();
            $this->load->view('edit_form',$datadaftar);
        }

        
      
      function updatedata($nik){
        $nik = $this->input->post('nik');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $email = $this->input->post('email');
        $jk = $this->input->post('jk');
        $tempat = $this->input->post('tempat');
        $tanggal = $this->input->post('tanggal');
        $alamat = $this->input->post('alamat');
        $agama = $this->input->post('agama');

        $datadaftar = array('nik' => $nik,
                                'NIK' => $nik,
                                'nama' => $nama,
                                'username' => $username,
                                'password' => $password,
                                'email' => $email,
                                'jk'    => $jk,
                                'tempat' => $tempat,
                                'tanggal' => $tanggal,
                                'alamat' => $alamat,
                                'agama' => $agama);
        $this->M_registrasi->updateData($nik, 'registrasi', $datadaftar);
        redirect('home/tampil');




    }

    
	

?>