<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Addition_controller extends CI_Controller{

  public function __construct(){
    parent::__construct();
    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->library('session');
    $this->load->model('reset_passwd_model');
    $this->load->model('report_model');
  }

  public function home(){    

    if(!$this->session->userdata('status')){
      redirect('/auth/login/');
    }

    // echo "<pre>";
    // print_r($this->session->userdata());
    // echo "</pre>";

    $data = array(
      'user_type' => $this->session->userdata('user_type'),
      'firstname' => $this->session->userdata('firstname'),
      'lastname' => $this->session->userdata('lastname'),
    );

    $this->load->view('nav');
    $this->load->view('left-menu', $data);
    $this->load->view('home_view' , $data); // ? หน้าแรก
    $this->load->view('footer');
    
  }
  
  // public function login(){
  //   $this->load->view('nav');
  //   $this->load->view('left-menu');
  //   $this->load->view('additon_view/login_form'); // ? ฟอร์ม Login
  //   $this->load->view('footer'); 
  // }
  
  public function staff_list(){

    $data = array(
      'user_type' => $this->session->userdata('user_type'),
      'user_name' => $this->session->userdata('user_type'),
    );

    $this->load->view('nav');
    $this->load->view('left-menu' , $data);
    $this->load->view('additon_view/staff_list'); // ? แสดงรายชื่อใช้
    $this->load->view('footer');
    
  }
  
  public function reset_password(){

    $data["users"] = $this->reset_passwd_model->display_users();

    $this->form_validation->set_rules('users_filter_search','Searching','required');    
    if ($this->form_validation->run()) {
      // ตรวจสอบข้อมูลการ login
      if($this->reset_passwd_model->check_email($this->form_validation->set_value('users_filter_search'))){
        $data['check_email'] = $this->reset_passwd_model->check_email($this->form_validation->set_value('users_filter_search'));
      }
    }

    $user['user_type'] = $this->session->userdata('user_type');

    $this->load->view('nav');
    $this->load->view('left-menu' ,$user);
    $this->load->view('additon_view/reset_password' ,$data); // ? รีเซ็ตรหัสผ่าน
    $this->load->view('footer');
    
  }
  
  public function teacher_list_inout(){

    $data['user_type'] = $this->session->userdata('user_type');

    $this->load->view('nav');
    $this->load->view('left-menu' , $data);
    $this->load->view('additon_view/teacher_list_inout'); // ? จัดการรายชื่อครู เข้า/ออก
    $this->load->view('footer');
  
  }
  
  public function advisor_report(){

    $data['user_type'] = $this->session->userdata('user_type');

    $this->load->view('nav');
    $this->load->view('left-menu' , $data);
    $this->load->view('additon_view/advisor_report_view'); // ? จัดการรายชื่อครู เข้า/ออก
    $this->load->view('footer');
  
  }

}
