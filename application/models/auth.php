<?php
class Auth extends CI_Model{
	public function check($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', md5($password));
		$query = $this->db->get('pengguna');
		if ($query->num_rows() == 1) {
			# code...
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}