<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Leave extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('leave/Leave_model');
	}

	public function index()
	{
		 $this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				
				'lev_fname' => $this->input->post('fname'),
				'lev_mname' => $this->input->post('mname'),
				'lev_lname' => $this->input->post('lname'),
				'lev_contact' => $this->input->post('contact'),
				'lev_date' => $this->input->post('date'),
				'lev_attach' => $this->input->post('attach'),
				
				
			);


		 	$this->Leave_model->addData($data);


		 }

		$data1['Add_leave_list'] = $this->Leave_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('leave/leave', $data1);


		//$this->load->template('leave/leave');

	}
}
 
?>