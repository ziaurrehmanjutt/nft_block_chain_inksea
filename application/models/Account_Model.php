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
             'user_email' => $this->input->post('walletID')  
            ); 
        $this->db->where('rowid',$userID);
        return $this->db->update('users',$data);
    }
}