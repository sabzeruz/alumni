<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
        if ($this->session->userdata('login') == "1") {
            redirect('pengaturan');
        }
    }

    public function index()
    {
        $this->form_validation->set_rules('username', 'Username / Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('loginUser');
        } else {
            $this->login_model->go_login();
        }
    }
}