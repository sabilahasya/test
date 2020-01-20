<?php 
class formdaftar extends CI_Controller {

	public function __construct() {
		parent::__construct();
		//memuat model
		$this->load->model('M_registrasi');
		$this->load->helper('url');

	 function tampil_form() {
		$this->load->view('theme/header');
		$this->load->view('form_addview');
		$this->load->view('theme/footer');

	}
	 function gila(){
		$this->load->view('theme/header');
	}



function dataadmin($nik){
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
        redirect('formdaftar/tampil');

  function tampil(){
			
			$datadaftar['datadaftar'] = $this->tampildata()->result();
			$this->load->view('tabel',$datadaftar); //error tampilan jadi kecil semua
		}

 function editadmin($nik){
			$where = array('nik' => $nik);
			$datadaftar['datadaftar'] = $this->M_registrasi->editdata($where,'registrasi')->result();
			$this->load->view('edit_form',$datadaftar);
		}
		 function coba(){
			$this->load->view('edit_form');
		}


 function updateadmin($nip){
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
							    'nama' => $nama,
								'username' => $username,
								'password' => $password,
								'email' => $email,
								'jk' => $jk,
								'tempat' => $tempat,
								'tanggal' => $tanggal,
								'alamat' => $alamat,
								'agama' => $agama);
								
			$this->M_registrasi->updateData($nik, 'registrasi', $datadaftar);
			redirect('formdaftar/tampil');
		}

	 function hapusadmin($nik){
			$where = array('nik' => $nik);
			$this->M_registrasi->hapusData($nik,'registrasi');
			redirect('formdaftar/tampil');

		}
	}
}
}

 ?>