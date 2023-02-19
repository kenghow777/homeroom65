<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Addition_controller extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->model('reset_passwd_model');
  }

  public function home(){
    $this->load->view('nav');
    $this->load->view('home_view'); // ? หน้าแรก
    $this->load->view('footer');
    
  }
  
  public function login(){

    $this->load->view('nav');
    $this->load->view('additon_view/login_form'); // ? ฟอร์ม Login
    $this->load->view('footer');
    
  }
  
  public function staff_list(){

    $this->load->view('nav');
    $this->load->view('additon_view/staff_list'); // ? แสดงรายชื่อใช้
    $this->load->view('footer');
    
  }
  
  public function reset_password(){

    $this->reset_passwd_model->display_users();

    $this->load->view('nav');
    $this->load->view('additon_view/reset_password'); // ? รีเซ็ตรหัสผ่าน
    $this->load->view('footer');
    
  }
  
  public function teacher_list_inout(){

    $this->load->view('nav');
    $this->load->view('additon_view/teacher_list_inout'); // ? จัดการรายชื่อครู เข้า/ออก
    $this->load->view('footer');
  
  }
  
  public function advisor_report(){

    $this->load->view('nav');
    $this->load->view('additon_view/advisor_report_view'); // ? จัดการรายชื่อครู เข้า/ออก
    $this->load->view('footer');
  
  }

}
