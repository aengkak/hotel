<?php
class User extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
		return $this->db->get('user_supplier')->result();
	}
	public function suppuser() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('supplier_id', $supplier_id);
		return $this->db->get('user_supplier')->result();
	}
	public function new() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$akses_id = $this->input->post('akses_id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$supplier_id = "0";
		$user_id = $this->session->userdata('user_id');
		$status = "1";

		$res = implode(",",$akses_id);
		$data = array('username' => $username,'password' => md5($password),
						'akses_id' => $res, 'nama_lengkap' => $nama_lengkap, 'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'supplier_id' => $supplier_id, 'status' => $status);
		$this->db->insert('user_supplier', $data);
		$this->db->insert_id();

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert User"." ".$username, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function add() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$akses_id = $this->input->post('akses_id');
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$status = "1";

		$res = implode(",",$akses_id);
		$data = array('username' => $username,'password' => md5($password),
						'akses_id' => $res, 'nama_lengkap' => $nama_lengkap, 'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'supplier_id' => $supplier_id, 'status' => $status);
		$this->db->insert('user_supplier', $data);
		$this->db->insert_id();

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert User"." ".$username, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_us', $id);
		$this->db->update('user_supplier', array('status' => "0"));

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$this->db->where('id_us', $id);
		$cek = $this->db->get('user_supplier')->row();
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete User"." ".$cek->username, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_us', $id);
		return $this->db->get('user_supplier')->row();
	}
	public function update(){
		$id = $this->input->post('id_us');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$akses_id = $this->input->post('akses_id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$res = implode(",",$akses_id);
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		if ($password == NULL) {
			$data = array('username' => $username,
								'akses_id' => $res, 'nama_lengkap' => $nama_lengkap, 'alamat' => $alamat,
								'no_telp' => $no_telp, 'email' => $email);
			$this->db->where('id_us', $id);
			$this->db->update('user_supplier', $data);
		} else {
			$data = array('username' => $username,'password' => md5($password),
								'akses_id' => $res, 'nama_lengkap' => $nama_lengkap, 'alamat' => $alamat,
								'no_telp' => $no_telp, 'email' => $email);
			$this->db->where('id_us', $id);
			$this->db->update('user_supplier', $data);
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update User"." ".$username, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
