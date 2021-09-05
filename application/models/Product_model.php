<?php

class Product_model extends CI_Model
{
	
	function savingdata($data)
	{
        //insert data into database table.  
        //$this->db->insert('product_tbl',$data);   
        return $this->db->insert('product_tbl', $data);     
        return true;
	}

	function savingdiscountdata($data)
	{
        //echo "<pre>"; print_r($data); die;
        //insert data into database table.  
        //$this->db->insert('product_tbl',$data);   
        return $this->db->insert('discount_tbl', $data);     
        return true;
	}
	
	public function get_discount()
    {
        $query = $this->db->get('discount_tbl');
        return $query->row_array();
    }
    public function update_discount($data)
    {
       
        $this->db->where('id', 1);
        $this->db->update('discount_tbl', $data);
        //echo $this->db->last_query(); die;
    }

	public function products_list()
    {
        $query = $this->db->get('product_tbl');
        return $query->result();
    }
    public function get_data($id)
    {
     $product = $this->db->get_where('product_tbl', array('id' => $id))->row();
     return $product;
 	}
	
}