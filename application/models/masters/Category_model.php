<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		return $this->db->insert('mst_category', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('mst_category');
		$result=$this->db->get()->result();

		return $result;
	} 

	public function getById($id = NULL)
	{
		$this->db->select('mc_cate_name')
				  ->from('mst_category')	
				  ->where('mc_id', $id);

		$result = $this->db->get()->row();
		
		return $result;		  
	}

	public function editData($id = NULL, $data = NULL)
	{
		return $this->db->update('mst_category', $data, array('mc_id' => $id));
	}

	public function deleteData($id = NULL)
	{
		return $this->db->delete('mst_category', array('mc_id' => $id));
	}
}

?>