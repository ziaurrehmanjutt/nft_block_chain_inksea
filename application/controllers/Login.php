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
				$_SESSION['error_info'] = "Invalid Login Detail";
				// $this->load->view('myform');
				// var_dump($_POST);
				// echo validation_errors();die;
			} else {
				$response  = $this->Account_Model->login();
				if ($response) {
					$_SESSION['login'] = $response;

					//	print_r($response->user_type);die;
					if ($response->user_type == '2') {
						redirect('admin/users', 'refresh');
					} else {
						redirect('/', 'refresh');
					}
					exit();
				} else {
					$_SESSION['error_info'] = "Invalid Login Detail";
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
				redirect('login', 'refresh');
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
	{ //wallet
		if (isset($_POST['wallet']) && $_POST['wallet'] == 'Meta') {
			$this->Account_Model->saveMetaWallet(); //
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

	public function logout()
	{
		unset($_SESSION['login']);
		redirect('/', 'refresh');
	}

	public function profile()
	{
	}

	public function linkedin_redirect()
	{



		



		$user = array();
	

		//Include the linkedin api php libraries
		include_once APPPATH . "libraries/LinkedIn/http.php";
		include_once APPPATH . "libraries/LinkedIn/oauth_client.php";

		$linkedin_api_key = '78vh9a778ag8ju';
		$linkedin_api_secret = 'nny4rIdd5AgMnx0l';
		$linkedin_redirect_url = 'https://localhost/nft/linkedin_redirect';
		$linkedin_scope ='r_basicprofile r_emailaddress';


		$user;
		$client = new oauth_client_class();

		$client->debug = true;
		$client->debug_http = true;
		$client->redirect_uri =$linkedin_redirect_url;
		$client->server = "LinkedIn";
		$client->client_id =$linkedin_api_key;
		$client->client_secret = $linkedin_api_secret;
		$client->scope = $linkedin_scope;
	
		if (($success = $client->Initialize())) {
			if (($success = $client->Process())) {
				if (strlen($client->authorization_error)) {
					$client->error = $client->authorization_error;
					$success = false;
				} elseif (strlen($client->access_token)) {
					$success = $client->CallAPI('http://api.linkedin.com/v1/people/~:(id,email-address,first-name,last-name,picture-url,public-profile-url,formatted-name)', 'GET', array(
						'format' => 'json'
					), array(
						'FailOnAccessError' => true
					), $user);
				}
			}
			$success = $client->Finalize($success);
			$_SESSION["member_id"] = 'OK';
		}
		if ($client->exit) {
			exit();
		}
		if ($success) {
			print_r($user);
			var_dump($success);
			// Do your code with the Linkedin Data
		} else {
			echo "Error";
			$error = $client->error;
			var_dump($error);
		}



		die;
	

	
	}
}
//