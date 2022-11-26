<?php
class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('register_model');
    }

    public function signup()
    {
        $nama = $this->input->post('nama');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $level = $this->input->post('level');

        $data = array(
            'nama' => $nama,
            'username' => $username,
            'password' => md5($password),
            'level' => $level,
        );
        $this->register_model->signup($data);
        $this->session->set_flashdata('success', 'Data berhasil di register!');
        redirect('login');
    }
}