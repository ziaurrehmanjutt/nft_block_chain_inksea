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
		
		if(isset($_POST['place_a_bid'])){
			$res = $this->Home_Public_Model->place_a_bid();
			$_SESSION["user_status_info"] = "Bid Add Successfully";
			redirect('/');
		}else if(isset($_POST['post_type']) && $_POST['post_type'] == 'report_nft'){
			$res = $this->Home_Public_Model->report_nft();
			echo json_encode($res);
			die; 
		}else if(isset($_POST['post_type']) && $_POST['post_type'] == 'do_ratting'){
			$res = $this->Home_Public_Model->do_ratting();
			echo json_encode($res);
			die; 
		}

		//
		$data['live'] =  $this->Home_Public_Model->get_live_auction();//
		$data['sales1'] =  $this->Home_Public_Model->get_active_sales();//
		$data['categories'] =  $this->Home_Public_Model->all_categories();//
		$data['users'] =  $this->Home_Public_Model->get_home_users();//
		
		

		
		
		// echo "<pre>";
		// print_r($data); // : ''
		// die;
		$this->load->view('includes/header');
		$this->load->view('includes/menues_header');
		$this->load->view('home/home_banner');
		$this->load->view('home/home',$data);
		$this->load->view('includes/footer_before');
		$this->load->view('includes/footer');
		$this->load->view('home/home_script');

		
	}

	public function search(){

		if(isset($_POST['place_a_bid'])){
			$res = $this->Home_Public_Model->place_a_bid();
			$_SESSION["user_status_info"] = "Bid Add Successfully";
			redirect('/');
		}else if(isset($_POST['post_type']) && $_POST['post_type'] == 'report_nft'){
			$res = $this->Home_Public_Model->report_nft();
			echo json_encode($res);
			die; 
		}else if(isset($_POST['post_type']) && $_POST['post_type'] == 'do_ratting'){
			$res = $this->Home_Public_Model->do_ratting();
			echo json_encode($res);
			die; 
		}
		
		$data['live'] =  $this->Home_Public_Model->get_live_auction_filter();//
		$data['categories'] =  $this->Home_Public_Model->all_categories();//



		// echo "<pre>";
		// print_r($data);die;
        $this->load->view('includes/header');
        $this->load->view('includes/menues_header');
        // $this->load->view('activity/activity_slider');
        $this->load->view('live_search/live.php', $data);
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
        $this->load->view('live_search/live_script');
		$this->load->view('home/home_script');
    }

	public function single_sale_public($id){

		
		$result['data'] = $this->Home_Public_Model->single_sale($id);
        $result['bids'] = $this->Home_Public_Model->get_all_bids($id);
        $result['likes'] = $this->Home_Public_Model->sale_rattings($id);
        $result['admin_ket'] = $this->getAdminKey();
		
        $this->load->view('includes/header');
        $this->load->view('includes/menues_header');
        // $this->load->view('activity/activity_slider');
        $this->load->view('sales/single_sales.php', $result);
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
		$this->load->view('home/home_script');
        // $this->load->view('live_search/live_script');
		// $this->load->view('home/home_script');
    }
}
