<?php
include "User_Model.php";
class Activity_Model extends User_Model
{
    public function __construct()
    {
        parent::__construct();
        
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
        $total_count = $this->input->post('total_count');
        $creator_royalty = $this->input->post('creator_royalty');
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
            'nft_unit' => $total_count,
            'total_royality' => $creator_royalty,
        );
        
      
        // echo "<pre>";
        // print_r($dataArray);
        // print_r($_SESSION);
        // die;
        $this->db->insert('all_nfts_list', $dataArray);
		$saleid =   $this->db->insert_id();

        $title = $this->getUserName($this->userID)." Created New Nft ($nft_name)";
        $desciption = $title." with <b>$nft_price</b> ETH and Having <b>$total_count</b> Units, Please Approve it";
        $dataArray = array(
            'title' =>$title,
            'descriptions' => $desciption,
            'created_at' => date('Y-m-d H:i:s'),
            'user_id' => $this->userID,
            'nft_id' => $saleid,
            'n_type' => 1
        );
        
        $this->db->insert('admin_notifications', $dataArray);
		return   $saleid;

    }

    public function all_nft_of_users(){
        $this->db->select('all_nfts_list.*,cate_name');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('all_nfts_list');
        $this->db->where('nft_user',$this->userID);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function single_nft_from_user($id){
        $this->db->select('all_nfts_list.*');
        $this->db->from('all_nfts_list');
        $this->db->where('rowid',$id);
        $this->db->where('nft_user',$this->userID);
        $result = $this->db->get()->row();
        return $result;
    }

    public function make_new_sale($id){

        // echo '<pre>';
        // print_r($_POST);
        // die;

        
        $type_id = $this->input->post('type_id');
        $sale_end = $this->input->post('sale_end');
        $sale_type = $this->input->post('sale_type');
        $nft_price = $this->input->post('nft_price');
        $rotal_numbers = $this->input->post('rotal_numbers');

        $dataArray = array(
            'nft_id' => $id,
            'owner_id' => $this->userID,
            'sale_price' => $nft_price,
            'created_at' =>  date('Y-m-d H:i:s'),
            // 'sale_type' => $sale_type,
            'expire_at' => $sale_end,
            'bidding_sale' =>  $type_id,
            'total_units' =>  $rotal_numbers,
        );
        $this->db->insert('nft_sales', $dataArray);
		$result =   $this->db->insert_id();
        // 

        $this->db->set('on_sale','on_sale +'.$rotal_numbers,false);
        $this->db->where('rowid',$id);
        $this->db->update('all_nfts_list');
        return $result;
    }

    public function single_sale($id){
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions');
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
        $this->db->where('nft_sales_bids.sale_id',$id);
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

    public function delete_sale($id){
        $this->db->select('total_units,nft_id');
        $this->db->from('nft_sales');
        $this->db->where('rowid',$id);
        $this->db->where('owner_id',$this->userID);
        $result = $this->db->get()->row();
        if($result){
            $this->db->set('on_sale','on_sale -'.$result->total_units,false);
            $this->db->where('rowid',$result->nft_id);
            $this->db->update('all_nfts_list');

            $this->db->where('sale_rattings.sale_id',$id);
            $this->db->delete('sale_rattings');

            $this->db->where('nft_sales_bids.sale_id',$id);
            $this->db->delete('nft_sales_bids');

            $this->db->where('nft_reports.sale_id',$id);
            $this->db->delete('nft_reports');

            $this->db->where('nft_sales.rowid',$id);
           return $this->db->delete('nft_sales');

        }
        else{
            return false;
        }
    }



	public function all_purchase(){
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions,sale_ststus,price_transfer_status,sale_at,paid_net');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('nft_sales');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
         $this->db->where('sale_ststus',1);
        $this->db->where('nft_sales.buyer_id',$this->userID);

		$this->db->order_by('nft_sales.rowid','DESC');
        $this->db->limit(100);

        $result = $this->db->get()->result_array();
        return $result;
    }


    
}
