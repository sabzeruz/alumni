<?php
    class pengaturan_model extends CI_Model {
        public function panggil() {
            return $this->db->get('siswa')->result(); //select * from supplier; result = bertipe object, result_array = 
        }


        public function ambil_jurusan()
        {
            return $this->db->get('jurusan')->result();
        }

        public function ambil_siswa()
        {
            return $this->db->get('siswa')->result();
        }

        public function ambil_user()
        {
            return $this->db->get('user')->result();
        }


        public function simpan($data) {
            $this->db->insert('siswa', $data); //insert into barang value isi data
            // return $this->insert->insert_id(); //insert_id() harus ada AUTO_INCREMENT
        }

        
        public function simpan_jurusan($data) {
            $this->db->insert('jurusan', $data); //insert into barang value isi data
            // return $this->insert->insert_id(); //insert_id() harus ada AUTO_INCREMENT
        }

        public function update_data($kode_jurusan, $data)
    {
        $this->db->where('kode_jurusan', $kode_jurusan);
        $this->session->set_flashdata('Edit', 'Data Berhasil diedit!');
        $this->db->update('jurusan', $data); //$this->db->update('nama Tabel', $data);

    }
    public function update_data_siswa($nis, $data)
    {
        $this->db->where('nis', $nis);
        $this->db->update('siswa', $data);
    }

    public function hapus($id)
    {
        $this->db->where('id', $id)->delete('siswa');
    }

    public function cek_data($id)
		{
			$this->db->select('*');
			$this->db->from('siswa');
			$this->db->where('id =', $id);
			$query = $this->db->get();
			if ($query->num_rows() != 0) {
				return $query->row();
			} else {
				return false;
			}
		}

        
    public function cek_data_jurusan($kode_jurusan)
    {
        $this->db->select('*');
        $this->db->from('jurusan');
        $this->db->where('kode_jurusan =', $kode_jurusan);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->row();
        } else {
            return false;
        }
    }

        public function delete_data($kode_jurusan)
        {
            $this->db->where('kode_jurusan', $kode_jurusan);
            $this->db->delete('jurusan');
        }

        public function jurusan_filter($jurusan){
            $this->db->order_by('nama_siswa');
            return $this->db->get_where('siswa', ['jurusan' => $jurusan])->result();
        }

        public function alumni_filter($jurusan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('siswa');
        $this->db->where('jurusan =', $jurusan);
        if ($tahun <> null) {
            $this->db->where('tahun_lulus =', $tahun);
        }
        $this->db->order_by('nama_siswa');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return [];
        }
    }
	
    public function jumlah_rpl(){
        return $this->db->get_where('siswa', ['jurusan' => 'RPL'])->num_rows();

    }
    public function jumlah_tkj(){
        return $this->db->get_where('siswa', ['jurusan' => 'TKJ'])->num_rows();
    }

    public function jumlah_tja(){
        return $this->db->get_where('siswa', ['jurusan' => 'TJA'])->num_rows();
    }

    public function jumlah_mm(){
        return $this->db->get_where('siswa', ['jurusan' => 'MM'])->num_rows();
    }
	
    public function jumlah_anm(){
        return $this->db->get_where('siswa', ['jurusan' => 'ANM'])->num_rows();
    }
    
    }   