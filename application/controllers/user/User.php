<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

    protected $userID;
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['login'])){
            redirect('login');
        }
        if(isset($_SESSION['login'])){
            $this->userID = $_SESSION['login']->rowid;
        }



    }
    public function render_view($page = '',$data = [],$menu = '',$extra = false)
    {
        $active['menu'] = $menu;
        $this->load->view('admin/includes/above_header');
        $this->load->view('admin/includes/header');
        $this->load->view('admin/includes/start_app_div');
        $this->load->view('admin/includes/side_menue',$active);
        $this->load->view('admin/'.$page,$data,$extra);
        $this->load->view('admin/includes/close_app_div');
        $this->load->view('admin/includes/footer');
        $this->load->view('admin/includes/below_footer');
    }
}
