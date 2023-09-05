<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registrasi extends CI_Controller 
{
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
    
	public function index()
	{
        if(!$this->session->userdata('logged_in')):
            $this->load->view('registrasi/v_index');
        else:
            redirect('table');
        endif;
	}

    public function add(){
        $this->model->insert($this->input->post(null,true),$_FILES['photo']['name']);
        redirect('login');
    }
    
}
