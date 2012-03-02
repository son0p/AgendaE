<?php class Contactos extends CI_Controller {
   
   public function index()
   {
     
	 if ($this->ion_auth->logged_in())
	  { 	     
     $this->db->where('visible','0') ;
     $data['query'] = $this->db->get('events');
     $this->load->view('contactos_admin_view',$data);
     }
     else {
		redirect('auth/login/');     	
     	}
     
     }
        
   
   
   public function form()
   {
		
   		$this->load->view('contacto_event_form_view', $data);
   }
   
   public function insert()
   {
	
   	$this->db->insert('events', $_POST);
   	redirect('/contactos/gracias');
      
     }
        
   
 
  
   
public function delete()
	{
		$this->db->where ('id', $this->uri->segment(3));
		$this->db->delete('editoriales');
		redirect('editoriales');
	}   
   
   function edit()
  
  {
          
          $data['title'] = "Edicion Editorial";
          $data['heading'] = "Editar Editorial ";
          $this->db->where('id',$this->uri->segment(3));
          $data['query'] = $this->db->get('editoriales');
          $this->load->view('editorial_edit_view', $data ); 
           
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          
   }	   
  
    public function update()
   {
		$this->db->where ('id',$this->uri->segment(3) );   	
		$this->db->update('editoriales', $_POST );
   	redirect('editoriales');
   }
   
 }		
/* End of file  */
