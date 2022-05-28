<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Category_model extends MY_Model
{
	public $table = "category c";
	public $select_column = ['c.id', 'c.c_name'];
	public $search_column = ['c.c_name'];
    public $order_column = [null, 'c.c_name', null];
	public $order = ['c.id' => 'DESC'];

	public function make_query()
	{
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where('c.is_deleted', 0);

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('c.id')
		         ->from($this->table)
				 ->where('c.is_deleted', 0);
		            	
		return $this->db->get()->num_rows();
	}

	public function delete($id, $table)
	{
		$this->db->trans_start();

		$this->db->update($table, ['is_deleted' => 1], ['id' => $id]);
		$this->db->update('products', ['is_deleted' => 1], ['cat_id' => $id]);

		$this->db->trans_complete();

		return $this->db->trans_status();
	}
}