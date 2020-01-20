<?php 
class M_registrasi extends CI_Model {
public function tambahadmin($data,$table){
			$this->db->insert($table,$data);
		}
		public function tampildata(){
			return $this->db->get('registrasi');
		}
		 public function editdata($id){
			//return $this->db->get_where($table,$where);
			$this->db->where('nik', $id);
			return $this->db->get('registrasi');
		}

		public function uptdatedt($id,$dataadmin){
			$this->db->where('nik', $id);
			$this->db->update('registrasi', $dataadmin);
		}

		public function editwhere($id){
			$this->db->where('nik', $id);
			return $this->db->get('registrasi');
		}

		public function hapusdt($where, $table){
			$this->db->where($where);
			$this->db->delete($table);
		}
		//public function updateData($where, $table, $data){
		//	$this->db->where('nik', $where);
		//	$this->db->update($table, $data);
		//}
		//public function deletedata($where,$table){
		//	return $this->db->get_where($table,$where);
		//}
		public function hapusData($where,$table){
			$this->db->query("DELETE FROM $table WHERE nik = '$where'");
		}
		}
 ?>