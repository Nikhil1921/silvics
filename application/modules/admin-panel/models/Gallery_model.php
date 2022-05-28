<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Gallery_model extends MY_Model
{
	public $table = "gallery g";
	public $select_column = ['g.id', 'g.g_type', 'g.video_id', 'g.image'];
	public $search_column = ['g.g_type', 'g.video_id'];
    public $order_column = [null, 'g.g_type', 'g.video_id', null, null];
	public $order = ['g.id' => 'DESC'];

	public function make_query()
	{  
		$this->db->select($this->select_column)
            	 ->from($this->table)
				 ->where('g.is_deleted', 0);

        $this->datatable();
	}

	public function count()
	{
		$this->db->select('g.id')
		         ->from($this->table)
				 ->where('g.is_deleted', 0);
		            	
		return $this->db->get()->num_rows();
	}
}