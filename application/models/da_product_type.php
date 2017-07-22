<?php
			class Da_product_type extends MY_Model { 
			public $type_id;
			public $main_type;
			public $sub_type;
			public $main_code;
			public $sub_code;
			
			public function inserts() {
				$this->db->set('type_id', $this->type_id);
				$this->db->set('main_type', $this->main_type);
				$this->db->set('sub_type', $this->sub_type);
				$this->db->set('main_code', $this->main_code);
				$this->db->set('sub_code', $this->sub_code);
				
				$this->db->from('tbl_product_type');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tbl_product_type');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tbl_product_type', $data, $key);
			}
			public function updates() {
				
			$this->db->set('type_id', $this->type_id);
				$this->db->set('main_type', $this->main_type);
				$this->db->set('sub_type', $this->sub_type);
				$this->db->set('main_code', $this->main_code);
				$this->db->set('sub_code', $this->sub_code);
				
				$this->db->from('tbl_product_type');
				$this->db->where('type_id', $this->type_id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tbl_product_type');
				$this->db->where('type_id', $this->type_id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tbl_product_type');
				$this->db->order_by('type_id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tbl_product_type');
				$this->db->where('type_id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}