<?php
class Account_Model extends CI_Model
{
    private $userID;

    public function __construct()
    {
        
    }
    public function register()
    {
         $data = array(
             'user_email' => $this->input->post('email'), 
             'user_name' => $this->input->post('username'),  
             'user_password' => MD5($this->input->post('password')),   
            ); 
        return $this->db->insert('users',$data);
    }
    public function login()
    {
         $data = array(
             'user_email' => $this->input->post('email'),  
             'user_password' => MD5($this->input->post('password')),   
            ); 
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where($data);
        $result = $this->db->get()->row();
        if($result){
            return $result;
        }
        return false;

    }
    public function saveMetaWallet()
    {
        $userID = $_SESSION['login']->rowid;
         $data = array(
             'meta_mask_key' => $this->input->post('walletID')  
            ); 
        $this->db->where('rowid',$userID);
        return $this->db->update('users',$data);
    }
	public function sendMailPassword($enail){
		$data = array(
			'user_email' => $enail,  
		   ); 
	   $this->db->select('*');
	   $this->db->from('users');
	   $this->db->where($data);
	   $result = $this->db->get()->row();
	   if($result){

		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZXYZ';
        $randstring = '';
        for ($i = 0; $i < 10; $i++) {
            $randstring .= $characters[rand(0, strlen($characters)-2)];	
        }


		$this->db->set('forget_password',$randstring);
		$this->db->where('rowid',$result->rowid);
		$this->db->update('users');

		$link =  base_url().'forget_password?email='.$enail.'&token='.$randstring;

		$this->load->library('email');

		$this->email->from('https://inksea.io', 'InkSea Account');
		$this->email->to($enail);
	

		// echo $link;
		$data['link'] = $link;
		$message = $this->load->view('account/forget_page.php',$data,true);

		$this->email->subject('Forget Password Link');
		$this->email->message($message);

		$this->email->send();



		   return true;
	   }
	   return false;
	}

	public function verify_token($enail,$token){
		$data = array(
			'user_email' => $enail,  
			'forget_password' => $token,  
		   ); 
	   $this->db->select('*');
	   $this->db->from('users');
	   $this->db->where($data);
	   $result = $this->db->get()->row();
	   if($result){
		   $_SESSION['forget_link'] = $result->rowid;
		   return $result;
	   }
	   return false;
	}

	public function update_password($user){
		$data = array(
			'user_password' => MD5($this->input->post('password')),   
			'forget_password' => '',   
		   ); 
		$this->db->where('rowid',$user);
	   	return $this->db->update('users',$data);
	}
}
