<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Table extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
	
	public function index()
	{
		$data['title'] = 'Table';
		$table = $this->model->list();
		$data['data'] = [
			'table' => $table, 
		];
		$data['body'] = 'table/v_index';
        template($data);
	}

    public function delete($id = null){
        $this->model->delete($id);
        redirect('table');
    }

    public function update(){
        $this->model->update($this->input->post(null,true), $_FILES['photo']['name']);
        redirect('table');
    }
}
