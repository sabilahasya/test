<?php 
class Upload extends CI_Controller {

		public function inputlaporan(){
		$this->load->model('M_laporan');
		if($this->input->post('submit')){
			$ket_laporan = $this->input->post('ket_laporan');
			$jnslaporan = $this->input->post('jnslaporan');
			$gambar = $this->input->post('gambar');

			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size'] = '1000';
			$config['max_width'] = '10000';
			$config['max_height'] = '10000';
			$config['upload_path'] = 'codeigniter./image/';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			if(! $this->upload->do_upload('gambar')){
				$error = array('error' => $this->upload->display_errors());
				$this->load->view('V_upload', $error);
				
			}else{
				$dataFoto = $this->upload->data();
				$data = array(
				'ket_laporan' => $ket_laporan,
				'jnslaporan' => $jnslaporan,
				'gambar' => '/code/image/'.$dataFoto['file_name']
			);
			$data = $this->security->xss_clean($data);
			$this->M_laporan->input_laporan('laporan',$data);
			redirect('view/V_upload');
			}
		}
	}

	public function lihatlaporan(){
		$this->load->view('theme/header');
		$this->load->model('M_laporan');
		//$data['laporan'] = $this->M_laporan->input_laporan();
		$this->load->view('V_upload');
		$this->load->view('theme/footer');
	}

	public function lihat_edit_produk($id){
		$where = array('id' => $id);
		$data['produk'] = $this->m_produk->editproduk($where,'produk')->result();
		$this->load->view('warga/v_editproduk',$data);
	}


	public function edit_produk($id){
		$this->load->model('m_produk');
		if($this->input->post('submit')){
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$satuan = $this->input->post('satuan');

			$where = array('id' => $id);

			$data = array(
				'nama' => $nama,
				'harga' => $harga,
				'satuan' => $satuan);

			if($this->m_produk->update_produk($where, $data)){
				redirect('warga/v_lihatproduk');
			}else{
				echo "gagal disimpan";
			}
		}
	}

	public function lihatproduk(){
		$this->load->model('m_produk');
		$data['produk'] = $this->m_produk->lihat_produk();
		$this->load->view('warga/v_lihatproduk',$data);
	}

	public function hapusproduk($id){
		$this->load->model('m_produk');
		if($this->m_produk->batalkanproduk($id)){
			$this->load->model('m_produk');
			$data['produk'] = $this->m_produk->lihat_produk($id);
			redirect('warga/lihatproduk');
		}else{
			echo ("gagal dihapus!");
			return ('warga/lihatkepengurusan');
		}
	}

	public function updateproduk(){
		if($this->input->post('submit')){
			$id = $this->input->post('id');
			$nama = $this->input->post('nama');
			$harga = $this->input->post('harga');
			$satuan = $this->input->post('satuan');


		}
			$data = array(
				'nama' => $nama,
				'harga' => $harga,
				'satuan' => $satuan
			);
			$where = array('id'=>$id);
			$this->m_produk->update_produk($where,$data,'produk');
			redirect ('warga/lihatproduk');
	}

}
 ?>











