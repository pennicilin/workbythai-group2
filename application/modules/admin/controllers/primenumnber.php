
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Primenumnber extends Admin_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('form_builder');
        $this->load->library('form_validation');
        $this->load->model('mo_primenumnber');
        $this->load->helper('url');
    }

    public function index() {

        $this->load->library('form_validation');
        $this->mPageTitle = 'Primenumnber';
        $this->mViewData['data_cat'] = $this->mo_primenumnber->get_all();
        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('form');
    }

    public function create($id = NULL) {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('number1', 'Number1', 'required');
        $this->form_validation->set_rules('number2', 'Number2', 'required');

        $this->mViewData['primenumnber'] = '';

        if ($id != NULL || !empty($this->input->post('id'))) {
            if ($this->form_validation->run() == FALSE) {
                $this->mViewData['primenumnber'] = $this->mo_primenumnber->get_by_key($id);
            } else {
                $this->mo_primenumnber->id = $this->input->post('id');
                $this->mo_primenumnber->number1 = $this->input->post('number1');
                $this->mo_primenumnber->number2 = $this->input->post('number2');

                $this->mo_primenumnber->updates();
                redirect('admin/primenumnber/', 'refresh');
            }
        } else {
            if ($this->form_validation->run() == FALSE) {
                
            } else {
                $this->mo_primenumnber->id = $this->input->post('id');
                $this->mo_primenumnber->number1 = $this->input->post('number1');
                $this->mo_primenumnber->number2 = $this->input->post('number2');

                $this->mo_primenumnber->inserts();
                redirect('admin/primenumnber/', 'refresh');
            }
        }

        $this->mPageTitle = 'Create primenumnber';

        $form = $this->form_builder->create_form();
        $this->mViewData['form'] = $form;
        $this->render('primenumnber/v_primenumnber_create');
    }

    public function deletes($id = NULL) {
        if ($id != NULL) {
            $this->mo_primenumnber->id = $id;
            $this->mo_primenumnber->deletes();
        }
        redirect('admin/primenumnber/', 'refresh');
    }

}
