<?php
	include('da_product_type.php');

	class Mo_product_type extends Da_product_type {

		public function get_by_main ()
		{
			$this->db->select('*');
			$this->db->from('tbl_product_type');
			$this->db->where('main_code', 0);
			$query = $this->db->get()->result();
			return $query;
		}

		public function get_by_sub ($key)
		{
			$this->db->select('*');
			$this->db->from('tbl_product_type');
			$this->db->where('sub_code', $key);
			$query = $this->db->get()->result();
			return $query;
		}

		public function get_type_tree($id=null, $level=0)
		{
			$array = array();
			$sub_type = $this->mo_product_type->get_by_sub($id);
			if (!empty($sub_type)) {
				foreach ($sub_type as $row) {
					$array[] = array(
						'type_id' => $row->type_id,
						'main_type' => $row->main_type,
						'sub_type'  => $row->sub_type,
						'level'     => $level+1
					);
				if ($this->get_type_tree($row->type_id,$level+1) != NULL) {
					$array_dummy =$this->get_type_tree($row->type_id,$level+1);
					$array = array_merge($array,$array_dummy);
					$array_dummy = array();	
				  }
				}

				return $array;

			} else {

				return null;
			}
		}

		public function get_type_all ()
		{
			$data_cat = $this->get_by_main();
			$array = array();
			$level = 0;

			foreach ($data_cat as $row) {
				$array[] = array(
					'type_id' => $row->type_id,
					'main_type' => $row->main_type,
					'sub_type'  => $row->sub_type,
					'level'     => $level
				);

				if ($this->mo_product_type->get_type_tree($row->type_id,$level)!=NULL) {
					$array_dummy = $this->mo_product_type->get_type_tree($row->type_id,$level);
					$array       = array_merge($array,$array_dummy);
					$array_dummy = array();
				}
			}
			return $array;
		}

	}
		