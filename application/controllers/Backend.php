<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backend extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('categories_model');
		$this->load->model('brands_model');
		$this->load->model('products_model');
		$this->load->library('form_validation');
        $this->load->helper(array('url','form'));
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
		$data['products'] = $this->products_model->listproducts();
		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/products/index',$data);
		$this->load->view('backend/layouts/footer');
	}

	public function add_products()
	{
		$data['brands'] = $this->brands_model->listbrands();
		$data['categories'] = $this->categories_model->listcategories();

		$this->load->view('backend/layouts/header');
		$this->load->view('backend/layouts/head');
		$this->load->view('backend/layouts/slider');
		$this->load->view('backend/products/add', $data);
		$this->load->view('backend/layouts/footer');
	}

	public function save_products()
	{
		$this->form_validation->set_rules('product','product','required');
		$this->form_validation->set_rules('brand','brands','required');
		$this->form_validation->set_rules('category','category','required');
		$this->form_validation->set_rules('desc','desc','required');

		if ($this->form_validation->run()==FALSE) {
			redirect('backend/add_products');

		}
		else {

			if(empty($_FILES['userfile']['name']))
				{
					
						$in_data['product_name'] = $this->input->post('product');
						$in_data['description'] = $this->input->post('desc');
						$in_data['category_id'] = $this->input->post('category');
						$in_data['brand_id'] = $this->input->post('brand');
						$this->db->insert("products",$in_data);

					$this->session->set_flashdata('msg','Insert Products Success');
					redirect("backend/products");
				}
				else
				{
					$config['upload_path'] = './images/products/';
					$config['allowed_types']= 'gif|jpg|png|jpeg';
					$config['encrypt_name']	= TRUE;
					$config['remove_spaces']	= TRUE;	
					$config['max_size']     = '3000';
					$config['max_width']  	= '1028';
					$config['max_height']  	= '640';
					
			 
					$this->load->library('upload', $config);
	 
					if ($this->upload->do_upload("userfile")) {
						$data	 	= $this->upload->data();
			 
						/* PATH */
						$source             = "./images/products/".$data['file_name'] ;
						$destination_thumb	= "./images/products/thumb/" ;
						$destination_medium	= "./images/products/medium/" ;
						// Permission Configuration
						chmod($source, 0777) ;
			 
						/* Resizing Processing */
						// Configuration Of Image Manipulation :: Static
						$this->load->library('image_lib') ;
						$img['image_library'] = 'GD2';
						$img['create_thumb']  = TRUE;
						$img['maintain_ratio']= TRUE;
			 
						/// Limit Width Resize
						$limit_medium   = 112 ;
						$limit_thumb    = 130 ;
			 
						// Size Image Limit was using (LIMIT TOP)
						$limit_use  = $data['image_width'] > $data['image_height'] ? $data['image_width'] : $data['image_height'] ;
			 
						// Percentase Resize
						if ($limit_use > $limit_thumb) {
							$percent_medium = $limit_medium/$limit_use ;
							$percent_thumb  = $limit_thumb/$limit_use ;
						}
			 
						//// Making THUMBNAIL ///////
						$img['width']  = $limit_use > $limit_thumb ?  $data['image_width'] * $percent_thumb : $data['image_width'] ;
						$img['height'] = $limit_use > $limit_thumb ?  $data['image_height'] * $percent_thumb : $data['image_height'] ;
			 
						// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_thumb ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;

						$img['width']   = $limit_use > $limit_medium ?  $data['image_width'] * $percent_medium : $data['image_width'] ;
						$img['height']  = $limit_use > $limit_medium ?  $data['image_height'] * $percent_medium : $data['image_height'] ;
			 
			 			// Configuration Of Image Manipulation :: Dynamic
						$img['thumb_marker'] = '';
						$img['quality']      = '100%' ;
						$img['source_image'] = $source ;
						$img['new_image']    = $destination_medium ;
			 
						// Do Resizing
						$this->image_lib->initialize($img);
						$this->image_lib->resize();
						$this->image_lib->clear() ;
						
						$in_data['product_name'] = $this->input->post('product');
						$in_data['description'] = $this->input->post('desc');
						$in_data['category_id'] = $this->input->post('category');
						$in_data['brand_id'] = $this->input->post('brand');
						$in_data['picture'] = $data['file_name'];			
						
						$this->db->insert("products",$in_data);					
						$this->session->set_flashdata('msg','Insert Success');
						redirect("backend/products");
						
					}
					else 
					{
						redirect("backend");
					}
				}

		}
	}

	public function products_update()
	{

	}

	public function products_updated()
	{

	}

	public function products_delete($id)
	{
		$this->products_model->delete($id);
		$this->session->set_flashdata('msg', 'Delete Success');
		redirect('backend/products');
	}
}
