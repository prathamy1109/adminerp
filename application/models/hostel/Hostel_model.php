<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Hostel_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}


	public function addData($data = NULL)
	{
		$this->db->insert('hostel', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('hostel');
		$result=$this->db->get()->result();

		return $result;
	}

	
}

?>