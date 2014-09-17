<?php
/**
 * Created by PhpStorm.
 * User: Nghia
 * Date: 9/16/14
 * Time: 10:06 PM
 */

class Index extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->layout();
    }
}