<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Product_model extends MY_Model
{
	public $table = "products p";
	public $select_column = ['p.id', 'p.p_name', 'p.p_code', 'p.rate', 'p.stock', 'p.status', 'c.c_name'];
	public $search_column = ['p.p_name', 'p.p_code', 'p.rate', 'p.stock', 'p.status', 'c.c_name'];
    public $order_column = [null, 'p.p_name', 'p.p_code', 'p.rate', 'p.stock', 'p.status', 'c.c_name', null];
	public $order = ['p.id' => 'DESC'];

	public function make_query()
	{
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where(['c.is_deleted' => 0, 'p.is_deleted' => 0])
				 ->join('category c', 'c.id = p.cat_id');

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('c.id')
		         ->from($this->table)
				 ->where(['c.is_deleted' => 0, 'p.is_deleted' => 0])
				 ->join('category c', 'c.id = p.cat_id');
		            	
		return $this->db->get()->num_rows();
	}

	public function getProd($c_slug, $p_slug)
	{
		$this->db->select('p.id, p.p_name, p.p_code, p.rate, p.stock, p.status, c.slug, CONCAT("'.$this->config->item('products').'", p.image) image, p.cat_id')
		         ->from($this->table)
				 ->where(['c.is_deleted' => 0, 'p.is_deleted' => 0])
				 ->where(['c.slug' => $c_slug, 'p.slug' => $p_slug])
				 ->join('category c', 'c.id = p.cat_id');

		return $this->db->get()->row();
	}

	public function getAll($table, $select, $where, $order_by = '', $limit = '')
	{
		$this->db->select($select)
		         ->from($table)
				 ->where(['c.is_deleted' => 0, 'p.is_deleted' => 0])
				 
				 ->join('category c', 'c.id = p.cat_id');

		return $this->db->get()->result();
	}
}