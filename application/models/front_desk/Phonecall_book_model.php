<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Phonecall_book_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('phonecall_book', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('phonecall_book');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>