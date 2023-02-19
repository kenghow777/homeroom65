<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Reset_password extends CI_Controller{
    public function __construct()
    {
        // load models
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('reset_passwd_model');
    }

    public function check(){

        $this->form_validation->set_rules('users_filter_search','Searching','required');
        
        if ($this->form_validation->run()) {
          // ตรวจสอบข้อมูลการ login
          if($this->reset_passwd_model->check_email($this->form_validation->set_value('users_filter_search'))){
              // redirect ไปที่หน้าหลัก
              redirect('addition/reset_password');
          } else {
            // ตั้งค่า error ผ่าน validation form
            echo "<br> search error";
          }
      }

    }

    public function reset_password_function($id){
      echo $id;
    }

}
