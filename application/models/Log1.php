<?php
class Log1 extends CI_model {
	public function selectAll() {
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$level = $this->session->userdata('level');
		if ($level == "staff") {
			$this->db->select('*');
			$this->db->from('log');
			$this->db->join('user', 'log.user_id = user.id_user');
			$this->db->order_by('log.waktu', 'desc');
			return $this->db->get()->result();
		}elseif($level == "supplier") {
			$this->db->select('*');
			$this->db->from('log');
			$this->db->join('user_supplier', 'log.user_id = user_supplier.id_us');
			$this->db->where('log.supplier_id', $supplier_id);
			$this->db->order_by('log.waktu', 'desc');
			return $this->db->get()->result();
		}
	}
}
