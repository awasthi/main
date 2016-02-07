<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exam extends CI_Controller {

	public function index()
	{
    $this->load->view('exam/header');
		$this->load->view('examhome');
    $this->load->view('exam/footer');
	}
}
