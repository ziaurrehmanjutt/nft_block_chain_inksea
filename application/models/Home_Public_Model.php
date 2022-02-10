<?php
class Home_Public_Model extends CI_Model
{


    public function __construct()
    {
    }
    public function get_live_auction()
    {

        $this->db->select('nft_sales.*');
        // $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $result = $this->db->get()->result_array();
        return $result;
    }
}
