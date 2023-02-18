<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Advisor_report extends CI_Controller
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
        $data['items'] = $this->advisor_report_model->get_department_items();

        $this->load->view('header');
        $this->load->view('nav');
        $this->load->view('advisor_report/index', $data);
        $this->load->view('footer');
    }

    public function report()
    {
        $data = [];
        $data['leftmenu'] = $this->load->view('leftmenu', '', true);
        $data['items'] = $this->advisor_report_model->get_approving();
        $data['homerooms'] = $this->advisor_report_model->getHomeroomItems();

        $this->load->view('header');
        $this->load->view('advisor_report/report', $data);
        $this->load->view('footer_print');
    }
}
