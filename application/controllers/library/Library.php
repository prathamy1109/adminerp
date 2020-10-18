<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');


class Library extends My_Controller
{
    
  public function __construct()
    {
        parent::__construct();
        $this->load->model('library/Library_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('fname','First Name','trim');

        if ($this->form_validation->run() == true) 
        {
           // echo "<pre>"; print_r($this->input->post()); die();

            // $data = array(
            //     'h_std_id' => $this->input->post('std_id'),
            //     'h_fname' => $this->input->post('fname'),
            //     'h_lname' => $this->input->post('lname'),
            //     'h_contact' => $this->input->post('contact'),
            //     'h_address' => $this->input->post('address'),
            //     'h_jdate' => $this->input->post('jdate'),
            //     'h_ldate' => $this->input->post('ldate'),
            //     'h_note' => $this->input->post('notes'),


            // );


           //  $this->Hostel_model->addData($data);

        }
         
          //  $data1['Add_hostel_list'] = $this->Hostel_model->getData();
          //  echo "<pre>"; print_r($data1); die();

        // $this->load->template('library/addlibrary');
         $this->load->template('library/listlibrary');

    }

   
}

?>