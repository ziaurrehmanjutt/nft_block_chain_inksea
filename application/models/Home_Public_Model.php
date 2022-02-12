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
        $this->db->select('users.*,( COUNT(all_nfts_list.rowid) as tnft FROM all_nfts_list where all_nfts_list.nft_user = users.rowid) as tnft');
        $this->db->from('users');
        $this->db->where('user_type','1');
        $this->db->order_by('total_foloowings','DESC');
        $this->db->limit('8');
        return $this->db->get()->result_array();
    }
    //users

    //
}
