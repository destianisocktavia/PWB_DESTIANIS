<?php  defined('BASEPATH') OR exit('No direct script access allowed');

	class Stock_M extends CI_Model{	

		public function All(){
			$this->db->order_by("id", "ASC");
			$result = $this->db->get('stock');
        	return $result;
		}

		public function Show(){
			$num = $this->config->item('offset');
			$offset = $this->Model_main->offset();
			$this->db->order_by("id", "desc");
        	$result = $this->db->get('stock', $num, $offset);
			return $result;
		}

		public function getData($id){
			$this->db->where('id', $id);
			$result = $this->db->get('stock');
			return $result;
		}

		public function getDetail($value, $field, $show){
			$this->db->where($field, $value);
			$result = $this->db->get('stock')->row_array();
			return $result[$show];
		}
		public function jumlah_nilai($value){

			$this->db->select('SUM('.$value.') as total');
			$this->db->from('stock');
			return $this->db->get()->row()->total;

		}

	}