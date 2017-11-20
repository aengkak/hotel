<?php
class Agent extends CI_model {
	public function selectAll() {
    return $this->db->get('agent')->result();
  }
	public function add() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $no_identitas = $this->input->post('no_identitas');
    $nama_agent = $this->input->post('nama_agent');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');

		$data = array('username' => $username, 'password' => md5($password), 'no_identitas' => $no_identitas,
                'nama_agent' => $nama_agent,'alamat' => $alamat,
						     'no_telp' => $no_telp, 'email' => $email);
		$this->db->insert('agent', $data);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->delete('agent', array('id_agent' => $id));
	}
	public function edit($id){
		$this->db->where('id_agent', $id);
		return $this->db->get('agent')->row();
	}
	public function update(){
		$id = $this->input->post('id_agent');
    $password = $this->input->post('password');
    $no_identitas = $this->input->post('no_identitas');
    $nama_agent = $this->input->post('nama_agent');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');

		$data = array('password' => md5($password), 'no_identitas' => $no_identitas,
                'nama_agent' => $nama_agent,'alamat' => $alamat,
						     'no_telp' => $no_telp, 'email' => $email);
		$this->db->where('id_agent', $id);
		$this->db->update('agent', $data);
	}
}
