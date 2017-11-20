<?php
class Supplier extends CI_model {
	public function selectAll() {
		$this->db->order_by('nama_supplier', "ASC");
		return $this->db->get('supplier')->result();
	}
	public function viewsupp() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('id_supplier', $supplier_id);
		return $this->db->get('supplier')->result();
	}
	public function addmanual() {
		$nama_supplier = $this->input->post('nama_supplier');
		$title = strip_tags($this->input->post('nama_supplier'));
		$titleu = strtolower(url_title($title));

		$this->db->where('slug', $titleu);
		$sl = $this->db->get('supplier')->num_rows();
		if ($sl > 0) {
			$slu = strtolower(url_title($title));
			$titleURL = $slu.'-'.time();
		} else {
			$titleURL = strtolower(url_title($title));
		}

		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$lat = $this->input->post('lat');
		$longi = $this->input->post('longi');
		$nearby = $this->input->post('nearby');
		$kota_id = $this->input->post('kota_id');
		$tentang = $this->input->post('tentang');
		$bintang = $this->input->post('bintang');
		$fitur_id = $this->input->post('fitur_id');
		$fiturkamar = $this->input->post('fiturkamar');
		$res = implode(",",$nearby);
		$res1 = implode(",",$fitur_id);
		$res2 = implode(",",$fiturkamar);
		$status = "1";
		$data = array('slug' => $titleURL, 'nama_supplier' => $nama_supplier,'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
						'fiturkamar' => $res2,'bintang'=> $bintang, 'kota_id' => $kota_id, 'nearby' => $res, 'status' => $status);
		$this->db->insert('supplier', $data);
		$next = $this->db->insert_id();

		$this->db->where('tipe >=',"0.1");
		$this->db->where('status', "1");
		$this->db->order_by('akses', "asc");
    $akses = $this->db->get('akses')->result();
		$a = array();
		foreach ($akses as $keya) {
			$a[] = $keya->id_akses;
		}

		$user = str_replace(' ', '_', $nama_supplier);
		$username = strtolower($user);
		$password = md5($username);
		$datauser = array('username' => $username, 'password'=> $password, 'akses_id' => implode(",",$a),
											'nama_lengkap' => $nama_supplier, 'alamat' => $alamat, 'no_telp' => $no_telp,
											'email' => $email, 'supplier_id' => $next, 'status' => $status);
		$this->db->insert('user_supplier', $datauser);
	}
	public function add() {
		$nama_supplier = $this->input->post('nama_supplier');
		$title = strip_tags($this->input->post('nama_supplier'));
		$titleu = strtolower(url_title($title));

		$this->db->where('slug', $titleu);
		$sl = $this->db->get('supplier')->num_rows();
		if ($sl > 0) {
			$slu = strtolower(url_title($title));
			$titleURL = $slu.'-'.time();
		} else {
			$titleURL = strtolower(url_title($title));
		}

		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$lat = $this->input->post('lat');
		$longi = $this->input->post('longi');
		$nearby = $this->input->post('nearby');
		$kota_id = $this->input->post('kota_id');
		$tentang = $this->input->post('tentang');
		$pengumuman = $this->input->post('pengumuman');
		$bintang = $this->input->post('bintang');
		$fitur_id = $this->input->post('fitur_id');
		$fiturkamar = $this->input->post('fiturkamar');
		$res = implode(",",$nearby);
		$res1 = implode(",",$fitur_id);
		$res2 = implode(",",$fiturkamar);
		$status = "1";
		$data = array('slug' => $titleURL, 'nama_supplier' => $nama_supplier,'alamat' => $alamat,
						'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
						'fiturkamar' => $res2,'bintang'=> $bintang, 'kota_id' => $kota_id, 'nearby' => $res, 'tentang' => $tentang,
						'pengumuman' => $pengumuman, 'status' => $status);
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
		$supp = $this->session->userdata('supplier_id');
		if ($supp == NULL) {
			$supplier_id = $this->input->post('id_supplier');
		} else {
			$supplier_id = $supp;
		}
		$this->db->where('id_supplier', $supplier_id);
		return $this->db->get('supplier')->row();
	}
	public function update(){
		$id = $this->input->post('id_supplier');
		$nama_supplier = $this->input->post('nama_supplier');
		$title = strip_tags($this->input->post('nama_supplier'));
		$titleu = strtolower(url_title($title));

		$this->db->where('slug', $titleu);
		$sl = $this->db->get('supplier')->num_rows();
		if ($sl > 0) {
			$slu = strtolower(url_title($title));
			$titleURL = $slu.'-'.time();
		} else {
			$titleURL = strtolower(url_title($title));
		}
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$lat = $this->input->post('lat');
		$longi = $this->input->post('longi');
		$nearby = $this->input->post('nearby');
		$tentang = $this->input->post('tentang');
		$pengumuman = $this->input->post('pengumuman');
		$bintang = $this->input->post('bintang');
		$kota_id = $this->input->post('kota_id');
		$fitur_id = $this->input->post('fitur_id');
		$fiturkamar = $this->input->post('fiturkamar');
		$res1 = implode(",",$fitur_id);
		$res2 = implode(",",$fiturkamar);
		$res = implode(",",$nearby);
		if ($tentang != NULL) {
			$data = array('nama_supplier' => $nama_supplier,'alamat' => $alamat,
							'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
							'fiturkamar' => $res2,'bintang' => $bintang, 'kota_id' => $kota_id, 'nearby' => $res, 'tentang' => $tentang, 'pengumuman' => $pengumuman);
			$this->db->where('id_supplier', $id);
			$this->db->update('supplier', $data);
		} else {
			$data = array('nama_supplier' => $nama_supplier,'alamat' => $alamat,
							'no_telp' => $no_telp, 'email' => $email, 'lat' => $lat, 'longi' => $longi, 'fitur_id' => $res1,
							'fiturkamar' => $res2,'bintang' => $bintang, 'kota_id' => $kota_id, 'nearby' => $res, 'pengumuman' => $pengumuman);
			$this->db->where('id_supplier', $id);
			$this->db->update('supplier', $data);
		}

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
		$this->db->join('produk', 'produk.supplier_id = supplier.id_supplier');
		$this->db->where('supplier.status', $status);
		$sup = $this->db->get()->result();
		$sup1 = array();
		foreach ($sup as $key) {
			$sup1[] = $key->id_supplier;
		}
		$clear_array = array_unique($sup1);

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.status', $status);
		$this->db->where_in('supplier.id_supplier', $clear_array);
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
		$nama_supplier = $this->session->userdata('tempattujuan');
		$status = "1";
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->join('produk', 'produk.supplier_id = supplier.id_supplier');
		$this->db->where('supplier.status', $status);
		$this->db->where('kota', $nama_supplier);
		$sup = $this->db->get()->result();
		$sup1 = array();
		foreach ($sup as $key) {
			$sup1[] = $key->id_supplier;
		}
		$clear_array = array_unique($sup1);

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.status', $status);
		$this->db->where_in('supplier.id_supplier', $clear_array);
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
		$nama_supplier = $this->session->userdata('tempattujuan');
		$status = 1;
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->join('produk', 'produk.supplier_id = supplier.id_supplier');
		$this->db->where('supplier.status', $status);
		$this->db->where('kota.kota', $nama_supplier);
    $sup = $this->db->get()->result();
		$sup1 = array();
		foreach ($sup as $key) {
			$sup1[] = $key->id_supplier;
		}
		$clear_array = array_unique($sup1);
		if ($clear_array != NULL) {

			$this->db->select('*');
			$this->db->from('supplier');
			$this->db->join('kota', 'supplier.kota_id = kota.id_kota');
			$this->db->where('kota.kota', $nama_supplier);
			$this->db->where('supplier.status', $status);
			$this->db->where_in('supplier.id_supplier', $clear_array);
			//$this->db->order_by("nama_supplier", "asc");

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;

		} else {
			return NULL;
		}

  }
	function getFilter($params = array()) {
		$hotel = $this->session->userdata('hotel');
		$nama_supplier = $this->session->userdata('tempattujuan');
		$dari = $this->session->userdata('dari');
		$sampai = $this->session->userdata('sampai');
		$sorting = $this->session->userdata('sorting');
		$nearby = $this->session->userdata('nearby');
		$bintang = $this->session->userdata('bintang');
		$harga = $this->session->userdata('harga');
		$priceRangeArr = explode(',', $harga);
		$bintang = $this->session->userdata('bintang');
		$bintangArr = explode(',', $bintang);
		$fitur_id = $this->session->userdata('fitur_id');
		$fiturArr = explode(',', $fitur_id);
		$status = 1;
		
		if($hotel != NULL) {
			$this->db->where('nama_supplier', $hotel);
			$hotelrow = $this->db->get('supplier')->row();
			$id_hotel = $hotelrow->id_supplier;
		}
		
		$this->db->where('kota', $nama_supplier);
		$cekkota = $this->db->get('kota')->row();
		$this->db->where('tempat', $nearby);
		$ceknear = $this->db->get('nearby')->row();

			$this->db->select('*');
			$this->db->from('supplier');
			$this->db->join('kota', 'supplier.kota_id = kota.id_kota');
			$this->db->where('kota.kota', $nama_supplier);
			$this->db->where('supplier.status', $status);
			$this->db->join('produk', 'produk.supplier_id = supplier.id_supplier');
			if ($ceknear != NULL) {
				$this->db->like('supplier.nearby', $ceknear->id_nearby);
			}
			if ($bintang != NULL) {
				$this->db->where_in('supplier.bintang', $bintangArr);
			}
			if ($fitur_id != NULL) {
				foreach($fiturArr as $keyf => $valuef) {
				    if($keyf == 0) {
				        $this->db->like('supplier.fitur_id', $valuef);
				    } else {
				        $this->db->or_like('supplier.fitur_id', $valuef);
				    }
				}
			}
			if ($sorting != NULL) {
				if ($sorting == "rate") {
					$this->db->order_by('supplier.rate', "DESC");
				} elseif ($sorting == "popular") {
					$this->db->order_by('supplier.popular', "DESC");
				}
			}
			if ($hotel != NULL) {
				$orderhotel = sprintf('FIELD(id_supplier, %s) DESC', $id_hotel);
				$this->db->order_by($orderhotel);
			}
			$tes = $this->db->get()->result();

			$teskey = array();
			foreach ($tes as $keytes) {
				$teskey[] = $keytes->id_supplier;
			}
			$cleartes = array_unique($teskey);

			if ($harga != NULL) {
				$this->db->where('harga >=', $priceRangeArr[0]);
				$this->db->where('harga <=', $priceRangeArr[1]);
			}
			$this->db->where('dari <=', $dari);
			$this->db->where('sampai >=', $dari);
			$this->db->where('status', $status);
			if ($sorting != NULL) {
				if ($sorting == "high") {
					$this->db->order_by("harga", "desc");
				} elseif($sorting == "low") {
					$this->db->order_by("harga", "asc");
				}
			}
			$tes1 = $this->db->get('allotment')->result();

			if ($harga != NULL) {
				$this->db->where('harga_produk >=', $priceRangeArr[0]);
				$this->db->where('harga_produk <=', $priceRangeArr[1]);
			}
			$this->db->where('status', $status);
			if ($sorting != NULL) {
				if ($sorting == "high") {
					$this->db->order_by("harga_produk", "desc");
				} elseif($sorting == "low") {
					$this->db->order_by("harga_produk", "asc");
				}
			}
			$tes2 = $this->db->get('produk')->result();
			$hasil = array();
			if ($tes1 != NULL) {
				foreach ($cleartes as $key => $valuetes) {
					foreach ($tes1 as $key1) {
						if ($valuetes == $key1->supplier_id) {
							$hasil[] = array('id' => $valuetes, 'harga' => $key1->harga);
						} else {
							foreach ($tes2 as $key2) {
								if ($key2->supplier_id == $valuetes) {
									$a = $valuetes;
									$b = $key2->harga_produk;
								}
							} $hasil[] = array('id' => $a, 'harga' => $b);
						}
					}
				}
			} else {
				if ($cleartes != NULL) {
					foreach ($tes2 as $key2) {
						foreach ($cleartes as $key => $valuetes) {
							if ($key2->supplier_id == $valuetes) {
								$a = $valuetes;
								$b = $key2->harga_produk;
								$hasil[] = array('id' => $a, 'harga' => $b);
							}
						}
					}
				}
			}

			$harga = array();
			foreach ($hasil as $key => $row) {
	   			 $harga[$key]  = $row['harga'];
			}

			// Sort the data with attack descending
			if ($sorting != NULL) {
				if ($sorting == "high") {
					array_multisort($harga, SORT_DESC, $hasil);
				} elseif($sorting == "low") {
					array_multisort($harga, SORT_ASC, $hasil);
				}
			}
			$cekid = array();
			foreach ($hasil as $keyharga) {
				$cekid[] = $keyharga['id'];
			}
			$clear_array = array_unique($cekid);
			if ($clear_array != NULL) {
				$this->db->select('*');
				$this->db->from('supplier');
				$this->db->join('kota', 'supplier.kota_id = kota.id_kota');
				$this->db->where('kota.kota', $nama_supplier);
				$this->db->where('supplier.status', $status);
				/*if ($nearby != NULL) {
					$this->db->like('nearby', $ceknear->id_nearby);
				}
				if ($bintang != NULL) {
					$this->db->where_in('supplier.bintang', $bintangArr);
				}
				if ($fitur_id != NULL) {
					foreach($fiturArr as $keyf1 => $valuef1) {
					    if($keyf1 == 0) {
					        $this->db->like('fitur_id', $valuef1);
					    } else {
					        $this->db->or_like('fitur_id', $valuef1);
					    }
					}
				}*/
				if ($hotel != NULL) {
				$orderhotel = sprintf('FIELD(id_supplier, %s) DESC', $id_hotel);
				$this->db->order_by($orderhotel);
			}
				$this->db->where_in('supplier.id_supplier', $clear_array);
				if ($sorting == "rate") {
					$this->db->order_by("rate", "DESC");
				} elseif ($sorting == "popular") {
					$this->db->order_by("popular", "DESC");
				} else {
					$order = sprintf('FIELD(id_supplier, %s)', implode(', ', $clear_array));
					$this->db->order_by($order);
				}


		        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
		            $this->db->limit($params['limit'],$params['start']);
		        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
		            $this->db->limit($params['limit']);
		        }

		        $query = $this->db->get();

		        return ($query->num_rows() > 0)?$query->result_array():FALSE;
			} else {
				return "kosong";
			}
  }
	public function updatenilai() {
		$supplier_id = $this->input->post('supplier_id');
		$this->db->where('supplier_id', $supplier_id);
    $ulasan = $this->db->get('komentar')->result();
    $cekrata = array();
    foreach ($ulasan as $keyu) {
      if ($keyu->supplier_id == $supplier_id) {
        $cekrata[] = $keyu->rata;
      }
    }
    $countula = count($cekrata);
    $rataula = array_sum($cekrata);
    $rate = $rataula / $countula;
		$datanilai = array('rate' => $rate, 'popular' => $countula);
		$this->db->where('id_supplier', $supplier_id);
    $this->db->update('supplier',$datanilai);
	}
	public function fiturkamar() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('id_supplier', $supplier_id);
		return $this->db->get('supplier')->row();
	}
	public function popular() {
		$status = 1;
		$this->db->where('status', $status);
		$this->db->order_by('popular', "DESC");
		return $this->db->get('supplier')->result();
	}
	public function landingmodal() {
		$id = $this->input->post('id');
		$this->db->where('id_supplier', $id);
		$data = $this->db->get('supplier')->row();
		$kota = $data->kota_id;
		
		$status = "1";
		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->join('produk', 'produk.supplier_id = supplier.id_supplier');
		$this->db->where('supplier.status', $status);
		$this->db->where('supplier.kota_id', $kota);
		$sup = $this->db->get()->result();
		$sup1 = array();
		foreach ($sup as $key) {
			$sup1[] = $key->id_supplier;
		}
		$clear_array = array_unique($sup1);

		$this->db->where('status', $status);
		$this->db->where_in('id_supplier', $clear_array);
    return $this->db->get('supplier')->result();
	}
}
