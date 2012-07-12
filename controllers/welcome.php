<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
			
			
		  /* $this->load->helper('url');
         $this->load->helper('form');
         $this->load->helper('date');
		$this->load->view('inc/header');
		
	
        
        
      */

	  $this->db->order_by("agenda_fecha") ;
	  $this->db->where('agenda' , '1');
     $this->db->where('visible','1');
     $data['query']= $this->db->get('proj_revisiones');
	 
	/*
	
	 // just the first title, for countdown
	  $this->db->order_by("agenda_fecha") ;
	  $this->db->where('agenda' , '1');
     $this->db->where('visible','1');
     $data['query3']= $this->db->get('proj_revisiones', 1);
	 
	 
	  $this->db->order_by("agenda_fecha", "desc") ;
	  $this->db->where('memoria' , '1');
	  $data['query2']= $this->db->get('proj_revisiones');
	  */
	  
	 // $this->load->view("home_1_3_view", $data);
	
	  	$this->load->view('welcome_message', $data);
		
		//$this->output->enable_profiler(TRUE);
		
		
	}	
	
	
	public function hoy()
	{
		// create a today value
		
		$fecha = date('Ymd');
		$data['dia']= substr($fecha, -2, 2);
		$data['fecha'] = $fecha;
		
	
	  $this->db->order_by("agenda_hora") ;
	  $this->db->where('agenda' , '1');
     $this->db->where('visible','1');
     $this->db->where('agenda_fecha',$fecha);  // just events for today
     $data['query3']= $this->db->get('proj_revisiones');
     $data['query2']= date('l jS \of F Y h:i:s A');
     $this->db->where('agenda_fecha',$fecha);
     $this->load->view('hoy_view', $data);
	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */