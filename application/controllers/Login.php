<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('Account_Model');
	}

	public function index()
	{
		if (isset($_POST['submit']) && $_POST['submit']) {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'User Name', 'required|min_length[6]|max_length[20]');
			if ($this->form_validation->run() == FALSE) {
				// $this->load->view('myform');
				// var_dump($_POST);
				// echo validation_errors();die;
			} else {
				$response  = $this->Account_Model->login();
				if($response){
					$_SESSION['login'] = $response;

				//	print_r($response->user_type);die;
					if($response->user_type == '2'){
						redirect('admin/users','refresh');
					}else{
						redirect('/','refresh');
					}
					exit();
				}
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		// $this->load->view('home/home_banner');
		$this->load->view('account/login');
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
	}
	public function register()
	{
		// $this->Account_Model->register();
		if (isset($_POST['submit']) && $_POST['submit']) {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.user_email]');
			$this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[3]|max_length[100]');
			$this->form_validation->set_rules('password', 'User Name', 'required|min_length[6]|max_length[20]');
			if ($this->form_validation->run() == FALSE) {
				// $this->load->view('myform');
				// var_dump($_POST);
				// echo validation_errors();die;
			} else {
				$this->Account_Model->register();
				redirect('login','refresh');
				exit();
			}
		}
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		// $this->load->view('home/home_banner');
		$this->load->view('account/register');
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
	}

	public function wallet()
	{//wallet
		if (isset($_POST['wallet']) && $_POST['wallet'] =='Meta') {
			$this->Account_Model->saveMetaWallet();//
			echo "['ok']";
			return;
		}
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		$this->load->view('account/wallet_banner');
		$this->load->view('account/wallet');
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
		$this->load->view('account/wallet_script');
	}

	public function logout(){
		unset($_SESSION['login']);
		redirect('/','refresh');
	}

	public function profile(){
		
	}
}
