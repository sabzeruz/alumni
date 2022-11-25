<?php
defined('BASEPATH') or exit('No direct script access allowed');

class login_model extends CI_Model
{
    public function go_login()
    {
        $email = $this->input->post('username', true);
        $pw = $this->input->post('password', true);

        $this->db->where('username', $email);
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
            } else {
                $this->session->set_flashdata('pesan', 'Password Salah...');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Username tidak terdaftar...');
            redirect('login');
        }
    }
}