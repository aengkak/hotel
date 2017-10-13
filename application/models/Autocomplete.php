<?php
class Autocomplete extends CI_model {
  public function auto() {
    $key = $this->input->post('autocomplete', TRUE);
    $this->db->like('nama_supplier',$key);
    return $this->db->get('supplier')->result();
  }
  public function kota() {
    $key = $this->input->post('autocomplete', TRUE);
    $this->db->like('kota',$key);
    return $this->db->get('kota')->result();
  }
}
