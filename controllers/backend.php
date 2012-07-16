<?php class Backend extends CI_Controller {
   
   public function index()
   {
     
	 if ($this->ion_auth->logged_in())
	  { 	     
     $this->load->model('agendamodel');
     $this->db->order_by("date",'DESC');
     $today = date ("Y-m-d"); 
     $delete_date =  date('Y-m-d', strtotime('-7 days')); //offset  (- 7 days)      
     $this->db->where('date >= ', $delete_date); //show only 7 days past, all future.
     $data['query'] = $this->db->get('events');
     $this->load->view('admin/backend_view',$data);
     }
     else {
		redirect('auth/login/');     	
     	}
     
     }
        
   
   
   public function insert_event_form()
   {
		$this->load->model('backend_model');
		$data['query']= $this->backend_model->get_categorias();  	
   		$this->load->view('admin/insert_event_form_view', $data);
   }
   
   public function event_insert()
   {
   	$this->db->insert('events', $_POST);
   	redirect('backend');
   }
   
  
   
	public function event_delete()
	{
		$this->db->where ('id', $this->uri->segment(3));
		$this->db->delete('events');
		redirect('backend');
	}   
   
   function evento_edit()
  
  {
          
          $data['title'] = "Edicion Evento";
          $data['heading'] = "Editar Evento ";
          $this->db->where('id',$this->uri->segment(3));
          $data['query'] = $this->db->get('events');
          $data['categoria'] = $this->db->get('ae_categoria');
          $this->load->view('/admin/event_edit_view', $data ); 
           
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          
   }	   
  
    public function evento_update()
   {
		$this->db->where ('id',$this->uri->segment(3) );   	
		$this->db->update('events', $_POST );
   	redirect('backend');
   }
   
   public function login()
   {
 	
   	$identity = 'admin@admin.com';
		$password = 'passwor';
		$remember = TRUE; // remember the user
		$this->ion_auth->login($identity, $password, $remember);
		
		
		
		
			redirect('auth/login');
			
		
	
		
		
		
   }
   
   
}		
/* End of file  */
