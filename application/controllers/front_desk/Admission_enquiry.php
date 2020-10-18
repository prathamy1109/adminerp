<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Admission_enquiry extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_desk/Admission_enquiry_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				
				'admenq_fname' => $this->input->post('fname'),
				'admenq_lname' => $this->input->post('lname'), 
				'admenq_contact' => $this->input->post('contact'),
				'admenq_email' => $this->input->post('email'),
				'admenq_address' => $this->input->post('address'),
				'admenq_cdate' => $this->input->post('cdate'),
				'admenq_reference' => $this->input->post('reference'),
				'admenq_ndate' => $this->input->post('ndate'),
				'admenq_abtclass' => $this->input->post('abtclass'),
				'admenq_status' => $this->input->post('status'),
				'admenq_note' => $this->input->post('notes'),

				
			);


			$this->Admission_enquiry_model->addData($data);


		}


		$data1['Admission_enquiry_list'] = $this->Admission_enquiry_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('front_desk/admission_enquiry/index', $data1);
	}
}
 
?>