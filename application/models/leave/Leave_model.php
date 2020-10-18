<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Leave_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('leave', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('leave');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>