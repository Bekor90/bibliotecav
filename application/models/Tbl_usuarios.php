<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_usuarios extends CI_model {


   public function insertarUsuarios($data)
	{	
		
	$this->db->insert('usuarios', $data);	
		
	}

	public function findAreas($ConsultaGeneral)
	{
		$query = $this->db->query("SELECT nombre FROM areas");
		return $query->result();

	}

}