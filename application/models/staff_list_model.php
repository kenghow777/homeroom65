<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Staff_list_model extends CI_Model{
    public function __construct(){
        // โหลด libraries
        parent::__construct();
        $this->load->library('session');
    }
    
    public function display_dep(){
      $sql = "SELECT majors.id , majors.major_name FROM users_headdepartment
      JOIN majors
      WHERE  majors.id = users_headdepartment.major_id AND majors.status = 1 ";
      $query = $this->db->query($sql);
      $dep = $query->result();
      return $dep;
    }
    
    public function display_dep_select($dep_id, $head_id, $dep_id_search, $head_id_search){
      $sql = "SELECT * FROM users_advisor
      JOIN majors
      WHERE majors.id = users_advisor.major_id AND users_advisor.major_id = '$dep_id' ORDER BY users_advisor.user_id = '$head_id' DESC ";

      if(!empty($dep_id_search) AND !empty($head_id_search)){
        $sql = "SELECT * FROM users_advisor
        JOIN majors
        WHERE majors.id = users_advisor.major_id AND users_advisor.major_id = '$dep_id_search' ORDER BY users_advisor.user_id = '$head_id_search' DESC ";
      }

      $query = $this->db->query($sql);
      $dep = $query->result();
      return $dep;
    }

    public function display_headdepartment($dep_id){
      $sql = "SELECT * FROM majors
      JOIN users_headdepartment
      WHERE majors.id = users_headdepartment.major_id AND users_headdepartment.major_id = '$dep_id' ";
      $query = $this->db->query($sql);
      $dep = $query->result();
      return $dep;
    }
    // TODO ค้นหาหัวหน้าแผนกด้วยปุ่มค้นหา (Search)
    public function display_headdepartment_search($dep_name){
      $sql = "SELECT * FROM majors
      JOIN users_headdepartment
      WHERE majors.id = users_headdepartment.major_id AND majors.major_name = '$dep_name' AND majors.status = 1 ";
      $query = $this->db->query($sql);
      $dep = $query->result();
      return $dep;
    }
}
