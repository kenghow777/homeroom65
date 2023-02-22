<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
  public function __construct()
  {
    // load models

    // load libraries

    parent::__construct();

    $this->load->helper(array('form', 'url'));
    $this->load->library('form_validation');
    $this->load->model('auth_model');
    // $this->load->library('tank_auth');
    // $this->lang->load('tank_auth');
  }

  public function index()
  {
    redirect('/auth/login/');
  }

  public function login()
  {
    // check ถ้ามีการ login แล้วให้ redirect ไปหน้าหลัก
    if ($this->auth_model->is_login()) {
      // redirect ไปหน้าหลัก
      // echo "Home Page";
    }

    // ตั้งค่า validation rules (email และ password)

    // ดึงค่าจาก input
    $this->form_validation->set_rules('email', 'Enter Email', 'required');
    $this->form_validation->set_rules('password', 'Enter Password', 'required');
    // $password = $this->input->post('password');

    // ตรวจสอบ validation
    if ($this->form_validation->run()) {
      // ตรวจสอบข้อมูลการ login
      if ($this->auth_model->login(
        $this->form_validation->set_value('email'),
        $this->form_validation->set_value('password')
      )) {
        // redirect ไปที่หน้าหลัก
        redirect('/home');
      } else {
        echo "<div class='alert alert-danger' role='alert'>ข้อมูลผิดพลาดกรุณากรอกข้อมูลใหม่</div>";
        // ตั้งค่า error ผ่าน validation form
      }
    }

    $this->load->view('header');
    // $this->load->view('nav');
    $this->load->view('auth/login');
    $this->load->view('footer');
  }

  public function logout(){
    // เรียกใช้ model เพื่อ logout
    // redirect ไปหน้าหลัก
    $this->auth_model->logout();
    redirect('/auth/login/');
  }
}
