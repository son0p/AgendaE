<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sitios extends CI_Controller {

	

	
	public function mapa()

	{
		// create a today value
	$this->db->where('id',$this->uri->segment(3));
	$data['query']= $this->db->get('ae_sitios');
	$this->load->view('sitios_view', $data);
	}


	
}

/* End of file hoy.php */
