<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Courier_receive extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('front_desk/Courier_receive_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				'cr_totitle' => $this->input->post('totitle') ,
				'cr_reference' => $this->input->post('reference'),
				'cr_address' => $this->input->post('address'), 
				'cr_note' => $this->input->post('note'),
				'cr_fromtitle' => $this->input->post('fromtitle'),
				'cr_date' => $this->input->post('start-date'),
				'cr_attach' => $this->input->post('file'),
				
			);


			$this->Courier_receive_model->addData($data);


		}


		$data1['courier_receive_list'] = $this->Courier_receive_model->getData();
	 	//	echo "<pre>"; print_r($data1); die();

		$this->load->template('front_desk/courier_receive/index', $data1);
	}
}
 
?>