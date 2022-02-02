<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_Model');
	}
	public function index()
	{
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		$this->load->view('home/home_banner');
		$this->load->view('home/home');
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
	}
}
