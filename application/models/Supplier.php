<?php
class Supplier extends CI_model {
	public function selectAll() {
		return $this->db->get('supplier')->result();
	}
	public function viewsupp() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('id_supplier', $supplier_id);
		return $this->db->get('supplier')->result();
	}
	public function add() {
		$nama_supplier = $this->input->post('nama_supplier');
		$title = strip_tags($this->input->post('nama_supplier'));
    $titleURL = strtolower(url_title($title));
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$lat = $this->input->post('lat');
		$longi = $this->input->post('longi');
		$nearby = $this->input->post('nearby');
		$kota_id = $this->input->post('kota_id');
		$tentang = $this->input->post('tentang');
		$fitur_id = $this->input->post('fitur_id');
		$res = implode(",",$nearby);
		$res1 = implode(",",$fitur_id);
		$status = "1";
		$data = array('slug' => $titleURL, 'nama_supplier' => $nama_supplier,'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
						'kota_id' => $kota_id, 'nearby' => $res, 'tentang' => $tentang, 'status' => $status);
		$this->db->insert('supplier', $data);
		$next = $this->db->insert_id();
		$user_id = $this->session->userdata('user_id');
		$this->db->where('id_us', $user_id);
		$this->db->update('user_supplier', array('supplier_id' => $next));
		$this->session->set_userdata('supplier_id', $next);

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$supplier_id = $this->session->userdata('supplier_id');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Hotel"." ".$nama_supplier, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_supplier', $id);
		$this->db->update('supplier', array('status' => "0"));
	}
	public function edit($id){
		$this->db->where('id_supplier', $id);
		return $this->db->get('supplier')->row();
	}
	public function edithotel(){
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('id_supplier', $supplier_id);
		return $this->db->get('supplier')->row();
	}
	public function update(){
		$id = $this->input->post('id_supplier');
		$nama_supplier = $this->input->post('nama_supplier');
		$title = strip_tags($this->input->post('nama_supplier'));
    $titleURL = strtolower(url_title($title));
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$lat = $this->input->post('lat');
		$longi = $this->input->post('longi');
		$nearby = $this->input->post('nearby');
		$tentang = $this->input->post('tentang');
		$kota_id = $this->input->post('kota_id');
		$fitur_id = $this->input->post('fitur_id');
		$res1 = implode(",",$fitur_id);
		$res = implode(",",$nearby);
		$data = array('slug' => $titleURL,'nama_supplier' => $nama_supplier,'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
						'kota_id' => $kota_id, 'nearby' => $res, 'tentang' => $tentang);
		$this->db->where('id_supplier', $id);
		$this->db->update('supplier', $data);
	}
	public function addsupp() {
		$nama_supplier = $this->input->post('nama_supplier');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$user_id = $this->session->userdata('user_id');
		$supplier_id = $this->session->userdata('supplier_id');
		$status = "1";
		$data = array('nama_supplier' => $nama_supplier,'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'lat' => NULL, 'longi' => NULL,
						'kota_id' => NULL, 'nearby' => NULL, 'status' => $status);
		$this->db->insert('supplier', $data);
		$this->db->insert_id();

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Hotel"." ".$nama_supplier, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function autocomplete() {
		$status = "1";
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.status', $status);
    return $this->db->get()->result();
	}
	public function check() {
		$nama_supplier = $this->input->post('tempattujuan');
		$status = "1";
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.nama_supplier', $nama_supplier);
		$this->db->where('supplier.status', $status);
    return $this->db->get()->row();
	}
	public function search() {
		$nama_supplier = $this->session->userdata('nama_supplier');
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->like('nama_supplier', $nama_supplier);
		return $this->db->get()->result();
	}
	public function judul($id) {
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.slug', $id);
		return $this->db->get()->row();
	}
	function getRows($params = array()) {
		$nama_supplier = $this->session->userdata('nama_supplier');
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->like('kota', $nama_supplier);

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
}
