<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Visitor_book_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('visitor_book', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('visitor_book');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>