<?php
defined('BASEPATH') or exit('No direct script access allowed');
include "User.php";
class Profile extends User
{

	public function __construct()
	{

		parent::__construct();
		$this->load->model('user/Profile_Model');
	}

	public function profile(){
		if(isset($_POST['profile_update'])){
			// echo "<pre>";
			// print_r($_POST);
			// print_r($_FILES);
			// die;

			$this->form_validation->set_rules('user_name', 'Name', 'trim|required');
            $this->form_validation->set_rules('user_descriptions', 'Descriptions', 'trim|required');
            


            if ($this->form_validation->run() == false) {
                $_SESSION["error_info"] = "Can't Update Profile";
            } else {

				$response = $this->Profile_Model->update_profile();

                $config['upload_path']          = './assets/users/';
                $config['allowed_types']        = 'jpg|png|jpeg|PNG|JPEG|JPG';
                
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('profile_photo')) {
					// echo $this->upload->display_errors();
					// die;
                   $_SESSION["error_info"] = $this->upload->display_errors();
                } else {
                    $data = array('upload_data' => $this->upload->data());
					$image = $data['upload_data']['file_name'];

                    
                    $response = $this->Profile_Model->update_image($image);
                }
				redirect('profile', 'refresh');
            }

		}
		$result['profile'] = $this->Profile_Model->get_profile();
		$result['live'] = $this->Profile_Model->get_live_auction($this->userID);
        $this->load->view('includes/header');
        $this->load->view('includes/menues_header');
        // $this->load->view('activity/activity_slider');
        $this->load->view('profile/profile.php', $result);
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
      
	}
	
	public function other_profile($oid){

		$idOk = base64_decode($oid);
		// 		$input = "SmackFactory";
		// 		$encrypted =	base64_encode('2');
		// 		echo $encrypted;
		// 		$encrypted  =	base64_decode($encrypted);
		// 		echo $encrypted;

		if(!$oid || $oid == $this->userID){
			redirect('profile');
		}

		if(isset($_POST['start_follow'])){
			 $this->Profile_Model->change_following($oid);
		}

		if(isset($_POST['place_a_bid'])){
			$this->load->model('Home_Public_Model');
			$res = $this->Home_Public_Model->place_a_bid();
			$_SESSION["user_status_info"] = "Bid Add Successfully";
			redirect('profile/'.$oid);
		}

		// die;
		$result['profile'] = $this->Profile_Model->get_profile_other($oid);
		if(!$result['profile']){
			redirect('profile');
		}
		$result['live'] = $this->Profile_Model->get_live_auction($oid);
		$this->load->view('includes/header'); 
        $this->load->view('includes/menues_header');
        // $this->load->view('activity/activity_slider');
        $this->load->view('profile/profile_other.php', $result);
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
		$this->load->view('home/home_script');
	}
}
