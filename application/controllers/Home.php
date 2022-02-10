<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Account_Model');
		$this->load->model('Home_Public_Model');
	}
	public function index()
	{
		

		$data['live'] =  $this->Home_Public_Model->get_live_auction();//
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		$this->load->view('home/home_banner');
		$this->load->view('home/home',$data);
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
	}
}
