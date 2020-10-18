<?php


if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admission_enquiry_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}

	public function addData($data = NULL)
	{
		$this->db->insert('admission_enquiry', $data);
	}

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('admission_enquiry');
		$result=$this->db->get()->result();

		return $result;
	} 
}

?>