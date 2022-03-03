<?php
// include_once "Admin_Model.php";
class Sale_Model extends Admin_Model
{
    public function __construct()
    {
        
    }



    public function single_sale($id){
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions,transaction_id1,meta_mask_key,transaction_id2,paid_price');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('nft_sales');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        // $this->db->where('nft_status',1);
        $this->db->where('nft_sales.rowid',$id);
        $result = $this->db->get()->row();
        return $result;
    }

    public function get_all_bids($id){
        $this->db->select('nft_sales_bids.*,user_name,user_image');
        $this->db->join('users', 'users.rowid=nft_sales_bids.user_id');
        $this->db->from('nft_sales_bids');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        // $this->db->where('nft_status',1);
        $this->db->where('nft_sales_bids.rowid',$id);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function sale_rattlings($id){
        $this->db->select('sale_rattings.*,user_name,user_image');
        $this->db->join('users', 'users.rowid=sale_rattings.user_id');
        $this->db->from('sale_rattings');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        // $this->db->where('nft_status',1);
        $this->db->where('sale_rattings.sale_id',$id);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function sale_complain($id){
        $this->db->select('nft_reports.*,user_name,user_image');
        $this->db->join('users', 'users.rowid=nft_reports.user_id','left');
        $this->db->from('nft_reports');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        // $this->db->where('nft_status',1);
        $this->db->where('nft_reports.sale_id',$id);
        $result = $this->db->get()->result_array();
        return $result;
    }


	public function get_pending_payments(){
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('nft_sales');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('sale_ststus',1);
        $this->db->where('nft_status',1);
        $this->db->order_by('nft_sales.rowid','DESC');
        // $this->db->where('nft_sales.rowid',$id);
        return $this->db->get()->result_array();
    } 


    
}
