<?php
/**
 * Created by PhpStorm.
 * User: Nghia
 * Date: 9/16/14
 * Time: 10:00 PM
 */

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function layout($content = '', $data = array())
    {
        $this->load->view('layout/top', $data);
        $this->load->view('layout/sidebar', $data);
        if ($content != NULL)
        {
            $this->load->view($content, $data);
        }
//        $this->load->view('layout/content', $data);
        $this->load->view('layout/footer', $data);
    }
}