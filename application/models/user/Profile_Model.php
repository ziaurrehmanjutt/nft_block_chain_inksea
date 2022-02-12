<?php
include "User_Model.php";
class Profile_Model extends User_Model
{
    public function __construct()
    {
        parent::__construct();
        
    }

    public function get_profile(){
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('rowid',$this->userID);
        $result = $this->db->get()->row();
        return $result;
    }

    public function update_profile(){
        $user_name = $this->input->post('user_name');
        $user_descriptions = $this->input->post('user_descriptions');

        $dataArray = array(
            'user_name' => $user_name,
            'user_bio' => $user_descriptions
        );
        $this->db->where('rowid',$this->userID);
        return $this->db->update('users', $dataArray);
    }

    public function update_image($img){
        $dataArray = array(
            'user_image' => $img
        );
        $this->db->where('rowid',$this->userID);
        return $this->db->update('users', $dataArray);
    }

    public function get_profile_other($id){
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->where('rowid',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    //
}