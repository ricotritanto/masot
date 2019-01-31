<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Products_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function listproducts()
	{
		return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id order by a.product_id desc");
	}

	public function getidproducts($idproduct)
	{
		return $this->db->query("select * from products where product_id='$idproduct' ");
	}
	
	public function delete($id)
	{
		$this->db->where('product_id',$id);
	 	$this->db->delete('products');
	}

}