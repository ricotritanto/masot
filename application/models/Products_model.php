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
		// $query = $this->db->query("select * from visit_report, cabang where visit_report.no_id=cabang.no_id order by str_to_date(date_visit, '%d/%m/%Y') DESC");
		// if ($query->num_rows() > 0) 
		// {
		// 	foreach ($query->result() as $data) 
		// 	{
		// 		$hasil[]=$data;
		// 	}
		// 	return $hasil;
		// }

		// $query = $this->db->get('visit_report');
		// if ($query->num_rows() > 0) 
		// {
		// 	foreach ($query->result() as $data) 
		// 	{
		// 		$hasil[]=$data;
		// 	}
		// 	return $hasil;
		// }
	}


}