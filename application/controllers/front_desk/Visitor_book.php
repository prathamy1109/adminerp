<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Visitor_book extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_desk/Visitor_book_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				'vb_purpose' => $this->input->post('purpose') ,
				'vb_fname' => $this->input->post('fname'),
				'vb_lname' => $this->input->post('lname'), 
				'vb_contact' => $this->input->post('contact'),
				'vb_no_person' => $this->input->post('no_person'),
				'vb_date' => $this->input->post('date'),
				'vb_in_time' => $this->input->post('in_time'),
				'vb_out_time' => $this->input->post('out_time'),
				'vb_note' => $this->input->post('notes')
			);


			$this->Visitor_book_model->addData($data);


		}


		$data1['visitor_book_list'] = $this->Visitor_book_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('front_desk/visitor_book/index', $data1);
	}
}
 
?>