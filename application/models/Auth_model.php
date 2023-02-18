<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Auth_model extends CI_Model
{
    public function __construct()
    {
        // โหลด libraries

        parent::__construct();
    }

    public function is_login()
    {
        // ดึงข้อมูลจาก session

        // ตรวจสอบการ login
        if (condition) {
            return true;
        }

        return false;
    }

    public function login($email = '', $password = '')
    {
        // เข้ารหัส hash ของ password
        $hash_password = xxx;

        // ดึงข้อมูลจาก table : users
        $sql = 'xxx';
        $query = xxx;
        $user = $query->row();

        // ตรวจสอบข้อมูล hash กับข้อมูลของ database
        if (condition) {
            // ตั้งค่า session สำหรับการ login

            [
                'user_id' => $user->xxx,
                'username' => $user->xxx,
                'email' => $user->xxx,
                'firstname' => $user->xxx,
                'lastname' => $user->xxx,
                'user_type' => $user->xxx,
                'organization_id' => $user->xxx,
                'thumbnail' => $user->xxx,
                'status' => ($user->activated == 1) ? STATUS_ACTIVATED : STATUS_NOT_ACTIVATED,
            ];

            return true;
        }

        // ตั้งค่า error ผ่าน validation form

        return false;
    }

    public function logout()
    {
        // ลบค่าทั้งหมดใน session

        return true;
    }
}
