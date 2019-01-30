<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Brands_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function listbrands()
	{
		$query = $this->db->get('brands');
        return $query->result();
	}

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