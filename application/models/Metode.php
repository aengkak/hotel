<?php
class Metode extends CI_model {
	public function selectAll() {
		$status = 1;
		$this->db->where('status', $status);
		return $this->db->get('metode')->result();
	}
	public function add() {
		$status = 1;
		$bank = $this->input->post('bank');
		$nama = $this->input->post('nama');
		$rek = $this->input->post('rek');
		$data = array( 'bank' => $bank, 'nama' => $nama, 'rek' => $rek, 'status' => $status);
		$this->db->insert('metode', $data);
		$this->db->insert_id();
	}
	public function edit($id) {
		$this->db->where('id_metode', $id);
		return $this->db->get('metode')->row();
	}
	public function delete($id) {
		$this->db->where('id_metode', $id);
		$this->db->update('metode', array('status' => "0"));
	}
	public function update() {
		$id_metode = $this->input->post('id_metode');
		$bank = $this->input->post('bank');
		$nama = $this->input->post('nama');
		$rek = $this->input->post('rek');
		$data = array('bank' => $bank, 'nama' => $nama, 'rek' => $rek);
		$this->db->where('id_metode', $id_metode);
		$this->db->update('metode', $data);
	}
}
