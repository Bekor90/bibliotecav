<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tbl_areas extends CI_model {

	function guardarArea($data)
	{	
		$datos = array(
			'nombre' => $data
			);

		$this->db->insert('areas', $datos);	
		
	}

	function udpdateArea($data, $idArea)
	{

		$this->db->where('id_area', $idArea);
        return $this->db->update('areas', $data);	
    }
    function deleteArea($idArea)
    {
    	$this->db->where('id_area', $idArea);
        return $this->db->delete('areas');	
    }

	function UltimoidArea()
	{
		 return $this->db->insert_id();
	}


	 function findNombreAreas($idArea)
	{
		
		$this->db->select('nombre');
		$this->db->from('areas');
		$this->db->where('id_area', $idArea);
		$nombre = $this->db->get();

		if ($nombre->num_rows()>0) {
			
			return $nombre->result();
		}
		else
		{
			return FALSE;
		}
	}

	 function findIdAreas($nombre)
	{
		
		$this->db->select('id_area');
		$this->db->from('areas');
		$this->db->where('nombre', $nombre);
		$id = $this->db->get();

		if ($id->num_rows()>0) {
			
			return $id->result();
		}
		else
		{
			return FALSE;
		}
	}

	function findAreas($inicio = FALSE, $limite = FALSE)
	{
		if ($inicio !== FALSE && $limite !== FALSE) 
		{
			$this->db->limit($limite, $inicio);
		}

		$Consulta = $this->db->get("areas");
		return $Consulta->result();
	}
}

