<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    public function __construct()
    {
        // โหลด libraries

        parent::__construct();
        $this->load->library('session');
    }

    public function is_login(){
        // ดึงข้อมูลจาก session

        // // ตรวจสอบการ login
        // if (condition){
        //     return true;
        // }

        // return false;
    }

    public function login($email,$password)
    {
        // เข้ารหัส hash ของ password
        $hash_password = md5($password);

        // ดึงข้อมูลจาก table : users
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$hash_password' ";
        $query = $this->db->query($sql);
        $user = $query->row();

        // ตรวจสอบข้อมูล hash กับข้อมูลของ database
        if ($user) {
            // ตั้งค่า session สำหรับการ login
            
            $user_session = [
                'user_id' => $user->id,
                'username' => $user->username,
                'email' => $user->email,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'user_type' => $user->user_type,
                'organization_id' => $user->organization_id,
                'thumbnail' => $user->thumbnail,
                'status' => ($user->activated == 1) ? "STATUS_ACTIVATED" : "STATUS_NOT_ACTIVATED",
            ];

            $this->session->set_userdata($user_session);

            return true;
        }


        // ตั้งค่า error ผ่าน validation form

        return false;
    }

    public function logout()
    {
        // ลบค่าทั้งหมดใน session
        $this->session->sess_destroy();
        return true;
    }
}
