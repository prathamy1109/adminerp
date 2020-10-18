<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class Category extends MY_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('masters/Category_model');
	}

	public function index()
	{
		$cat_id = !empty($this->input->get('cat_id'))?$this->input->get('cat_id'):'';
		//echo $cat_id; die();
		if (!empty($cat_id)) {
            $cat_data =  $this->Category_model->getById($cat_id);

            $data1['cat_id'] = $cat_id;
            $data1['cat_name'] = $cat_data->mc_cate_name;
        }

		

		 $data1['Add_category_list'] = $this->Category_model->getData();
		// echo "<pre>"; print_r($data1); die();
		$data1['js_to_load'] = 'masters/category.js';

		$this->load->template('masters/add_category', $data1);


		//$this->load->template('masters/add_category');

	}


	public function addEdit()
    {
        $this->form_validation->set_rules('cate_name', 'Category', 'trim|required');

        if ($this->form_validation->run() == true) {
            
            $cat_id = $this->input->post('cat_id');
            $cat_name = $this->input->post('cate_name');

            if (empty($cat_id)) {
            	//echo "in"; die();
                $data = array(
                'mc_cate_name' => $cat_name
              );

                $result = $this->Category_model->addData($data);
                $msg = 'Added';
            } else {
            	//echo "out"; die();
                $data = array(
                'mc_cate_name' => $cat_name
              );

                $result = $this->Category_model->editData($cat_id, $data);
                $msg = 'Updated';
            }



            if ($result) {
                $this->session->set_flashdata('success', 'Category '.$msg.' Successfully!');
            } else {
                $this->session->set_flashdata('error', 'Failed to do operations, try again!');
            }

            return redirect(base_url('category'));
        }
    }


	public function delete()
	{
		$id = !empty($this->input->post('cat_id'))?$this->input->post('cat_id'):"";

		$result = $this->Category_model->deleteData($id);

		if($result)
		{
			//$msg = ;
			$this->session->set_flashdata('success', "Category Deleted Successfully!");
		}
		else
		{
			$msg = "Failed to Delete Category!";
			$this->session->set_flashdata('error', $msg);
		}



		return redirect(base_url('category'));

	}
}
 
?>