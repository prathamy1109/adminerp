<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Expenses extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('expenses/Expenses_model');
	}

	public function index()
	{
		 $this->form_validation->set_rules('fname', 'First Name', 'trim');
			
		if($this->form_validation->run() == true)
		{
			// echo "<pre>"; print_r($this->input->post()); die();

			$data = array(
				
				'exp_qty' => $this->input->post('qty'),
				'exp_iname' => $this->input->post('iname'),
				'exp_date' => $this->input->post('date'),
				'exp_amount' => $this->input->post('amount'),
				'exp_vfname' => $this->input->post('vfname'),
				'exp_vlname' => $this->input->post('vlname'),
				'exp_payment' => $this->input->post('payment'),
				'exp_note' => $this->input->post('notes'),
				'exp_attach' => $this->input->post('attach'),

				
			);


			$this->Expenses_model->addData($data);


		}


		$data1['Add_expenses_list'] = $this->Expenses_model->getData();
		// echo "<pre>"; print_r($data1); die();

		$this->load->template('expenses/expenses', $data1);


		//$this->load->template('expenses/expenses');

	}
}
 
?>