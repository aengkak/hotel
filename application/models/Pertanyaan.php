<?php
class Pertanyaan extends CI_model {
	public function selectAll() {
    return $this->db->get('pertanyaan')->result();
  }
	public function add() {
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$judul = $this->input->post('judul');
		$isi = $this->input->post('isi');
		
		$config['upload_path']   = './files/';
		$config['file_name'] = $nama;
		$config['allowed_types'] = '*';
		$config['max_size']      = 0;
		$config['max_width']     = 0;
		$config['max_height']    = 0;
		$this->load->library('upload', $config);
					// script upload file pertama
			 $this->upload->do_upload('foto');
			 $foto1 = $this->upload->data('file_name');
			 $foto = $this->upload->data();
			 $size = $foto['file_size'];
			 if($size != NULL) {
				 $lampiran = $foto1;
			 } else {
				 $lampiran = NULL;
			 }
			 $data = array('nama' => $nama, 'email' => $email, 'judul' => $judul, 'isi' => $isi, 'lampiran' => $lampiran);
			 $this->db->insert('pertanyaan', $data);
			 $this->db->insert_id();

	}

	public function edit($id){
		$this->db->where('id_pertanyaan', $id);
		return $this->db->get('pertanyaan')->row();
	}
}
