<?php
include "User_Model.php";
class Activity_Model extends User_Model
{
    public function __construct()
    {
        
    }

    public function getCategories(){
        $this->db->select('*');
        $this->db->from('all_categories');
        // $this->db->where($data);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function saveNewNft($nft_file){

        $unique= md5(date('u')).uniqid('1',true);

        $type_id = $this->input->post('type_id');
        $nft_price = $this->input->post('nft_price');
        $nft_name = $this->input->post('nft_name');
        $nft_descriptions = $this->input->post('nft_descriptions');
        $nft_category = $this->input->post('nft_category');
        // $nft_file = $this->input->post('nft_file');
        $dataArray = array(
            'type_id' => $type_id,
            'created_at' => date('Y-m-d H:i:s'),
            'created_by' => $this->userID,
            'nft_user' => $this->userID,
            'nft_token' => $unique,
            'nft_status' => 0,
            'nft_price' => $nft_price,
            'price_currency' => 1,
            'nft_name' => $nft_name,
            'nft_descriptions' => $nft_descriptions,
            'nft_category' => $nft_category,
            'nft_file' => $nft_file,
        );
        
      
        $this->db->insert('all_nfts_list', $dataArray);
		return   $this->db->insert_id();
    }

    public function all_nft_of_users(){
        $this->db->select('all_nfts_list.*,cate_name');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('all_nfts_list');
        $this->db->where('nft_user',$this->userID);
        $result = $this->db->get()->result_array();
        return $result;
    }

}