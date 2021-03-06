<?php
defined('BASEPATH') or exit('No direct script access allowed');
include "Admin.php";
class Home extends Admin
{

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Account_Model');
		$this->load->model('admin/Settings_Model');
		$this->load->model('admin/Sale_Model');
	} 
	public function index()
	{
		$this->render_view('dashboard/dashboard');
	}

	public function categories()
	{


		if (isset($_POST['add_category'])) {
			$config['upload_path']          = './uploaded/images/categories/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			// $config['max_size']             = 100;
			// $config['max_width']            = 1024;
			// $config['max_height']           = 768;

			// echo '<pre>';
			// print_r($_POST);
			// die;

			$this->load->library('upload', $config);
			if (!$this->upload->do_upload('file_image')) {
				$error = array('error' => $this->upload->display_errors());
				// 	echo '<pre>';
				// print_r($error);
				// die;
				$_SESSION["user_status_info"] = "Image Can't Upload Successfully";
			} else {
				$data = array('upload_data' => $this->upload->data());
				$image = $data['upload_data']['file_name'];
				$this->Settings_Model->add_category($image);
				$_SESSION["user_status_info"] = "Category Added  Successfully";
				redirect('admin/categories', 'refresh');
			}
		} else if (isset($_POST['delete_category'])) {
			$response = $this->Settings_Model->delete_category($_POST['delete_category']);
			$_SESSION["user_status_info"] = "Category Deleted  Successfully";
			redirect('admin/categories', 'refresh');
		}
		$response['list'] = $this->Settings_Model->all_categories();
		$this->render_view('extra/categories.php', $response);
	}

	public function users()
	{
		if (isset($_POST['user_status'])) {
			$response = $this->Settings_Model->change_user_status($_POST['user_id'],$_POST['user_status']);
			$_SESSION["user_status_info"] = "User Updated  Successfully";
			redirect('admin/users', 'refresh');
		}
		$response['list'] = $this->Settings_Model->all_users();
		$this->render_view('extra/users.php', $response,'users');
	}

	public function for_approved()
	{
		if (isset($_POST['approve'])) {
			$response = $this->Settings_Model->approve_nft($_POST['approve']);
			$_SESSION["user_status_info"] = "NFT Approved  Successfully";
			redirect('admin/nft/pending', 'refresh');
		}else if (isset($_POST['delete_nft'])) {
			$response = $this->Settings_Model->delete_nft($_POST['delete_nft']);
			$_SESSION["user_status_info"] = "NFT Deleted Successfully";
			redirect('admin/nft/pending', 'refresh');
		}
		$response['list'] = $this->Settings_Model->get_new_nft();
		$this->render_view('extra/for_approve.php', $response,'users');
	}

	public function nft_sales(){
		$response['list'] = $this->Settings_Model->get_active_sales();
		$this->render_view('sales/active_sale.php', $response,'users');
	}

	public function sale_single($id){
		$response['detail'] = $this->Sale_Model->single_sale($id);
		$response['bids'] = $this->Sale_Model->get_all_bids($id);
		$response['rattlings'] = $this->Sale_Model->sale_rattlings($id);
		$response['complain'] = $this->Sale_Model->sale_complain($id);
		$this->render_view('sales/sale_single.php', $response,'users');
	}

	
	public function settings(){
		if(isset($_POST['meta_mask_key'])){
			$this->form_validation->set_rules('meta_mask_key', 'Name', 'trim|required|min_length[15]');
			if ($this->form_validation->run() == FALSE) {
				$_SESSION['error_info'] = "Error";
			} else {
				$this->Settings_Model->update_key($_POST['meta_mask_key']);
			}
			redirect('admin/settings');
		}
		$response['settings'] = $this->Settings_Model->get_settings();
		$this->render_view('extra/settings.php', $response,'users');
	}

	public function payment_waiting(){
		$response['list'] = $this->Sale_Model->get_pending_payments();
		$this->render_view('sales/paymentw.php', $response,'users');
	}

	public function payment_waiting_single($id){
		$response['detail'] = $this->Sale_Model->single_sale($id);
		$this->render_view('sales/paymentw_single.php', $response,'users');
	}

}
