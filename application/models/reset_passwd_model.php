<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Reset_passwd_model extends CI_Model{

  public function display_users(){
    $sql = "SELECT * FROM users LIMIT 5";
    $query = $this->db->query($sql);
    return $users = $query->result();
  }

  public function check_email($email){
    if($email !== null){
      $sql = "SELECT * FROM users WHERE email = '$email' ";
      $query = $this->db->query($sql);
      return $user = $query->row();
    }
  }

}
