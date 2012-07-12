<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		//$query = $this->db->get('events');
		//$data['hoy']= $this->db->get('events');
		 //$row = $hoy->row();
		//$hoy = $row->tag_id;       
 		
      //get data for today events 		
 	/*	$fecha = date('Y-m-d');
		$data['dia']= substr($fecha, -2, 2); //extract day from $fecha
		$data['fecha'] = $fecha; 
 	 	$this->db->where('date >=', $fecha);
	   $this->db->order_by("date") ;
	   $this->db->where('visible','1');
      $this->db->where('date =', $fecha);	
      $data['today']= $this->db->get('events',4);
      //get data for week events
   	$fecha = date('Y-m-d');
		$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
		$data['dia']= substr($fecha, -2, 2);
		$data['fecha'] = $fecha; 
		//all events future 
	   $this->db->order_by("date") ;
	   $this->db->where('visible','1');
      $this->db->where('date >=', $fecha);	//all events future
      $data['future']= $this->db->get('events');     
      $this->load->view('home_view', $data);		*/
      
     	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	  
    	$this->db->where('visible','1');
    	$this->db->where('date >=', $fecha);	//range today
    	$this->db->where('date <=', $fecha_semana);//range max (7 next days)
    	$data['query'] = $this->db->get('events');
	
	$this->db->where('visible', '1');
	$data['editorial'] = $this->db->get('editoriales');
	$this->db->where('visible', '1');
	$data['ads']=$this->db->get('ads');
   	$this->load->view('home_view', $data);
      
      
	}	
	
		
		
	function pre_search()
	{
		$data = array('busqueda_catalogo' => $this->input->post('keyword'));
		$this->db->insert('Busquedas', $data); 		
		redirect('home/search/'.$this->input->post('keyword'));
	}

	function search()
	{
			$data['title'] = "Búsqueda";
			$data['heading'] = "Resultados";		
			$this->db->order_by("time", 'DESC');
			$this->db->like('abstract', $this->uri->segment(3));
			$data['query'] = $this->db->get('events');
			$this->load->view('result_view', $data);
	}

	
	public function mas()
	{
		$this->db->where('proj_rev_id', $this->uri->segment(3));
		$data['query']=  $this->db->get('events');
		$this->load->view('mas_view', $data);	
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
     $this->db->where('date',$fecha);  // just events for today
     $data['query']= $this->db->get('events');
     $data['query2']= date('l jS \of F Y h:i:s A');
     $this->db->where('date',$fecha);
     $this->load->view('result_view', $data);
	}
	
	
	
	
	public function semana()
	{
		// create a today value
		
	$fecha = date('Y-m-d');
	$fecha_semana = date('Y-m-d', strtotime('+7 days')); //sum 7 days 
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 
	$this->db->order_by("date") ;
	$this->db->where('agenda' , '1');
     $this->db->where('visible','1');
     $this->db->where('date >=', $fecha);	//range today
     $this->db->where('date <=', $fecha_semana);//range max (7 next days)
     $data['query']= $this->db->get('events');
     $this->load->view('result_view', $data);
	
	}	
	
	public function contenido()
	{
		$this->db->where('contenido_id','1');
      $data['cont']= $this->db->get('ae_contenido');
      $this->load->view('contenido_view', $data);
      
	}
	public function musica()
	{
 	  
	$fecha = date('Y-m-d');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 	  
	$this->db->order_by("date") ;
	  $this->db->where('agenda' , '1');
     $this->db->where('visible','1');
     $this->db->where('categoria','1');
     $this->db->where('date >=', $fecha);	
     $data['query']= $this->db->get('events');
     $this->load->view('result_view', $data);
      
	}
	
	public function arte()
	{
 	  
	$fecha = date('Y-m-d');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 	  
	$this->db->order_by("date") ;
	$this->db->where('agenda' , '1');
	$this->db->where('visible','1');
	$this->db->where('categoria','2');
 	$this->db->where('date >=', $fecha);	
 	$data['query']= $this->db->get('events');
 	$this->load->view('result_view', $data);
      
	}
	
	public function barcafe()
	{
 	  
	$fecha = date('Y-m-d');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 	  
	$this->db->order_by("date") ;
	$this->db->where('agenda' , '1');
	$this->db->where('visible','1');
	$this->db->where('categoria','3');
	$this->db->where('date >=', $fecha);	
	$data['query']= $this->db->get('events');
	$this->load->view('result_view', $data);
      
	}
	
	public function academico()
	{
 	  
	$fecha = date('Y-m-d');
	$data['dia']= substr($fecha, -2, 2);
	$data['fecha'] = $fecha; 	  
	$this->db->order_by("date") ;
	$this->db->where('agenda' , '1');
      	$this->db->where('visible','1');
      	$this->db->where('categoria','4');
      	$this->db->where('date >=', $fecha);	
      	$data['query']= $this->db->get('events');
      	$this->load->view('result_view', $data);
      
	}
	public function cat()
	{
/* tengo un tag, voy a la tabla de tags to revisiones 
y miro a que revisiones pertenece ese tag y traigo los resultados 		
	
	*/
	$this->db->like('tag', $this->uri->segment(3));
	$query = $this->db->get('proj_tags');
	$data['tag']= $this->db->get('proj_tags');
	$row = $query->row();
	$tag_id = $row->tag_id; 	
   $this->db->where('tags_id',$tag_id );
   $query2= $this->db->get('ae_categoriatoevento');
   $row = $query2->row();
	$proj_to_tag_id = $row->proj_rev_id; 
   $this->db->where('proj_rev_id', $proj_to_tag_id);
	$data['revisiones']= $this->db->get('events');
   $this->load->view('categoria_view', $data); 	
      //$this->load->model('Agendamodel');
     // $this->Agendamodel->tag();  
      //$this->load->view('tags_view', $data);
     	}
	
	
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */
