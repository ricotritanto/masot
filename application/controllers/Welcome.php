<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){
		parent::__construct();		
		$this->load->model('front_model');
		$this->load->model('brands_model');
		$this->load->model('products_model');
		$this->load->library('form_validation');
        $this->load->helper(array('url','form'));
	}
	public function index()
	{
		$data['products'] = $this->front_model->listproducts();
		$data['products2'] = $this->front_model->listproducts2();
		$data['accesories'] = $this->front_model->listaccesories();
		$data['accesories2'] = $this->front_model->listaccesories2();
		// print_r($data['accesories']);exit();
		
		$this->load->view('layout/header');
		$this->load->view('layout/head');
		$this->load->view('layout/slider');
		$this->load->view('index',$data);
		$this->load->view('layout/footer');
	}
}
