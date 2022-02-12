<?php
class Home_Public_Model extends CI_Model
{


    public function __construct()
    {
    }
    public function get_live_auction()
    {
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_sales.rowid');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function all_categories(){
        $this->db->select('*');
        $this->db->from('all_categories');
        return $this->db->get()->result_array();
    }
}
