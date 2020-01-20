<?php 

class mRegisAdmin extends CI_Model{


		public function tambahadmin($data,$table){
			$this->db->insert($table,$data);
		}
		public function tampildata(){
			return $this->db->get('registrasi');
		}
		 public function editdata($where,$table){
			return $this->db->get_where($table,$where);
		}
		public function updateData($where, $table, $data){
			$this->db->where('nik', $where);
			$this->db->update($table, $data);
		}
		public function deletedata($where,$table){
			return $this->db->get_where($table,$where);
		}
		public function hapusData($where,$table){
			$this->db->query("DELETE FROM $table WHERE nik = '$where'");
		}

}

 ?>