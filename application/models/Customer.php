<?php
class Customer extends CI_model {
	public function selectAll() {
    return $this->db->get('person')->result();
  }
	public function add() {
    $password = $this->input->post('password');
		$email = $this->input->post('email');
    $status = "1";
    $email2 = md5($email);

		$data = array('password' => md5($password), 'email' => $email, 'status' => $email2);
		$this->db->insert('person', $data);
		$this->db->insert_id();
    $url = base_url('verify/');

    $from_email = 'norok.event3@gmail.com'; // ganti dengan email kalian
    $subject = 'Verify Your Email Address';
    $message = 'Dear '. $email .',<br /><br />
                Please click on the below activation link to verify your email address.<br /><br />
                ' .$url. '' . $email2 . '<br /><br /><br />
                Thanks Ya<br />
                Yaha';

    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com'; // sesuaikan dengan host email
    $config['smtp_timeout'] = '7';
    $config['smtp_port'] = '465'; // sesuaikan
    $config['smtp_user'] = $from_email;
    $config['smtp_pass'] = '30april2011'; // ganti dengan password email
    $config['mailtype'] = 'html';
    $config['charset'] = 'iso-8859-1';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n";
    $config['crlf'] = "\r\n";
    $this->email->initialize($config);

    $this->email->from($from_email, 'Yaha');
    $this->email->to($email);
    $this->email->subject($subject);
    $this->email->message($message);
    // gunakan return untuk mengembalikan nilai yang akan selanjutnya diproses ke verifikasi email
    return $this->email->send();

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
    $nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');

		$data = array('password' => md5($password), 'no_identitas' => $no_identitas,
                'nama_lengkap' => $nama_lengkap,'alamat' => $alamat,
						     'no_telp' => $no_telp, 'email' => $email);
		$this->db->where('id_agent', $id);
		$this->db->update('agent', $data);
	}
  public function verify($id) {
		$no_identitas = $this->input->post('no_identitas');
    $nama_lengkap = $this->input->post('nama_lengkap');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
    $this->db->where('status', $id);
		$cek = $this->db->get('person')->row();
    $data = array('no_identitas' => $no_identitas, 'nama_lengkap' => $nama_lengkap,
									'tgl_lahir' => $tgl_lahir, 'alamat' => $alamat, 'no_telp' => $no_telp, 'status' => "Y");
    $this->db->where('id_person', $cek->id_person);
    $this->db->update('person', $data);
		return 1;
  }
	public function cekreg() {
		$email = $this->input->post('email');
		$this->db->where('email', $email);
		return $this->db->get('person')->num_rows();
	}
	public function cek($id) {
		$this->db->where('status', $id);
		return $this->db->get('person')->num_rows();
	}
}
