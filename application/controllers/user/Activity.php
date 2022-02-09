<?php
defined('BASEPATH') or exit('No direct script access allowed');
include "User.php";
class Activity extends User
{

    public function __construct()
    {
        parent::__construct();
        // $this->load->model('Account_Model');
        $this->load->model('user/Activity_Model');
    }
    public function index()
    {
        $this->load->view('includes/header');
        $this->load->view('includes/menues_header');
        $this->load->view('activity/activity_slider');
        $this->load->view('activity/activity.php');
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
        // $this->load->view('account/wallet_script');
    }

    public function create()
    {
        //
        $result['data'] = $this->Activity_Model->getCategories();

        if (isset($_POST['save_nft'])) {

            // echo "<pre>";
            // print_r($_POST);
            // die;
            $this->form_validation->set_rules('nft_name', 'Name', 'trim|required');
            $this->form_validation->set_rules('nft_category', 'Category', 'trim|required');
            $this->form_validation->set_rules('nft_price', 'Price', 'trim|required');
            $this->form_validation->set_rules('nft_descriptions', 'Descriptions', 'trim|required');
            // $this->form_validation->set_rules('select_file', 'File', 'trim|required');
            $this->form_validation->set_rules('type_id', 'TypeID', 'trim|required');
            
            
            if ($this->form_validation->run() == false) {
                // echo "Form Not Submitt SuccessFully!..."; 
            } else {

                $upType = $this->input->post('type_id');

                $config['upload_path']          = './assets/nfts/';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                if($upType == '2'){
                    $config['allowed_types'] =  'MP4|MOV|WMV|AVI|MKV|WEBM|FLV';
                }
                // $config['max_size']             = 100;
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;

                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('select_file')) {
                    // $error = array('error' => $this->upload->display_errors());
                    $_SESSION["error_info"] =$this->upload->display_errors();
                } else {
                    $data = array('upload_data' => $this->upload->data());
                    $image = $data['upload_data']['file_name'];
                     $response = $this->Activity_Model->saveNewNft($image);
                    if ($response) {
                        $_SESSION["user_status_info"] = "Add Employee Successfully";
                    } else {
                        $_SESSION["error_info"] = "Can't Create  Employee Successfully";
                    }
                    redirect('activity', 'refresh');
                }
            }
        }
        $this->load->view('includes/header');
        $this->load->view('includes/menues_header');
        // $this->load->view('activity/activity_slider');
        $this->load->view('activity/create.php', $result);
        $this->load->view('includes/footer_before');
        $this->load->view('includes/footer');
    }
}
