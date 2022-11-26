<?php
class Pengaturan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pengaturan_model');
    }

    public function index()
    {
        $this->load->view('templates/sidebar');
        $data['rpl'] = $this->pengaturan_model->jumlah_rpl();
        $data['tkj'] = $this->pengaturan_model->jumlah_tkj();
        $data['tja'] = $this->pengaturan_model->jumlah_tja();
        $data['mm'] = $this->pengaturan_model->jumlah_mm();
        $data['anm'] = $this->pengaturan_model->jumlah_anm();
        $isi['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('halaman_utama', $isi);
        $this->load->view('templates/footer');
    }

    public function beranda()
    {
        $this->load->view('templates/sidebar');
        $data['rpl'] = $this->pengaturan_model->jumlah_rpl();
        $data['tkj'] = $this->pengaturan_model->jumlah_tkj();
        $data['tja'] = $this->pengaturan_model->jumlah_tja();
        $data['mm'] = $this->pengaturan_model->jumlah_mm();
        $data['anm'] = $this->pengaturan_model->jumlah_anm();
        $data['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('halaman_utama', $data);
        $this->load->view('templates/footer');
    }

    public function galeri()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('galeri', $isi);
        $this->load->view('templates/footer');
    }


    public function profil_sekolah()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('halaman_profil_sekolah', $isi);
        $this->load->view('templates/footer');
    }

    public function profil_jurusan()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->ambil_jurusan(); //select * from supplier
        $this->load->view('halaman_profil_jurusan', $isi);
        $this->load->view('templates/footer');
    }

    public function data_siswa()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('data_siswa', $isi);
        $this->load->view('templates/footer');
    }

    public function program_studi()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->panggil(); //select * from supplier
        $this->load->view('halaman_profil_jurusan', $isi);
        $this->load->view('templates/footer');
    }

    public function data_program_studi()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->ambil_jurusan(); //select * from supplier
        $this->load->view('halaman_data_jurusan', $isi);
        $this->load->view('templates/footer');
    }

    public function data_program_siswa()
    {
        $this->load->view('templates/sidebar');
        $isi['jurusan'] = $this->pengaturan_model->ambil_jurusan(); //select * from supplier
        $isi['siswa'] = $this->pengaturan_model->ambil_siswa(); //select * from supplier
        $this->load->view('halaman_data_siswa', $isi);
        $this->load->view('templates/footer');
    }
    public function data_program_user()
    {
        $this->load->view('templates/sidebar');
        $isi['user'] = $this->pengaturan_model->ambil_user(); //select * from supplier
        $this->load->view('halaman_data_user', $isi);
        $this->load->view('templates/footer');
    }

    public function tambah_data_program_Studi()
    {
        $this->load->view('templates/sidebar');
        $data['jurusan'] = $this->pengaturan_model->ambil_program_studi(); //select * fromsupplier
        $this->load->view('tambah_program_studi', $data);
        $this->load->view('templates/footer');
    }


    public function edit_data_alumni()
    {
        $nis = $this->input->post('nis');
        $data = array(
            'nama_siswa'    => $this->input->post('nama_siswa'),
            'kota_lahir'    => $this->input->post('kota_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'kesan'         => $this->input->post('kesan'),
        );
        $this->Mdashboard->edit_alumni($nis, $data);
        $this->session->set_flashdata('Sukses', 'Data Berhasil disimpan...');
        redirect('dashboard/data_alumni');
    }


   

    public function simpan()
    {

        $id    = $this->input->post('id');

        $cek_data = $this->pengaturan_model->cek_data($id);
        if (!empty($cek_data)) {
            $this->session->set_flashdata('duplicate', 'Kode Jurusan Sudah ada...');
            redirect('pengaturan');
        }

        $nis   = $this->input->post('nis');
        $nama_siswa  = $this->input->post('nama_siswa');
        $kota_lahir  = $this->input->post('kota_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $kesan  = $this->input->post('kesan');
        $jurusan  = $this->input->post('jurusan');


        $data = array(
            'id'   => $id,
            'nis'  => $nis,
            'nama_siswa' => $nama_siswa,
            'kota_lahir' => $kota_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'kesan' => $kesan,
            'jurusan' => $jurusan,

        );


        if (!(empty($_FILES['foto']['name']))) {
            $file_name = $nis;
            $config['upload_path']          = FCPATH . 'assets/upload/photo/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $file_name;
            $config['overwrite']            = true;
            $config['max_size']             = 1024; // 1MB


            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $pesan = $this->upload->display_errors();
                $this->session->set_flashdata('gagalfoto', $pesan);
                redirect('pengaturan/data_program_siswa');
            } else {
                $uploaded_data = $this->upload->data();
                $data['foto'] = $uploaded_data['file_name'];
            }
        }
        $this->pengaturan_model->simpan($data);
        $this->session->set_flashdata('success', 'Data Berhasil disimpan...');
        redirect('pengaturan/data_program_siswa');
    }

     public function simpan_jurusan()
    {
        $kode_jurusan    = $this->input->post('kode_jurusan');
        $cek_data = $this->pengaturan_model->cek_data_jurusan($kode_jurusan);
        if (!empty($cek_data)) {
            $this->session->set_flashdata('duplicate', '"Duplication Data Entry "');
            redirect('pengaturan/profil_jurusan');
        }
        $nama_jurusan   = $this->input->post('nama_jurusan');
        $ketua_jurusan   = $this->input->post('ketua_jurusan');
        $data = array(
            'kode_jurusan'   => $kode_jurusan,
            'nama_jurusan'  => $nama_jurusan,
            'ketua_jurusan'  => $ketua_jurusan,
        );
        $this->pengaturan_model->simpan_jurusan($data);
        $this->session->set_flashdata('success', '"Data Has been Saved"');
        redirect('pengaturan/data_program_studi ');
    }

    public function simpan_user()
    {
        $id_user    = $this->input->post('id_user');
        $cek_data = $this->pengaturan_model->cek_data_jurusan($id_user);
        if (!empty($cek_data)) {
            $this->session->set_flashdata('duplicate', '"Duplication Data Entry "');
            redirect('pengaturan/profil_jurusan');
        }
        $nama  = $this->input->post('nama');
        $username  = $this->input->post('username');
        $password  = $this->input->post('password');
        $level  = $this->input->post('level');
        $status  = $this->input->post('status');
        $data = array(
            'id_user'   => $id_user,
            'nama'  => $nama,
            'username'  => $username,
            'password'  => $password,
            'level'  => $level,
            'status'  => $status,
        );
        $this->pengaturan_model->simpan_user($data);
        $this->session->set_flashdata('success', '"Data Has been Saved"');
        redirect('pengaturan/data_program_user ');
    }

    public function update_data()
    {
        $nis = $this->input->post('nis');
        $nama_siswa = $this->input->post('nama_siswa');
        $kota_lahir = $this->input->post('kota_lahir');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $kesan = $this->input->post('kesan');
        $jurusan = $this->input->post('jurusan');
        $data = array(
            'nis' => $nis,
            'nama_siswa' => $nama_siswa,
            'kota_lahir' => $kota_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'kesan' => $kesan,
            'jurusan' => $jurusan,
        );

        if (!(empty($_FILES['foto']['name']))) {
            $file_name = $nis;
            $config['upload_path']          = FCPATH . 'assets/upload/photo/';
            $config['allowed_types']        = 'gif|jpg|jpeg|png';
            $config['file_name']            = $file_name;
            $config['overwrite']            = true;
            // $config['max_size']             = 6044; // 1MB
            // $config['max_width']            = 1080;
            // $config['max_height']           = 1080;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if (!$this->upload->do_upload('foto')) {
                $pesan = $this->upload->display_errors();
                $this->session->set_flashdata('gagal', $pesan);
                redirect('pengaturan/data_program_siswa');
            } else {
                $uploaded_data = $this->upload->data();
                $data['foto'] = $uploaded_data['file_name'];
            }
        }

        $this->pengaturan_model->update_data_siswa($nis, $data);
        $this->session->set_flashdata('Edit', 'Data Has Been Edited');
        redirect('pengaturan/data_program_siswa');
    }
    public function update_jurusan()
    {
        $kode_jurusan  = $this->input->post('kode_jurusan');
        $nama_jurusan = $this->input->post('nama_jurusan');
        $ketua_jurusan = $this->input->post('ketua_jurusan');
        $data = array(
            'kode_jurusan'  => $kode_jurusan,
            'nama_jurusan' => $nama_jurusan,
            'ketua_jurusan' => $ketua_jurusan,
        );

        

        $this->pengaturan_model->update_data($kode_jurusan, $data);
        redirect('pengaturan/data_program_studi');
    }

    public function update_data_user()
    {
        $id_user  = $this->input->post('id_user');
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');
        $status = $this->input->post('status');
        $data = array(
            'id_user'  => $id_user,
            'nama' => $nama,
            'username' => $username,
            'password' => $password,
            'level' => $level,
            'status' => $status,
        );

        

        $this->pengaturan_model->update_data_user($id_user, $data);
        redirect('pengaturan/data_program_user');
    }

    public function hapus($kode_jurusan = null)
    {
        if (!isset($kode_jurusan)) show_404(); // menampilkan halaman error 404 jika kode_jurusan tidak ditemukan

        if ($this->pengaturan_model->hapus($kode_jurusan)) {
            return redirect(base_url('pengaturan/program_studi'));
        }
    }

    public function delete_data_jurusan()
    {
        $kode_jurusan  = $this->input->post('kode_jurusan');
        $this->pengaturan_model->delete_data($kode_jurusan);
        $this->session->set_flashdata('Hapus', 'Data berhasil dihapus');
        redirect(base_url('pengaturan/data_program_studi'));
    }

    public function delete_data_siswa()
    {
        $id  = $this->input->post('id');
        $this->pengaturan_model->hapus($id);
        $this->session->set_flashdata('Hapus', 'Data berhasil dihapus');
        redirect(base_url('pengaturan/data_program_siswa'));
    }
   
     public function delete_data_user()
    {
        $id_user  = $this->input->post('id_user');
        $this->pengaturan_model->hapus($id_user);
        $this->session->set_flashdata('Hapus', 'Data berhasil dihapus');
        redirect(base_url('pengaturan/data_program_user'));
    }

    public function buka_tja($tahun = null)
    {
        $jurusan = 'TJA';
        $data['tahun'] = $tahun;
        $data['jurusan'] = $this->pengaturan_model->alumni_filter($jurusan, $tahun);
        $data['jurusanku'] = "tja";
        $this->load->view('templates/sidebar');
        $this->load->view('halaman_data_alumni', $data);
        $this->load->view('templates/footer');
    }

    public function buka_rpl($tahun = null)
    {
        $jurusan = 'RPL';
        $data['tahun'] = $tahun;
        $data['jurusan'] = $this->pengaturan_model->alumni_filter($jurusan, $tahun);
        $data['jurusanku'] = "rpl";
        $this->load->view('templates/sidebar');
        $this->load->view('halaman_data_alumni', $data);
        $this->load->view('templates/footer');
    }

    public function buka_mm($tahun = null)
    {
        $jurusan = 'MM';
        $data['tahun'] = $tahun;
        $data['jurusan'] = $this->pengaturan_model->alumni_filter($jurusan, $tahun);
        $this->load->view('templates/sidebar');
        $data['jurusanku'] = "mm";
        $this->load->view('halaman_data_alumni', $data);
        $this->load->view('templates/footer');
    }

    public function buka_tkj($tahun = null)
    {
        $jurusan = 'TKJ';
        $data['tahun'] = $tahun;
        $data['jurusan'] = $this->pengaturan_model->alumni_filter($jurusan, $tahun);
        $this->load->view('templates/sidebar');
        $data['jurusanku'] = "tkj";
        $this->load->view('halaman_data_alumni', $data);
        $this->load->view('templates/footer');
    }

    public function buka_animasi($tahun = null)
    {
        $jurusan = 'ANM';
        $data['tahun'] = $tahun;
        $data['jurusan'] = $this->pengaturan_model->alumni_filter($jurusan, $tahun);
        $this->load->view('templates/sidebar');
        $data['jurusanku'] = "anm";
        $this->load->view('halaman_data_alumni', $data);
        $this->load->view('templates/footer');
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
        return $this->db->get_where('siswa', ['jurusan' => 'MM'])->num_rows();
    }
}
