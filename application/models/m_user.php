<?php
class M_user extends CI_Model{
	public function create($data){     
        $this->db->insert('user',$data);
    }

	public function getDataUser(){;
		$this->db->select('tb_user.*, user.*');
		$this->db->from('pengajar');
		$this->db->join('user', 'user.id_user = pengajar.id_user','inner');
		$query = $this->db->get();
		return $query->result();
	}
}