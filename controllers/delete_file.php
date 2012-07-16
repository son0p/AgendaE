<?php

class Delete_file extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	       	$this->load->helper(array('file', 'url'));
	
	}

	function index()
	{
	 
	  // delete_files('./images/del/');
	  // print_r(get_filenames('./images/'));

 
	  //define the root directory of CodeIgniter
	  $path = "./images/del/" ."1.txt";
 
	  //from here, delete the file off using unlink
	  $result = unlink($path);
	 
	  if($result){
	    $data['status'] = "File has been deleted successfully!";
	  }else{
	    $data['status'] = "There is a problem deleting the file!";
	  }

	 
	  
	}

 function date(){
	        
	    $this->load->model('past_events_model');
	    $data['past_events'] = $this->past_events_model->get_past_events();
	   
	  }

}
?>