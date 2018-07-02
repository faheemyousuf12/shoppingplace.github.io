<?php
class Brand_model extends CI_Model{
	
	
	 public function get_brands(){
		$this->db->select('*');
		$this->db->from('brands');
		$query = $this->db->get();
		return $query->result();
	 }

	public function get_popular(){
		$this->db->select('P.*, COUNT(O.product_id) as total');
		$this->db->from('orders AS O');
		$this->db->join('products AS P', 'O.product_id = P.id', 'INNER');
		$this->db->group_by('O.product_id');
		$this->db->order_by('total', 'desc');
		$query = $this->db->get();
		return $query->result();
	}
	 public function deleteBrand ($id)
	{
       $this->db->where("id",$id);
       $this->db->delete("brands");
	}
}