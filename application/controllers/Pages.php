<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Pages extends CI_Controller
{
    public function index()
    {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('pages/homepage');
        $this->load->view('footer');
    }

    public function about()
    {
        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('pages/about');
        $this->load->view('footer');
    }
}
