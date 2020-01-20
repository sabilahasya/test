<?php

class M_laporan extends CI_Model{

	public function input_laporan($table,$data){
		$this->db->insert($table,$data);
		
	}

	function lihat_laporan(){
		return $this->db->get('laporan')->result();
		$total = $query->num_rows();
		return $total;
	}

	function editproduk($where,$data){
		return $this->db->get_where('produk',$where);
	}

	function update_produk($where,$data,$produk){
		$this->db->where($where);
		$this->db->update($produk,$data);
	}
	function batalkanproduk($id){
		$this->db->where('id',$id);
		return $this->db->delete('produk');
	}
	private function _uploadImage(){
    $config['upload_path']          = './uploads/produk/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = $this->id;
    $config['overwrite']			= true;
    $config['max_size']             = 1024; // 1MB
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('image')) {
        return $this->upload->data("file_name");
    }
    return "default.jpg";
	}
}