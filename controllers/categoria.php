<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	

	
	
	public function index()
	{
		// create a today value
	$fecha = date('Ymd');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha;
	$this->db->where('visible','1');
	$this->db->where('category', '3');
	$this->db->where('date',$fecha);  // just events for today
	$data['query']= $this->db->get('events');
	$data['query2']= date('l jS \of F Y h:i:s A');
	$this->db->where('date',$fecha);
	$this->load->view('result_view', $data);
	}
	
	public function musica()
	{
	      
     	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	
	$this->db->where('category', '1');  
    	$this->db->where('visible','1');
    	$this->db->where('date >=', $fecha);	//range today
    	$this->db->where('date <=', $fecha_semana);//range max (7 next days)
    	$data['query'] = $this->db->get('events');
	
	$this->db->where('id', 1);
	$data['editorial'] = $this->db->get('editoriales');
	
   	$this->load->view('result_view', $data);
      
      
	}

	public function arte()
	{
		      
     	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	
	$this->db->where('category', '3');  
    	$this->db->where('visible','1');
    	$this->db->where('date >=', $fecha);	//range today
   	$this->db->where('date <=', $fecha_semana);//range max (7 next days)
    	$data['query'] = $this->db->get('events');
	
	$this->db->where('id', 1);
	$data['editorial'] = $this->db->get('editoriales');
	
   	$this->load->view('result_view', $data);
      
      
	}	
		
	
	public function academico()
	{
		      
     	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	
	$this->db->where('category', '4');  
    	$this->db->where('visible','1');
    	$this->db->where('date >=', $fecha);	//range today
   	$this->db->where('date <=', $fecha_semana);//range max (7 next days)
    	$data['query'] = $this->db->get('events');
	
	$this->db->where('id', 1);
	$data['editorial'] = $this->db->get('editoriales');
	
   	$this->load->view('result_view', $data);
      
      
	}

	public function barcafe ()
	{
		      
     	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	
	$this->db->where('category', '2');  
    	$this->db->where('visible','1');
    	$this->db->where('date >=', $fecha);	//range today
   	$this->db->where('date <=', $fecha_semana);//range max (7 next days)
    	$data['query'] = $this->db->get('events');
	
	$this->db->where('id', 1);
	$data['editorial'] = $this->db->get('editoriales');
	
   	$this->load->view('result_view', $data);
      
      
	}


	public function hoy()

	{
		// create a today value
	$fecha = date('Ymd');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha;
	$this->db->where('visible','1');
	$this->db->where('date',$fecha);  // just events for today
	$data['query']= $this->db->get('events');
	$data['query2']= date('l jS \of F Y h:i:s A');
	$this->db->where('date',$fecha);
	$this->load->view('result_view', $data);
	}

	
}

/* End of file hoy.php */
