<?php
include_once "Admin_Model.php";
class Settings_Model extends Admin_Model
{
    public function __construct()
    {
        
    }

    public function add_category($file){
        $cate_gory_name = $this->input->post('cate_gory_name');
        $decryptions = $this->input->post('decryptions');
        
        $data = array(
            'cate_name' => $cate_gory_name,
            'category_descriptions' => $decryptions,
            'cate_image' => $file,
        );
        
        $this->db->insert('all_categories', $data);
		return   $this->db->insert_id();
    }

    public function all_categories(){
        $this->db->select('*');
        $this->db->from('all_categories');
        return $this->db->get()->result_array();
    }
    public function delete_category($id){
        $this->db->where('rowid',$id);
        $this->db->delete('all_categories');
        return ;

    }

    public function all_users(){
        $this->db->select('*');
        $this->db->from('users');
        $this->db->order_by('rowid','DESC');
        return $this->db->get()->result_array();
    }

    public function change_user_status($id,$st){

        // echo 
        $this->db->set('user_status',$st);
        $this->db->where('rowid',$id);
        return $this->db->update('users');
    }

    public function get_new_nft(){
        $this->db->select('all_nfts_list.*,cate_name,user_name');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->join('users', 'users.rowid=all_nfts_list.nft_user','left');
        $this->db->from('all_nfts_list');
        $this->db->where('nft_status',0);
        // $this->db->order_by('rowid','DESC');
        return $this->db->get()->result_array();
    } 

    public function approve_nft($id){
        $this->db->set('nft_status',1);
        $this->db->where('rowid',$id);
        return $this->db->update('all_nfts_list');
    }

    public function delete_nft($id){
        $this->db->where('rowid',$id);
        $this->db->delete('all_nfts_list');
        return ;

    }

    public function get_active_sales(){
        $this->db->select('expire_at,nft_name,user_name,sale_price,total_star,nft_file,nft_sales.rowid,cate_name,user_image,nft_descriptions');
        $this->db->join('all_nfts_list', 'all_nfts_list.rowid=nft_sales.nft_id');
        $this->db->join('users', 'users.rowid=nft_sales.owner_id');
        $this->db->join('all_categories', 'all_categories.rowid=all_nfts_list.nft_category');
        $this->db->from('nft_sales');
        // $this->db->where('expire_at >', date('Y-m-d H:i:s'));
        $this->db->where('nft_status',1);
        $this->db->order_by('nft_sales.rowid','DESC');
        // $this->db->where('nft_sales.rowid',$id);
        return $this->db->get()->result_array();
    } 

    public function get_settings(){
        return $this->db->get('admin_settings')->row();
    }
    public function update_key($key){
        $this->db->set('metamask_key',$key);
        // $this->db->where('rowid',$key);
        return $this->db->update('admin_settings');
    }


}