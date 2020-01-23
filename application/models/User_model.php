<?php

class User_model extends CI_Model
{
    public function getUserByEmail($email)
    {
        return $this->db->get_where('user', ['email' => $email])->row_array();
    }
}
