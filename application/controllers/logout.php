<?php
class logout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data = [
            'id_user',
            'nama',
            'username',
            'level',
            'login'
        ];
        $this->session->unset_userdata($data);
        redirect('login');
    }
}
