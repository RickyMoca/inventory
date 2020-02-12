<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Template extends CI_Controller
{


    function loadview($data = NULL, $page = NULL)
    {
        $this->load->view('header', $data);
        if ($page != NULL) {
            $this->load->view($page, $data);
        } else {
            $this->load->view($data);
        }
        $this->load->view('footer');
    }


    function loadview_auth($data = null, $page = NULL)
    {
        $this->load->view('auth_header');
        if ($page != NULL) {
            $this->load->view($page);
        } else {
            $this->load->view($data);
        }
        $this->load->view('auth_footer');
    }
}
