<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Phonecall_book extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_desk/Phonecall_book_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				
				'pcb_fname' => $this->input->post('fname'),
				'pcb_lname' => $this->input->post('lname'), 
				'pcb_contact' => $this->input->post('contact'),
				'pcb_cdate' => $this->input->post('cdate'),
				'pcb_ndate' => $this->input->post('ndate'),
				'pcb_calltype' => $this->input->post('calltype'),
				'pcb_note' => $this->input->post('notes')
				
			);


			$this->Phonecall_book_model->addData($data);


		}


		$data1['phonecall_book_list'] = $this->Phonecall_book_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('front_desk/phonecall_book/index', $data1);
	}
}
 
?>