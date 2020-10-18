<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Courier_dispatch_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('courier_dispatch', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('courier_dispatch');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>