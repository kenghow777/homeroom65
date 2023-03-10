<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Helper_lib
{
    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->library('session');
    }

    public function getDate($date = '0000-00-00 00:00:00', $format = 'Y/m/d')
    {
        return date_format(date_create($date), $format);
    }

    public function getFilter($name = '', $default = '', $expire = 600)
    {
        $value = '';
        $input_data = $this->ci->input->get_post($name);
        if (!empty($input_data) && $input_data != '') {
            $this->ci->session->set_userdata($name, $input_data);
        }

        $value = $this->ci->session->userdata($name);

        return $value;
    }

    public function getActiveMenu($check = '')
    {
        $url1 = $this->ci->uri->segment(1);
        $url2 = $this->ci->uri->segment(2);
        $css_class = '';
        if ($url2 == '') {
            if ($url1 == $check) {
                $css_class = 'active';
            }
        } else {
            if ($url2 == $check) {
                $css_class = 'active';
            }
        }

        return $css_class;
    }

    public function getPaginationIndex($i = 0, $limit = 10)
    {
        $page = $this->ci->input->get_post('per_page', 1);
        if ($page == 2) {
            return $limit + $i;
        } elseif ($page >= 3) {
            return ($page - 1) * $limit + $i;
        }

        return $i;
    }

    public function getStatusIcon($status = 0)
    {
        $icon = '-';
        if ($status == 0) {
            $icon = '<div class="btn btn-sm btn-danger"><i class="uk-icon uk-icon-remove"></i></div>';
        } elseif ($status == 1) {
            $icon = '<div class="btn btn-sm btn-success"><i class="uk-icon uk-icon-check"></i></div>';
        } elseif ($status == (-1)) {
            $icon = '<div class="btn btn-sm btn-primary"><i class="uk-icon uk-icon-trash"></i></div>';
        }

        return $icon;
    }

    public function getFilterStatus($name = 'filter_status')
    {
        return $this->ci->input->get_post($name);
    }

    public function getStatusHtml($name = 'filter_status')
    {
        return '
            <select name="'.$name.'" onchange="this.form.submit();">
                <option value="all" '.set_select($name, 'all', true).'>- ???????????????????????????????????????????????? -</option>
                <option value="publish" '.set_select($name, 'publish').'>?????????????????????</option>
                <option value="unpublish" '.set_select($name, 'unpublish').'>??????????????????????????????</option>
                <option value="trash" '.set_select($name, 'trash').'>????????????????????????????????????</option>
            </select>
        ';
    }

    public function getPagination($data = [])
    {
        $config['base_url'] = $data['base_url'];
        $config['total_rows'] = $data['total_rows'];
        $config['per_page'] = $data['per_page'];
        $config['use_page_numbers'] = true;
        $config['page_query_string'] = true;
        $config['cur_tag_open'] = '<li class="uk-active"><span>';
        $config['cur_tag_close'] = '</span></li>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="uk-pagination-previous">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="uk-pagination-next">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&gt;';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';

        $this->ci->load->library('pagination');
        $this->ci->pagination->initialize($config);

        return $this->ci->pagination;
    }

    public function getActiveMainMenu($check = '')
    {
        $url1 = $this->ci->uri->segment(1);
        $css_class = '';
        if ($url1 == $check) {
            $css_class = 'active';
        }

        return $css_class;
    }
}
