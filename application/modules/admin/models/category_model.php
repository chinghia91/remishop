<?php
/**
 * Created by PhpStorm.
 * User: Nghia
 * Date: 9/17/2014
 * Time: 10:09 PM
 */

class Category_model extends CI_Model
{
    protected $_table = 'tbl_category';

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function list_category()
    {
        return $this->db->get($this->_table)->result_array();
    }

    public function get_category($id = NULL)
    {
        $this->db->where('cate_id', $id);
        return $this->db->get($this->_table)->row_array();
    }

    public function insert_category($cate_name = NULL)
    {
        if ($cate_name == NULL) {
            return FALSE;
        }
        $this->db->insert($this->_table, array('cate_name' => $cate_name));
    }

    public function edit_category($cate_id = NULL, $cate_name = NULL)
    {
        if ($cate_id == NULL || $cate_name == NULL) {
            return FALSE;
        }
        $this->db->where('cate_id', $cate_id);
        $this->db->update($this->_table, array('cate_name' => $cate_name));
    }

    public function check_category($cate_name = NULL, $cate_id = NULL)
    {
        if (!$cate_name) {
            return TRUE;
        }
        $this->db->where('cate_name', $cate_name);
        if ($cate_id) {
            $this->db->where('cate_id !=', $cate_id);
        }
        $row = $this->db->count_all_results($this->_table);
        if ($row > 0)
        {
            return TRUE;
        }
        return FALSE;
    }
}