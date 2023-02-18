<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Users_model extends BaseModel
{
    public function get_item($id = 0)
    {
        $sql = "xxx WHRER id={$id}";
        $query = xxx;
        $item = $query->row();

        return $item;
    }

    public function save($data = null)
    {
        // ดึงค่าจาก input (new_password, confirm_password)
        $new_password = xx;
        $confirm_password = xx;

        // ตรวจสอบว่า new_password และ confirm_password ตรงกัน
        if (condition) {
            // save ลงฐานข้อมูล

            return true;
        }

        return false;
    }

    public function get_pagination()
    {
        $base_url = '/users/';
        $total_rows = count($this->get_items());
        $per_page = 50;

        return $this->ci->helper_lib->getPagination([
            'base_url' => $base_url,
            'total_rows' => $total_rows,
            'per_page' => $per_page,
        ]);
    }

    public function get_items($options = [])
    {
        $where = $this->get_query_where($options);
        $sql = "xxx {$where}";
        $query = 'xxx';
        $items = xxx;

        return $items;
    }

    public function get_query_where($options)
    {
        // ดึงค่าจาก input
        $filter_search = xxx;
        $filter_user_type = xxx;
        $filter_status = xxx;

        $wheres = [];

        // filter: status
        $options['filter_status'] = $filter_status;
        $filter_status_value = $this->getQueryStatus($options);
        $wheres[] = "activated IN({$filter_status_value})";

        // filter: user_type
        if ($filter_user_type != '') {
            $wheres[] = "user_type='{$filter_user_type}'";
        }

        // filter: search
        if ($filter_search != '') {
            $wheres[] = "(firstname LIKE '%{$filter_search}%' OR lastname LIKE '%{$filter_search}%' OR email LIKE '%{$filter_search}%')";
        }

        // render query
        return $this->renderQueryWhere($wheres, $options);
    }
}
