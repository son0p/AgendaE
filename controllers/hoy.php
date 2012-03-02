<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Hoy extends CI_Controller {

	

	
	
	public function index()
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
	$this->load->view('hoy_view', $data);
	}
	
	
	
}

/* End of file hoy.php */
