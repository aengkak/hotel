<?php
class Fee extends CI_model {
	public function selectAll() {
		return $this->db->get('fee')->result();
	}
	public function add() {
		$fee = $this->input->post('fee');
		$data = array('fee' => $fee);
		$this->db->insert('fee', $data);
		$this->db->insert_id();
	}
	public function edit($id) {
		$this->db->where('id_fee', $id);
		return $this->db->get('fee')->row();
	}
	public function update() {
		$id_fee = $this->input->post('id_fee');
		$fee = $this->input->post('fee');
		$data = array('fee' => $fee);
		$this->db->where('id_fee', $id_fee);
		$this->db->update('fee', $data);
	}
}