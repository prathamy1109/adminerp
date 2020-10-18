<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Religion extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('masters/Religion_model');
	}

	public function index()
	{
		 $this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			//echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				
				'mr_religion_name' => $this->input->post('religion_name'),
				

				
			);


			$this->Religion_model->addData($data);


		}


		$data1['Add_religion_list'] = $this->Religion_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('masters/Add_religion', $data1);


		//$this->load->template('masters/add_category');

	}
}
 
?>