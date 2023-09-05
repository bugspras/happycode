<?php


if (!function_exists("template")) {

    function template($modul)
    {
        $CI = &get_instance();
        if($CI->session->userdata('logged_in')):
            $data['title'] = $modul['title'];
            if($modul['data']['table']):
                $data['notifikasi'] = $modul['data']['table'];
            else:
                $data['notifikasi'] = '';
            endif;
            $CI->load->view('template/v_header',$data);
            $CI->load->view($modul['body'],$modul['data']);
            $CI->load->view('template/v_footer');
        else:
            redirect('login');
        endif;
    }
}


