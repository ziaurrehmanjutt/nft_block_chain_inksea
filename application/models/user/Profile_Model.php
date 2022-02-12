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

    public function change_following($id){
        $this->db->select('rowid');
        $this->db->from('all_foloowers');
        $this->db->where('folower_id',$id);
        $this->db->where('folowwing_id',$this->userID);
        $result = $this->db->get()->row();
        if($result){
            $this->db->where('rowid',$result->rowid);
            $this->db->delete('all_foloowers');

            $this->db->set('total_foloowings','total_foloowings - 1',false);
            $this->db->where('rowid',$id);
            $this->db->update('users');
        }else{

            $data = array(
                'folower_id' =>$id,
                'folowwing_id' => $this->userID,
            );
            
            $this->db->insert('all_foloowers', $data);

            $this->db->set('total_foloowings','total_foloowings + 1',false);
            $this->db->where('rowid',$id);
            $this->db->update('users');
        }

        $this->db->select('total_foloowings');
        $this->db->from('users');
        $this->db->where('rowid',$id);
        $result = $this->db->get()->row();
        if($result){
            return $result->total_foloowings;
        }
        return false;
    }

    public function get_live_auction($id)
    {
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('nft_status',1);
        $this->db->where('users.rowid',$id);
        $result = $this->db->get()->result_array();
        return $result;
    }


    //
}