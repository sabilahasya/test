<?php 
public function cek_loginwarga($table,$datawarga){
	return $this->db->get_where($table,$datawarga)
}



 ?>