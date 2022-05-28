<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Inquiry_model extends MY_Model
{
	public $table = "inquiry i";
	public $select_column = ['i.id', 'i.name', 'i.mobile', 'i.email', 'p.p_name'];
	public $search_column = ['i.name', 'i.mobile', 'i.email', 'p.p_name'];
    public $order_column = [null, 'i.name', 'i.mobile', 'i.email', 'p.p_name', null, null];
	public $order = ['i.id' => 'DESC'];

	public function make_query()
	{  
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where('i.is_deleted', 0)
				 ->join('products p', 'p.id = i.prod_id', 'left');

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('i.id')
		         ->from($this->table)
				 ->where('i.is_deleted', 0)
				 ->join('products p', 'p.id = i.prod_id', 'left');
		            	
		return $this->db->get()->num_rows();
	}

	public function get($table, $select, $where)
	{
		$this->db->select($select)
		         ->from($table)
				 ->where($where)
				 ->join('products p', 'p.id = i.prod_id', 'left');
		            	
		return $this->db->get()->row_array();
	}
}