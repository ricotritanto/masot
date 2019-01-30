<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('categories_model');
		$this->load->model('brands_model');
		$this->load->library('form_validation');
        $this->load->helper('url', 'form');
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
		$this->session->set_flashdata('msg', 'Insert Success');
        redirect('backend/categories');
	}

	public function categories_update($id)
	{
		$data = array(
		 	'categories' => $this->categories_model->getCategories($id)
		 	);

        $this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/categories/update', $data);
		$this->load->view('backend/layouts/footer');
	}

	public function categories_updated()
	{
		$id = $this->input->post('id');
        $data=array(      
          'category_name'=>$this->input->post('name'),
          );
        $this->categories_model->update($data,$id);
        $this->session->set_flashdata('msg', 'Update Success');
        redirect('backend/categories');
	}

	public function categories_delete($id)
	{
		$this->categories_model->delete($id);
		$this->session->set_flashdata('msg', 'Delete Success');
        redirect('backend/categories');
	}
	// ==============END of categories========================================================//

	// ============== Brands Controller ======================================================//
	public function brands()
	{
		$data['brands'] = $this->brands_model->listbrands();

		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/brands/index',$data);
		$this->load->view('backend/layouts/footer');
	}

	public function add_brands()
	{
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/brands/add');
		$this->load->view('backend/layouts/footer');
	}

	public function save_brands()
	{
		$data = array(
			'brand_name' => $this->input->post('name')
			);
		$this->brands_model->insert($data);
		$this->session->set_flashdata('msg', 'Insert Success');
        redirect('backend/brands');
	}

	public function brands_update($id)
	{
		$data = array(
		 	'brands' => $this->brands_model->getbrands($id)
		 	);

        $this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/brands/update',$data);
		$this->load->view('backend/layouts/footer');
	}

	public function brands_updated()
	{
		$id = $this->input->post('id');
        $data=array(      
          'brand_name'=>$this->input->post('name'),
          );
        $this->brands_model->update($data,$id);
        $this->session->set_flashdata('msg', 'Update Success');
        redirect('backend/brands');
	}

	public function brands_delete($id)
	{
		$this->brands_model->delete($id);
		$this->session->set_flashdata('msg', 'Delete Success');
		redirect('backend/brands');
	}	

	// ========================= end brands controller ==========================================//
	public function products()
	{
		$data['categories'] = $this->products_model->listproducts();

		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/products/index',$data);
		$this->load->view('backend/layouts/footer');
	}
}
