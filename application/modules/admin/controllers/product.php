
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Product extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_product');
			$this->load->model('mo_category');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Product';
			$this->mViewData['data_cat'] = $this->mo_product->get_all();

			$this->mViewData['data_cat2'] = $this->get_cat_all();
			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('product/v_product');
		}

		public function get_cat_all(){
			$data_cat = $this->mo_category->get_by_main();
			$array = array();
			$level=0;
			foreach($data_cat as $row){
				
				$array[] = array(
					'cate_id'=>$row->cate_id,
					'cate_name'=>$row->cate_name,
					'level'=>$level);
				
				if($this->mo_category->get_category_tree($row->cate_id,$level)!=NULL){
					$array_dummy = $this->mo_category->get_category_tree($row->cate_id,$level);
					$array = array_merge($array,$array_dummy);
					$array_dummy = array();
				}
				
			}
			return $array;
		}

		public function get_category_tree($id=null,$level=0) {
			$array = array();
			$sub = $this->mo_category->get_by_sub($id);
			if(!empty($sub)){
				foreach($sub as $row){
					$array[] = array('cate_id'=>$row->cate_id,'cate_name'=>$row->cate_name,
						'level'=>$level+1);

					if($this->get_category_tree($row->cate_id,$level+1)!=NULL){
						$array_dummy = $this->get_category_tree($row->cate_id,$level+1);
						$array = array_merge($array,$array_dummy);
						$array_dummy = array();
					}
				}
				return $array;
			}
			else{
				return null;
			}
		}

		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('pro_name','Pro_name', 'required');
				$this->form_validation->set_rules('pro_price','Pro_price', 'required');
				$this->form_validation->set_rules('pro_detail','Pro_detail', 'required');
				// $this->form_validation->set_rules('pro_image','Pro_image', 'required');
				// $this->form_validation->set_rules('type_id','Type_id', 'required');
						
		$this->mViewData['product'] = '';

		if($id!=NULL || !empty($this->input->post('pro_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['product'] = $this->mo_product->get_by_key($id);
			}
			else{

				$field_name 	= "pro_image";
				$path 			= "./assets/uploads/product/";
				$allowed_files  = "jpg|png|jpeg|gif";
			    $img_name 		= $this->upload_file($field_name, $path, $allowed_files);

				$this->mo_product->pro_id = $this->input->post('pro_id');
				$this->mo_product->pro_name = $this->input->post('pro_name');
				$this->mo_product->pro_price = $this->input->post('pro_price');
				$this->mo_product->pro_detail = $this->input->post('pro_detail');
				$this->mo_product->type_id = $this->input->post('type_id');

				if ($img_name) {
					$this->mo_product->pro_image = $img_name;
				} else {
					$this->mo_product->pro_image = $this->input->post('old_pro_image');
				}
				
				$this->mo_product->updates();
				redirect('admin/product/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{

				$field_name 	= "pro_image";
				$path 			= "./assets/uploads/product/";
				$allowed_files  = "jpg|png|jpeg|gif";
			    $img_name 		= $this->upload_file($field_name, $path, $allowed_files);

				$this->mo_product->pro_id = $this->input->post('pro_id');
				$this->mo_product->pro_name = $this->input->post('pro_name', TRUE);
				$this->mo_product->pro_price = $this->input->post('pro_price', TRUE);
				$this->mo_product->pro_detail = $this->input->post('pro_detail', TRUE);
				$this->mo_product->pro_image = $img_name;

				$this->mo_product->type_id = $this->input->post('type_id');
				
				$this->mo_product->inserts();
				redirect('admin/product/', 'refresh');
			}
		}

		$this->mViewData['all_cate'] = $this->get_cat_all();
		$this->mViewData['all_cate2'] = $this->get_cat_all();

		$this->mPageTitle = 'Create product';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('product/v_product_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_product->pro_id = $id;
			$this->mo_product->deletes();
		}
		redirect('admin/product/', 'refresh');
	}

}
						