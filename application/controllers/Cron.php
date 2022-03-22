<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// $this->load->model('Account_Model');
		$this->load->model('Home_Public_Model');
	}

    public function run($type  = 1){
        echo $type;
        if($type == '1'){
            
        }
    }
}