<?php
class User_Model extends CI_Model
{
    public $userID;
    public function __construct()
    {
        if(isset($_SESSION['login'])){
            $this->userID = $_SESSION['login']->rowid;
        }
       
    }

    public function getUserName($id){
        $this->db->select('user_name');
        $this->db->from('users');
        $this->db->where('rowid',$id);
        $result = $this->db->get()->row();
        if($result){
            return $result->user_name;
        }
        return 'UnKnown';
    }
}