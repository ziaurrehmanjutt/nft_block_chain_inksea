<?php
include "Admin_Model.php";
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
}