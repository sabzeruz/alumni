<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function go_login()
    {
        $email = $this->input->post('username', true);
        $pw = md5($this->input->post('password', true));

        $this->db->where('username', $email);
        $user = $this->db->get('user')->row_array();

        if ($user) {
            if ($user['status'] == '0') {
                $this->session->set_flashdata('pesan', 'Akun anda belum di validasi oleh admin...');
                redirect('login');
            }
            if ($pw == $user['password']) {
                $data = [
                    'id_user' => $user['id_user'],
                    'nama' => $user['nama'],
                    'level' => $user['level'],
                    'username' => $user['username'],
                    'login' => 1,
                ];
                $this->session->set_userdata($data);
                redirect('pengaturan');
            } else {
                $this->session->set_flashdata('pesan', 'Data tidak cocok!');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('pesan', 'Data tidak cocok!');
            redirect('login');
        }
    }
}