<?php
class Home_Public_Model extends CI_Model
{


    protected $userID = NULL;
    public function __construct()
    {
        if(isset($_SESSION['login'])){
            $this->userID = $_SESSION['login']->rowid;
        }
    }
    public function get_live_auction()
    {
        $this->db->select('expire_at,nft_name,owner_id,user_name,sale_price,total_star,nft_file,nft_sales.rowid');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('nft_status',1);
        $this->db->where('bidding_sale',1);
        $this->db->order_by('total_star','DESC');
        $this->db->limit(6);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function get_active_sales()
    {
        $this->db->select('expire_at,nft_name,owner_id,user_name,sale_price,total_star,nft_file,nft_sales.rowid');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('nft_status',1);
        $this->db->where('bidding_sale',2);
        $this->db->order_by('total_star','DESC');
        $this->db->limit(6);
        $result = $this->db->get()->result_array();
        return $result;
    }


    public function all_categories(){
        $this->db->select('*');
        $this->db->from('all_categories');
        return $this->db->get()->result_array();
    }

    public function report_nft(){
        $sale_id = $this->input->post('sale_id');
        $descriptions = $this->input->post('descriptions');
        
        $data = array(
            'sale_id' => $sale_id,
            'user_id' => $this->userID,
            'descriptions' => $descriptions,
        );
        
        $this->db->insert('nft_reports', $data);
		return   $this->db->insert_id();
    }

    public function place_a_bid(){
        $sale_id = $this->input->post('sale_id');
        $bid_amount = $this->input->post('bid_amount');
        $tax = $bid_amount/100 * 20;
        
        $data = array(
            'sale_id' => $sale_id,
            'bid_amount' => $bid_amount,
            'total_amount' => $tax + $bid_amount,
            'bid_tax'   =>  $tax,
            'user_id' => $this->userID,
        );
        
        $this->db->insert('nft_sales_bids', $data);
		return   $this->db->insert_id();
    }

    public function do_ratting(){
        if(!$this->userID){
            return false;
        }

        $sale_id = $this->input->post('sale_id');
        
        $this->db->select('rowid,ratting_type');
        $this->db->from('sale_rattings');
        $this->db->where('sale_id',$sale_id);
        $this->db->where('user_id',$this->userID);
        $res =    $this->db->get()->row();
        if($res){
            if($res->ratting_type == '1'){
                $this->db->set('ratting_type',0);
                $this->db->where('rowid',$res->rowid);
                $this->db->update('sale_rattings');


                $this->db->set('total_star','total_star - 1',false);
                $this->db->where('rowid',$sale_id);
                $this->db->update('nft_sales');

            }else{
                $this->db->set('ratting_type',1);
                $this->db->where('rowid',$res->rowid);
                $this->db->update('sale_rattings');


                $this->db->set('total_star','total_star + 1',false);
                $this->db->where('rowid',$sale_id);
                $this->db->update('nft_sales');
            }
        }else{
            $data = array(
                'user_id' => $this->userID,
                'sale_id' => $sale_id,
            );
            $this->db->insert('sale_rattings', $data);
    
            $this->db->set('total_star','total_star + 1',false);
            $this->db->where('rowid',$sale_id);
            $this->db->update('nft_sales');
        }

        
        

        $this->db->select('total_star');
        $this->db->from('nft_sales');
        $this->db->where('rowid',$sale_id);
        $res =    $this->db->get()->row();
        if($res){
            return $res->total_star;
        }
        return false;
    }

    public function get_home_users(){
        $this->db->select('users.*,(SELECT COUNT(all_nfts_list.rowid) as tnft FROM all_nfts_list where all_nfts_list.nft_user = users.rowid) as tnft');
        $this->db->from('users');
        $this->db->where('user_type','1');
        $this->db->order_by('total_foloowings','DESC');
        $this->db->limit('8');
        return $this->db->get()->result_array();
    }

    public function get_live_auction_filter()
    {
        $is_Auction = false;
        $is_EndingSoon = false;
        $sortBy = false;
        $category = false;
        $searchString = false;
        $limit = 12;

        if(isset($_GET['auction']) && $_GET['auction'] == 'on'){
            $is_Auction = true;
        }
        if(isset($_GET['ending']) && $_GET['ending'] == 'on'){
            $is_EndingSoon = true;
        }

        if(isset($_GET['category']) && $_GET['category']){
            $category = $_GET['category'];
        }
        if(isset($_GET['search']) && $_GET['search']){
            $searchString = $_GET['search'];
        }
        if(isset($_GET['sort']) && $_GET['sort']){
            $sortBy =$_GET['sort'];
        }
        if(isset($_GET['limit']) && $_GET['limit']){
            $limit =$_GET['limit'];
        }
        $this->db->select('expire_at,nft_name,user_name,total_units,user_image,sale_price,total_star,nft_file,nft_sales.rowid');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->from('nft_sales');
        $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('nft_status',1);
        if($is_Auction){
            $this->db->where('nft_sales.bidding_sale',1);
        }
        if($category){
            $this->db->where('nft_category',$category);
        }
        if($searchString){
            $this->db->like('nft_name',$searchString);
        }

        if($sortBy == '1'){
            $this->db->order_by('total_star','DESC');
        }else if($sortBy == '2'){
           // $this->db->order_by('total_star','DESC');
        }else if($sortBy == '3'){
            $this->db->order_by('sale_price','ASC');
        }else if($sortBy == '4'){
            $this->db->order_by('sale_price','DESC');
        }else {
            $this->db->order_by('all_nfts_list.rowid','DESC');
        }
        $this->db->limit($limit);
        $result = $this->db->get()->result_array();
        return $result;
    }




    public function single_sale($id){
        $this->db->select('expire_at,nft_name,bidding_sale,user_name,total_units,owner_id,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions');
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

    public function sale_rattings($id){
        $this->db->select('sale_rattings.*,user_name,user_image');
        $this->db->join('users', 'users.rowid=sale_rattings.user_id');
        $this->db->from('sale_rattings');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        // $this->db->where('nft_status',1);
        $this->db->where('sale_rattings.sale_id',$id);
        $result = $this->db->get()->result_array();
        return $result;
    }

    
    //users

    //
}
