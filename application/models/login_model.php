<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function go_login()
    {
        $email = $this->input->post('username', true);
        $pw = $this->input->post('password', true);

        $this->db->where('username', $email); 
        $this->db->where('password', $pw);      
        $user = $this->db->get('user')->row_array();

        if ($user) {
            if (md5($pw, $user['password'])) {
                $data = [
                    'id_user' => $user['id_user'],
                    'nama' => $user['nama'],
                    'level' => $user['level'],
                    'username' => $user['username'],
                    'login' => 1,
                ];
                $this->session->set_userdata($data);
                redirect('pengaturan/beranda');
            } 
        } else {
            $this->session->set_flashdata('pesan', 'Data anda tidak ditemukan di database!');
            redirect('login');
        }
    }
}
