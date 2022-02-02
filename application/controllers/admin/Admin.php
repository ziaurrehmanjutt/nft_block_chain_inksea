<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function render_view($page = '',$data = [],$extra = false)
    {
        $this->load->view('admin/includes/above_header');
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/start_app_div');
        $this->load->view('admin/includes/side_menue');
        $this->load->view('admin/'.$page,$data,$extra);
        $this->load->view('admin/includes/close_app_div');
        $this->load->view('admin/includes/footer');
        $this->load->view('admin/includes/below_footer');
    }
}
