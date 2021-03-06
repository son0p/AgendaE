<?php

class Upload extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_form', array(
						       'error' => ' ',
						       'title' => 'agenda'
						       ));
	}

	function do_upload()
	{
		$config['upload_path'] = './images/agenda/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '400';
		$config['max_width']  = '1200';
		$config['max_height']  = '1200';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('upload_form', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success', $data);
		}
	}
}
?>