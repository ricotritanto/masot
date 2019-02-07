<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Front_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function listproducts()
	{
		return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id order by a.product_id desc limit 3");
	}

	public function listproducts2()
	{
		return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id order by a.product_id asc limit 3");
	}

	public function listaccesories()
	{
		return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id AND c.category_name='accessories' order by a.product_id asc limit 3");
	}

	public function listaccesories2()
	{
		return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id AND c.category_name='accessories' order by a.product_id desc limit 3");
	}

	// public function listproducts2()
	// {
	// 	return $this->db->query("select a.*,b.brand_name,c.category_name from products a join brands b on a.brand_id=b.brand_id join categories c on a.category_id=c.category_id order by a.product_id asc limit 3");
	// }

	public function insert($data)
	{
		return $this->db->insert('brands', $data);
	}

	public function getbrands($id)
	{
		$this->db->where('brand_id',$id);
	 	$query = $this->db->get('brands');
	 	if($query->num_rows() > 0)
	 	{
	 		$data = $query->row();
			$query->free_result();
	 	}else
	 	{
	 		$data = NULL;
	 	}
	 	return $data;
	}

	public function update($data, $id)
	{
		$this->db->where('brand_id', $id);
        $this->db->update('brands',$data);
	}

	public function delete($id)
	{
		$this->db->where('brand_id',$id);
	 	$this->db->delete('brands');
	}
}