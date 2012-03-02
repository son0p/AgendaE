<?php 

class Agendamodel extends CI_Model {
	function __construct()
	{
		parent::__construct();
	}
	
	function get_last_ten_entries()
	{
		$query = $this->db->get('proj_revisiones', 10);
		return $query->result();
	}
	
	function tag()
	{
		$this->db->where('tag_id', $this->uri->segment(3));
		$query = $this->db->get('proj_tags');
		return $query->result();
		
	}

	function name_day()
	{
	$dias = array ("Domingo","Lunes", "Martes", "Miercoles","Jueves", "Viernes", "Sabado" ); 
	$meses = array('','Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre');	

	}



}

/* End of file agenda_model.php */
 
