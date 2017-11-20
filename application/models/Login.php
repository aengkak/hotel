<?php
class Login extends CI_model {
	function log() {
    $username = $this->input->post('username');
		$password = $this->input->post('password');
		$data = array('username'=>$username, 'password'=>md5($password));
		$cek1 = $this->db->get_where('user_supplier', $data)->num_rows();
    $cek2 = $this->db->get_where('user', $data)->num_rows();
		if($cek1 == 0){
      if($cek2 == 0){
      }else {
        $cek = $this->db->get_where('user', $data)->row();
        $data_session = array('username' => $cek->username,
							'user_id' => $cek->id_user,
							'level' => "staff",
							'akses_id' => $cek->akses_id,
  							'status' => "login" );
  			$this->session->set_userdata($data_session);
      }
    }else {
      $cek = $this->db->get_where('user_supplier', $data)->row();
      $data_session = array('username' => $cek->username,
							'user_id' => $cek->id_us,
							'supplier_id' => $cek->supplier_id,
							'level' => "supplier",
							'akses_id' => $cek->akses_id,
							'status' => "login" );
			$this->session->set_userdata($data_session);
    }
	}
	public function logperson() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$data = array('email'=>$email, 'password'=>md5($password));
		$cek3 = $this->db->get_where('person', $data)->num_rows();
		if ($cek3 > 0) {
			$cek = $this->db->get_where('person', $data)->row();
			$data_session = array(
						'user_id' => $cek->id_person,
						'email' => $cek->email,
						'level' => "person",
						'nama_lengkap' => $cek->nama_lengkap,
						'status' => "login" );
			$this->session->set_userdata($data_session);
		}
	}
	public function cekpass() {
		$level = $this->session->userdata('level');
		$user_id = $this->session->userdata('user_id');
		$password = $this->input->post('lama');
		if ($level == "supplier") {
			$this->db->where('id_us', $user_id);
			$this->db->where('password', md5($password));
			$cek = $this->db->get('user_supplier')->num_rows();
			if ($cek != NULL) {
				return 1;
			} else {
				return 0;
			}
		} elseif ($level == "staff") {
			$this->db->where('id_user', $user_id);
			$this->db->where('password', md5($password));
			$cek = $this->db->get('user')->num_rows();
			if ($cek != NULL) {
				return 1;
			} else {
				return 0;
			}
		} elseif ($level == "person") {
			$this->db->where('id_person', $user_id);
			$this->db->where('password', md5($password));
			$cek = $this->db->get('person')->num_rows();
			if ($cek != NULL) {
				return 1;
			} else {
				return 0;
			}
		}
	}
	public function updatepass() {
		$level = $this->session->userdata('level');
		$user_id = $this->session->userdata('user_id');
		$password = $this->input->post('baru');
		$data = array('password' => md5($password));
		if ($level == "supplier") {
			$this->db->where('id_us', $user_id);
			$this->db->update('user_supplier', $data);
		} elseif ($level == "staff") {
			$this->db->where('id_user', $user_id);
			$this->db->update('user', $data);
		}
	}
	public function select() {
		$level = $this->session->userdata('level');
		$user_id = $this->session->userdata('user_id');
		if ($level == "supplier") {
			$this->db->where('id_us', $user_id);
			return $this->db->get('user_supplier')->row();
		} elseif ($level == "staff") {
			$this->db->where('id_user', $user_id);
			return $this->db->get('user')->row();
		}
	}
	public function update() {
		$level = $this->session->userdata('level');
		$user_id = $this->session->userdata('user_id');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$data = array('nama_lengkap' => $nama_lengkap, 'alamat' => $alamat, 'no_telp' => $no_telp, 'email' => $email);
		if ($level == "supplier") {
			$this->db->where('id_us', $user_id);
			$this->db->update('user_supplier', $data);
		} elseif ($level == "staff") {
			$this->db->where('id_user', $user_id);
			$this->db->update('user', $data);
		}
	}
	public function updateperson() {
		$user_id = $this->session->userdata('user_id');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_telp = $this->input->post('no_telp');
		$baru = $this->input->post('baru');
		if ($nama != NULL) {
			$data = array('nama_lengkap' => $nama);
			$this->db->where('id_person', $user_id);
			$this->db->update('person', $data);

			$data_session = array(
						'nama_lengkap' => $nama);
			$this->session->set_userdata($data_session);
		}
		if ($email != NULL) {
			$data = array('email' => $email);
			$this->db->where('id_person', $user_id);
			$this->db->update('person', $data);
		}
		if ($no_telp != NULL) {
			$data = array('no_telp' => $no_telp);
			$this->db->where('id_person', $user_id);
			$this->db->update('person', $data);
		}
		if ($baru != NULL) {
			$data = array('password' => md5($baru));
			$this->db->where('id_person', $user_id);
			$this->db->update('person', $data);
		}
	}
}
