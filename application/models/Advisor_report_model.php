<?php

defined('BASEPATH') or exit('No direct script access allowed');
class Advisor_report_model extends BaseModel
{
    public function getHomeroomItems()
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getSemesterItems()
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getAdvisorGroupItems()
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getMinorItems($major_id = 0)
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getGroupItems($major_id = 0)
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getAllActionItems()
    {
        $sql = 'xxx';
        $query = xxx;
        $items = xxx;

        return $items;
    }

    public function getMajorItem($id = 0)
    {
        $sql = 'xxx';
        $query = xxx;
        $item = $query->row();

        return $item;
    }

    public function get_approving($major_id = 0)
    {
        // ดึงค่าจาก input
        $filter_major = $this->ci->input->get_post('major_id');

        $items = [];

        if ($filter_major) {
            return $items;
        }

        // get homeroom item
        $homeroom_items = $this->getHomeroomItems();

        // get semester items
        $semester_items = $this->getSemesterItems();

        // get major item
        $major_item = $this->getMajorItem($filter_major);

        // get minor items
        $minor_items = $this->getMinorItems($filter_major);

        // get advisor_group items
        $advisor_group_items = $this->getAdvisorGroupItems();

        // get group items
        $group_items = $this->getGroupItems($filter_major);

        // get action items
        $action_items = $this->getAllActionItems();

        foreach ($semester_items as $semester) {
            $item = new stdClass();
            $item->semester_id = $semester->id;
            $item->semester_name = $semester->name;
            $item->majors = [];

            $item_major = new stdClass();
            $item_major->major_id = $major_item->id;
            $item_major->major_name = $major_item->major_name;
            $item_major->minors = [];

            foreach ($minor_items as $minor) {
                $item_minor = new stdClass();
                $item_minor->minor_id = $minor->id;
                $item_minor->minor_name = $minor->minor_name;
                $item_minor->groups = [];

                foreach ($group_items as $group) {
                    if ($group->major_id == $major_item->id && $group->minor_id == $minor->id) {
                        $item_group = new stdClass();
                        $item_group->group_id = $group->id;
                        $item_group->group_name = $group->group_name;

                        $item_group->advisors = [];

                        foreach ($advisor_group_items as $advisor_group) {
                            if ($advisor_group->group_id == $group->id) {
                                $item_advisor = new stdClass();
                                $item_advisor->advisor_id = $advisor_group->advisor_id;
                                $item_advisor->advisor_type = $advisor_group->advisor_type;
                                $item_advisor->firstname = $advisor_group->firstname;
                                $item_advisor->lastname = $advisor_group->lastname;

                                $item_advisor->stats_num_homeroom = count($homeroom_items);
                                $item_advisor->stats_num_checked_percent = 0;

                                $item_advisor->homerooms = [];

                                $tmp_stats_num_checked = 0;

                                foreach ($homeroom_items as $homeroom) {
                                    $item_homeroom = new stdClass();
                                    $item_homeroom->id = $homeroom->id;
                                    $item_homeroom->week = $homeroom->week;
                                    $item_homeroom->is_check = 0;
                                    $item_homeroom->approving = [];

                                    foreach ($action_items as $action) {
                                        if ($action->homeroom_id == $homeroom->id && $action->group_id == $group->id && $action->user_id == $advisor_group->advisor_id) {
                                            $item_approving = new stdClass();
                                            $item_approving->advisor_id = $action->user_id;
                                            $item_approving->advisor_type = $action->user_type;
                                            $item_approving->advisor_status = $action->action_status;

                                            $item_homeroom->is_check = 1;
                                            ++$tmp_stats_num_checked;

                                            array_push($item_homeroom->approving, $item_approving);
                                        }
                                    }

                                    array_push($item_advisor->homerooms, $item_homeroom);
                                }

                                $item_advisor->stats_num_checked_percent = ($tmp_stats_num_checked / $item_advisor->stats_num_homeroom) * 100;

                                array_push($item_group->advisors, $item_advisor);
                            }
                        }

                        array_push($item_minor->groups, $item_group);
                    }
                }

                array_push($item_major->minors, $item_minor);
            }

            array_push($item->majors, $item_major);

            array_push($items, $item);
        }

        return $items;
    }

    public function get_department_items()
    {
        $sql = 'xxx';
        $query = 'xxx';
        $items = $query->result();

        return $items;
    }
}
