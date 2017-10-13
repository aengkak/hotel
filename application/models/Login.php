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
							'supplier_id' => "0",
  							'status' => "login" );
  			$this->session->set_userdata($data_session);
      }
    }else {
      $cek = $this->db->get_where('user_supplier', $data)->row();
      $data_session = array('username' => $cek->username,
							'user_id' => $cek->id_us,
							'supplier_id' => $cek->supplier_id,
							'level' => "supplier",
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
						'level' => "person",
						'nama' => $cek->nama_lengkap,
						'status' => "login" );
			$this->session->set_userdata($data_session);
		}
	}
}
