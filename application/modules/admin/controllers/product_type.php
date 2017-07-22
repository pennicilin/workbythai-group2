
<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	class Product_type extends Admin_Controller {
		public function __construct() {
			parent::__construct();
			$this->load->library('form_builder');
			$this->load->library('form_validation');
			$this->load->model('mo_product_type');
			$this->load->helper('url');
		}
		
		public function index() {
			
			$this->load->library('form_validation');
			$this->mPageTitle = 'Product_type';
			$this->mViewData['data_cat'] = $this->mo_product_type->get_all();

			$this->mViewData['data_cat2'] = $this->mo_product_type->get_by_main();

			$array = array();
			$level = 0;
			foreach ($this->mViewData['data_cat2'] as $row ) {
				$array[] = array(

					'type_id' => $row->type_id, 
					'main_type' => $row->main_type,
					'sub_type'  => $row->sub_type,
					'level'     => $level
				);

				if ($this->mo_product_type->get_type_tree($row->type_id,$level) != NULL) {
					$array_dummy = $this->mo_product_type->get_type_tree($row->type_id,$level);
					$array = array_merge($array,$array_dummy);
					$array_dummy = array();
				}
			}

			$this->mViewData['data_cat2'] = $array;

			$form = $this->form_builder->create_form();
			$this->mViewData['form'] = $form;
			$this->render('product_type/v_product_type');


		}


		public function create($id=NULL) {

			$this->load->library('form_validation');
				$this->form_validation->set_rules('main_type','Main_type', 'required');
				$this->form_validation->set_rules('sub_type','Sub_type', 'required');
				// $this->form_validation->set_rules('main_code','Main_code', 'required');
				// $this->form_validation->set_rules('sub_code','Sub_code', 'required');
						
		$this->mViewData['product_type'] = '';

		if($id!=NULL || !empty($this->input->post('type_id'))){
			if($this->form_validation->run() == FALSE){
				$this->mViewData['product_type'] = $this->mo_product_type->get_by_key($id);
			}
			else{
				$this->mo_product_type->type_id = $this->input->post('type_id');
				$this->mo_product_type->main_type = $this->input->post('main_type', TRUE);
				$this->mo_product_type->sub_type = $this->input->post('sub_type', TRUE);
				// $this->mo_product_type->main_code = $this->input->post('main_code');
				// $this->mo_product_type->sub_code = $this->input->post('sub_code');
				
				$this->mo_product_type->updates();
				redirect('admin/product_type/', 'refresh');
			}
		}
		else{
			if($this->form_validation->run() == FALSE){
				
			}
			else{
			$this->mo_product_type->type_id = $this->input->post('type_id');
				$this->mo_product_type->main_type = $this->input->post('main_type', TRUE);
				$this->mo_product_type->sub_type = $this->input->post('sub_type', TRUE);
				// $this->mo_product_type->main_code = $this->input->post('main_code');
				// $this->mo_product_type->sub_code = $this->input->post('sub_code');

			if ($this->input->post('main_code') == 0) {
				$this->mo_product_type->main_code = 0;
				$this->mo_product_type->sub_code = 0;
			} else {
				$this->mo_product_type->main_code = $this->input->post('main_code');
				$this->mo_product_type->sub_code = $this->input->post('main_code');
			}
				
				$this->mo_product_type->inserts();
				redirect('admin/product_type/', 'refresh');
			}
		}

		$this->mViewData['all_cat'] = $this->mo_product_type->get_type_all ();

		$this->mPageTitle = 'Create product_type';
		
		$form = $this->form_builder->create_form();
		$this->mViewData['form'] = $form;
		$this->render('product_type/v_product_type_create');
	}
	
	public function deletes($id=NULL) {
		if($id!=NULL){
			$this->mo_product_type->type_id = $id;
			$this->mo_product_type->deletes();
		}
		redirect('admin/product_type/', 'refresh');
	}

}
						