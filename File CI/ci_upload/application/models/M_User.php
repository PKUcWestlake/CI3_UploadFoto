<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	function getDataUser() {
		$query = $this->db->get('tb_user');
		return $query->result();
	}

	function insertDataUser($data) {
		$this->db->insert('tb_user', $data);
	}

}

/* End of file M_User.php */
/* Location: ./application/models/M_User.php */