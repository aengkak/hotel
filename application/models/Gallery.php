<?php
class Gallery extends CI_model {
	public function selectAll() {
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('status', $status);
		$this->db->where('supplier_id', $supplier_id);
    return $this->db->get('gallery')->result();
  }
	public function check() {
		$status = "1";
		$this->db->where('status', $status);
    return $this->db->get('gallery')->result();
  }
	public function add() {
		$ket = $this->input->post('ket');
		$produk_id = $this->input->post('produk_id');
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('id_supplier', $supplier_id);
		$s = $this->db->get('supplier')->row();
		$s1 = $s->nama_supplier;
		$config['upload_path']   = './files/';
		$config['file_name'] = $s1;
    $config['allowed_types'] = '*';
   	$config['max_size']      = 0;
   	$config['max_width']     = 0;
   	$config['max_height']    = 0;
   	$this->load->library('upload', $config);
					// script upload file pertama
			 $this->upload->do_upload('foto');
			 $foto1 = $this->upload->data('file_name');
			 $data = array('foto' => $foto1, 'ket' => $ket, 'produk_id' => $produk_id, 'supplier_id' => $supplier_id, 'status' => $status);
			 $this->db->insert('gallery', $data);
			 $this->db->insert_id();

	 		$user_id = $this->session->userdata('user_id');
	 		if ($produk_id == 0) {
	 			$t = "Hotel";
	 		} else {
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
	 			$t = "Room"." ".$cek->nama_produk;
	 		}
	 		date_default_timezone_set('Asia/Jakarta');
	 		$date = date('Y-m-d H:i:s');
	 		$datalog = array('user_id' => $user_id, 'ket' => "Insert Photo"." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
	 		$this->db->insert('log', $datalog);
	 		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_gallery', $id);
		$this->db->update('gallery', array('status' => "0"));

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('id_gallery', $id);
		$cek1 = $this->db->get('gallery')->row();
		if ($cek1->produk_id == 0) {
			$t = "Hotel";
		} else {
			$this->db->where('id_produk', $cek1->produk_id);
			$cek = $this->db->get('produk')->row();
			$t = "Room"." ".$cek->nama_produk;
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Photo"." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_gallery', $id);
		return $this->db->get('gallery')->row();
	}
	public function update(){
		$id = $this->input->post('id_gallery');
    $ket = $this->input->post('ket');
		$produk_id = $this->input->post('produk_id');
		$this->db->where('id_gallery', $id);
		$cek = $this->db->get('gallery')->row();
		$foto = $cek->foto;
		$config['upload_path']   = './files/';
    $config['allowed_types'] = '*';
   	$config['max_size']      = 0;
   	$config['max_width']     = 0;
   	$config['max_height']    = 0;
   	$this->load->library('upload', $config);
         // script upload file pertama
   	$this->upload->do_upload('foto');
     $foto1 = $this->upload->data('file_name');
		 $image_data = $this->upload->data();
		if ($foto1 == NULL) {
			$data = array('ket' => $ket, 'produk_id' => $produk_id);
			$this->db->where('id_gallery', $id);
			$this->db->update('gallery', $data);
		}else {
			unlink('files/'.$foto);
			unlink('files/thumbs'.$foto);
			$data = array('foto' => $foto1, 'ket' => $ket, 'produk_id' => $produk_id);
			$this->db->where('id_gallery', $id);
			$this->db->update('gallery', $data);

			$config1 = array(
			'source_image'=> $image_data['full_path'],
			'new_image'=>'./files/thumbs',
			'maintain_ration'=>true,
			'width'=>245,
			'height'=>138
			);
		 $this->load->library('image_lib', $config1);
			$this->image_lib->resize();
		}
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		if ($produk_id == 0) {
			$t = "Hotel";
		} else {
			$this->db->where('id_produk', $produk_id);
			$cek = $this->db->get('produk')->row();
			$t = "Room"." ".$cek->nama_produk;
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Photo"." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
