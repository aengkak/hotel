<?php
class Ulasan extends CI_model {
  public function check($id) {
    $this->db->where('user_id', $id);
    return $this->db->get('komentar')->result();
  }
  public function add() {
    date_default_timezone_set('Asia/Jakarta');
    $date = date('Y-m-d');
    $supplier_id = $this->input->post('supplier_id');
    $pemesanan_id = $this->input->post('pemesanan_id');
    $isi = $this->input->post('isi');
    $kebersihan = $this->input->post('kebersihan');
    $pelayanan = $this->input->post('pelayanan');
    $makanan = $this->input->post('makanan');
    $lokasi = $this->input->post('lokasi');
    $harga = $this->input->post('harga');
    $user_id = $this->session->userdata('user_id');
    $a = array($kebersihan,$pelayanan,$makanan,$lokasi,$harga);
    $count = count($a);
    $rata = array_sum($a);
    $rata2 = $rata / $count;
    $data = array('user_id' => $user_id, 'isi' => $isi, 'kebersihan' => $kebersihan,
                  'pelayanan' => $pelayanan, 'makanan' => $makanan, 'lokasi' => $lokasi,
                  'harga' => $harga, 'rata' => $rata2, 'supplier_id' => $supplier_id,
                  'tgl_komen' => $date, 'pemesanan_id' => $pemesanan_id);
    $this->db->insert('komentar', $data);
    $this->db->insert_id();

  }
  public function selectAll() {
    $this->db->select('*');
	$this->db->from('komentar');
	$this->db->join('person', 'komentar.user_id = person.id_person');
    $this->db->order_by('tgl_komen', "DESC");
    return $this->db->get()->result();
  }
  function getRows($params = array()) {

		$slug = $this->uri->segment('2');
    $this->db->where('slug', $slug);
    $a = $this->db->get('supplier')->row();
    $supplier_id = $a->id_supplier;
    $this->db->select('*');
		$this->db->from('komentar');
		$this->db->join('person', 'komentar.user_id = person.id_person');
    $this->db->where('supplier_id', $supplier_id);
    $this->db->order_by('tgl_komen', "DESC");

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;

  }
  public function select($id) {
	  $this->db->where('supplier_id', $id);
	  return $this->db->get('komentar')->result();
  }
  public function landing() {
	  $supplier_id = $this->input->post('id');
	  return $this->db->get('komentar')->result();
  }
}
