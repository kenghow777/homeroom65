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
    $this->load->model('staff_list_model');
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

    $dep_id = 98;
    // $dep_name = "การบัญชี";

    // ? แสดงรายชื่อครูจากการกด Search
    if(!empty($_POST['users_filter_search'])){
       $this->form_validation->set_rules('users_filter_search', 'Search Department', 'required');
      if ($this->form_validation->run()){
        $dep_name = $this->form_validation->set_value('users_filter_search');
        $data['department_search'] = $this->staff_list_model->display_headdepartment_search($dep_name);
        $head_id_search = $data['department_search'][0]->user_id;
        $dep_id_search = $data['department_search'][0]->major_id;
     }
    }
    
    // ? แสดงรายชื่อครูจากการกด dropdown
    if(!empty($_POST['users_filter_user_dep'])){
       $this->form_validation->set_rules('users_filter_user_dep', 'Enter Department', 'required');
      if ($this->form_validation->run()){
        $dep_id = $this->form_validation->set_value('users_filter_user_dep');
     }
    }

    $data = array(
      'user_type' => $this->session->userdata('user_type'),
      'user_name' => $this->session->userdata('user_type'),
    );
    
    // ? แสดงแผนกทั้งหมด
    $data['department'] = $this->staff_list_model->display_dep();

    // ? หาหัวหน้าแผนก
    $data['headdepartment'] = $this->staff_list_model->display_headdepartment($dep_id);
    $head_id = $data['headdepartment'][0]->user_id;
    
    if(!empty($dep_id_search) AND !empty($head_id_search)){
      $data['advisors'] = $this->staff_list_model->display_dep_select($dep_id, $head_id,$dep_id_search ,$head_id_search);
    }else{
      $data['advisors'] = $this->staff_list_model->display_dep_select($dep_id, $head_id, "", "");
    }
    // $data['advisors'] = $this->staff_list_model->display_dep_select($dep_id, $head_id,$dep_id_search ,$head_id_search);

    $this->load->view('nav');
    $this->load->view('left-menu' , $data);
    $this->load->view('additon_view/staff_list' , $data); // ? แสดงรายชื่อใช้
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
    $this->load->model('advisor_report_model');
    $menu['user_type'] = $this->session->userdata('user_type');
    $data['departments'] = $this->advisor_report_model->get_department_items();
    $data['semesters'] = $this->advisor_report_model->getSemesterItems();
    $this->load->view('nav');
    $this->load->view('left-menu' , $menu);
    $this->load->view('additon_view/advisor_report_view',$data); // ?
    $this->load->view('footer');
  
  }
// หน้าที่สร้างขึ้นมาใหม่
  public function advisor_print_report(){
    // echo $this->input->get('semester_id');
    // $department_id = $this->input->get('department_id');
    $this->load->model('advisor_report_model');
    $data = $this->advisor_report_model->get_approving();
    
    // echo '<pre>';
    // var_dump($data[0]);
    // echo '<hr>';
    // var_dump($data);
  }

}
