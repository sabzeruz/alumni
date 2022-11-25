<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register_model extends CI_Model
{
    public function signup($data)
    {
        $this->db->insert('user', $data);
    }
}