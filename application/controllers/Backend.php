<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('categories_model');
		$this->load->library('form_validation');
        $this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/index');
		$this->load->view('backend/layouts/footer');
	}
	// Controller Categories
	//===================================================================================
	public function categories()
	{
		$data['categories'] = $this->categories_model->listcategories();

		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/categories/index',$data);
		$this->load->view('backend/layouts/footer');
	}

	public function add_categories()
	{
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/categories/add');
		$this->load->view('backend/layouts/footer');
	}

	public function save_categories()
	{
		$data = array(
			'category_name' => $this->input->post('name')
			);
		$this->categories_model->insert($data);
        redirect('backend/categories');
	}
}
