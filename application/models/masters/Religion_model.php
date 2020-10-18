<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Religion_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('mst_religion', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('mst_religion');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>