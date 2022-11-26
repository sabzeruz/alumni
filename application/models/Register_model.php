<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_model extends CI_Model
{
    public function signup($data)
    {
        $this->db->insert('user', $data);
    }
}