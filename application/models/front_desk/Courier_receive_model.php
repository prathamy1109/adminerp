<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Courier_receive_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('courier_receive', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('courier_receive');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>