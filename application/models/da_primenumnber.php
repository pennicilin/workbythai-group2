<?php
			class Da_primenumnber extends MY_Model { 
			public $id;
			public $number1;
			public $number2;
			
			public function inserts() {
				$this->db->set('id', $this->id);
				$this->db->set('number1', $this->number1);
				$this->db->set('number2', $this->number2);
				
				$this->db->from('tbl_primenumnber');
				return $this->db->insert();
			}
			
			public function inserts_array($data=null) {
				$this->db->set($data);
				$this->db->from('tbl_primenumnber');
				return $this->db->insert();
			}
			public function updates_array($data=null,$key=null) {
				return $this->db->update('tbl_primenumnber', $data, $key);
			}
			public function updates() {
				
			$this->db->set('id', $this->id);
				$this->db->set('number1', $this->number1);
				$this->db->set('number2', $this->number2);
				
				$this->db->from('tbl_primenumnber');
				$this->db->where('id', $this->id);
				return $this->db->update();
			}

			public function deletes() {
				$this->db->from('tbl_primenumnber');
				$this->db->where('id', $this->id);
				$this->db->delete();
			}

			public function get_all() {
				$this->db->from('tbl_primenumnber');
				$this->db->order_by('id', 'ASC');
				return $this->db->get()->result();
			}

			public function get_by_key($key) {
				$this->db->select('*');
				$this->db->from('tbl_primenumnber');
				$this->db->where('id', $key);
				$query = $this->db->get()->result();
				return $query;
			}

		}