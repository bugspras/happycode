<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller 
{
   
	public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
    }
    
	public function index()
	{
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $data = json_decode($this->model->auth($username, $password));
        if($data->status):
            $newdata = array(
                'id'  => $data->data->id,
                'username'  => $data->data->username,
                'fullname'     => $data->data->fullname,
                'photo'     => $data->data->photo,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($newdata);
            redirect('table');
        else:
            redirect('login');
        endif;
	}
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('');
    }
}
