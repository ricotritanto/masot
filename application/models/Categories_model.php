<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Categories_model extends CI_Model
{
	
	private $_table = "categories";
	function __construct()
	{
		# code...
	}

	 public function rules()
    {
        return [
            ['field' => 'cateogory_name',
            'label' => 'cateogory_name',
            'rules' => 'required'],
        ];
    }

	public function listcategories()
	{
		$query = $this->db->get('categories');
        return $query->result();
	}

	public function insert($data)
	{
		return $this->db->insert('categories', $data);
	}

	public function getCategories($id)
	{
        $this->db->where('category_id',$id);
	 	$query = $this->db->get('categories');
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
		$this->db->where('category_id', $id);
        $this->db->update('categories',$data);
	}

	public function delete($id)
	{
		$this->db->where('category_id',$id);
	 	$this->db->delete('categories');
	}
}