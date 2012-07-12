<?php class Editoriales extends CI_Controller {
   
   public function index()
   {
     
	 if ($this->ion_auth->logged_in())
	  { 	     
     $this->load->model('agendamodel');
     $this->db->order_by("id",'DESC') ;
     $data['query'] = $this->db->get('editoriales');
     $this->load->view('editoriales_admin_view',$data);
     }
     else {
		redirect('auth/login/');     	
     	}
     
     }
        
   
   
   public function form()
   {
		
   		$this->load->view('editorial_form_view', $data);
   }
   
   public function insert()
   {
	 if ($this->ion_auth->logged_in())
	  { 	
   	$this->db->insert('editoriales', $_POST);
   	redirect('editoriales');
  }
     else {
		redirect('auth/login/');     	
     	}
     
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
