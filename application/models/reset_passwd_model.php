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

  public function reset($id){

      $hash_password = md5("itc123456");
      $sql = "UPDATE users SET password = '$hash_password' WHERE id = '$id' ";
      $query = $this->db->query($sql);
      // return ture;
  }

}
