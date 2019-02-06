<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Backend_model extends CI_Model
{
	
	function __construct()
	{
		# code...
	}

	public function listclients()
	{
		return $this->db->query("select a.*, b.product_name from clients a join products b on a.product_id=b.product_id order by a.id_client desc");
		
	}

	public function insert($data)
	{
		return $this->db->insert('clients', $data);
	}

	public function getbrands($id)
	{
		$this->db->where('client_id',$id);
	 	$query = $this->db->get('clients');
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
		$this->db->where('client_id', $id);
        $this->db->update('clients',$data);
	}

	public function delete($id)
	{
		$this->db->where('client_id',$id);
	 	$this->db->delete('clients');
	}
}