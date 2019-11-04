<?php

class User_model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }

    public function registration($name, $username, $password)
    {
        $data = array(
            'NAME' => $name,
            'username' => $username,
            'PASSWORD' => $password
        );
        $this->db->insert('users', $data);
    }

    public function login($username, $password)
    {
        $this->db->where('username', $username);
        $res = $this->db->get('users');
        if ($res->num_rows() != 1) {
            //Error Handling
            return log_message('error', 'User does not exist.');
        } else {
            //get the single row
            $row = $res->result();
            $hash_password = $row->password;
            if (password_verify($password, $hash_password)) {
                $this->session->is_loggedin = true;
                return true;
            } else {
                return false;
            }
        }
    }

    public function is_loggedin()
    {
        if (isset($this->session->is_logged_in)) {
            return $this->session->is_logged_in;
        } else {
            return false;
        }
    }
}
