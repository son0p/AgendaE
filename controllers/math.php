<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Math extends CI_Controller {

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
	 function index()
	{
		
		
		
		
     $this->load->view('math_view');
		
	}	
	
	public function phase()
	{
			
     
    
     $f = $_POST['frecuencia'];
		$l = 340 /$f ;
		echo 'la logitud de onda  de '.$f .' hertz es: '.$l. ' metros.';
		echo "<br>";
		
		echo nl2br("la distancia entre conos para desfasar 180 grados es : ".($l/2).' metros');    
    
     $data['longitud']= ($f / 340) ;
      $this->load->view('math_view');
     
     	
		}
		
		
	
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */