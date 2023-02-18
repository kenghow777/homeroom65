<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        // load models

        parent::__construct();
    }

    public function index()
    {
        $data = [];
        $data['leftmenu'] = $this->load->view('leftmenu', '', true);
        $data['pagination'] = $this->users_model->get_pagination();
        $data['items'] = $this->users_model->get_items(['limit' => 50]);

        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('users/index', $data);
        $this->load->view('footer');
    }

    public function edit()
    {
        // ดึงค่าจาก input
        $confirm_password = xx;

        // ตั้งค่า validation rule (new_password, confirm_password)

        $data = [];

        $data['errors'] = [];
        if ($this->form_validation->run()) {
            if ($this->users_model->save()) {
                // redirect ไปหน้า users
            } else {
                // ตั้งค่า error message
            }
        }

        $id = $this->input->get_post('id', 0);

        $data['leftmenu'] = $this->load->view('leftmenu', '', true);
        $data['pagination'] = $this->users_model->get_pagination();
        $data['item'] = $this->users_model->get_item($id);

        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('users/form', $data);
        $this->load->view('footer');
    }
}
