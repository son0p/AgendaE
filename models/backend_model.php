<?php 

class Backend_model extends CI_Model {
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
	
	function get_categorias()
	{
	
	$query = $this->db->get('ae_categoria'); 
	return $query->result();  		
		
	}
	
	function get_sitios()
	{
	
	$query = $this->db->get('ae_sitios'); 
	return $query->result();  		
		
	}
}

/* End of file agenda_model.php */
 