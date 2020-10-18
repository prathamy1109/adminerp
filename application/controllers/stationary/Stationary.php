<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');


class Stationary extends My_Controller
{
    
  public function __construct()
    {
        parent::__construct();
        $this->load->model('stationary/Stationary_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('fname','First Name','trim');

        if ($this->form_validation->run() == true) 
        {
           // echo "<pre>"; print_r($this->input->post()); die();

            $data = array(
                's_iqty' => $this->input->post('iqty'),
                's_addsup' => $this->input->post('addsup'),
                's_addistore' => $this->input->post('itemstore'),
                's_addicat' => $this->input->post('itemcat'),
                's_addiname' => $this->input->post('addiname'),
                's_recdate' => $this->input->post('recdate'),
                's_retdate' => $this->input->post('retdate'),
                


             );


             $this->Stationary_model->addData($data);

        }
         
            $data1['Add_stationary_list'] = $this->Stationary_model->getData();
           // echo "<pre>"; print_r($data1); die();

         $this->load->template('stationary/stationary',$data1);

    }

   
}

?>