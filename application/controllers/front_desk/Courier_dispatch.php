<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Courier_dispatch extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_desk/Courier_dispatch_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				'cd_totitle' => $this->input->post('totitle') ,
				'cd_reference' => $this->input->post('reference'),
				'cd_address' => $this->input->post('address'), 
				'cd_note' => $this->input->post('note'),
				'cd_fromtitle' => $this->input->post('fromtitle'),
				'cd_date' => $this->input->post('start-date'),
				'cd_attach' => $this->input->post('file'),
				
			);


			$this->Courier_dispatch_model->addData($data);


		}


		$data1['courier_dispatch_list'] = $this->Courier_dispatch_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('front_desk/courier_dispatch/index', $data1);
	}
}
 
?>