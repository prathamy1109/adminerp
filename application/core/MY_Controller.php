<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // if (!$this->session->userdata('u_id') && !$this->session->userdata('user_type')) {
        //     return redirect(base_url('login'));
        // }

        date_default_timezone_set("Asia/kolkata");
    }
}
