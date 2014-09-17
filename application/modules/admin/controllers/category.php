<?php
/**
 * Created by PhpStorm.
 * User: Nghia
 * Date: 9/17/2014
 * Time: 10:07 PM
 */

class Category extends MY_Controller
{
    protected $_data = array();

    public function __construct()
    {
        parent::__construct();
        $this->load->model('category_model');
    }

    public function index()
    {
        $this->_data['list_category'] = $this->category_model->list_category();
        $this->layout('category/default', $this->_data);
    }

    public function edit($cate_id = NULL)
    {
        if ($cate_id) {
            $this->_data['category'] = $this->category_model->get_category($cate_id);
        }

        if ($this->input->post())
        {
            $this->form_validation->set_rules('cate_name', 'Tên danh mục', 'trim|required|xss_clean');
            $this->form_validation->set_message('required', '%s không được để trống!');
            if ($this->form_validation->run() == TRUE)
            {
                if ($this->__check_category($cate_id)) {
                    $cate_name = $this->input->post('cate_name');
                    if ($cate_id) {
                        $this->category_model->edit_category($cate_id, $cate_name);
                    } else {
                        $this->category_model->insert_category($cate_name);
                    }
                    redirect(base_url() . "admin/category", "location");
                }
            }
        }
        $this->layout('category/edit', $this->_data);
    }

    /**
     * Check validation form Edit Category
     */
    private function __check_category($cate_id = NULL)
    {
        if ( !$this->category_model->check_category($this->input->post('cate_name'), $cate_id))
        {
            $this->_data['error_category'] = 'Danh mục đã tồn tại!';
            return FALSE;
        }
        return TRUE;
    }
}