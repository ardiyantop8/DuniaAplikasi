<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
        $data['role']	= $this->db->get_where('header')->result_array();
        echo "<pre>";print_r($data['role']);die;
		$this->load->view('home');
	}
}
