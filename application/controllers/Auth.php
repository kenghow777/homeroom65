<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        // load models

        // load libraries

        parent::__construct();
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
        }

        // ตั้งค่า validation rules (email และ password)

        // ดึงค่าจาก input
        $email = xxxx;
        $password = xxxx;

        // ตรวจสอบ validation
        if ($this->form_validation->run()) {
            // ตรวจสอบข้อมูลการ login
            if ($this->auth_model->login($email, $password)) {
                // redirect ไปที่หน้าหลัก
            } else {
                // ตั้งค่า error ผ่าน validation form
            }
        }

        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('auth/login');
        $this->load->view('footer');
    }

    public function logout()
    {
        // เรียกใช้ model เพื่อ logout

        // redirect ไปหน้าหลัก
    }
}
