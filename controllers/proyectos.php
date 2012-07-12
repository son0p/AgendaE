<?php class Proyectos extends CI Controller {
   
   public function Proyectos()
   {
        parent::Controller();
        $this->load->database();
        //$this->load->scaffolding('proj_ti');
        //ti_proj
        //proj_investigacion
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->helper('date');
        $this->_container_mast = $this->config->item('FAL_template_dir').'template_jac/jac_container_mast';
       // $this->load->model('cxtags');
        
   }
	public function index()
	{
		
    
	  $data['title'] = "Proyectos";
	  $data['heading'] = "Proyectos ";
	  $this->db->orderby("ordenar");
	  $this->db->where('activo', 1);
    	  $data['query'] = $this->db->get('proj_mast');
          $data['activo'] = $this->db->get('proj_mast');
	  // sistema viejo
          $this->load->view('proyectos_view', $data);
   
	  //$this->load->view($this->_container_mast);
	}

//=================== search machine

function pre_search()
	{
      $data = array(
               'busqueda_catalogo' => $this->input->post('keyword')               
                   );

      $this->db->insert('Busquedas', $data); 		
		redirect('proyectos/search/'.$this->input->post('keyword'));
	}

function search()
	{
		
          $data['title'] = "Búsqueda";
          $data['heading'] = "Resultados";		
		    $this->db->orderby("time", 'DESC');
		   $this->db->where('visible','1');
		  //$this->db->where('revision LIKE', $this->uri->segment(3));
		  $this->db->like('revision', $this->uri->segment(3));
		 $data['query'] = $this->db->get('proj_revisiones');
		  $this->load->view('/test/test_search_result_view', $data);
	}



//================= end search machine

//============================zona de fachada==========================================	   
   function Fachada()
  
  {
          $data['title'] = "_sub_Proyectos";
	  $data['heading'] = " "  ;
          
	 $this->db->orderby("proj_prioridad") ;
	  $this->db->where('proj_parent', $this->uri->segment(3));
          $this->db->where('activo','1');
	  $data['query']= $this->db->get('proyectos');
	  $this->load->view('fachada_detalles_view2', $data);
   }
   
   function Fachada_detalles()
  
  {
    $data['title'] = "Proyectos";
	  $data['heading'] = "Contenidos ";
	  $this->db->orderby("proj_prioridad") ;
	  $this->db->where('proj_parent', $this->uri->segment(3));
	  $data['query']= $this->db->get('proyectos');
          //$this->db->where('investiga', $this->uri->segment(3));   debe leer el project_id 
	  //$data['query']= $this->db->get('proj_investigacion');
	  
	  $this->load->view('fachada_detalles_view', $data);
   }
 
  function listado()
	{
		
    	  
	  $data['title'] = "Administracion de Proyectos ";
	  $data['heading'] = "Proyectos en jardincosmico";
	  $this->db->orderby("proj_id");
	  $this->db->where('activo', '1');
	  $data['query'] = $this->db->get('proyectos');
    $this->load->view('proyectos_list_view', $data);
	}
   
  function edit_list()
  
  {
          $this->freakauth_light->check('admin');
          $data['title'] = "Edicion Control";
          $data['heading'] = "Editar control ";
          $this->db->where('proj_id',$this->uri->segment(3));
          $data['query'] = $this->db->get('proyectos');
          $this->load->view('proyectos_list_edit_view', $data ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          
   }	   
	   
	   
 function update_list()
  
  {
          $this->freakauth_light->check('admin');
          $this->db->where('proj_id',$this->uri->segment(3));
          $this->db->update('proyectos', $_POST );
          //$this->load->view('control_edit_view' ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          redirect('/proyectos/listado/');
   }  
   
   function proyectos_admin()
	{
		
    	  $this->freakauth_light->check();
	  $data['title'] = "Administracion de Proyectos ";
	  $data['heading'] = "Proyectos en jardincosmico";
	  $this->db->orderby("ordenar");
	  $this->db->where('activo', 'si');
    	  $data['query'] = $this->db->get('proj_mast');
    	  $data['activo'] = $this->db->get('proj_mast');
	  $this->load->view('proyectos_admin_view', $data);
	}



	 
    function proyectos_insert()
   {
      $this->freakauth_light->check();
      $this->db->insert('proj_mast', $_POST);
   
      redirect('proyectos/', $_POST);
   }
        
    function proyectos_edit()
	  
	  {
	    {
	     $data['title'] = "[admin]Proyectos";
		  $data['heading'] = "Contenidos ";
		  //$this->db->orderby("time", "desc") ;
		  $this->db->where('proj_mast_id', $this->uri->segment(3));
		  $data['query']= $this->db->get('proj_mast');
		  $this->load->view('proyectos_edit_view', $data);
		  
	   }
	   }


	function proyectos_update()
	  
		  {
		     $this->freakauth_light->check('admin');
		    $this->db->where('proj_mast_id', $this->uri->segment(3));
			  $this->db->update('proj_mast', $_POST );
			  redirect('/proyectos/proyectos_admin');

		   }
	 


	function Detalles()
	  
	  {
	    $this->freakauth_light->check();
	    $data['title'] = "Proyectos";
		  $data['heading'] = "Contenidos ";
		  $this->db->orderby("proj_prioridad") ;
		  		  $this->db->where('activo', '1');
		  $this->db->where('proj_parent', $this->uri->segment(3));
		  $data['query']= $this->db->get('proyectos');
		  
		  $this->load->view('proyectos_detalle_view', $data);
	   }

//============================================================================INVESTIGACIONES -----------------------------
    
	
       function Investigacion()
  
        {
          $data['title'] = "Investigación";
	  $data['heading'] = "";
	  $this->db->orderby("time", "desc") ;
	  $this->db->where('proj_inv_padre', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_investigacion');
	  
	  $this->load->view('investigacion_view', $data);

        }

function investigacion_form()
  
  
    {
     $data['title'] = "Bitacora";
	  $data['heading'] = "Bitacora";
	  $this->db->orderby("proj_inv_id", "desc") ;
         // $this->db->where('paternidad =', '415');
	  $this->db->where('proj_inv_padre', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_investigacion');
	  
	  $this->load->view('investigacion_form_view', $data);
	  
   }


      function investigacion_insert()
   {
       $this->freakauth_light->check();
      $this->db->insert('proj_investigacion', $_POST);
      $this->db->where('paternidad', $this->uri->segment(3));
      redirect('proyectos/investigacion/'.$_POST['proj_inv_padre']);
   }

    function investigaciones_edit()
  
  {
    {
     $data['title'] = "Edit";
	  $data['heading'] = "Edit ";
	  $this->db->orderby("time", "desc") ;
	  $this->db->where('proj_inv_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_investigacion');
	  $this->load->view('investigaciones_edit_view', $data);
	  
   }
 }

     function investigaciones_update()
  
  {
     $this->freakauth_light->check('admin');
    $this->db->where('proj_inv_id', $this->uri->segment(3));
	  $this->db->update('proj_investigacion', $_POST );
	  //redirect('/proyectos/investigaciones/'.$_POST['proj_inv_padre']);


   }
//==================================================================================REVISIONES   
  function Revisiones()
  
  {
          $data['title'] = "Revisiones";
	  $data['heading'] = "Revisiones";
	  $this->db->orderby("proj_rev_id", "desc") ;
	  $this->db->where('paternidad', $this->uri->segment(3));
          $this->db->where('visible','1');
	  $data['query']= $this->db->get('proj_revisiones');
	  
	  $this->load->view('revisiones_view', $data);
   }

   function revisiones_deep()
  
  {
    {
     $data['title'] = "Proyectos";
	  $data['heading'] = "Contenido ";
	  $this->db->orderby("time", "desc") ;
	  $this->db->where('proj_rev_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_revisiones');
	  $this->db->where('agenda', '1');
	  $this->db->where('proj_rev_id', $this->uri->segment(3));
	  $data['query2']= $this->db->get('proj_revisiones');
	  
	  $this->load->view('revisiones_deep_view', $data);
	  
   }
   }


    function Revisiones_all()
  
  {
    $data['title'] = "[admin]Revisiones";
	  $data['heading'] = "[admin]Revisiones";
	  $this->db->orderby("proj_rev_id", "desc") ;
	  $this->db->where('paternidad', $this->uri->segment(3));
          //$this->db->where('visible','1');
	  $data['query']= $this->db->get('proj_revisiones');
	  
	  $this->load->view('revisiones_view', $data);
   }
function revisiones_form()
  
  
    {
     $data['title'] = "Bitacora";
	  $data['heading'] = "Bitacora";
	  $this->db->orderby("proj_rev_id", "desc") ;
         // $this->db->where('paternidad =', '415');
	  //$this->db->where('paternidad', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_revisiones');
	  
	  $this->load->view('revisiones_form_view', $data);
	  
   }


    function revisiones_edit()
  
  {
    {
     $data['title'] = "[admin]Proyectos";
	  $data['heading'] = "[admin]Contenidos ";
	  $this->db->orderby("time", "desc") ;
	  $this->db->where('proj_rev_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_revisiones');
	  $this->load->view('revisiones_edit_view', $data);
	  
   }
   
   
   
   
   }
 
    function revisiones_insert()
   {
      $this->freakauth_light->check();
      $this->db->insert('proj_revisiones', $_POST);
   
      redirect('proyectos/revisiones_all/'.$_POST['paternidad']);
   }
    
  
     function revisiones_update()
  
  {
     $this->freakauth_light->check();
    $this->db->where('proj_rev_id', $this->uri->segment(3));
	  $this->db->update('proj_revisiones', $_POST );
	  redirect('/proyectos/revisiones_all/'.$_POST['paternidad']);


   }

//=============================================================================== DETALLES 
        function detalles_insert()
	   {
	      $this->freakauth_light->check();
	      
	      $this->db->insert('proyectos', $_POST);
	   
	      redirect('proyectos/detalles/' .$_POST['proj_parent']);
	   }
	   
	   
            function detalles_edit()
	   {
	    $this->freakauth_light->check('admin');
            $data['title'] = "[admin]Proyectos";
            $data['heading'] = "Contenidos ";
            $this->db->where('proj_id', $this->uri->segment(3));
            $data['query']= $this->db->get('proyectos');
            $this->load->view('proyectos_detalles_edit_view', $data);
	   }

	   
	    function detalles_update()
  
            {
             $this->db->where('proj_id', $this->uri->segment(3));
	     $this->db->update('proyectos', $_POST );
             redirect('proyectos/detalles/'.$_POST['proj_parent']);
             }






 //===================================================================================  OBJETIVOS 
  function objetivos()
  
  {
    $data['title'] = "Objetivos";
	  $data['heading'] = "Objetivos";
	  $this->db->orderby("relevancia") ;
	  $this->db->where('sub_proyecto', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_objetivos');
	  $this->db->where('proj_id', $this->uri->segment(3));
          $data['query3']= $this->db->get('proyectos');
	  $this->load->view('objetivos_detalles_view', $data);
   }
   
 	function objetivos_insert()
	{
	       $this->freakauth_light->check();
	      $this->db->insert('proj_objetivos', $_POST);
	      $this->db->where('paternidad', $this->uri->segment(3));
	      redirect('proyectos/objetivos/'.$_POST['sub_proyecto']);
   	}

//============================================================================ESTRATEGIAS 
  function estrategias()
	{
		
    	  $this->freakauth_light->check();
	  $data['title'] = "Estrategias ";
	  $data['heading'] = "Estrategias";
	  $this->db->orderby("id_estrategia");
	  $this->db->where('objetivo_id', $this->uri->segment(3));
    	  $data['query'] = $this->db->get('proj_estrategias');
          $this->db->where('objetivo', $this->uri->segment(3));         
          $data['query3'] = $this->db->get('proj_objetivos');
          $this->db->where('proj_id', $this->uri->segment(3));          
          $data['query4'] = $this->db->get('proyectos');

    	 
	  $this->load->view('estrategias_detalles_view', $data);
	}


	function estrategias_insert()
	{
	       $this->freakauth_light->check();
	      $this->db->insert('proj_estrategias', $_POST);
	      $this->db->where('paternidad', $this->uri->segment(3));
             
	      redirect('proyectos/estrategias/'.$_POST['objetivo_id']);
   	}

  
   
  
 //=======================================================================TORMENTA DE IDEAS 
  
  
  
  function Ti()
  
  {
    $data['title'] = "Tormenta de ideas";
	  $data['heading'] = "Tormenta de ideas ";
	    $this->db->orderby("proj_ti_id", "desc") ;
	  $this->db->where('paternidad', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_ti');
	  $this->load->view('ti_view', $data);
	  
  }
  
  //-------------------------------------------- -------------------------------------------------------------------para hacer
  
   function parahacer()
  
	{
    $data['title'] = "Tareas por hacer";
	  $data['heading'] = "Tareas por hacer";
	  $this->db->orderby("porhacer_id", "desc") ;
	  $this->db->where('estrategia_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_parahacer');
	  $this->load->view('parahacer_view', $data);
	  
  	}
	 
	function parahacer_global()
  
  {
    	  $data['title'] = "Tareas para hacer";
	  $data['heading'] = "Contenidos ";
	  $this->db->orderby("time", "desc");
	  
	  $data['query'] = $this->db->get('proj_parahacer');
	  $this->load->view('parahacer_global_view', $data);
   }

	function parahacer_global_user()
	  
	  {
	    $data['title'] = "ParaHacer";
		  $data['heading'] = "ParaHacer ";
		  $this->db->orderby("prioridad");
		  $this->db->where('responsable', $this->uri->segment(3));
		  $this->db->where('estado !=', 'terminado');
                  $this->db->where('estado !=', 'inactiva');
		  $data['query'] = $this->db->get('proj_parahacer');
		  $this->load->view('parahacer_global_user_view', $data);
	   }


function edit_parahacer()
  
  {
          $this->freakauth_light->check('admin');
          $data['title'] = "Edicion Control";
          $data['heading'] = "Editar control ";
          $this->db->where('porhacer_id',$this->uri->segment(3));
          $data['query'] = $this->db->get('proj_parahacer');
          $this->load->view('/parahacer_edit_view', $data ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          
   }	   

function update_parahacer()
  
  {
          $this->freakauth_light->check();
          $this->db->where('porhacer_id',$this->uri->segment(3));
          $this->db->update('proj_parahacer', $_POST );
          //$this->load->view('control_edit_view' ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          redirect('proyectos/parahacer_global_user/');
   }

  function parahacer_insert()
   {
       $this->freakauth_light->check();
      $this->db->insert('proj_parahacer', $_POST);
   
        redirect('proyectos/parahacer/'.$_POST['estrategia_id']);
   }
function parahacer_query()
   {
       $this->db->orderby("time", "desc");
		  $this->db->where('sub_proyecto',$this->$_POST['sub_proyecto']);
				  $data['query'] = $this->db->get('proj_parahacer');
		  $this->load->view('parahacer_global_sub_proyecto_view', $data);
     
   
        
   }

 function parahacer_pub()
	  
	  {
	    $data['title'] = "Proyectos";
		  $data['heading'] = "Contenidos ";
		  $this->db->orderby("time", "desc") ;
		  $this->db->where('paternidad', $this->uri->segment(3));
		  $data['query']= $this->db->get('proj_parahacer');
		  
		  $this->load->view('parahacer_pub_view', $data);
	   }

//------------------------------------------------------- controles---------------------------
 function Controles()
  
  {
    $data['title'] = "Controles";
	  $data['heading'] = "Controles ";
	  $this->db->orderby("prioridad" ) ;
	  $this->db->where('estado !=', 'terminado');
	$this->db->where('estado !=', 'inactiva');
	  //$this->db->where('estrategia_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_parahacer');
	  $data ['proyecto_nombre'] = $this->db->get('proyectos');
	  //$this->db->where('controlador', 'esteban');
	  $this->load->view('controles_view', $data);
	  
  }
  
  	function control_global_user()
	  
	  {
	    $data['title'] = "Proyectos";
		  $data['heading'] = "Contenidos ";
		  $this->db->orderby("time", "desc");
		  $this->db->where('controlador', $this->uri->segment(3));
		
		  $data['query'] = $this->db->get('proj_parahacer');
		  $this->load->view('control_global_user_view', $data);
	   }
 function edit_control()
  
  {
          $this->freakauth_light->check('admin');
          $data['title'] = "Edicion Control";
          $data['heading'] = "Editar control ";
          $this->db->where('porhacer_id',$this->uri->segment(3));
          $data['query'] = $this->db->get('proj_parahacer');
          $this->load->view('controles_edit_view', $data ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          
   }	   
	   
	   
 function update_control()
  
  {
          $this->freakauth_light->check('admin');
          $this->db->where('porhacer_id',$this->uri->segment(3));
          $this->db->update('proj_parahacer', $_POST );
          //$this->load->view('control_edit_view' ); 
	  //en caso de control especificos usar esta linea
	  //redirect('/proyectos/controles/'.$_POST['objetivo_id']);
          redirect('/proyectos/controles/');
   }
//-------------------------------------------------------- USO DE TIEMPO EN PROYECTOS
  
   function uso_proyecto()
  
  {
    $data['title'] = "Proyectos";
	  $data['heading'] = "Contenidos ";
	  $this->db->orderby("fecha", "desc");
	  $this->db->where('sub_categoria', $this->uri->segment(3));
	  $data['query'] = $this->db->get('uso_proyectos');
          $this->db->where('proj_id', $this->uri->segment(3));         
          $data['query3'] = $this->db->get('proyectos');
	  $this->db->where('sub_categoria', $this->uri->segment(3));
	  $data['query2'] = $this->db->query("select sum(uso) as suma from uso_proyectos");
	  $this->load->view('uso_detalles_view', $data);
   }
 
 function uso_edit()
  
  
    {
     $data['title'] = "";
	  $data['heading'] = " ";
	  //$this->db->orderby("time", "desc") ;
	  $this->db->where('uso_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('uso_proyectos');
	  $this->load->view('uso_edit_view', $data);
	  
   } 

 function uso_update()
  
  {
     $this->freakauth_light->check();
    $this->db->where('uso_id', $this->uri->segment(3));
	  $this->db->update('uso_proyectos', $_POST );
	  redirect('/proyectos/uso_proyecto/'.$_POST['uso_id']);


   }

function revisiones_delete()
  
  
    {
     $data['title'] = "[admin]Proyectos";
	  $data['heading'] = "[admin]Contenidos ";
	  $this->db->orderby("time", "desc") ;
	  $this->db->where('proj_rev_id', $this->uri->segment(3));
	  $data['query']= $this->db->get('proj_revisiones');
	  $this->load->view('revisiones_edit_view', $data);
	  
   } 
   
     function uso_insert()
   {
      $this->freakauth_light->check();
      
      $this->db->insert('uso_proyectos', $_POST);
   
      redirect('proyectos/uso_proyecto/' .$_POST['sub_categoria']);
   }
  



  
 //========================================= paginas de grupos=======================

  function dbam()
	{
		
    	  $this->freakauth_light->check();
	  $data['title'] = "DBAM ";
	  $data['heading'] = "DBAM";
	  $this->db->orderby("id_estrategia");
	  $this->db->where('activo', 'si');
    	  $data['query'] = $this->db->get('proj_estrategias');
    	 
	  $this->load->view('dbam_estrategias_view', $data);
	}













//===============================================fin paginas grupos============
  
  function blog()
  
  {
    $data['title'] = "Bitacora";
	  $data['heading'] = "Contenidos ";
	  $this->db->orderby("post_date", "desc");
	  $data['query'] = $this->db->get('wp_posts');
	 
	  $this->load->view('blog_view', $data);
   }
  
  
  
  
  
  
  
  
  function forms()
  
  {
    $data['title'] = "Forms";
	  $data['heading'] = "Forms";
	  $this->load->view('forms_view1', $data);
	  
  }

  function forms_gest_lo()
  
  {
    $data['title'] = "Forms";
	  $data['heading'] = "Forms";
	  $this->load->view('forms_gest_lo_view', $data);
	  
  }

  function forms_metodo_pipec()
    
    {
      $data['title'] = "Forms";
  	  $data['heading'] = "Forms";
  	  $this->load->view('forms_metodo_pipec_view', $data);
  	  
    }

   
  function bio()
    
    {
          $data['title'] = "Acerca de Federico Lopez";
  	  $data['heading'] = "";
      
  	  $this->load->view('federico_lopez_bio_view', $data);
  	  
    }
  
   
 
   
   
    function personas_insert()
   {
      $this->freakauth_light->check();
      $this->db->insert('lor_usuarios', $_POST);
   
      redirect('proyectos/forms/' );
   }
  
   
  
   function ti_view()
   {
      
     $data1['title'] = "Tormenta de ideas";
	    $data1['heading'] = "Tormenta de ideas ";
	   $this->db->orderby("proj_ti_id", "desc") ;
	   $this->db->where('paternidad', $this->uri->segment(3));
	   $data1['query']= $this->db->get('proj_ti');
      $this->load->view('ti_view', $data1);
      
      
      //$this->db->insert('proj_ti', $_POST);
      //redirect('proyectos/ti/'.$_POST['paternidad']);
   }
   
   function ti_insert()
   {
       $this->freakauth_light->check();
      $this->db->insert('proj_ti', $_POST);
      redirect('proyectos/ti/'.$_POST['paternidad']);
   }
  
   
   
    
   
   
   
   
// aca borrar...... test  
  function test()
	{
		
    
	  $data['title'] = "Proyectos";
	  $data['heading'] = "Proyectos en jardincosmico";
	  $this->db->orderby("ordenar");
	  $this->db->where('activo', 'si');
    	  $data['query'] = $this->db->get('proj_mast');
    
    
	  $data['activo'] = $this->db->get('proj_mast');
	  // sistema viejo
    //$this->load->view('proyectos_view', $data);
    //
	  $this->load->view($this->_container_mast);
	}
   
////////////// hasta aca   
}

?>
