<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Categories_model extends CI_Model
{
	
	private $_table = "categories";
	public $cateogory_name;
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
		$this->db->where('category_id', $id);
        $this->db->select("*");
        $this->db->from("categories");
        
        return $this->db->get();
	}
}