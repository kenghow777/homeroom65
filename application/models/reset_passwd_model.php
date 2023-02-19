<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Reset_passwd_model extends CI_Model{

  public function display_users(){
    
  }

  public function check_email($email){
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $query = $this->db->query($sql);
    $user = $query->row();

    if($user){
      echo "<pre>";
      print_r($user);
      echo "</pre>";

      $user_reset = [
        'user_id' => $user->id,
        'email' => $user->email,
      ];

      $this->session->set_userdata($user_reset);

      return true;
    }
  }

}
