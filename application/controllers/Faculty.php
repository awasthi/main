<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faculty extends CI_Controller {

    public function index()
    {
        $this->load->view('exam/header');
        $this->load->view('faculty/nav2');
        $this->load->view('faculty/home');
        $this->load->view('exam/footer');
    }
}
